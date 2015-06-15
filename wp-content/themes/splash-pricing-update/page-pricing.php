<?php get_header(); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<style>
.photoCoverSmall,
.pageTitle{display: none;}
.bottom-trust {
    background: #004174 url(<?php echo get_template_directory_uri(); ?>/img/dark-mountains.jpg) top center no-repeat fixed;
    background-size: cover;
    border-top: 1px solid #ccc;
    color: #ffffff;
    text-shadow: -1px -1px 0px rgba(0,0,0,0.4);
    overflow: hidden;
}
.pricing-plan-container{
    color: #fff;
    font-family: 'Open Sans', Arial, sans-serif;
    background-color: #004174;
    padding: 40px 20px;
    margin-top: 70px;
    border-top: 1px solid #004A86;
}
.pricing-plan-container h1 {
    font-family: Open Sans, Arial, sans-serif;
    text-align: center;
}
.pricing-plan {
    width: 100%;
    max-width: 700px;
    padding: 40px 20px;
    font-size: 16px;
    overflow: hidden;
    margin: 30px auto;
    background-color: #fff;
    color: #444;
    box-shadow: 0 0 15px 0 rgba(0,0,0,0.7);
}
.pricing {
    text-align: center;
    padding-top: 50px;
    height: inherit;
}
.pricing-list li,
.plan-includes li{
    margin-bottom: 10px;
}
.plan-includes li {
    font-size: 16px;
}

.pricing-list i,
.plan-includes i{
    color: #5cb85c;
}
h2.price {
    font-size: 122px;
    margin-bottom: 0;
}
h2.price span {
    font-size: 42px;
    position: absolute;
    margin: 8px 0 0 -20px;
}
.price-btn span {
    font-size: 32px;
}
.full-section {
    background-color: #EDEDED;
    padding: 20px 0 40px;
    border-top: 1px solid #ffffff;
    border-bottom: 1px solid #E0E0E0;
}
.plan-includes{
    margin: auto;
}


</style>

<div class="pricing-plan-container">
    <div class="container-fluid">
        <div class="row">
            <h1>Clear and Simple Pricing</h1>
            <div class="pricing-plan">
                <div class="col-xs-6 pricing">
                    <h2 class="price"><span>$</span>39</h2>
                    <p>TECH/MONTH</p>
                </div>
                <div class="col-xs-6 pricing-list">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check"></i> <strong>Robust</strong> Time Tracking</li>
                        <li><i class="fa fa-check"></i> <strong>Unlimited</strong> Email Boxes</li>
                        <li><i class="fa fa-check"></i> <strong>Unlimited</strong> Customers</li>
                        <li><i class="fa fa-check"></i> <strong>Unlimited</strong> Projects</li>
                        <li><i class="fa fa-check"></i> <strong>Unlimited</strong> Invoicing</li>
                        <li><i class="fa fa-check"></i> <strong>Unlimited</strong> Asset Tracking</li>
                    </ul>
                    </br>
                    <a href="/start-your-climb" class="btn btn-success btn-block price-btn">
                        <span>SIGN UP</span></br>
                        <strong>15 DAY FREE TRIAL</strong></br>
                        No Credit Card Required
                    </a>
                </div>
            </div>
            <p style="text-align: center;">Just need something to get started? Every account includes your first tech FREE.</p>
        </div>
    </div>
</div>
<div class="full-section">
    <div class="container plan-includes">
        <div class="row">
            <div class="col-xs-12">
                <h2>All plans include...</h2></br>
            </div>

            <div class="col-xs-4">
                <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i> Free 15-day trial</li>
                    <li><i class="fa fa-check"></i> Simple time tracking</li>
                    <li><i class="fa fa-check"></i> Email Parsing</li>
                    <li><i class="fa fa-check"></i> Invoicing</li>
                </ul>
            </div>
            <div class="col-xs-4">
                <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i> Powerful reports</li>
                    <li><i class="fa fa-check"></i> iPhone and Android compatibility</li>
                    <li><i class="fa fa-check"></i> Desktop widgets</li>
                    <li><i class="fa fa-check"></i> Data import and export</li>
                </ul>
            </div>
            <div class="col-xs-4">
                <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i> 3rd party add-ons</li>
                    <li><i class="fa fa-check"></i> Google apps integration</li>
                    <li><i class="fa fa-check"></i> Office 365 integration</li>
                    <li><i class="fa fa-check"></i> 99.9% uptime and 24/7 monitoring</li>
                    <li><i class="fa fa-check"></i> Daily data backup and 128-bit security</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="forceFont">Frequently Asked Questions</h2>
        </div>
        <div class="col-md-6">
            <p><strong>Q: Which options should I choose?</strong><br>
            <em>A: All plans start with the free trial</em> and offer access to the full stack of tools available.</p>

            <p><strong>Q: How long is the free trial?</strong><br>
            A: You’ll get access to every feature for FREE for 15 days. After that your account will be FREE FOREVER, just with a few less features. See our complete feature list to see what’s included in the free account.</p>

            <p><strong>Q: What happens after I click Get Started?</strong><br>
            A: You’ll be direct to our sign up page. Once that form is completed, you go right into the application. And then an email will be sent to you with your account information.</p>

        </div>
        <div class="col-md-6">

            <p><strong>Q: Do you offer enterprise plans?</strong><br>
            A: Yep. Just contact us: support@sherpadesk.com and one of our reps will assist in getting you set up.</p>

            <p><strong>Q: How and when will I be billed?</strong><br>
            A: All payments are made through our credit card processor. If you have chosen any paid features, billing will start 30 days after you input your credit card info. Invoicing is available for enterprise customers.</p>

            <p><strong>Q: Are you guys really sherpas?</strong><br>
            A: No… no we are not. However, we do love helping our members achieve customer support awesomeness!</p>
        </div>
    </div>
</div>

<div class="bottom-trust">
    <div class="container">
        <h1>
            Join Over <strong>300+ Organizations</strong> who trust our solutions<br>
            to track customer issues and log hourly time
        </h1>
    </div>
</div>


<?php get_footer(); ?>