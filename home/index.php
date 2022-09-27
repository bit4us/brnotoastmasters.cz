<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>

<?php
$pagename = "home";
$json = file_get_contents('../data/common.json');
$json_data = json_decode($json);
$homeJSON = file_get_contents('../data/home.json');
$home_data = json_decode($homeJSON);

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
  <!-- Theme styles END -->

</head>

<!-- <body class="corporate" style="height: 100vh; margin:0; display: flex; flex-direction: column;"> -->
<body class="corporate">
  <?php 
    // include_once "../includes/fb-chat-plugin.php";
  ?>
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
        <p><small><?=$json_data->Logo->small ?></small></p>
        <p><?=$json_data->Logo->title ?></p>
      </a>
      <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

      <!-- BEGIN NAVIGATION -->
      <div class="header-navigation pull-right font-transform-inherit">
        <ul>
          <?php 
            foreach ($json_data->MainMenu as $mainMenu) {
              
          ?>
          <li class="<?=$pagename===$mainMenu->name ? "active" : ""?>"><a href="<?=$mainMenu->href?>"><?=$mainMenu->title?></a></li>
          <?php } ?>
        </ul>
      </div>
      <!-- END NAVIGATION -->
    </div>
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
                When: Every <?=$json_data->MeetingData->meetingDay ?>, <?=$json_data->MeetingData->meetingTime?> <br>Where: <a href="<?=$json_data->MeetingData->meetingAddressMap?>" target="_blank" rel="noopener noreferrer" style="color: #1B8093; font-weight: bold;"><i class="fa fa-globe"></i> <?=$json_data->MeetingData->meetingPlaceName?></a></p>
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
        <?php foreach ($home_data->steps as $step) { ?>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step<?=$step->stepNo?>">
              <h2><?=$step->title?></h2>
              <p><?=$step->content?></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <!-- END STEPS -->
      <!-- BEGIN BLOCKQUOTE BLOCK -->   
      <div class="row quote-v1 margin-bottom-30">
        <div class="col-md-9">
          <span><?=$home_data->blockquote1->title?></span>
        </div>
        <div class="col-md-3 text-right">
          <a class="btn-transparent" href="<?=$home_data->blockquote1->href?>" target="<?=$home_data->blockquote1->target?>"><i class="<?=$home_data->blockquote1->link_class?> margin-right-10"></i><?=$home_data->blockquote1->link_title?></a>
        </div>
      </div>
      <!-- END BLOCKQUOTE BLOCK -->
      <!-- BEGIN SERVICE BOX -->   
      <div class="row service-box margin-bottom-40">
      <?php foreach ($home_data->services as $service) { ?>
        <div class="col-md-4 col-sm-4">
          <div class="service-box-heading">
            <em><i class="<?=$service->class?>"></i></em>
            <span><?=$service->title?></span>
          </div>
          <p><?=$service->content?></p>
        </div>
        <?php } ?>
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
            <li><a href="#tab-5" data-toggle="tab">Contests</a></li>
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
            <div class="tab-pane fade" id="tab-5">
              <p>Speech contests are a Toastmasters tradition. Each year, thousands of Toastmasters compete in the Humorous, Evaluation, Tall Tales, Table Topics and International speech contests. Competition begins with club contests, and winners continue competing through the Area, Division and District levels. Winners of the District level International Speech Contest proceed to the region quarterfinal level. Following region quarterfinals, winners advance to the semifinals for a chance to take part in the World Championship of Public Speaking®.</p>
              <p><a class="more" href="https://www.toastmasters.org/leadership-central/speech-contests" target="_blank">Read more</a></p>
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
            <h2><?=$json_data->Footer1->Title ?></h2>
            <?=$json_data->Footer1->Content ?>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col padding-top-10">
            <h2><?=$json_data->Footer2->Title ?></h2>
            <?=$json_data->Footer2->Content ?>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col padding-top-10">
            <h2><?=$json_data->Footer3->Title ?></h2>
            <address class="margin-bottom-40">
              <p>We meet every <?=$json_data->MeetingData->meetingDay?> at <?=$json_data->MeetingData->meetingTime?> <?=$json_data->MeetingData->meetingTimeZone?></p>
              <h4><small>We meet at </small><?=$json_data->MeetingData->meetingPlaceName?></h4>
              <p><?=$json_data->MeetingData->meetingAddress ?> <a href="<?=$json_data->MeetingData->meetingAddressMap ?> target="_blank">(Open in maps)</a></p>
              <p>Email: <a href="mailto:<?=$json_data->MeetingData->meetingEmailContact?>"><?=$json_data->MeetingData->meetingEmailContact?></a></p>
              <!-- <i class="fa fa-headphones"></i><span> <a href="http://zoom.us/j/299324505?pwd=RVhRQXRrL1ZpV3hNNnBBVlp3aXF1QT09" target="_blank">Zoom online meeting</a></span><br><br> -->
              <p><a href="<?=$json_data->MeetingData->meetingFacebookPageLink?>" target="_blank"><i class="<?=$json_data->MeetingData->meetingFacebookPageIcon?>"></i> <?=$json_data->MeetingData->meetingFacebookPageTitle?></a></p>
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