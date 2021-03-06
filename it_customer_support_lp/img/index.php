<!DOCTYPE html>
<html ng-app="app">
<head lang="en">
    <!--script src="//cdn.optimizely.com/js/164486955.js"></script-->
    <meta charset="UTF-8">
    <title>SherpaDesk - Free HelpDesk Software to Manage Your Client</title>
	<meta name="description" content="Make your business more collaborative, streamlined and efficient with unique application from SherpaDesk."/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link type="text/css" href="css/landing-page.css" rel="stylesheet">
</head>
<body ng-controller="MainCtrl">
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1040470683;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1040470683/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<div class="notifications" ng-if="globalAlerts.length" ng-cloak>
    <div>
        <div alert ng-repeat="globalAlert in globalAlerts" type="{{ globalAlert.type }}" close="removeAlert(globalAlert)"><span ng-bind-html="globalAlert.msg | unsafe"></span></div>
    </div>
</div>
<div class="container-fluid">
        <div class="sd-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-7 master-headline">
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="img-responsive" href="http://www.sherpadesk.com" target="_blank"><img src="img/SherpaLogo.png"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 headline">
                                <h1>SPEND TIME BUILDING YOUR BUSINESS NOT MANAGING YOUR SUPPORT PROCESS</h1>
                                <h2>The complete help desk, time tracking and invoicing solution used daily by organizations just like yours.</h2>
                                <img class="img-responsive" src="img/macbookandiphone.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-section">
                            <div class="loading" ng-show="formLoading" ng-cloak>
                                <i class="fa fa-circle-o-notch fa-spin"></i>
                            </div>
                            <img class="arrow" src="img/arrow.png">
                            <div class="form-header">
                                <p>Turn customer support emails into tickets in just a few minutes.
                                <h3>Sign Up For Free Trial!</h3>
                            </div>
                            <form name="step2"  ng-submit="completeForm(step2.$valid)" novalidate ng-cloak>
                                <div ng-if="!signUp.stepOneComplete"><br />
                                    <div class="form-group" ng-class="{'has-error': step2.company.$error.required && step1.company.$dirty}">
                                        <label class="control-label" for="company">Company Name*
                                            <span class="has-error" ng-show="step2.company.$error.required && step1.company.$dirty">Required!</span>
                                        </label>
                                        <input type="text" class="form-control input-lg" name="company" id="company" ng-model="signUp.companyName" required>
                                    </div>
                                    <div class="form-group" ng-class="{'has-error': step2.email.$error.email && step2.email.$dirty}">
                                        <label class="control-label" for="email1">Email Address*
                                            <span class="has-error" ng-show="step2.email.$error.email && step2.email.$dirty">Required!</span>
                                        </label>
                                        <input type="email" class="form-control input-lg" id="email1" name="email" ng-model="signUp.email" required>
                                    </div>
                                    <div class="form-group" ng-class="{'has-error': step1.url.$error && step1.url.$dirty, 'has-success': step2.url.goodUrl && step2.url.$dirty}">
                                        <label class="control-label" for="url">Custom Url*
                                            <span class="has-error" ng-show="step2.url.$error.required && step2.url.$dirty">Required! </span>
                                            <span class="has-error" style="color:red" ng-show="step2.url.badUrl">This Url is already in use or incorrect</span>
                                            <span class="has-success" style="color:#43ac6a" ng-show="step2.url.goodUrl">Url is OK</span>
                                        </label>
                                        <input type="text" class="form-control input-lg" id="url" name="url" ng-model="signUp.pUrl" required>
                                        <p class="help-block">https://<strong id=customurl>yourcompanyname</strong>.sherpadesk.com</p>
                                    </div>
                                    <div class="form-group" ng-class="{'has-error': step2.firstName.$error.required && step2.firstName.$dirty}">
                                        <label class="control-label">Name*
                                            <span class="has-error" ng-show="step2.firstName.$error.required && step2.firstName.$dirty">Required!</span>
                                        </label>
                                        <input type="text" id="first-name" class="form-control input-lg" name="firstName" ng-model="signUp.firstName" required>
                                    </div>
									<div style="display:none;" class="form-group" ng-class="{'has-error': step2.lastName.$error.required && step2.lastName.$dirty}">
                                        <label class="control-label">Last Name*
                                            <span class="has-error" ng-show="step2.lastName.$error.required && step2.lastName.$dirty">Required!</span>
                                        </label>
                                        <input type="text" class="form-control input-lg" name="lastName" value=".">
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
									<center>
 
                                    <button class="btn btn-success btn-lg sd-btn-lg" onClick="ga('send', 'event', { eventCategory: 'Registration', eventAction: 'Click Submit', eventLabel: 'Sign Up'});" style="width:70%">Start Free Trial Now</button>                                     
									</center>

                                </div>
                            </form>
                            <p class="text-center text-muted small color-red">
                                <br/>
                                100% privacy guarantee. No Credit Card Required.
                            </p>
                            <p class="text-center text-muted small" style="padding-top: 10px;">
                                By clicking the button above I agree to<br/> <a target="_blank" href="http://sherpadesk.com/privacy-policy/">Terms of Use</a> and <a target="_blank" href="http://sherpadesk.com/privacy-policy/">Privacy Policy</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <img class="img-responsive"  src="img/logos/integrations.png">
        </div>
        <div class="sd-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <iframe src="http://fast.wistia.net/embed/iframe/9qb4gcvobq?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe><script src="http://fast.wistia.net/assets/external/E-v1.js"></script>
                        <h1>Getting Things <span>Done</span></h1>
                        <p style="font-size: 20px;">Businesses are looking at new ways to make their organizations more streamlined and efficient.
                         The challenge is finding a solution to work the way they work.  The simplicity of SherpaDesk, the ease of use for their clients
                         to create support tickets and the deep integration into leading business solutions allow them to focus on doing what they love doing.
                         Not spending time on things they don't.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="sd-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img class="img-responsive" src="img/bottom-info/ticketsSS.png" alt="screen shot of the app" style="max-width: 100%;">
                    </div>
                    <div class="col-sm-6">
                        <h3>Centralize and manage all client issues</h3>
                        <p>Support issues are able to be generated and routed to the right technician via email or through your company portal making sure each issue is properly assigned</p>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Keep accurate time logs across your team</h3>
                        <p>Technicians are able to log time against projects and support issues to give you detailed information on how much time and costs are being allocated to your clients</p>
                    </div>
                    <div class="col-sm-6">
                        <img class="img-responsive" src="img/bottom-info/timeSS.png" alt="screen shot of the app">
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-sm-6">
                        <img class="img-responsive" src="img/bottom-info/invoiceSS.png" alt="screen shot of the app">
                    </div>
                    <div class="col-sm-6">
                        <h3>Send invoices quickly and track payments</h3>
                        <p>Custom rate plans allow you to easily allocate all time entries so that you can get invoices out to your customers and get your technicians paid on time</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="sd-footer">
        <ul class="list-inline list-unstyled logo-blocks">
            <li><img class="img-responsive" src="http://sherpadesk.com/wp-content/themes/splash/img/logo1.png"></li>
            <li><img class="img-responsive" src="http://sherpadesk.com/wp-content/themes/splash/img/logo2.png"></li>
            <li><img class="img-responsive" src="http://sherpadesk.com/wp-content/themes/splash/img/logo3.png"></li>
            <li><img class="img-responsive" src="http://sherpadesk.com/wp-content/themes/splash/img/logo4.png"></li>
            <li><img class="img-responsive" src="http://sherpadesk.com/wp-content/themes/splash/img/logo5.png"></li>
        </ul>
        </div>
    </div>

        <style type="text/css">
        datalist {display:none;} /* just in case */
    </style>

<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
<script src="js/signup.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-998328-12', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>