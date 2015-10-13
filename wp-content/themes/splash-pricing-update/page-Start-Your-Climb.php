<?php get_header(); ?>

<![if lte IE 8]>
<link rel="stylesheet" href="http://yui.yahooapis.com/combo?pure/0.5.0/base-min.css&pure/0.5.0/grids-min.css&pure/0.5.0/grids-responsive-old-ie-min.css">
<![endif]>
<![if gt IE 8]>
<link rel="stylesheet" href="http://yui.yahooapis.com/combo?pure/0.5.0/base-min.css&pure/0.5.0/grids-min.css&pure/0.5.0/grids-responsive-min.css">
<![endif]>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/united/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
[ng\:cloak],
[ng-cloak],
.ng-cloak {
display: none !important;
}
* {
position: relative;
}
.sd-btn-lg {
font-size: 22px;
font-weight: normal;
}
.notifications {
position: fixed;
top: 0;
left: 0;
right: 0;
height: 150px;
text-align: center;
z-index: 9999999;
}
.form-section {
position: relative;
background-color: #fff;
padding: 20px;
margin:20px auto 50px;
width: 90%;
min-width: 350px;
max-width: 600px;
-webkit-box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.2);
box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.2);
}

.form-section .form-header {
margin: -10px -10px 0;
padding: 10px;
background: #004174;
color: #fff !important;
}
.form-section .form-header p {
font-size: 21px;
text-align: center;
margin: 0;
color: #fff !important;
}
.form-section .form-header h3 {
margin: 10px 0;
text-align: center;
color: #fff !important;
}
.form-section label {
font-weight: 400;
}
.form-section h2 {
margin-bottom: 50px;
text-align: center;
}
.sd-select {
font-size: 18px;
height: 60px;
}
ul.logo-blocks li {
display: table-cell;
}
.btn-success {
background: #70d392;
background: -moz-linear-gradient(top, #70d392 0%, #43ac6a 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #70d392), color-stop(100%, #43ac6a));
background: -webkit-linear-gradient(top, #70d392 0%, #43ac6a 100%);
background: -o-linear-gradient(top, #70d392 0%, #43ac6a 100%);
background: -ms-linear-gradient(top, #70d392 0%, #43ac6a 100%);
background: linear-gradient(to bottom, #70d392 0%, #43ac6a 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#70d392', endColorstr='#43ac6a', GradientType=0);
}
.loading {
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
z-index: 9999999;
font-size: 42px;
line-height: 800px;
background-color: rgba(255, 255, 255, 0.66);
color: rgba(0, 0, 0, 0.48);
text-align: center;
}
.top-section {
margin-top: 80px;
}
</style>
<div class="container top-section">
<div class="row">
<div class="col-sm-6">
<div ng-app="app">
<div class="form-section" ng-controller="MainCtrl">
<div class="notifications" ng-if="globalAlerts.length" ng-cloak>
<div>
<div alert ng-repeat="globalAlert in globalAlerts" type="{{ globalAlert.type }}" close="removeAlert(globalAlert)"><span ng-bind-html="globalAlert.msg | unsafe"></span></div>
</div>
</div>                            
<div class="loading" ng-show="formLoading" ng-cloak>
<i class="fa fa-circle-o-notch fa-spin"></i>
</div>
<div class="form-header">
<p>Track Time. Automate Invoices. <br/>Make Smarter Decisions.</p>
<h3>Start Free Trial Now!</h3>
</div>
<form name="step1" ng-submit="goNextStep(step1.$valid)" novalidate>
<div ng-if="!signUp.stepOneComplete">
<p style="margin: 20px 0;">Sign up today and make sure <strong>nothing slips through the cracks again.</strong></p>

<div class="form-group" ng-class="{'has-error': step1.company.$error.required && step1.company.$dirty}">
<label class="control-label" for="company">Company Name*
<span class="has-error" ng-show="step1.company.$error.required && step1.company.$dirty">Required!</span>
</label>
<input type="text" class="form-control input-lg" name="company" id="company" ng-model="signUp.companyName" required>
</div>
<div class="form-group" ng-class="{'has-error': step1.email.$error.email && step1.email.$dirty}">
<label class="control-label" for="email1">Email Address*
<span class="has-error" ng-show="step1.email.$error.email && step1.email.$dirty">Required!</span>
</label>
<input type="email" class="form-control input-lg" id="email1" name="email" ng-model="signUp.email" required>
</div>
<div class="form-group" ng-class="{'has-error': step1.url.$error && step1.url.$dirty, 'has-success': step1.url.goodUrl && step1.url.$dirty}">
<label class="control-label" for="url">Custom Url*
<span class="has-error" ng-show="step1.url.$error.required && step1.url.$dirty">Required! </span>
<span class="has-error" style="color:red" ng-show="step1.url.badUrl">This Url is already in use or incorrect</span>
<span class="has-success" style="color:#43ac6a" ng-show="step1.url.goodUrl">Url is OK</span>
</label>
<input type="text" class="form-control input-lg" id="url" name="url" ng-model="signUp.pUrl" required>
<p class="help-block">https://<strong>yourcompanyname</strong>.sherpadesk.com</p>
</div>
<br/>
<input type="hidden" class="form-control input-lg" id="force" name="force" ng-model="signUp.force" required>
<button class="btn btn-success btn-lg btn-block sd-btn-lg" type="submit">Get Started For Free</button>
</div>
</form>
<form name="step2" ng-submit="completeForm(step2.$valid)" novalidate ng-cloak>
<div ng-if="signUp.stepOneComplete" style="margin-top: -30px;">
<p>
&nbsp;<br/><br/>
</p>
<div class="form-group" ng-class="{'has-error': step2.firstName.$error.required && step2.firstName.$dirty}">
<label class="control-label">First Name*
<span class="has-error" ng-show="step2.firstName.$error.required && step2.firstName.$dirty">Required!</span>
</label>
<input type="text" id="first-name" class="form-control input-lg" name="firstName" ng-model="signUp.firstName" required>
</div>
<div class="form-group" ng-class="{'has-error': step2.lastName.$error.required && step2.lastName.$dirty}">
<label class="control-label">Last Name*
<span class="has-error" ng-show="step2.lastName.$error.required && step2.lastName.$dirty">Required!</span>
</label>
<input type="text" class="form-control input-lg" name="lastName" ng-model="signUp.lastName" required>
</div>
<div class="form-group" ng-class="{'has-error': step2.password.$error.required && step2.password.$dirty}">
<label class="control-label" for="url">Password*
<span class="has-error" ng-show="step2.password.$error.required && step2.password.$dirty">Required!</span>
</label>
<input type="password" class="form-control input-lg" name="password" ng-model="signUp.password" required>
</div>
<div class="form-group" ng-class="{'has-error': validatePassword() && step2.password2.$dirty}">
<label class="control-label" for="url">Confirm Password*
<span class="has-error" ng-show="step2.password2.$error.required && step2.password2.$dirty">Required!</span>
<span class="has-error" ng-show="validatePassword() && step2.password2.$dirty">Passwords must match!</span>
</label>
<input type="password" class="form-control input-lg" name="password2" ng-model="signUp.password2" required>
</div>

<label>How Did You Hear About Us?</label>
<select class="form-control input-lg" ng-model="signUp.hearAboutUs" ng-options="about.about for about in heard">
</select>
<br/>
<label>How Many Techs Do You Have?</label>
<select class="form-control input-lg" ng-model="signUp.numberOfTechs" ng-options="tech.count for tech in techs">
</select>
<br/>

<button class="btn btn-success btn-lg btn-block sd-btn-lg"type="submit">Start Your Free Trial Now</button>

</div>
</form>
<p class="text-center text-muted small">
<br/>
100% privacy guarantee. No Credit Card Required.
</p>
<p class="text-center text-muted small" style="padding-top: 10px;">
By clicking the button above I agree to<br/> <a target="_blank" href="http://sherpadesk.com/privacy-policy/">Terms of Use</a> and <a target="_blank" href="http://sherpadesk.com/privacy-policy/">Privacy Policy</a>.
</p>
</div>
</div>
</div>
<div class="col-sm-6">

<h2>What Our Customers Are Saying</h2>
<br/>
<div class="row">
<div class="col-sm-4">
<img src="http://sherpadesk.com/wp-content/themes/splash/img/RobbieMedina.png" class="img-responsive">
</div>
<div class="col-sm-8">
<p>"<strong>SherpaDesk</strong> is simple, scalable and affordable. Improves communications between you and the customers you support"</p>
<p><strong>Robbie Medina</strong> | IT Intelligence Consulting</p>
</div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-8">
<p>"Besides all the great features its prompt customer support makes it great to work with SherpaDesk"</p>
<p><strong>Thomas</strong> | Jamersan Web Consulting</p>
</div>
<div class="col-sm-4">
<img src="http://sherpadesk.com/wp-content/themes/splash/img/Scott.png" class="img-responsive">
</div>
</div>
<br/>
<br/>
<div class="row">
<div class="col-sm-4">
<img src="http://sherpadesk.com/wp-content/themes/splash/img/Patrick.png" class="img-responsive">
</div>
<div class="col-sm-8">
<p>"You guys provide great support...honestly, I think you should charge a bit more"</p>
<p><strong>Patrick Christenson</strong> | Christenson Communities</p>
</div>
</div>

</div>
</div>
</div>

<h2 class='faqTitle'>Frequently Asked Questions</h2>
<div class="pure-g signUpQuestions"> 
<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2"><div class="l-box">
<h3>Which options should I choose?</h3>
<p>All plans start with the free trial and offer access to the full stack of tools available. Once you’re in, you’ll be able to select the features you need.</p>
</div></div>
<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2"><div class="l-box">
<h3>How long is the free trial?</h3>
<p>Enjoy unlimited access for FREE for 15 days.  Afterwards, SherpaDesk costs just $39/month per tech. All in.</p>
</div></div>
<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2"><div class="l-box">
<h3>What happens after I create my account</h3>
<p>You go right into the application, and then an email will be sent to you with your account information.</p>
</div></div>
<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2"><div class="l-box">
<h3>Do you offer enterprise plans?</h3>
<p>Yep. Just contact us: sales@sherpadesk.com and one of our reps will assist in getting you set up.</p>
</div></div>
<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2"><div class="l-box">
<h3>Are you guys really sherpas?</h3>
<p>No… no we are not. However, we do love helping our members achieve customer support awesomeness!</p>
</div></div>
<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2"><div class="l-box">
<h3>How and when will I be billed?</h3>
<p>All payments are made through our credit card processor. If you have chosen any paid features, billing will start 30 days after you input your credit card info. Invoicing is available for enterprise customers.</p>
</div></div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.12.1/ui-bootstrap-tpls.min.js"></script>
<script>
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
"is_force_registration": $scope.signUp.force
};

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
if(data.isNameExists  && !$scope.signUp.force){
$scope.message('warning', 'FYI. Company name is already in use. Click submit to proceed with given name');
$scope.signUp.force = true;
return false;
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
$timeout(function(){
document.getElementById("first-name").focus();
}, 0);

// }
},
function(results){
$scope.formLoading = false;
console.log('error ', results);
$scope.message('danger', results.data || "Something has gone amuck");
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
$scope.message('danger', results.data || "Cannot check url");
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
"how": $scope.signUp.hearAboutUs.about,
"note": "Number of Techs: " + $scope.signUp.numberOfTechs.count
};
var submitForm = $http.post(apiUrl + 'organizations?format=json', data);
submitForm.then(
function(results){
window.location = results.data.url;
},
function(results){
//console.log(results)
var note = (results.data.ResponseStatus ? results.data.ResponseStatus.Message : results.data) || 'Sorry, there was a problem processing your registration.  Please try again.';
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
</script>
<?php get_footer(); ?>