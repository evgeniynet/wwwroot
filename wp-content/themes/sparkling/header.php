<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 * @package sparkling

 */

?><!doctype html>

	<!--[if !IE]>

	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->

	<!--[if IE 7 ]>

	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->

	<!--[if IE 8 ]>

	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->

	<!--[if IE 9 ]>

	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->

	<!--[if gt IE 9]><!-->

<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href="https://support.sherpadesk.com/widget/Widget.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="https://support.sherpadesk.com/widget/Widget.js"></script>

<?php wp_head(); ?>



</head>



<body <?php body_class(); ?>>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-998328-12', 'auto');
  ga('send', 'pageview');

</script>

<div id="page" class="hfeed site">



	<header id="masthead" class="site-header" role="banner">

		<nav class="navbar navbar-default" role="navigation">

			<div class="container">

				<div class="row">

					<div class="site-navigation-inner col-sm-12">

		        <div class="navbar-header">

		            <button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

		                <span class="sr-only">Toggle navigation</span>

		                <span class="icon-bar"></span>

		                <span class="icon-bar"></span>

		                <span class="icon-bar"></span>

		            </button>



				<?php if( get_header_image() != '' ) : ?>



					<div id="logo">

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>

					</div><!-- end of #logo -->



				<?php endif; // header image was removed ?>



				<?php if( !get_header_image() ) : ?>



					<div id="logo">

						<span class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>

					</div><!-- end of #logo -->



				<?php endif; // header image was removed (again) ?>



		        </div>

					<?php sparkling_header_menu(); ?>

					</div>

		    </div>

		  </div>

		</nav><!-- .site-navigation -->

	</header><!-- #masthead -->

<?php if( is_front_page() ) : ?>

	<div class="home-banner">

		<div class="container">

		<div class="col-lg-7 col-md-6 col-sm-12">

			<div class="call-to-action">

				<h1 class="head-banner">Finally, a help desk solution that Focuses on what matters: Time.</h1>

        			<ul class="list-unstyled">

            				<li id="featureOne" itemprop="description">

                				<a href="#trackTicketSS">Track Time Across Your Business</a>

            				</li>



            				<li id="featureTwo" itemprop="description">

                				<a href="#timelogsSS">Automatically Generate Invoices</a>

            				</li>



            				<li id="featureThree" itemprop="description">

                				<a href="#invoiceSS">Make Smarter Decisions</a>

            				</li>

        			</ul>

        			<a class="btn btn-lg btn-success pull-right" href="/start-your-climb">Get Started</a>&nbsp;&nbsp;&nbsp;&nbsp;

				<a class="btn btn-lg btn-primary pull-right" href="http://www.sherpadesk.com" onclick="return SD_Widget('https://support.sherpadesk.com', 2948);">Request Demo</a>				        			

			</div>

		</div>

		</div>

        </div>

	<!--<div class="logos">

		<div class="container">

		<ul class="list-unstyled list-inline">

			<li><img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" /></li>

			<li><img src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" /></li>

			<li><img src="<?php echo get_template_directory_uri(); ?>/images/logo3.png" /></li>

			<li><img src="<?php echo get_template_directory_uri(); ?>/images/logo4.png" /></li>

			<li><img src="<?php echo get_template_directory_uri(); ?>/images/logo5.png" /></li>

		</ul>

		</div>

	</div>-->

	<div class="container-fluid integration-logos">

        	<div class="container" style="text-align: center;">

            		<img class="img-responsive" style="margin: 0 auto;" src="<?php echo get_template_directory_uri(); ?>/images/integrations.png">

        	</div>

	</div>

<?php endif;?>

<?php if( is_page( 'Pricing' )  ) : ?>

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

<?php endif;?>

	<div id="content" class="site-content">



		<div class="top-section">

			<?php sparkling_featured_slider(); ?>

			<?php sparkling_call_for_action(); ?>

		</div>



		<div class="container main-content-area">

			<div class="row">

				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">