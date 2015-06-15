<?php 
  $pageTitle = "";
  $photoCover = "";
  $pageSubTitle = "";
  $pageClass = "";
  if(get_field("sherpa-header-class")==""):
    $pageTitle='';
    $photoCover="photoCoverSmall";
  else:
    $pageTitle=get_field("sherpa-header-class");
    $photoCover="photoCover";
  endif;
?>
<!doctype html>
<html lang="en">
  <head>
	<?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="HKa05YNUINa8LdEyW-sFJ6SAykwegjM_HtrR5_iskSY" />
    <link rel="canonical" href="http://sherpadesk.com/">
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
    <!-- SherpaDesk -->
    <link href="https://support.sherpadesk.com/widget/Widget.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="https://support.sherpadesk.com/widget/Widget.js"></script>
    <script src="//cdn.optimizely.com/js/164486955.js"></script>
        <!-- Fonts & Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/sherpaFace.png" alt="sherpaguy Face">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-998328-12', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0017/4283.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<script src="//cdn.optimizely.com/js/164486955.js"></script>
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
           </li>
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
  <div class="pageTitle<?php echo $pageTitle; ?>"></div>
  <div class="<?php echo $photoCover; ?>">
      <div class="navigation">
        <a href="/">
          <div class="navigationLogo">
              <img itemscope itemtype="http://schema.org/product" itemprop="AggregateRating" id="logo" class="whiteLogo" src="<?php echo get_template_directory_uri(); ?>/img/SherpaLogo.png" alt="sherpadesk">
          </div>
        </a>
        <a href="/start-your-climb">
            <span class="navigationItem"><p>start free</p></span>
        </a>
        <a href="http://www.sherpadesk.com" onclick="return SD_Widget('https://support.sherpadesk.com', 2948);">
            <span class="navigationItem"><p>contact</p></span>
        </a>
        <a href="http://app.sherpadesk.com">
            <span class="navigationItem"><p>login</p></span>
        </a>
        <a href="https://support.sherpadesk.com">
            <span class="navigationItem"><p>support</p></span>
        </a>
        <a href="/blog">
            <span class="navigationItem"><p>blog</p></span>
        </a>
        <a href="/pricing">
            <span class="navigationItem"><p>pricing</p></span>
        </a>
        <i id ="mobileNavigation" class="fa fa-bars fa-2x"></i>
    </div>
    <!-- <ul class="header transparentHeader">
        <li>
          <a href="/">
            <img id="logoBlue" src="<?php echo get_template_directory_uri(); ?>/img/SherpaLogo.png" alt="sherpaDesk logo">
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
    </ul> -->
    
    <h1 class="pageH1"><?php echo get_field("sherpa-header-title") ?></h1>
    <h2><?php echo get_field("sherpa-header-subtitle") ?></h2>
</div>