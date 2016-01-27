function getParameterByName(name) {
    var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}

function cleanQuerystring() {
    try {window.history.replaceState({}, document.title, location.origin+location.pathname);}
    catch (err){}
}

angular.module('app', ['ui.bootstrap'])
    .run(function ($rootScope, $timeout) {
        $rootScope.globalAlerts = [];
        $rootScope.addAlert = function (alert) {
            $rootScope.globalAlerts = [];
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
               && (!$scope.signUp.pUrl.length || $scope.step1.url.$valid))
            {
                var CheckURL = $http.post(apiUrl + 'validate_organization', data);
                CheckURL.then(
                   function(results){
                       //console.log(results)
                        $scope.formLoading = false;
                       var data = results.data;
                       //console.log($scope.signUp.force);
                       if(data.isEmailExists && !$scope.signUp.force){
                           $scope.message('warning', 'Email "'+$scope.signUp.email+'" is already in use. Click submit to proceed to create a new account OR <a style="color:black" href="https://app.sherpadesk.com/login/">click HERE</a> to login');
                           $scope.signUp.force = true;
                           document.getElementById("btn1").innerHTML = "Proceed To Create Account";
                           return false;
                       }
                       if(data.isUrlExists){
                           $scope.signUp.pUrl = "";
                       }
               
                       $scope.formLoading = true;
                      //You may proceed
                      // if(data.isNameExists && data.isUrlExists && data.isEmailExists){
                       var how = getParameterByName("how") || Cookies.get('how');
                       var note = getParameterByName("note");
                       if (note) 
                           localStorage.note = note;
                       if (how)
                       {
                           cleanQuerystring();
                           for(var i=0; i <  $scope.heard.length; i++)
                               if ( $scope.heard[i].about.toLowerCase().indexOf(how) != -1)
                               {
                                   $scope.signUp.hearAboutUs =  $scope.heard[i].about;
                                   break;
                               }
                           if ($scope.signUp.hearAboutUs.length < 1)
                               $scope.signUp.hearAboutUs = how;
                           Cookies.set('how', $scope.signUp.hearAboutUs, { expires: 30 });
                       }
                            $timeout(function(){
                                $scope.formLoading = false;
                                $scope.signUp.stepOneComplete = true;
                                document.getElementById("btn1").innerHTML = "Start My Account";
                            }, 1000);
                       $timeout(function(){
                           document.getElementById("first-name").focus();
                           if (!nativedatalist) { $('input[list]').datalist();}
                       }, 1100);

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
                $scope.message('danger', "Name and Email fields are required. Please correct errors");
            }
        };

        $scope.$watch('signUp.companyName', function(newVar, oldVar){
            if(newVar){
                var url = newVar.toString().toLowerCase().replace(/[^a-zA-Z0-9-]/g, '');
                $scope.signUp.pUrl = document.getElementById("customurl").innerText = url;
            }
        });
        
    
    $scope.$watch('signUp.pUrl', function(newVar, oldVar){
        if(newVar)
        {
            var url = newVar.toString().toLowerCase().replace(/[^a-zA-Z0-9-]/g, '');
            document.getElementById("customurl").innerText = url; 
            var isUrlExists = false;
            if (url.length > 1){
            var data = {
                "name": $scope.signUp.companyName,
                "email":$scope.signUp.email,
                "url":url,
                "is_force_registration": $scope.signUp.force
            };
            var CheckURL = $http.post(apiUrl + 'validate_organization', data);
            CheckURL.then(
                function(results){
                    //console.log(results)
                    $scope.formLoading = false;
                    var data = results.data;
                    isUrlExists = data.isUrlExists;
                    if(!isUrlExists && url.length < 19){
                        //$scope.message('danger', 'URL is already in use.');
                        $scope.step1.url.$error = false;
                        $scope.step1.url.badUrl = false;
                        $scope.step1.url.$valid = true;
                        $scope.step1.url.goodUrl = true;
                        return false;
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
        }
        else
        {
            $scope.signUp.pUrl = "";
            var ur = document.getElementById("customurl");
            if (ur)
            {
            ur.innerText = "yourcompanyname";
            $scope.step1.url.$error = false;
            $scope.step1.url.$valid = true;
            $scope.step1.url.badUrl = false;
            $scope.step1.url.goodUrl = false;
            }
        }
        return !isUrlExists;
    });


        $scope.validatePassword = function(){
            return $scope.signUp.password != $scope.signUp.password2;
        };
    
    $scope.cancelForm = function(){
        Cookies.set('how', $scope.signUp.hearAboutUs, { expires: 30 });
        $scope.signUp.stepOneComplete = false;
        $timeout(function(){
            document.getElementById("customurl").innerText = document.getElementById("url").value;
        }, 500);
    };

        $scope.completeForm = function(){
            $scope.formLoading = true;
            var notes = localStorage.note;
            notes = notes ? (" Note: " + notes) : ""; 
            var data = {
                "name": $scope.signUp.companyName,
                "email":$scope.signUp.email,
                "url":$scope.signUp.pUrl,
                "is_force_registration": true,
                "is_force_redirect": true,
                "firstname": $scope.signUp.firstName,
                "lastname":$scope.signUp.lastName,
                "password":$scope.signUp.password,
                "password_confirm": $scope.signUp.password2,
                "how": $scope.signUp.hearAboutUs || Cookies.get('how') || "",
                "note": "Number of Techs: " + $scope.signUp.numberOfTechs.count + " : by it_customer_support" + notes
            };
            var submitForm = $http.post(apiUrl + 'organizations?format=json', data);
            submitForm.then(
                function(results){
                    localStorage.note = "";
                    console.log(results.data);
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
                    if (value.trim().length > 1 && value.trim().length < 5)
                        return false;
                    //var status = /^\d+$/.test(value);
                    //angular.forEach(REQUIRED_PATTERNS, function(pattern) {
                    //    status = status && pattern.test(value);
                    //});
                    return true;
                };
            }
        }
    });

//Cookie support

!function(e){if("function"==typeof define&&define.amd)define(e);else if("object"==typeof exports)module.exports=e();else{var n=window.Cookies,o=window.Cookies=e(window.jQuery);o.noConflict=function(){return window.Cookies=n,o}}}(function(){function e(){for(var e=0,n={};e<arguments.length;e++){var o=arguments[e];for(var t in o)n[t]=o[t]}return n}function n(o){function t(n,r,i){var c;if(arguments.length>1){if(i=e({path:"/"},t.defaults,i),"number"==typeof i.expires){var s=new Date;s.setMilliseconds(s.getMilliseconds()+864e5*i.expires),i.expires=s}try{c=JSON.stringify(r),/^[\{\[]/.test(c)&&(r=c)}catch(a){}return r=encodeURIComponent(String(r)),r=r.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),n=encodeURIComponent(String(n)),n=n.replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent),n=n.replace(/[\(\)]/g,escape),document.cookie=[n,"=",r,i.expires&&"; expires="+i.expires.toUTCString(),i.path&&"; path="+i.path,i.domain&&"; domain="+i.domain,i.secure&&"; secure"].join("")}n||(c={});for(var p=document.cookie?document.cookie.split("; "):[],u=/(%[0-9A-Z]{2})+/g,d=0;d<p.length;d++){var f=p[d].split("="),l=f[0].replace(u,decodeURIComponent),m=f.slice(1).join("=");if('"'===m.charAt(0)&&(m=m.slice(1,-1)),m=o&&o(m,l)||m.replace(u,decodeURIComponent),this.json)try{m=JSON.parse(m)}catch(a){}if(n===l){c=m;break}n||(c[l]=m)}return c}return t.get=t.set=t,t.getJSON=function(){return t.apply({json:!0},[].slice.call(arguments))},t.defaults={},t.remove=function(n,o){t(n,"",e(o,{expires:-1}))},t.withConverter=n,t}return n()});


    var nativedatalist = !!('list' in document.createElement('input')) && 
        !!(document.createElement('datalist') && window.HTMLDataListElement);

    if (!nativedatalist) {

// Load the script
var script = document.createElement("SCRIPT");
script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js';
script.type = 'text/javascript';
document.getElementsByTagName("head")[0].appendChild(script);

// Poll for jQuery to come into existance
var checkReady = function(callback) {
    if (window.jQuery) { callback(jQuery); }
    else { window.setTimeout(function() { checkReady(callback); }, 100); }
};

// Start polling...
checkReady(function($) {
    
    // HTML5 datalist plugin v.0.1
    // Copyright (c) 2010-The End of Time, Mike Taylor, http://miketaylr.com
    // MIT Licensed: http://www.opensource.org/licenses/mit-license.php

    $.fn.datalist=function(){return"object"==typeof this[0].list&&document.createElement("datalist")&&window.HTMLDataListElement?this:this.each(function(){var t=$(this),a=$("#"+t.attr("list")),i=a.find("option"),n=t.height(),s=$("<ul>",{"class":"datalist",width:"100%",css:{position:"absolute",left:0,top:n+26,margin:0,padding:"0 2px","list-style":"none",border:"1px solid #ccc","-moz-box-shadow":"0px 2px 3px #ccc","-webkit-box-shadow":"0px 2px 3px #ccc","box-shadow":"0px 2px 3px #ccc","z-index":99,background:"rgba(255, 255, 255, 0.8)",cursor:"default"}}),e=$("<div>").css("position","relative");if(!a.length)return this;i.each(function(t,a){$("<li>").append('<span class="value">'+a.value+"</span>").append('<span class="label" style="float:right">'+a.label+"</span>").appendTo(s)}),t.wrap(e),s.hide().insertAfter(t),t.focus(function(){s.show()}),t.blur(function(){s.hide()});var o=t.next().find("li");o.mousedown(function(){var a=$(this).find("span.value").text();t.val(a)})})};
    
});
    }