angular.module('app', ['ui.bootstrap'])
    .run(function ($rootScope, $timeout) {
        $rootScope.globalAlerts = [];
        $rootScope.addAlert = function (alert) {
            $rootScope.globalAlerts.push(alert);
        };
        $rootScope.clearAlerts = function () {
            $rootScope.globalAlerts = [];
        };
        $rootScope.removeAlert = function (alert) {
            $rootScope.globalAlerts.splice($rootScope.globalAlerts.indexOf(alert), 1);
            return $rootScope.globalAlerts;
        };
        $rootScope.$on('globalAlert', function (e, alert) {
            $rootScope.addAlert(alert);
            $timeout(function () {
                $rootScope.removeAlert(alert);
            }, 10000);
        });
    })
    .controller('MainCtrl', function($rootScope, $scope, $window, $http, $timeout) {
        var apiUrl = "http://api.sherpadesk.com/";
        //var apiUrl = "http://api.beta.sherpadesk.com/";

        $scope.formLoading = false;
        $scope.signUp = {
            companyName: '',
            email: '',
            pUrl: '',
            firstName: '',
            lastName: '',
            password: '',
            password2: '',
            hearAboutUs: '',
            numberOfTechs: '',
            stepOneComplete: false
        };

        $scope.alert = {};

        $scope.heard = [
            {about:'Internet Search'},
            {about:'Apps Marketplace'},
            {about:'Referral'},
            {about:'Other'}
        ];
        $scope.techs = [
            {count:'0-4'},
            {count:'5-10'},
            {count:'10-20'},
            {count:'20+'}
        ];

        $scope.signUpNew = angular.copy($scope.signUp);

        $scope.message = function(type, message){
            var alert = {
                type: type,
                msg: message
            };
            $rootScope.$broadcast('globalAlert', alert);
        };

        $scope.goNextStep = function(){
            $scope.formLoading = true;
            var data = {
                "name": $scope.signUp.companyName,
                "email":$scope.signUp.email,
                "url":$scope.signUp.pUrl,
                "is_force_registration": false
            };

            //check valid for next
            if($scope.step1.company.$valid
                && $scope.step1.email.$valid
                && $scope.step1.url.$valid)
            {
                //var CheckURL = $http.post(apiUrl + 'validate_organization', data);
                //CheckURL.then(
                //    function(results){
                //        console.log(results)
                        $scope.formLoading = false;
                //        var data = results.data;
                //        if(data.isNameExists){
                //            $scope.message('danger', 'Company name is already in use.');
                //            return false
                //        }
                //        if(data.isEmailExists){
                //            $scope.message('danger', 'Email is already in use. Please login as normal and add new org from existing registration.');
                //            return false
                //        }
                //        if(data.isUrlExists){
                //            $scope.message('danger', 'URL is already in use.');
                //            return false
                //        }
                //
                //        //You may proceed
                //        if(data.isNameExists && data.isUrlExists && data.isEmailExists){
                            $scope.signUp.stepOneComplete = true;
                            $timeout(function(){
                                document.getElementById("first-name").focus();
                            }, 0);

                        //}
                    //},
                    //function(results){
                    //    $scope.formLoading = false;
                    //    console.log('error ', results);
                    //    $scope.message('danger', results.data || "Something has gone amuck");
                    //}
                //);
            } else {
                $scope.formLoading = false;
                $scope.message('danger', "Something is not right.  Best check yo self.");
            }
        };

        $scope.$watch('signUp.companyName', function(newVar, oldVar){
            if(newVar){
                $scope.signUp.pUrl = newVar.toString().toLowerCase().replace(/\s+/g, '');
            }
        });

        $scope.validatePassword = function(){
            return $scope.signUp.password != $scope.signUp.password2;
        };

        $scope.completeForm = function(){
            $scope.formLoading = true;
            var data = {
                "name": $scope.signUp.companyName,
                "email":$scope.signUp.email,
                "url":$scope.signUp.pUrl,
                "is_force_registration": false,
                "is_force_redirect": true,
                "firstname": $scope.signUp.firstName,
                "lastname":$scope.signUp.lastName,
                "password":$scope.signUp.password,
                "password_confirm": $scope.signUp.password2,
                "how": $scope.signUp.hearAboutUs.about,
                "note": "Number of Techs: " + $scope.signUp.numberOfTechs.count
            };
            var submitForm = $http.post(apiUrl + 'organizations?format=json', data);
            submitForm.then(
                function(results){
                    window.location = results.data.url;
                },
                function(results){
                    console.log(results)
                    var alert = {
                        type: 'danger',
                        msg: results.data || 'Sorry, there was a problem processing your registration.  Please try again.'
                    };
                    $rootScope.$broadcast('globalAlert', alert);
                    $scope.signUp.stepOneComplete = false;
                    $scope.formLoading = false;
                });
        };

    })
    .directive('validatePasswordCharacters', function() {
        var REQUIRED_PATTERNS = [
            /\d+/,    //numeric values
            /[a-z]+/, //lowercase values
            /[A-Z]+/, //uppercase values
            /\W+/,    //special characters
            /^\S+$/   //no whitespace allowed
        ];
        return {
            require : 'ngModel',
            link : function($scope, element, attrs, ngModel) {
                ngModel.$validators.passwordCharacters = function(value) {
                    var status = true;
                    angular.forEach(REQUIRED_PATTERNS, function(pattern) {
                        status = status && pattern.test(value);
                    });
                    return status;
                };
            }
        }
    });