<div class="row">
    <div class="col-sm-6">
        <div ng-app="app">
            <div ng-controller="MainCtrl" class="form-section ng-scope">
                <!-- ngIf: globalAlerts.length -->
                <div class="notifications" ng-if="globalAlerts.length" ng-cloak>
                    <div>
                        <div alert ng-repeat="globalAlert in globalAlerts" type="{{ globalAlert.type }}" close="removeAlert(globalAlert)"><span ng-bind-html="globalAlert.msg | unsafe"></span></div>
                    </div>
                </div>
                <div ng-cloak="" ng-show="formLoading" class="loading">
                    <i class="fa fa-circle-o-notch fa-spin"></i>
                </div>
                <div class="form-header">
                    <p>Ready to simplify supporting customers, tracking time and generating invoices?</p>
                    <h3>Get a Free Account Now!</h3>
                </div>
                <form novalidate="" ng-submit="goNextStep(step1.$valid)" name="step1">
                    <div ng-if="!signUp.stepOneComplete">
                        <p style="margin: 20px 0;">Sign up for a SherpaDesk account with your first user free. <strong>Add new users for just $39 per month as your business needs grow.</strong></p>
                        <div class="form-header9">
                            <h6 style="font-size: 18px;margin-top: 6px;margin-bottom: 6px;">Step 1</h6>
                        </div>
                        <div ng-class="{'has-error': step1.company.$error.required &amp;&amp; step1.company.$dirty}" class="form-group">
                            <label for="company" class="control-label">Company Name*
                                <span ng-show="step1.company.$error.required &amp;&amp; step1.company.$dirty" class="has-error">Required!</span>
                            </label>
                            <input type="text" required="" ng-model="signUp.companyName" id="company" name="company" class="form-control input-lg">
                        </div>
                        <div ng-class="{'has-error': step1.email.$error.email &amp;&amp; step1.email.$dirty}" class="form-group">
                            <label for="email1" class="control-label">Email Address*
                                <span ng-show="step1.email.$error.email &amp;&amp; step1.email.$dirty" class="has-error">Required!</span>
                            </label>
                            <input type="email" required="" ng-model="signUp.email" name="email" id="email1" class="form-control input-lg">
                        </div>
                        <div ng-class="{'has-error': step1.url.$error &amp;&amp; step1.url.$dirty, 'has-success': step1.url.goodUrl &amp;&amp; step1.url.$dirty}" class="form-group">
                            <label for="url" class="control-label">Custom Url*
                                <span ng-show="step1.url.$error.required &amp;&amp; step1.url.$dirty" class="has-error">Required! </span>
                                <span ng-show="step1.url.badUrl" style="color:red" class="has-error">This Url is already in use or incorrect</span>
                                <span ng-show="step1.url.goodUrl" style="color:#43ac6a" class="has-success">Url is OK</span>
                            </label>
                            <input type="text" required="" ng-model="signUp.pUrl" name="url" id="url" class="form-control input-lg">
                            <p class="help-block">https://<strong id="customurl">yourcompanyname</strong>.sherpadesk.com</p>
                        </div>
                        <br>
                        <input type="hidden" required="" ng-model="signUp.force" name="force" id="force" class="form-control input-lg">
                        <button type="submit" class="btn btn-success btn-lg btn-block sd-btn-lg btn-default" style="" >Get Started For Free</button>
                    </div>
                </form>
                <form ng-cloak="" novalidate="" ng-submit="completeForm(step2.$valid)" name="step2">
                    <div style="margin-top: -30px;" ng-if="signUp.stepOneComplete">
                        <p>
                            &nbsp;<br><br>
                        </p>
                        <div class="form-header9">
                            <h6 style="font-size: 18px;margin-top: 6px;margin-bottom: 6px;">Step 2</h6>
                        </div>
                        <div ng-class="{'has-error': step2.firstName.$error.required &amp;&amp; step2.firstName.$dirty}" class="form-group">
                            <label class="control-label">First Name*
                                <span ng-show="step2.firstName.$error.required &amp;&amp; step2.firstName.$dirty" class="has-error">Required!</span>
                            </label>
                            <input type="text" required="" ng-model="signUp.firstName" name="firstName" class="form-control input-lg" id="first-name">
                        </div>
                        <div ng-class="{'has-error': step2.lastName.$error.required &amp;&amp; step2.lastName.$dirty}" class="form-group">
                            <label class="control-label">Last Name*
                                <span ng-show="step2.lastName.$error.required &amp;&amp; step2.lastName.$dirty" class="has-error">Required!</span>
                            </label>
                            <input type="text" required="" ng-model="signUp.lastName" name="lastName" class="form-control input-lg">
                        </div>
                        <div ng-class="{'has-error': step2.password.$error.required &amp;&amp; step2.password.$dirty}" class="form-group">
                            <label for="url" class="control-label">Password*
                                <span ng-show="step2.password.$error.required &amp;&amp; step2.password.$dirty" class="has-error">Required!</span>
                            </label>
                            <input type="password" required="" ng-model="signUp.password" name="password" class="form-control input-lg">
                        </div>
                        <div ng-class="{'has-error': validatePassword() &amp;&amp; step2.password2.$dirty}" class="form-group">
                            <label for="url" class="control-label">Confirm Password*
                                <span ng-show="step2.password2.$error.required &amp;&amp; step2.password2.$dirty" class="has-error">Required!</span>
                                <span ng-show="validatePassword() &amp;&amp; step2.password2.$dirty" class="has-error">Passwords must match!</span>
                            </label>
                            <input type="password" required="" ng-model="signUp.password2" name="password2" class="form-control input-lg">
                        </div>

                        <label>How Did You Hear About Us?</label>
                        <input type="text" list="how" ng-model="signUp.hearAboutUs" name="hearAboutUs" class="form-control input-lg">
                        <datalist id="how">
                            <!--[if !IE]><!-->
                            <select id=test><!--<![endif]-->
                                <option  ng-repeat="about in heard" value="{{about.about}}"></option>
                                <!--[if !IE]><!-->
                            </select><!--<![endif]-->
                        </datalist>
                        <br>
                        <label>How Many Techs Do You Have?</label>
                        <select ng-options="tech.count for tech in techs" ng-model="signUp.numberOfTechs" class="form-control input-lg">
                        </select>
                        <br>

                        <button style="width:70%" class="btn btn-success btn-lg sd-btn-lg" onClick="ga('send', 'event', { eventCategory: 'Registration', eventAction: 'Click Submit', eventLabel: 'Sign Up'});" >Start Free Trial Now</button> 
                        <button ng-click="cancelForm()" type="button" style="width:25%;margin-left: 10px;float: right;" class="btn btn-default btn-lg sd-btn-lg">Back</button>

                    </div>
                </form>
                <p class="text-center text-muted small">
                    <br>
                    100% privacy guarantee. No Credit Card Required.
                </p>
                <p style="padding-top: 10px;" class="text-center text-muted small">
                    By clicking the button above I agree to<br> <a href="http://www.sherpadesk.com/terms-of-service/" target="_blank">Terms Of Service</a> and <a href="http://www.sherpadesk.com/privacy-policy/" target="_blank">Privacy Policy</a>.
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <h1 style="font-size: 18px;">SherpaDesk is empowerinig businesses to manage customers in one simple to use platform across all their devices. See what SherpaDesk users have to say...
        </h1>
        &nbsp;
        <div class="row">
            <div class="col-sm-4"><img class="img-responsive" src="http://www.sherpadesk.com/wp-content/uploads/2014/07/RobbieMedina.png" alt="SherpaDesk feedback - Robbie Medina" /></div>
            <div class="col-sm-8">

                "<strong>SherpaDesk</strong> is simple, scalable and affordable. Improves communications between you and the customers you support"

                <strong>Robbie Medina</strong> | IT Intelligence Consulting

            </div>
        </div>
        &nbsp;
        <div class="row">
            <div class="col-sm-8">

                "Besides all the great features its prompt customer support makes it great to work with SherpaDesk"

                <strong>Thomas</strong> | Jamersan Web Consulting

            </div>
            <div class="col-sm-4"><img class="img-responsive" src="http://www.sherpadesk.com/wp-content/uploads/2014/07/Scott.png" alt="SherpaDesk feedback - Thomas" /></div>
        </div>
        &nbsp;
        <div class="row">
            <div class="col-sm-4"><img class="img-responsive" src="http://www.sherpadesk.com/wp-content/uploads/2014/07/Patrick.png" alt="SherpaDesk feedback - Patrick Christenson" /></div>
            <div class="col-sm-8">

                "You guys provide great support...honestly, I think you should charge a bit more"

                <strong>Patrick Christenson</strong> | Christenson Communities

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <h2 class="forceFont">Frequently Asked Questions</h2>
    </div>
    <div class="col-md-6">
        <strong>Q: Is it really a free account for the first user?</strong> A: Yes. Once you sign up, you’ll get access to every feature of SherpaDesk for a single user free forever. No strings attached.
        <br>
        <strong>Q: What happens after I sign up for the free account?</strong> A: Once you’ve submitted your information, you’ll receive an email to you with your account information.
        <br>
        <strong>Q: What if I want to add my users?</strong> A: That’s easy. Users can be added to your account dashboard. You’ll be asked to input user information and then provide a credit card to cover the $39 per user/per month fee.
        <!--strong>Q: Which options should I choose?</strong>
<em>A: All plans start with the free trial</em> and offer access to the full stack of tools available.<strong>Q: How long is the free trial?</strong>
A: You’ll get access to every feature for FREE for 15 days. After that your account will be FREE FOREVER, just with a few less features. See our complete feature list to see what’s included in the free account.<strong>Q: What happens after I click Get Started?</strong>
A: You’ll be direct to our sign up page. Once that form is completed, you go right into the application. And then an email will be sent to you with your account information.-->
    </div>
    <div class="col-md-6">

        <strong>Q: Do you offer enterprise plans?</strong>
        A: Yep. Just contact us: support@sherpadesk.com and one of our reps will assist in getting you set up.
        <br>
        <strong>Q: How and when will I be billed?</strong>
        A: All payments are made through our credit card processor. If you have chosen any paid features, billing will start 30 days after you input your credit card info. Invoicing is available for enterprise customers.
        <br>
        <strong>Q: Are you guys really sherpas?</strong>
        A: No… no we are not. However, we do love helping our members achieve customer support awesomeness!

    </div>
</div>