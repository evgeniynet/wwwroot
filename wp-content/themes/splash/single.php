<!doctype html>
<html lang="en">
  <head>
    <title>IT Support & HelpDesk | Sherpadesk</title>
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/medium.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/small.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/large.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover.css" />
    <!-- Fonts -->
    
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Main.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.color.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/Chart.js"></script>

        <!-- Fonts & Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/sherpaFace.png">
    
  </head>
  <div class="pageTitle"></div>
  <div class="pagePhotoCover">
     
    <ul class="header transparentHeader">
        <li>
          <a href="index.php">
            <img id="logoBlue" src="<?php echo get_template_directory_uri(); ?>/img/SherpaLogo.png">
            </a>
        </li>
        <li>
            <a href="https://sherpadesk.com/start-your-climb/">
                <p>Start Free</p>
            </a>
        </li>
       
        <li id="loginHeader">
            <a href="https://support.sherpadesk.com">
            <p>Support</p>
            </a>
        </li>
        <li id="contact">
            <!--<i id="phoneIcon" class="fa fa-phone fa-2x"></i>-->
            <p>Contact</p>
            <div class="phone"></div>
        </li>
        <li class="mobileOnly"><i id ="navIcon" class="fa fa-bars fa-2x"></i></li>
    </ul>
    
    <h1 class="pageH1">The Sherpa Blog</h1>
</div>
<div class="container">
	<?php get_template_part('templates/content', 'single'); ?>
</div>
<?php get_footer(); ?>