<?php get_header(); ?>
<!--<!doctype html>
<html lang="en">
  <head>
    <title>IT Support & HelpDesk | Sherpadesk</title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/medium.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/small.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/large.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover.css" />

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/page.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.color.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/Chart.js"></script>

    <link href="https://support.sherpadesk.com/widget/Widget.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="https://support.sherpadesk.com/widget/Widget.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/sherpaFace.png">
    
  </head>
  <div class="popUp">
    <ul class="menu">
           <li>
            <a href="http://www.sherpadesk.com" onclick="return SD_Widget('https://support.sherpadesk.com', 2948);">
               <div class="menuItem"><p id="contactUs">Contact</p></div>
               </a>
           </li>
           <li>
               <a href="https://support.sherpadesk.com/portal/">
               <div class="menuItem"><p>Support</p></div>
               </a>
           <li>
            <a href="/the-sherpa-blog">
               <div class="menuItem"><p>Blog</p></div>
               </a>
           </li>
           <li>
            <a href="/start-your-climb">
               <div class="menuItem startPop"><p>Start Free</p></div>
               </a>
           </li>
       </ul>
   </div>
   <div id="panel">
  <div class="careerPhoto"></div>
  <div class="photoCover">
     
    <ul class="header transparentHeader">
        <li>
          <a href="/">
            <img id="logoBlue" src="<?php echo get_template_directory_uri(); ?>/img/SherpaLogo.png">
            </a>
        </li>
        <li>
            <a href="/start-your-climb">
                <p>Start Free</p>
            </a>
        </li>
       
        <li id="loginHeader">
            <a href="https://support.sherpadesk.com">
            <p>Support</p>
            </a>
        </li>
        <li id="contact">
       
            <a href="http://www.sherpadesk.com" onclick="return SD_Widget('https://support.sherpadesk.com', 2948);">
            <p id="contactUs">Contact</p>
            </a>
            
        </li>
        <li class="mobileOnly"><i id ="navIcon" class="fa fa-bars fa-2x"></i></li>
    </ul>
    
    <h1>Working Together Works</h1>
    <h3>We're growing fast and are always looking for motivated and talented individuals to join our team of Self-Starters. With our new awesome location in the new Atlanta Tech Village. </h3>
</div>-->
<div class="careers">
    <h1>Open Positions</h1>

     <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="entry">
   <?php the_content(); ?>
 </div>



<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else: ?>


 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>


 <!-- REALLY stop The Loop. -->
 <?php endif; ?>

</div>
<?php get_footer(); ?>