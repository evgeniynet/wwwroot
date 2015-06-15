<?php
  $experiment = "";
  $pageTitle = "";
  $pageInsertClass ="";
  $pageDescriptionTitle = "";
  $pageInsertImage ="";
  $pageDescription = "";
  if(get_field("sherpa-landing-title")==""):
    $pageTitle='<span  class="smallStay">"The </span><span class="big">Best </span><span class="huge">B2B <span id="damn"></span></span><span class="reg"> Customer support system</span><span class="small"> on the</span><span class="big"> Web!"</span>';
    $pageInsertClass ="insertNotVisible";
    $experiment = get_template_directory_uri();;
  else:
    $pageTitle=get_field("sherpa-landing-title");
    $pageInsertClass ="insertVisible";
    $pageInsertImage =get_field("sherpa-landing-img");
    $pageDescription=get_field("sherpa-landing-description");
    $pageDescriptionTitle=get_field("sherpa-landing-description-title");
  endif;
?>
<!doctype html>
<html lang="en">
  <head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-998328-12', 'auto');
  ga('send', 'pageview');

</script>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="HKa05YNUINa8LdEyW-sFJ6SAykwegjM_HtrR5_iskSY" />
    <link rel="canonical" href="http://sherpadesk.com/">

    <!-- Main stylesheet -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/original/css/homeStyle.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/original/css/medium.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/original/css/small.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/original/css/large.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/original/css/hover.css" />


    <!-- Fonts -->
    
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Main.js -->
    <script src="<?php echo get_template_directory_uri(); ?>/original/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.color.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/Chart.js"></script>
    <!-- SherpaDesk -->
    <link href="https://support.sherpadesk.com/widget/Widget.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="https://support.sherpadesk.com/widget/Widget.js"></script>
        <!-- Fonts & Icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/sherpaFace.png">
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0017/4283.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<!-- <script src="//cdn.optimizely.com/js/164486955.js"></script> -->

  </head>
  <body>
    <div class="popUp">
        <ul class="menu">
           <li>
            <a href="http://www.sherpadesk.com" onclick="return SD_Widget('https://support.sherpadesk.com', 2948);">
               <div class="menuItem"><p>Contact</p></div>
           </a>
           </li>
           <li>
               <a href="https://support.sherpadesk.com/portal/">
               <div class="menuItem"><p>Support</p></div>
               </a>
           </li>
           <li>
            <a href="http://app.sherpadesk.com/">
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
<div id="HomePanel">
  <header>
    <div class="navigation">
        <section>
            <a href="/">
                <div class="navigationLogo">
                    <img id="logo" class="whiteLogo" src="<?php echo get_template_directory_uri(); ?>/img/SherpaLogo.png" alt="sherpadesk">
                </div>
            </a>
            <a href="/start-your-climb">
                <span class="navigationItem"><p>start free</p></span>
            </a>
            <a href="http://app.sherpadesk.com">
                <span class="navigationItem"><p>login</p></span>
            </a>
            <a href="http://www.sherpadesk.com" onclick="return SD_Widget('https://support.sherpadesk.com', 2948);">
                <span class="navigationItem"><p>contact</p></span>
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
            <a href="/start-your-climb">
                <div id="headerButton" class="getStartedButton">Start Free</div>
            </a>
            <i id ="mobileNavigation" class="fa fa-bars fa-2x"></i>
        </section>
    </div>
    <div id="titleContainer" class="titleWrapper" itemscope itemtype="http://schema.org/product">
        <h1 class="head-banner">Finally, a Help Desk Solutions that Focuses on what matters: Time.</h1>
        <ul>
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
        <a class="sd-btn start" href="/start-your-climb">Get Started</a>
        <a class="sd-btn demo" href="http://www.sherpadesk.com" onclick="return SD_Widget('https://support.sherpadesk.com', 2948);">
            Request Demo
        </a>
    </div>
  </header>
    <div class="logos">
        <section>
            <ul>
                <li>
                    <img id="logo1" class="client" src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" alt="client logo">
                </li>
                <li>
                    <img id="logo2" class="client"  src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="client logo">
                </li>
                <li>
                    <img id="logo3" class="thinLogo client"  src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="client logo">
                </li>
                <li>
                    <img id="logo4" class="thinLogo client"  src="<?php echo get_template_directory_uri(); ?>/img/logo4.png" alt="client logo">
                </li>
                <li>
                    <img id="logo5" class="thinLogo client"  src="<?php echo get_template_directory_uri(); ?>/img/logo5.png" alt="client logo">
                </li>
            </ul>
        </section>
    </div>
    <section itemscope itemtype="http://schema.org/creativeWork/mediaObject/VideoObject" class="<?php echo $pageInsertClass ?>">
        <div class="insertImageWrapper">
            <img src="<?php echo $pageInsertImage ?>">
        </div>
        <h1 class="vidTitle"><?php echo $pageDescriptionTitle ?></h1>
        <div class="insertTextWrapper">
            <h2><?php echo $pageDescription ?></h2>
        </div>
    </section>
    <section itemscope itemscope itemtype="http://schema.org/creativeWork/mediaObject/VideoObject" class="video">
        <a id="largeVid" href="https://fast.wistia.net/embed/iframe/myiuexgit2?popover=true" class="wistia-popover[height=467,playerColor=228aa9,width=830]">
        <video id="largeVid" autoplay loop muted>
            <source src="<?php echo get_template_directory_uri(); ?>/thumb.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri(); ?>/thumb.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
        <div class="playVideoButton">
            <i class="fa fa-play-circle-o fa-3x"></i>
            <p>PLAY VIDEO</p>
        </div>
        </a>
        <!--<a id="largeVid" href="https://fast.wistia.net/embed/iframe/myiuexgit2?popover=true" class="wistia-popover[height=467,playerColor=228aa9,width=830]">
        <img id="video" src="<?php echo get_template_directory_uri(); ?>/img/jam1.png">
        <div class="playVideoButton">
            <i class="fa fa-play-circle-o fa-3x"></i>
            <p>PLAY VIDEO</p>
        </div>
        </a>-->
        <a class="mobileStrict" href="https://fast.wistia.net/embed/iframe/myiuexgit2?popover=true" class="wistia-popover[height=360,playerColor=228aa9,width=640]">
        <img id="" src="<?php echo get_template_directory_uri(); ?>/img/videoThumb1.png" alt="video Thumbnail">
        <div class="smallVid playVideoButton">
            <i class="fa fa-play-circle-o fa-3x"></i>
            <p>PLAY VIDEO</p>
        </div>
        </a>
        <img class="smallVid" id="videoMobile" src="<?php echo get_template_directory_uri(); ?>/img/videoThumb1.png" alt="video thumbnail">
        <script charset="ISO-8859-1" src="https://fast.wistia.com/assets/external/popover-v1.js"></script>
            <h2 class="vidTitle">Customer Spotlight <span>Jamerson</span></h2>
            <h1>Jamerson was looking at new ways to make their business more <span>collaborative</span>, streamlined and efficient. Their challenge was finding a solution to work the way they worked and keep them organized. The simplicity of SherpaDesk, the ease of logging time, and out-of-the-box integration into <span>FreshBooks</span> allowed them to do this with one complete solution.</h1>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row mid-section">
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/timeSS.png" alt="screen shot of the app">
                </div>
                <div class="col-sm-6">
                    <h2>Track Time Across Your Business</h2>
                    <h3>Log time from anywhere in the solution: against active projects, accounts, or support issues.  On the go? No problem, record time directly from your email inbox.</h3>
                </div>
            </div>
            <div class="row mid-section">
                <div class="col-sm-6">
                    <h2>Automatically Generate Invoices</h2>
                    <h3>All time entries can automatically be pushed to an invoice and sent to your customer.  Custom rate plans help accommodate unique payment arrangements, so you spend less time doing the math on how to charge a customer.  Out of the box integrations are available for a variety of third-party accounting solutions.</h3>
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ticketsSS.png" alt="screen shot of the app">
                </div>
            </div>
            <div class="row mid-section">
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/invoiceSS.png" alt="screen shot of the app">
                </div>
                <div class="col-sm-6">
                    <h2>Make Smarter Decisions</h2>
                    <h3>Cloud-based, smart filtering technology intelligently maps hours-worked to a variety of business functions. Built on top of a robust help-desk solution, this filtering allows our customers to make data-driven decisions around staffing, offer visibility to their customers and ensure they get paid for services provided.</h3>
                </div>
            </div>
        </div>
    </section>

    <section  itemtype="http://schema.org/product" class="mobile full-width">
        <h1>Stay in Touch with Customers <span>24/7</span></h1>
        <div class="mobileWrapper">
            <div class="mobileText">
                <h3 id="mobileH3"><span>SherpaDesk Tote</span> allows you and your team to stay connected to your
                customers whether you are in the field, on the road, or simply do not feel like firing up your computer.
                 Our mobile app lets you manage support tickets, track time, and send invoices from the palm of
                 your hand.</h3>

                <div class="appStoreWrapper mobileHide">
                    <a target="_blank" href="https://itunes.apple.com/us/app/sherpadesk-tote/id766614805?mt=8">
                <img class="appStore" src="<?php echo get_template_directory_uri(); ?>/img/apple.png">
                </a>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.sherpadesk.mobile&hl=en">
                <img class="appStore" src="<?php echo get_template_directory_uri(); ?>/img/googleplay.png">
                </a>
                </div>
            </div>
            <div id="phones">
            <ul>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/page1.png"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/page3.png"></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/img/page2.png"></li>
            </ul>
            </div>
            <img class="soloPhone" src="<?php echo get_template_directory_uri(); ?>/img/page1.png">
        </div>
    </section>


    <section class="finalGetStarted full-width">
        <div class="optionWrapper">
            <h1>Start The Climb</h1>
            <a href="/start-your-climb">
            <div id="lastGetStarted">Setup Your HelpDesk</div>
            </a>

            <img class="sherpaGuy" src="<?php echo get_template_directory_uri(); ?>/img/sherpaDesk-logo-final.png" alt="big sherpa guy">
        </div>
    </section>
<?php get_footer(); ?>
    