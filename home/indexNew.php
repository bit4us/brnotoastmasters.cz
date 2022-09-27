<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>

<?php
$json = file_get_contents('../data/common.json');
$json_data = json_decode($json);

?>


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-9N1S1VNPTH"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-9N1S1VNPTH');
  </script>
  <meta charset="utf-8">
  <title>Brno Toastmasters</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Brno Toastmasters Official Home page. Brno Toastmasters offers the possibility to learn how to perform public speaking, how to become a leader and much more. Spoken language: English." name="description">
  <meta content="Brno Toastmasters, public speaking, English public speaking, leadership, learning, training, mentoring" name="keywords">
  <meta content="Marius Terente-Cornescu" name="author">

  <link rel="shortcut icon" href="../microphone34.png">

  <!-- Fonts START -->
  <link
    href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
    rel="stylesheet" type="text/css">
  <!-- Fonts END -->
  <!-- Global styles START -->
  <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END -->
  <!-- Page level plugin styles START -->
  <link href="../assets/pages/css/animate.css" rel="stylesheet">
  <link href="../assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="../assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->
  <!-- Theme styles START -->
  <link href="../assets/pages/css/slider.css" rel="stylesheet">
  <link href="../assets/pages/css/style.css" rel="stylesheet">
  <link href="../assets/pages/css/style-responsive.css" rel="stylesheet">
  <link href="assets/corporate/css/themes/dark-theme.css" rel="stylesheet" id="style-color">
  <!-- <link href="../assets/pages/css/components.css" rel="stylesheet"> -->
  <!-- <link href="../assets/pages/css/themes/light-theme.css" rel="stylesheet" id="theme-link"> -->
  <!-- Theme styles END -->

</head>

<!-- <body class="corporate" style="height: 100vh; margin:0; display: flex; flex-direction: column;"> -->
<body class="corporate">
  <div id="fb-root"></div>

  <!-- Your Chat Plugin code -->
  <!-- <div id="fb-customer-chat" class="fb-customerchat">
  </div>
  
  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "193119594042991");
    chatbox.setAttribute("attribution", "biz_inbox");
  
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v12.0'
      });
    };
  
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script> -->
      <!-- BEGIN STYLE CUSTOMIZER -->
      <div class="color-panel hidden-sm">
        <div class="color-mode-icons icon-color"></div>
        <div class="color-mode-icons icon-color-close"></div>
          <div class="color-mode">
            <p>THEME COLOR</p>
            <ul class="inline">
              <li class="color-white current color-default" data-style="light-theme"></li>
              <li class="color-gray" data-style="dark-theme"></li>
            </ul>
          </div>
        </div>
      </div>
    <!--  END BEGIN STYLE CUSTOMIZER -->
  <!-- BEGIN TOP BAR -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-6 col-sm-6 additional-shop-info">
          <ul class="list-unstyled list-inline">
              <li><a href="https://www.facebook.com/romaniinbrno" target="_blank"><i class="fa fa-facebook"></i>Pagină Români în Brno</a> </li>
              <li><a href="https://www.facebook.com/groups/380069925403900" target="_blank"><i class="fa fa-facebook-square"></i> Grup Români în Brno</a></li>
          </ul>
        </div> -->
        <!-- BEGIN TOP BAR LEFT PART -->
        <div class="col-md-6 additional-shop-info">
          <ul class="list-unstyled list-inline">
            <?php 
              foreach($json_data->LeftTopLinks as $ltLink){
            ?>
              <li>
              <a href="<?=$ltLink->Link?>" target="_blank"><i class="<?=$ltLink->class ?>"></i>
              </a>  
              </li>
            <?php
              }
            ?>
            <!--
            <li>
              <span><a href="https://tmtimer.calebgrove.com/" target="_blank">Timer</a></span>
            </li> -->
          </ul>
        </div>
        <!-- END TOP BAR LEFT PART -->
        <!-- BEGIN TOP BAR MENU -->
        <div class="col-md-6 col-sm-3 additional-nav">
          <ul class="list-unstyled list-inline pull-right">
            <?php 
              foreach ($json_data->RightTopLinks as $rtLink) {
            ?>
              <li>
                <a href="<?=$rtLink->link?>" target="_blank"><i class="<?=$rtLink->class?>"></i> <?=$rtLink->title ?></a>
              </li>
            <?php
              }
            ?>
            <!-- <li><a href="https://ib.fio.cz/ib/transparent?a=2600101541&l=ENGLISH" target="_blank"
                class="hidden">FioBanka</a></li> -->
          </ul>
        </div>
        <!-- END TOP BAR MENU -->
      </div>
    </div>
  </div>
  <!-- END TOP BAR -->

  <!-- BEGIN HEADER -->
  <div class="header">
    <div class="container">
      <a class="site-logo" href="../home">
        <small>Public Speaking Club</small><br/>
        BRNO TOASTMASTERS
      </a>
      <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

      <!-- BEGIN NAVIGATION -->
      <div class="header-navigation pull-right font-transform-inherit">
        <ul>
          <li class="active"><a href="../home">Home</a></li>
          <!-- <li><a href="#">Events</a></li> -->
          <li><a href="../contests">Contests</a></li>
          <li><a href="../club">Our Club</a></li>
          <li><a href="../faq">FAQ</a></li>
        </ul>
      </div>
      <!-- END NAVIGATION -->
    </div>
    <!-- BEGIN BLOCKQUOTE BLOCK -->
    <!-- <div class="container">
      <div class="row quote-v1 margin-top-5 margin-bottom-5" style="background-color: #6fc561;">
        <div class="col-md-9">
          <span style="color: #e45000;"><a href="./contests.html">ONLINE Spring AREA CONTEST C1+C2+C5 <i class="fa fa-calendar"></i> 26 March 2022</a></span>
        </div>
        <div class="col-md-3 text-right" style="padding: 12px 18px;">
          <a class="btn-transparent" href="https://zoom.us/j/95424039963" target="_blank"><i class="fa fa-headphones margin-right-10"></i>Join on ZOOM Now!</a> <br>
          Passcode: 361246
        </div>
      </div>
    </div> -->
    <!-- END BLOCKQUOTE BLOCK -->
  </div>
  <!-- Header END -->
  <!-- BEGIN SLIDER -->
  <div class="page-slider margin-bottom-40">
    <div id="carousel-example-generic" class="carousel slide carousel-slider">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <!-- First slide -->
        <div class="item carousel-item-eight active">
          <div class="container">
            <div class="carousel-position-six text-uppercase text-center">
              <h2 class="margin-bottom-20 animate-delay carousel-title-v5" data-animation="animated fadeInDown">
                Explore the power <br />
                <span class="carousel-title-normal">of your own voice</span>
              </h2>
              <p class="carousel-subtitle-v5 border-top-bottom margin-top-30 margin-bottom-30" data-animation="animated fadeInDown">
                When: Every <?=$json_data->MeetingData->MeetingDay?>, <?=$json_data->MeetingData->MeetingTime?> <br>Where: <a href="<?=$json_data->MeetingData->MeetingAddressMap?>" target="_blank" rel="noopener noreferrer" style="color: #1B8093; font-weight: bold;"><i class="fa fa-globe"></i> <?=$json_data->MeetingData->MeetingPlaceName?></a></p>
              <a class="carousel-btn-green" data-animation="animated fadeInUp"
                href="https://bt.tmclub.eu/profile.php?mode=register&YerThere=true" target="_blank">Join Now!</a>
                <br><br><br>
                <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">
                  This is what you were looking for</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SLIDER -->
  <div class="main">
    <div class="container">
      <!-- BEGIN STEPS -->
      <div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
        <div class="col-md-4 col-sm-4 front-step-col">
          <div class="front-step front-step1">
            <h2>Be our guest</h2>
            <p>Guests are always welcome. They are able to participate in our meetings as Table Topics speakers and a few roles of their choosing.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 front-step-col">
          <div class="front-step front-step2">
            <h2>Have an Ice Breaker</h2>
            <p>As a guest we encourage you to register and prepare your first Ice Breaker. It is the best way to introduce yourself to the club and feel the stage under your feet.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 front-step-col">
          <div class="front-step front-step3">
            <h2>Be one of us</h2>
            <p>Become a member. Choose a pathway and participate actively to becoming a great public speaker and a great leader within our club.</p>
          </div>
        </div>
      </div>
      <!-- END STEPS -->
      <!-- BEGIN SERVICE BOX -->   
      <div class="row service-box margin-bottom-40">
        <div class="col-md-4 col-sm-4">
          <div class="service-box-heading">
            <em><i class="fa fa-location-arrow blue"></i></em>
            <span>Improve public speaking skills</span>
          </div>
          <p>Being afraid of public speaking is a common thing for many people. Brno Toastmasters is the perfect environment to learn to overcome this fear and become a great public speaker</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-box-heading">
            <em><i class="fa fa-check red"></i></em>
            <span>Learn through feedback</span>
          </div>
          <p>Every speech can be improved only by receiving honest and correct feedback. And even feedback is, at the end of the day, still public speaking</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-box-heading">
            <em><i class="fa fa-compress green"></i></em>
            <span>Build your network</span>
          </div>
          <p>With Brno Toastmasters you can become a part of a group of people that are thriving in international contests and connect even further than the club itself</p>
        </div>
      </div>
      <!-- END SERVICE BOX -->
      <!-- BEGIN BLOCKQUOTE BLOCK -->   
      <div class="row quote-v1 margin-bottom-30">
        <div class="col-md-9">
          <span>Brno Toastmasters - part of Toastmasters International organization</span>
        </div>
        <div class="col-md-3 text-right">
          <a class="btn-transparent" href="http://toastmasters.org" target="_blank"><i class="fa fa-globe margin-right-10"></i>Toastmasters.org</a>
        </div>
      </div>
      <!-- END BLOCKQUOTE BLOCK -->
      <!-- BEGIN TABS AND TESTIMONIALS -->
      <div class="row mix-block margin-bottom-40">
        <!-- TABS -->
        <div class="col-md-12 tab-style-1">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-1" data-toggle="tab" >Break the ice</a></li>
            <li><a href="#tab-2" data-toggle="tab">Pathways</a></li>
            <li><a href="#tab-3" data-toggle="tab">Education</a></li>
            <li><a href="#tab-4" data-toggle="tab">Membership</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane row fade in active" id="tab-1">
              <div class="col-md-9 col-sm-9">
                <h2>Sample your first project</h2>
                <p>Take an exciting peek at the first project on your Toastmasters journey - the Ice Breaker. See how projects are structured in Pathways and experience how clear and simple the objectives are to achieve.</p>
                <p>The Ice Breaker is your first opportunity to share something about yourself and your goals with other members of your club. You may want to include the following information in your speech to help club members get to know you:</p>
                <ul>
                  <li>The reason you joined Toastmasters (if a person or incident influenced you to join, share that story)</li>
                  <li>Your communication and leadership goals</li>
                </ul>
                <p><a class="more" href="https://www.toastmasters.org/websiteApps/Pathways/IceBreaker/tm100101/index.html" target="_blank">Start now</a></p>
              </div>
              <div class="col-md-3 col-sm-3">
                  <!-- <a href="../assets/pages/video/ice_breaker_final_cut_071216.mp4" class="fancybox-button fancybox.iframe" title="Icebreaker" data-rel="fancybox-button1"> -->
                    <a href="https://www.youtube.com/embed/nAgeDAjpvqE" class="fancybox-button fancybox.iframe" title="Icebreaker" data-rel="fancybox-button1">
                    <img class="img-responsive" src="../assets/pages/img/tmi/pathways-icebreaker-image.png" alt="">
                  </a>
              </div>
            </div>
            <div class="tab-pane row fade" id="tab-2">
              <div class="col-md-3 col-sm-3">
                <a href="https://www.youtube.com/embed/iv9cKPn0Wpo?autoplay=1&enablejsapi=1" class="fancybox-button fancybox.iframe" title="Pathways" data-rel="fancybox-button2">
                  <img class="img-responsive" src="../assets/pages/img/tmi/pathwaysVideo.jpg" alt="">
                </a>
              </div>
              <div class="col-md-9 col-sm-9">
                <h4>What are pathways?</h4>
                <p class="margin-bottom-10">Toastmasters Pathways learning experience, an exciting, flexible and interactive way to develop your skills and help others in your club develop theirs. Pathways helps you learn communication and leadership skills that you need to succeed.</p>
                <p><a class="more" href="https://www.toastmasters.org/pathways-overview" target="_blank">Read more</a></p>
                <h4>Have you joined us? Are you undecided what Pathway to choose?</h4>
                <p>Toastmasters pathway selection seems to be complicated for some of us. However, don't get scared. There's a smart tool through which you can assess which pathway would fit you best. So you may choose based on your assessment or whatever you'd like. </p>
                <p><a class="more" href="https://www.toastmasters.org/start-pathways/select-your-preference?" target="_blank" >Take assessment here</a></p>
              </div>
              
            </div>
            <div class="tab-pane fade" id="tab-3">
              <p>Education is an important part of every Toastmaster's journey, and it is a critical aspect of all club meetings around the world. Participating in Toastmasters' education programs allows you to gain the valuable practice needed to develop your public speaking, communication, and leadership skills. The safe and supportive environment clubs provide allows you to learn at your own pace in a curriculum that has helped millions meet their personal and professional goals.</p>
              <p><a class="more" href="https://www.toastmasters.org/education" target="_blank">Learn more</a></p>
            </div>
            <div class="tab-pane fade" id="tab-4">
              <p>Joining Toastmasters is easy and affordable. When you become a member, you'll have the support of o8ur club, district and the global organization as you work toward your goals. By becoming a  member you're opening a door towards professional public speaking, towards successful leadership and towards a world of fascinating stories, great lessons and fantastic personal growth. </p>
              <p><a class="more" href="https://www.toastmasters.org/membership/why-toastmasters" target="_blank">Read more</a></p>
            </div>
          </div>
        </div>
        <!-- END TABS -->
      </div>                
      <!-- END TABS -->
      <div class="row margin-bottom-40">
        <div class="tab-content" style="padding:0;">
          <!-- START TAB 1 -->
          <div class="tab-pane active" id="tab_1">
             <div class="panel-group" id="accordion1">
                <div class="panel panel-success">
                   <div class="panel-heading">
                      <h4 class="panel-title">
                         <!-- <a href="#accordion1_1" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle"> -->
                           Membership payment
                         <!-- </a> -->
                      </h4>
                   </div>
                   <div class="panel-collapse collapse in" id="accordion1_1">
                      <div class="panel-body">
                        <p>
                            Payments for membership are to be made via bank transfer to account <b>2600101541 / 2010</b> (FIO BANKA). <br/>
                            Regular payments are made every March and September of the year. For new members who want to join in between those regular payments should contact the Treasurer and the Vice President for Membership of the club to calculate the correct amount to be paid based on the time left until next regular payment schedule.
                        </p>
                        <p>Pay membership via QR Code: </p>
                        <div class="row">
                            <div class="col-md-6">
                              <h3>New Membership</h3>
                              (you have to type the amount after discussing with our officers) <br>
                              <img src="../assets/pages/img/faq/newqrcode.png" alt="New Membership QR Code">
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                              <h3>Renewal Membership</h3>
                              (amount for renewal is already predefined) <br>
                              <img src="../assets/pages/img/faq/renewalqrcode.png" alt="New Membership QR Code">
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
             </div>
          </div>
          <!-- END TAB 3 -->
        </div>
      </div>
    </div>
    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer" style="margin-top: auto;">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col padding-top-10">
            <h2>About us</h2><br/>
            <p>Brno Toastmasters was established in 2008 by a group of enthusiasts with a passion for communication and personal growth. Since the beginning, the club's meetings offered a supportive atmosphere and valuable feedback to people who wanted to overcome the fear of speaking in public or looked to embark on a new leadership challenge.</p>
            <p>Our mission is to develop the new leaders of tomorrow</p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Register with our Club</h2><br/>
            <p>If you'd like to receive emails regarding our meetings and participate, please feel free to <a href="https://bt.tmclub.eu/profile.php?mode=register&YerThere=true" target="_blank">register here</a></p>
            <p>For any questions or more information, please feel free to contact us via the chat available on the side or via email.</p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2><br/>
            <address class="margin-bottom-40">
              <b><?=$json_data->MeetingData->meetingPlaceName?></b><br>
              <?=$json_data->MeetingData->meetingAddress ?> <a href="<?=$json_data->MeetingData->meetingAddressMap ?> target="_blank">(Open in maps)</a><br/>
              We meet every <?=$json_data->MeetingData->meetingDay?> at <?=$json_data->MeetingData->meetingTime?> <?=$json_data->MeetingData->meetingTime?> <br>
              Email: <a href="mailto:<?=$json_data->MeetingData->meetingEmailContact?>"><?=$json_data->MeetingData->meetingEmailContact?></a><br>
              <!-- <i class="fa fa-headphones"></i><span> <a href="http://zoom.us/j/299324505?pwd=RVhRQXRrL1ZpV3hNNnBBVlp3aXF1QT09" target="_blank">Zoom online meeting</a></span><br><br> -->
              <a href="<?=$json_data->MeetingData->meetingFacebookPageLink?>" target="_blank"><h4><i class="<?=$json_data->MeetingData->meetingFacebookPageIcon?>"></i> <?=$json_data->MeetingData->meetingFacebookPageTitle?></h4></a> 
            </address>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2021 © Brno Toastmasters. ALL Rights Reserved. <!-- <a href="javascript:;">Privacy Policy</a> | <a href="javascript:;">Terms of Service</a> -->
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <!-- <div class="col-md-4 col-sm-4">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li></li>
            </ul>  
          </div> -->
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-6 col-sm-6 text-right">
            <p class="powered">Powered by: <a href="http://www.acprim.com" target="_blank">acprim</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->
  </div>

  <!-- <script>
    const btn = document.querySelector(".btn-toggle");
    const theme = document.querySelector("#theme-link");
    const light_theme = "../assets/pages/css/themes/light-theme.css";
    const dark_theme = "../assets/pages/css/themes/dark-theme.css";
    const localStorageTheme = localStorage.getItem("theme")
    if (localStorageTheme == null || localStorageTheme == '') {
      theme.href = light_theme
    }
    else {
      theme.href = localStorageTheme
    }
    btn.addEventListener("click", function (event) {
      // Swap out the URL for the different stylesheets
      if (theme.getAttribute("href") == light_theme) {
        theme.href = dark_theme;
        localStorage.setItem("theme", dark_theme)
      } else {
        theme.href = light_theme;
        localStorage.setItem("theme", light_theme)
      }
      event.preventDefault();
    });
  </script> -->
  <!-- Load javascripts at bottom, this will reduce page load time -->
  <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
  <!--[if lt IE 9]>
  <script src="assets/plugins/respond.min.js"></script>
  <![endif]-->
  <script src="../assets/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
  <script src="../assets/pages/scripts/back-to-top.js" type="text/javascript"></script>
  <!-- END CORE PLUGINS -->

  <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
  <script src="../assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
  <script src="../assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

  <script src="../assets/pages/scripts/layout.js" type="text/javascript"></script>
  <script src="../assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>


  <script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();    
        Layout.initOWL();
        Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
        Layout.initNavScrolling();
    });
</script>
</body>

</html>