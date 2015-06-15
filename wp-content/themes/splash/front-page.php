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
    <script type="text/javascript">
    //     function parallax() {
    //         var titleContainer = document.getElementById('titleContainer');
    //         titleContainer.style.top = (window.pageYOffset / 1/3) + 'px';
    //     }
    //     window.addEventListener('scroll',parallax, false);
    // </script>
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
        <a href="/">
            <div class="navigationLogo">
                <img itemscope itemtype="http://schema.org/product" itemprop="AggregateRating" id="logo" class="whiteLogo" src="<?php echo get_template_directory_uri(); ?>/img/SherpaLogo.png" alt="sherpadesk">
                <img id="logoBlue" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="sherpadesk">
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
    </div>
 <!-- <ul class="headerNav">
    <a href="index.php">
        <li><img itemscope itemtype="http://schema.org/product" itemprop="AggregateRating" id="logo" class="whiteLogo" src="<?php echo get_template_directory_uri(); ?>/img/SherpaLogo.png" alt="sherpadesk">*
            <img id="logoBlue" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="sherpadesk">
        </li>
        </a>
        <li class="regHeaderItem" id="loginHeader">
            <a href="https://support.sherpadesk.com">
            <p>Support</p>
            </a>
        </li>
        <li class="regHeaderItem" id="loginHeader">
            <a href="/pricing">
            <p>pricing</p>
            </a>
        </li>
        <li class="regHeaderItem" id="loginHeader">
            <a href="/blog">
            <p>Blog</p>
            </a>
        </li>
        <li class="regHeaderItem">
            <a href="http://app.sherpadesk.com">
                <p>Log In</p>
            </a>
        </li>
        <li class="regHeaderItem" id="contact">
            <a href="http://www.sherpadesk.com" onclick="return SD_Widget('https://support.sherpadesk.com', 2948);">
            <p id="contactUs">Contact</p>
            </a>
        </li>
        <li>
            <a href="/start-your-climb"><div id="headerButton" class="getStartedButton">Start Free</div>
                <span class="startFreeTab">Start Free</span>
            </a>
        </li>
        <li><i id ="navIcon" class="fa fa-bars fa-2x"></i></li>
    </ul> -->
    <div id="titleContainer" class="titleWrapper" itemscope itemtype="http://schema.org/product">
        <h1 itemprop="description"><?php echo $pageTitle ?></h1>
        <!--<h1><span  class="smallStay">"The </span><span class="huge">Best <span id="damn">Damn</span></span><span class="reg"> IT Support System</span><span class="small"> on the</span><span class="big"> Web!"</span></h1>-->
        <p id="name">- Jon, Micaja I.T.S.</p>
        <div class="subTitleWrapper">
            <ul>
                <a href="#trackTicketSS">
                    <li id="featureOne" itemprop="description">Track Tickets</li>
                </a>
                <a href="#timelogsSS">
                    <li id="featureTwo" itemprop="description">Log Time</li>
                </a>
                <a href="#invoiceSS">
                    <li id="featureThree" itemprop="description">Invoice Customers</li>
                </a>
            </ul>
        </div> 
    </div>
    <div class="header-CTA-container">
    <a href="/start-your-climb">
        <div class="start">Get Started</div> 
    </a>
     <a href="http://www.sherpadesk.com" onclick="return SD_Widget('https://support.sherpadesk.com', 2948);">
       <div class="demo">Request Demo</div>
    </a>
    </div>
    <!-- <a href="/start-your-climb">
        <div  id="headerGetStarted"class="getStartedButton">Get Started </div> 
    </a> -->
   <!--  <a href="http://www.sherpadesk.com" onclick="return SD_Widget('https://support.sherpadesk.com', 2948);">
       <div class="requestDemo getStartedButton">Request Demo</div>
    </a> -->
    <!-- <a href="/start-your-climb">
        <div id="headerGetStarted"class="getStartedButton buttonHide">Get Started </div> </a>
        <div id="headerGetStartedMobile"class="getStartedButton">Get Started </div> </a> -->
    <div class="arrowDown">
        <i class="fa fa-angle-double-down fa-5x"></i>
    </div>
  </header>
    <section class="logos">
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
            <h2 class="vidTitle">Getting Things <span>Done</span></h2>
            <h1>Jamerson was looking at new ways to make their business more <span>collaborative</span>, streamlined and efficient. Their challenge was finding a solution to work the way they worked and keep them organized. The simplicity of SherpaDesk, the ease of use for their clients to create support tickets and the deep integration into <span>FreshBooks</span> allowed them to do this with one complete solution.</h1>
    </section>
    <section class="customers">
        <ul>
            <li>
                
                <img src="<?php echo get_template_directory_uri(); ?>/img/RobbieMedina.png" alt="client picture">
                <div class="customerWrapper">
                <h5>"<span class="sherpaBig">SherpaDesk</span> is simple, scalable and affordable. Improves <center></center>communications between you and the customers you support"</h5>
                </div>
                <h3><span class="nameCusto">Robbie Medina |</span> IT Intelligence Consulting</h3>
                
            </li>
            <li>
                
                <img src="<?php echo get_template_directory_uri(); ?>/img/Scott.png" alt="client picture">
                <div class="customerWrapper">
                <h5>"Besides all the great features its prompt customer support makes it great to work with SherpaDesk"</h5>
                </div>
                <h3 id="jamerson"><span class="nameCusto">Thomas |</span> Jamersan Web Consulting</h3>
                
            </li>
            <li>

                <img src="<?php echo get_template_directory_uri(); ?>/img/Patrick.png" alt="client picture">
                <div class="customerWrapper">
                <h5>"You guys provide great support...honestly, I think you should charge a bit more"</h5>
                </div>
                <h3 class="shortCustomer"><span class="nameCusto">Patrick Christenson |</span> Christenson Communities</h3>
                
            </li>
        </ul>
    </section>
    <section class="pageBreak">
        <div class="pageBreakWrapper">
        <h1>First 4 Techs are Free</h1>
        <h1 class="pageBreakSmallText">Why not try it now?</h1>
        </div>
        <a href="/start-your-climb">
        <div id="pageBreakGetStarted" class="getStartedButton">Start Supporting Customers</div>
        </a>
    </section>
    <section itemtype="http://schema.org/product" class="screenShot">
        <ul>
            
            <li class="medDisplay SSText mobileOnly">
                <h2>Centralize and manage all client issues</h2>
                <h3>Support issues are able to be generated and routed to the right technician via email or through your company portal making sure each issue is properly assigned</h3>
            </li>
            <li class="ssImage float-shadow screenShotImgLi">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ticketsSS.png" alt="screen shot of the app">
            </li>
            <li class="SSText mobileHide textLi addTicketTag">
                <h2>Centralize and manage all client issues</h2>
                <h3>Support issues are able to be generated and routed to the right technician via email or through your company portal making sure each issue is properly assigned</h3>
            </li>
            <li class="SSText textLi addTimeTag">
                <h2 id="midScreenShot">Keep accurate time logs across your team</h2>
                <h3>Technicians are able to log time against projects and support issues to give you detailed information on how much time and costs are being allocated to your clients</h3>
            </li>
            <li class="ssImage float-shadow screenShotImgLi">
                <img src="<?php echo get_template_directory_uri(); ?>/img/timeSS.png" alt="screen shot of the app">
            </li>
            <li class="mobileHide ssImage float-shadow addInvoiceTag">
                <img src="<?php echo get_template_directory_uri(); ?>/img/invoiceSS.png" alt="screen shot of the app">
            </li>
            <li class="SSText textLi">
                <h2>Send invoices quickly and track payments</h2>
                <h3>Custom rate plans allow you to easily allocate all time entries so that you can get invoices out to your customers and get your technicians paid on time</h3>
            </li>
            <li class="medDisplay ssImage  float-shadow">
                <img src="<?php echo get_template_directory_uri(); ?>/img/invoiceSS.png" alt="screen shot of the app">
            </li>
        </ul>
    </section>
    <section  itemtype="http://schema.org/product" class="mobile">
        <h1>Stay in Touch with Customers <span>24/7</span></h1>
        <div class="mobileWrapper">
            <div class="mobileText">
                <h3 id="mobileH3"><span>SherpaDesk Tote</span> allows you to provide awesome customer support away from your desk while you are out in the field. The mobile application allows you flexibility to create new tickets, track time, send invoices and close out requests all from your smart phone</h3>
                <h3 class="mobileStrict">It's a little bit of<span> support love</span> in your pocket</h3>
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
    <section itemtype="http://schema.org/Offer" class="pricing">
        <div class="priceBlock">
            <a href="/start-your-climb">
            <div id="free" class="free">
                <h1>FREE</h1>
                <h2>$0<sup>.00</sup></h2>
                <h3>per month</h3>
                <h4>4 Agents / Techs</h4>
                <h4>3 Accounts</h4>
                <h4>3 Projects</h4>
                <div class="priceButton shrink">Get Started</div>
                </a>
            </div>
            <div class="or">
                <h1>OR</h1>
            </div>
            <a href="/pricing">
            <div class="custom">
                <span id="customInfo">
                <h1>CUSTOM</h1>
                <h2>$9<sup>.95</sup></h2>
                <h3>per tech / per month</h3>
                <h4> 5 or more Agents / Techs</h4>
                <h4>Accounts</h4>
                <h4>Invoices</h4>
                <!-- <a class="point"href="#"> -->
                    <div id="tweak" class="shrink" >Tweak This Plan</div>
                </a>           
                </span>
                <span class="calc">
                        <ul class="calcWrapper">
                            <li>
                                <h5 class="negMargin">Techs on your Team</h5>
                                <input type="range" name="points" id="techs" value="1" min="0" max="25" data-show-value="true">
                                <label id="techValue">4</label>
                                <h5>Assets</h5>
                                <input type="range" name="points" id="assets" value="0" min="0" max="100" data-show-value="true">
                                <label id="assetsValue">25</label>
                                <h5>Number of Offices</h5>
                                <input type="range" name="points" id="locations" value="0" min="0" max="25" data-show-value="true">
                                <label id="locationsValue">4</label>
                                <h5>Accounts to Maintain</h5>
                                <input type="range" name="points" id="accounts" value="0" min="0" max="100" data-show-value="true">
                                <label id="accountsValue">3</label>
                                <h5>Projects or Task</h5>
                                <input type="range" name="points" id="projects" value="0" min="0" max="100" data-show-value="true">
                                <label id="projectsValue">3</label>
                                <h5>Data Storage by gb</h5>
                                <input type="range" name="points" id="storage" value="0" min="0" max="25" data-show-value="true">
                                <label id="storageValue">1</label>
                                <ul class="buttonList">
                                    <li>
                                        <div data-id="directory" class="outerCircle">
                                            <div class="innerCircle"></div>
                                        </div>
                                        <h4 class="regTop">Active Directory</h4>
                                    </li>
                                    <li>
                                        <div data-id="http" class="outerCircle">
                                            <div class="innerCircle"></div>
                                        </div>
                                        <h4 class="slightTop">HTTP/SSL</h4>
                                    </li>
                                    <li>
                                        <div data-id="invoice" class="outerCircle">
                                            <div class="innerCircle leftInner"></div>
                                        </div>
                                        <h4 class="slightTop">Invoices</h4>
                                    </li>
                                    <li>
                                        <div data-id="remote" class="outerCircle">
                                            <div class="innerCircle"></div>
                                        </div>
                                        <h4 class="regTop">Remote Assistance</h4>
                                    </li>

                                </ul>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <h6 class="priceTage">Monthly</h6>
                                <p id="monthPrice">Free</p>
                                <h6 class="subMetric">Efficiency of switching from Gmail support </h6>
                                <p class="effciency" id="metricValue">17%</p>
                                <h6 class="subMetric">Percentage of unhappy customers</h6>
                                <p id="metricValueTwo" class="average">24%</p>
                                <p id="monthPrice" class="borderBottom"></p>
                                <span id="graphHere"></span>
                                
                            <span class="colorBox" id="eff"></span>
                            <span class="colorBanner"> Support Effciency</span>
                            <span class="colorBox" id="av"></span>
                            <span class="colorBanner">Average Ticket Time</span>
                            </li>
                        </ul>
                </span>
            </div>
        </div>
    </section>
    <section class="letter">
        <h1>Letter From <span>Patrick</span></h1>
        <p>CEO, SherpaDesk</p>
        <p>By now I hope you got at least a snapshot of what SherpaDesk is all about and what we are trying to do to help the IT support community.  
Jon and I started our first IT company as a network integration and support organization.  We were providing IT services to government and small businesses that needed some level of managed services.  As our business grew, we needed a support solution that would not only help us track customer requests, but also allow us to keep up accurate time logs and get invoices out quickly.<br>  
<br>
We couldn’t find anything out there that catered specifically to personal service firms that need to track support, log time and then get an itemized invoice to our customers. We just knew there had to be a better way than trying to mash up a bunch of different systems.
This is why we felt there was such a demand for SherpaDesk.  The main reason was because we needed it ourselves!<br>
<br>
SherpaDesk is a simple and powerful tool that helps growing IT businesses easily manage their customer’s relationship.  We developed it with direct feedback from like-minded support organizations with the sole purpose of providing awesome support.<br>
<br>
Simple, easy to try out and affordable were some of the main guidelines we followed so that we could allow all small to medium sized companies to give SherpaDesk a try.
Even though we no longer provide IT support services, we still identify with their needs.  We are excited about our progress with SherpaDesk to date and look forward to continually working with our amazing customers to build the solution they need.
<br>
<br>If you haven’t tried it out, go for it.  It’s free to use.  For some smaller companies it’s free to use for life! 
It is way more important for us to get you a solution that works for you the way you need it to work then have you buy something that only ‘sort of’  works.<br>
<br>
Thanks again for giving us a look!
<br>
</p>
<img class="pat" src="<?php echo get_template_directory_uri(); ?>/img/pat.png" alt="patrick clements">
<img src="<?php echo get_template_directory_uri(); ?>/img/pat.jpg">


    </section>
    <section class="finalGetStarted">
        <div class="optionWrapper">
            <h1>Start The Climb</h1>
            <a href="/start-your-climb">
            <div id="lastGetStarted">Setup Your HelpDesk</div>
            </a>

            <img class="sherpaGuy" src="<?php echo get_template_directory_uri(); ?>/img/sherpaDesk-logo-final.png" alt="big sherpa guy">
        </div>
    </section>
    <?php get_footer(); ?>
    