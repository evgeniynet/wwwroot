<?php

/**

 * Template Name: Start-Your-Climb

 *

 * This is the sign up page

 *

 * @package sparkling

 */



get_header(); ?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>

.top-section { 

display:none;

}

</style>

      <?php while ( have_posts() ) : the_post(); ?>



        <?php echo get_post_field('post_content', $post->ID); ?>      



      <?php endwhile; // end of the loop. ?>





<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.12.1/ui-bootstrap-tpls.min.js"></script>

<script>

function getParameterByName(name) {
    var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}

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
            }, 15000);
        });
    })
    .filter('unsafe', function($sce) {
    return function(value) {
        if (!value) { return ''; }
        return $sce.trustAsHtml(value);
    };
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
            force: false,
            stepOneComplete: false
        };

        $scope.alert = {};

        $scope.heard = [
            {about:'Internet Search'},
            {about:'Apps Marketplace'},
            {about:'Email Campaign'},
            {about:'Google Adwords'},
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
            //$scope.trustAsHtml(alert);
            $rootScope.$broadcast('globalAlert', alert);
        };

        $scope.goNextStep = function(){
            $scope.formLoading = true;
            var data = {
                "name": $scope.signUp.companyName,
                "email":$scope.signUp.email,
                "url":$scope.signUp.pUrl,
                "is_force_registration": $scope.signUp.force
            };
            //console.log(data);
            //check valid for next
            if($scope.step1.company.$valid
                && $scope.step1.email.$valid
                && $scope.step1.url.$valid)
            {
                var CheckURL = $http.post(apiUrl + 'validate_organization', data);
                CheckURL.then(
                   function(results){
                       //console.log(results)
                        $scope.formLoading = false;
                       var data = results.data;
                       if(data.isNameExists){
                           $scope.message('warning', 'FYI. Company name is already in use.');
                           //return false;
                       }
                       //console.log($scope.signUp.force);
                       if(data.isEmailExists && !$scope.signUp.force){
                           $scope.message('warning', 'Email "'+$scope.signUp.email+'" is already in use. Click submit to proceed to create a new account OR <a style="color:black" href="https://app.sherpadesk.com/login/">click HERE</a> to login');
                           $scope.signUp.force = true;
                           return false
                       }
                       if(data.isUrlExists){
                           $scope.message('danger', 'URL is already in use or incorrect.');
                           return false
                       }
               
                      //You may proceed
                      // if(data.isNameExists && data.isUrlExists && data.isEmailExists){
                            $scope.signUp.stepOneComplete = true;
                       var how = getParameterByName("how") || Cookies.get('how');
                       if (how)
                       {
                           Cookies.set('how', how, { expires: 30 });
                           for(var i=0; i <  $scope.heard.length; i++)
                               if ( $scope.heard[i].about.toLowerCase().indexOf(how) != -1)
                                   $scope.signUp.hearAboutUs =  $scope.heard[i];
                       }
                            $timeout(function(){
                                document.getElementById("first-name").focus();
                            }, 0);

                      // }
                   },
                   function(results){
                       $scope.formLoading = false;
                       console.log('error ', results);
                       $scope.message('danger', ((results.data || {}).ResponseStatus || {}).Message || results.data  || "Something has gone amuck");
                   }
               );
            } else {
                $scope.formLoading = false;
                $scope.message('danger', "All fields are required. Please correct errors");
            }
        };

        $scope.$watch('signUp.companyName', function(newVar, oldVar){
            if(newVar){
                $scope.signUp.pUrl = newVar.toString().toLowerCase().replace(/\s+/g, '');
            }
        });
    
    $scope.$watch('signUp.pUrl', function(newVar, oldVar){
        if(newVar)
        {
            var isUrlExists = true;
            if (newVar.toString().length > 2){
            var data = {
                "name": $scope.signUp.companyName,
                "email":$scope.signUp.email,
                "url":newVar.toString(),
                "is_force_registration": $scope.signUp.force
            };
            var CheckURL = $http.post(apiUrl + 'validate_organization', data);
            CheckURL.then(
                function(results){
                    //console.log(results)
                    $scope.formLoading = false;
                    var data = results.data;
                    isUrlExists = data.isUrlExists;
                    if(!isUrlExists && /^[0-9a-z][0-9a-z-]{1,18}[0-9a-z]$/i.test(newVar.toString())){
                        //$scope.message('danger', 'URL is already in use.');
                        $scope.step1.url.$error = false;
                        $scope.step1.url.badUrl = false;
                        $scope.step1.url.$valid = true;
                        $scope.step1.url.goodUrl = true;
                        return false
                    }
                    $scope.step1.url.$error = true;
                    $scope.step1.url.$valid = false;
                    $scope.step1.url.badUrl = true;
                    $scope.step1.url.goodUrl = false;
                },
                function(results){
                    $scope.formLoading = false;
                    console.log('error ', results);
                    $scope.message('danger', ((results.data || {}).ResponseStatus || {}).Message || results.data || "Cannot check url");
                }
            );
            }
            else{
                //$scope.message('danger', 'URL is already in use.');
                $scope.step1.url.$error = true;
                $scope.step1.url.$valid = false;
                $scope.step1.url.badUrl = true;
                $scope.step1.url.goodUrl = false;
                return false
            }
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
                "how_did_you_hear_about_us": $scope.signUp.hearAboutUs.about,
                "note": "Number of Techs: " + $scope.signUp.numberOfTechs.count + " : by start-your-climb"
            };
            var submitForm = $http.post(apiUrl + 'organizations?format=json', data);
            submitForm.then(
                function(results){
                    window.location = results.data.url; 
                },
                function(results){
                    //console.log(results);
                    var note = ((results.data || {}).ResponseStatus || {}).Message || results.data || 'Sorry, there was a problem processing your registration.  Please try again.';
                    var alert = {
                        type: 'danger',
                        msg: note
                    };
                    $rootScope.$broadcast('globalAlert', alert);
                    if (note.toLowerCase().indexOf("url") >= 0) 
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
            /^\S+$/,   //no whitespace allowed,
            ///(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9_-]{5,20})/
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

!function(e){if("function"==typeof define&&define.amd)define(e);else if("object"==typeof exports)module.exports=e();else{var n=window.Cookies,o=window.Cookies=e(window.jQuery);o.noConflict=function(){return window.Cookies=n,o}}}(function(){function e(){for(var e=0,n={};e<arguments.length;e++){var o=arguments[e];for(var t in o)n[t]=o[t]}return n}function n(o){function t(n,r,i){var c;if(arguments.length>1){if(i=e({path:"/"},t.defaults,i),"number"==typeof i.expires){var s=new Date;s.setMilliseconds(s.getMilliseconds()+864e5*i.expires),i.expires=s}try{c=JSON.stringify(r),/^[\{\[]/.test(c)&&(r=c)}catch(a){}return r=encodeURIComponent(String(r)),r=r.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),n=encodeURIComponent(String(n)),n=n.replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent),n=n.replace(/[\(\)]/g,escape),document.cookie=[n,"=",r,i.expires&&"; expires="+i.expires.toUTCString(),i.path&&"; path="+i.path,i.domain&&"; domain="+i.domain,i.secure&&"; secure"].join("")}n||(c={});for(var p=document.cookie?document.cookie.split("; "):[],u=/(%[0-9A-Z]{2})+/g,d=0;d<p.length;d++){var f=p[d].split("="),l=f[0].replace(u,decodeURIComponent),m=f.slice(1).join("=");if('"'===m.charAt(0)&&(m=m.slice(1,-1)),m=o&&o(m,l)||m.replace(u,decodeURIComponent),this.json)try{m=JSON.parse(m)}catch(a){}if(n===l){c=m;break}n||(c[l]=m)}return c}return t.get=t.set=t,t.getJSON=function(){return t.apply({json:!0},[].slice.call(arguments))},t.defaults={},t.remove=function(n,o){t(n,"",e(o,{expires:-1}))},t.withConverter=n,t}return n()});
</script>



<?php get_footer(); ?>

