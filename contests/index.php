<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>

<?php
$pagename = "contests";
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
                      Toastmasters Contests <br/>
                      <span class="carousel-title-normal"></span>
                  </h2>
                  <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">To win is to compete!</p>
                  <!-- <h4 class="margin-bottom-20 animate-delay carousel-title-v2" data-animation="animated fadeInDown">
                    ONLINE <br> Spring AREA CONTEST C1+C2+C5 <br> <i class="fa fa-calendar"></i> 26 March 2022
                  </h4>
                  <a class="carousel-btn-green" data-animation="animated fadeInUp" href="https://zoom.us/j/95424039963" target="_blank">Join via ZOOM Now!</a>
                  <br>Passcode: 361246 -->
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END SLIDER -->
  <div class="main">
    <div class="container">
      <div class="row margin-bottom-40">
        <!-- BEGIN CONTENT -->
        <div class="col-md-12 col-sm-12">
          <div class="content-page">
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <ul class="tabbable faq-tabbable">
                  <li class="active"><a href="#tab_2" data-toggle="tab">Speeches and Evaluation Contest 2022</a></li>
                  <li><a href="#tab_1" data-toggle="tab">Humorous Speeches & Table Topics Contest 2021-2022</a></li>
                </ul>
              </div>
              <div class="col-md-9 col-sm-9">
                  <div class="tab-content" style="padding:0; background: #fff;">
                    <!-- START TAB 2 -->
                    <div class="tab-pane active" id="tab_2">
                      <div class="panel-group" id="accordion2">
                       <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4 class="panel-title">
                                  <a href="#accordion2_1" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                  1. Club Contest
                                  </a>
                                  <a href="#accordion2_1" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                  <span style="float: right;"><i class="fa fa-calendar"></i> 22nd February 2022</span>
                                  </a>
                            </h4>
                         </div>
                         <div class="panel-collapse collapse" id="accordion2_1">
                            <div class="panel-body">
                                  The club contest date has been set! Join us on 22nd February and participate in the contest for best speech and / or best evaluator<br/>
                                  Representatives (winners) from the club will advance to <b>Area level</b> contest <br/><br/>
                                  Speeches Winners: 
                                    <ol>
                                    <li>Marius Terente-Cornescu - will compete in Area Contest</li>
                                    <li>Petr Hrabe - will compete in Area Contest</li>
                                    <li>Barath Patil</li>
                                    <li>Nezar Abo Ghanem</li>
                                    </ol>
                                    Table Topics Winners:
                                    <ol>
                                    <li>Zdenek Glatter - will compete in Area Contest</li>
                                    <li>Petr Hrabe - will compete in Area Contest</li>
                                    </ol>
                            </div>
                         </div>
                      </div>
                      <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                                  <a href="#accordion2_2" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                  2. Area Contest (C5)
                                  </a>
                                  <a href="#accordion2_2" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                  <span style="float: right;"><i class="fa fa-calendar"></i> 26th March 2022</span>
                                  </a>
                            </h4>
                            </div>
                            <div class="panel-collapse collapse" id="accordion2_2">
                             <div class="panel-body">
                               Will be organized by Area directors on the date of 26th March.<br/>
                               One representative (winners) from the Area will compete in the Division level (as there are 5 areas)<br/>
                               There's a <a href="https://docs.google.com/forms/d/e/1FAIpQLSfsI-0v2E2-VcUthHJXxZ4VAb4J8SweQzMj8MHEByihw416JQ/viewform" target="_blank">registration form</a> where winners of the club level have to register but where anyone can contribute in the organization of the contest.<br/>
                               More information is available on <a href="https://www.facebook.com/events/s/spring-area-contest-toastmaste/1685411421806651/" target="_blank"><i class="fa fa-facebook"></i> facebook</a><br/><br/>
                               <!-- Zoom link for the meeting: <a href="https://zoom.us/j/95424039963" target="_blank">https://zoom.us/j/95424039963</a> - Passcode: 361246<br><br> -->
                               <b>AGENDA</b><br/>
                               09:00-09:25 Meet & Greet<br/>
                               <b>Contestants please join latest at 9:10 to allow Contestant briefing to start on time.</b><br>
                               09:10-09:25 Briefing of Contestants & Judges (Breakout Rooms)<br/>
                               09:31 Contest Start<br/>
                               09:31 - 11:05 International Speech Contest C1+C2-C5<br/>
                               11:05 - 11:20 Break<br/>
                               11:20 - 12:30 Evaluation Speech Contest C1+C2+C5<br/>
                               12:30 - 12:40 Break<br/>
                               12:40 Awards & Closing Notes <br/>
                               12:55 Official end of Contest <br>
                               17:00 - 02:00 Brno Toastmasters after party in <a href="https://goo.gl/maps/Uzs3tyYdMdwCGqVw6" target="_blank">UTOPIA</a> - meet for a Cards against humanity game, drinks, food and lots of fun<br/><br/>
                               <b>C5 Area Contest WINNERS</b><br/><br/>
                                 <p>International Speeches</p>
                                 <ol>
                                    <li><b>Tom???? Slez??k</b> - NetSuite Brno Toastmasters (competes in Division Czechia Contest)</li>
                                    <li><b>Marius Terente-Cornescu</b> - Brno Toastmasters</li>
                                    <li><b>Petr Hrab??</b> - Brno Toastmasters</li>
                                 </ol>
                                 <br/>
                                 <p>Evaluations</p>
                                 <ol>
                                    <li><b>Bj??rn Martensson</b> (competes in Division Czechia Contest)</li>
                                    <li><b>Zden??k Glatter</b> - Brno Toastmasters</li>
                                    <li><b>Petr Hrab??</b> - Brno Toastmasters</li>
                                 </ol>
                                 <br/>
                                 <div class="alert alert-info">
                                    <p><strong>Congratulations</strong> and good luck in the next level.</p>
                                 </div>
                            </div>
                            </div>
                      </div>
                      <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                                  <a href="#accordion2_3" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                  3. Division Contest
                                  </a>
                                  <a href="#accordion2_3" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                  <span style="float: right;"><i class="fa fa-calendar"></i> 23rd April 2022</span>
                                  </a>
                            </h4>
                            </div>
                            <div class="panel-collapse collapse" id="accordion2_3">
                            <div class="panel-body">
                              Will be organized by the Division Director with help of others on Saturday 23.10 online in English Language <br/>
                              Two representatives (winners) from the Division will go to <b>District competition</b> (as there are 4 divisions in Easeter Europe District 110) <br/>
                              There's a <a href="https://docs.google.com/forms/d/e/1FAIpQLSfmP-IIhOvMz4C_W2UnQwX_pHyXMiFoi3VW3e9WAPh4dTAfDw/viewform?fbclid=IwAR11Xr-8mRxmNCdwcX9sH4L7FqlO16JIiJIhU8KZXTVAFKRBtFY1K-OQ6H0" target="_blank">registration form</a> where winners of the area level have to register but where anyone can contribute in the organization of the contest.<br/>
                              More information is available on <a href="https://www.facebook.com/events/243648197642250/" target="_blank"><i class="fa fa-facebook"></i> facebook</a><br/><br/>
                              <b>AGENDA</b><br/>
                              8:45	Networking<br/>
                              9:00	Briefing of Contestants/Judges<br/>
                              09:30 Contest Start<br/>
                              09:35 Evaluations Contest<br/>
                              10:25 Interview with the contestants<br/>
                              BREAK<br/>
                              11:00 International Speech Contest<br/>
                              11:20 Interview with the contestants<br/>
                              12:00 Winners Announcement<br/><br/>
                              <b>Division Contest WINNERS</b><br/><br/>
                              <p>International Speeches</p>
                              <ol>
                                  <li><b>Susanna L??hteel??</b></li>
                                  <li><b>Tom???? Slez??k</b></li>
                                  <li><b>Mike Smith</b></li>
                              </ol>
                              <br/>
                              <p>Evaluations</p>
                              <ol>
                                  <li><b>Viktoriia Zhovnovata</b></li>
                                  <li><b>Trevor Smith</b></li>
                                  <li><b>Bjorn Martensson</b></li>
                              </ol>
                              <br/>
                              <div class="alert alert-info">
                                  <p><strong>Congratulations</strong> and good luck in the next level.</p>
                              </div>
                            </div>
                            </div>
                      </div>
                      <div class="panel panel-success">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                                  <a href="#accordion2_4" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                  4. District Contest
                                  </a>
                                  <a href="#accordion2_4" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                  <span style="float: right;"><i class="fa fa-calendar"></i> 13-15 May 2022</span>
                                  </a>
                            </h4>
                            </div>
                            <div class="panel-collapse collapse" id="accordion2_4">
                            <div class="panel-body">
                               The District contest will be scheduled to be held together mid-May on the District conference (that will be probably organized in Czech Republic)<br/>
                               Based on pandemic situation, if possible, it is a chance to have the District CONFERENCE in the week-end 6-7.11.2021 (reason why it would be best to have all contests to that level already over by then)
                               There's a <a href="https://docs.google.com/forms/d/e/1FAIpQLSd_v-4K7rjU_BIWyBmMw-G8F4ERyMHvC1uEbZqV6yY236E_7g/viewform?fbclid=IwAR0TjmopVqKKE6lOIgQj0b_pJxXCLk88yOgpZ17A6DK432mZv-_eEbN3SkY" target="_blank">registration form</a> where winners of the area level have to register but where anyone can contribute in the organization of the contest.<br/>
                               More information is available on <a href="https://www.facebook.com/events/1343826832713813/" target="_blank"><i class="fa fa-facebook"></i> facebook</a><br/><br/>
                                <b>AGENDA</b><br/><br/>
                                <b>FRIDAY</b><br/>
                                17:30	Zoom connecting<br/>
                                18:00	Opening ceremony<br/>
                                18:20 Keynote speech<br/>
                                19:00 TABLE TOPICS SPEECH CONTEST<br/>
                                20:00 Closing day 1<br/>
                                20:20 Online networking activity in groups<br/><br/>
                                <b>SATURDAY</b><br/>
                                08:30	Zoom connecting<br/>
                                09:00	Program starts<br/>
                                09:15 EVALUATION SPEECH CONTEST<br/>
                                10:30 HUMOROUS SPEECH CONTEST<br/>
                                12:00 Lunch Break<br/>
                                13:30 Zoom Connecting<br/>
                                14:00 District Council Meeting<br/>
                                16:30 INTERNATIONAL SPEECH CONTEST<br/>
                                18:00 Online networking activity No. 1<br/>
                                19:00 GALA session, recognitions<br/>
                                20:00 Closing day 2<br/>
                                20:20 Online networking activity No. 2<br/><br/>
                                <b>SUNDAY</b><br/>
                                08:30	Zoom connecting<br/>
                                09:00	Workshop 1<br/>
                                10:00 Workshop 2<br/>
                                11:00 Workshop 3<br/>
                                12:00 Workshop 4<br/>
                                13:00 Closing day 3<br/><br/>
                              </div>
                            </div>
                      </div>
                      </div>
                   </div>
                   <!-- END TAB 2 -->
                    <!-- START TAB 1 -->
                    <div class="tab-pane" id="tab_1">
                      <div class="panel-group" id="accordion1">
                         <div class="panel panel-default">
                            <div class="panel-heading">
                               <h4 class="panel-title">
                                     <a href="#accordion1_1" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                     1. Club Contest
                                     </a>
                                     <a href="#accordion1_1" data-parent="#accordion0" data-toggle="collapse" class="accordion-toggle collapsed">
                                     <span style="float: right;"><i class="fa fa-calendar"></i> 7th September 2021</span>
                                     </a>
                               </h4>
                            </div>
                            <div class="panel-collapse collapse" id="accordion1_1">
                               <div class="panel-body">
                                     One representative (winner) from the club will go to <b>Area level</b> (as we have Areas with 5-6 clubs) <br/><br/>
                                     Humorous Speeches Winners: 
                                     <ol>
                                     <li>Zdenek Glatter - will compete in Area Contest</li>
                                     <li>Marius Terente-Cornescu</li>
                                     </ol>
                                     Table Topics Winners:
                                     <ol>
                                     <li>Petr Hrabe - will compete in Area Contest</li>
                                     <li>Zdenek Glatter</li>
                                     <li>Jan Vozar</li>
                                     </ol>
                               </div>
                            </div>
                         </div>
                         <div class="panel panel-default">
                               <div class="panel-heading">
                               <h4 class="panel-title">
                                     <a href="#accordion1_2" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                     2. Area Contest (C5)
                                     </a>
                                     <a href="#accordion1_2" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                     <span style="float: right;"><i class="fa fa-calendar"></i> 9th October 2021</span>
                                     </a>
                               </h4>
                               </div>
                               <div class="panel-collapse collapse" id="accordion1_2">
                               <div class="panel-body">
                                     Will be organized by Area directors on the date of 9th October.<br/>
                                     One representative (winners) from the Area will compete in the Division level (as there are 5 areas)<br/>
                                     There's a <a href="https://docs.google.com/forms/d/1Q0xCK249Rfl_YlPaQpej3TMydKECUFyvPRNwLVM4-6Q/edit?ts=615cae78" target="_blank">registration form</a> where winners of the club level have to register but where anyone can contribute in the organization of the contest.<br/>
                                     More information is available on <a href="https://www.facebook.com/events/s/online-area-contest-c1c2/583539223059934/" target="_blank"><i class="fa fa-facebook"></i> facebook</a><br/><br/>
                                  <b>AGENDA</b><br/>
                                  09:00-09:30 Meet & Greet<br/>
                                  09:10-09:20 Briefing of Contestants & Judges (Breakout Rooms)<br/>
                                  09:30 Contest Start<br/>
                                  09:30 - 10:45 Humorous Speech Contest C1+C2-C5<br/>
                                  10:45 - 11:00 Break<br/>
                                  11:00 - 12:15 Table Topics Contest C1+C2+C5<br/>
                                  12:15 - 12:20 Break<br/>
                                  12:20 Awards & Closing Notes<br/><br/>
                                  <b>C5 Area Contest WINNERS</b><br/><br/>
                                  <p>Humorous Speeches</p>
                                  <ol>
                                     <li><b>Tom???? Slez??k</b> - NetSuite Brno Toastmasters (competes in Division Czechia Contest)</li>
                                     <li><b>Zd??nek Glatter</b> - Brno Toastmasters</li>
                                  </ol>
                                  <br/>
                                  <p>Table Topics</p>
                                  <ol>
                                     <li><b>Petr Hrab??</b> - Brno Toastmasters - (competes in Division Czechia Contest)</li>
                                     <li><b>Jaroslav Mistr??k</b> - NetSuite Brno Toastmasters</li>
                                  </ol>
                                  <br/>
                                  <div class="alert alert-info">
                                     <p><strong>Congratulations</strong> and good luck in the next level.</p>
                                  </div>
                               </div>
                               </div>
                         </div>
                         <div class="panel panel-default">
                               <div class="panel-heading">
                               <h4 class="panel-title">
                                     <a href="#accordion1_3" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                     3. Division Contest
                                     </a>
                                     <a href="#accordion1_3" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                     <span style="float: right;"><i class="fa fa-calendar"></i> 23rd October 2021</span>
                                     </a>
                               </h4>
                               </div>
                               <div class="panel-collapse collapse" id="accordion1_3">
                               <div class="panel-body">
                                     Will be organized by the Division Director with help of others on Saturday 23.10 online in English Language <br/>
                                     Two representatives (winners) from the Division will go to <b>District competition</b> (as there are 4 divisions in Easeter Europe District 110) <br/>
                                     There's a <a href="https://docs.google.com/forms/d/e/1FAIpQLSfmP-IIhOvMz4C_W2UnQwX_pHyXMiFoi3VW3e9WAPh4dTAfDw/viewform?fbclid=IwAR11Xr-8mRxmNCdwcX9sH4L7FqlO16JIiJIhU8KZXTVAFKRBtFY1K-OQ6H0" target="_blank">registration form</a> where winners of the area level have to register but where anyone can contribute in the organization of the contest.<br/>
                                     More information is available on <a href="https://www.facebook.com/events/243648197642250/" target="_blank"><i class="fa fa-facebook"></i> facebook</a><br/><br/>
                                  <b>AGENDA</b><br/>
                                  8:45	Networking<br/>
                                  9:00	Briefing of EN Hum + TT Contestants/Judges<br/>
                                  09:30 Contest Start<br/>
                                  09:35 Humorous Speech Contest<br/>
                                  10:25 Interview with the contestants<br/>
                                  BREAK<br/>
                                  11:00 Table Topics Contest<br/>
                                  11:20 Interview with the contestants<br/>
                                  12:00 Winners Announcement<br/><br/>
                                  <b>Division Contest WINNERS</b><br/><br/>
                                  <p>Humorous Speeches</p>
                                  <ol>
                                     <li><b>Susanna L??hteel?? (<i>1 to 15 years</i>)</b> - C3 - S.E.A. Sharks of ExxonMobil Association</li>
                                     <li><b>Tom???? Slez??k (<i>Life begins at 40!</i>)</b> - C5 - NetSuite Brno Toastmasters</li>
                                     <li><b>Georgi Burlakov (<i>Constructive, memorable, encouraging</i>)</b> - C4 - PwC Prague Toastmasters</li>
                                  </ol>
                                  <br/>
                                  <p>Table Topics</p>
                                  <ol>
                                     <li><b>Susanna L??hteel??</b> - C3 - S.E.A. Sharks of ExxonMobil Association</li>
                                     <li><b>Manish Sahijwani</b> - C1 - Goood Morning Toastmasters</li>
                                     <li><b>Viktoriia Zhovnovata</b> - C4 - Barclays Prague Toastmasters</li>
                                  </ol>
                                  <br/>
                                  <div class="alert alert-info">
                                     <p><strong>Congratulations</strong> and good luck in the next level.</p>
                                  </div>
                               </div>
                               </div>
                         </div>
                         <div class="panel panel-success">
                               <div class="panel-heading">
                               <h4 class="panel-title">
                                     <a href="#accordion1_4" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                     4. District Contest
                                     </a>
                                     <a href="#accordion1_4" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                     <span style="float: right;"><i class="fa fa-calendar"></i> 13-15 May 2022</span>
                                     </a>
                               </h4>
                               </div>
                               <div class="panel-collapse collapse" id="accordion1_4">
                                <div class="panel-body">
                                  The District contest will be scheduled to be held together mid-May on the District conference (that will be probably organized in Czech Republic)<br/>
                                  Based on pandemic situation, if possible, it is a chance to have the District CONFERENCE in the week-end 6-7.11.2021 (reason why it would be best to have all contests to that level already over by then)
                                  There's a <a href="https://docs.google.com/forms/d/e/1FAIpQLSd_v-4K7rjU_BIWyBmMw-G8F4ERyMHvC1uEbZqV6yY236E_7g/viewform?fbclid=IwAR0TjmopVqKKE6lOIgQj0b_pJxXCLk88yOgpZ17A6DK432mZv-_eEbN3SkY" target="_blank">registration form</a> where winners of the area level have to register but where anyone can contribute in the organization of the contest.<br/>
                                   More information is available on <a href="https://www.facebook.com/events/1343826832713813/" target="_blank"><i class="fa fa-facebook"></i> facebook</a><br/><br/>
                                   <b>AGENDA</b><br/><br/>
                                   <b>FRIDAY</b><br/>
                                   17:30	Zoom connecting<br/>
                                   18:00	Opening ceremony<br/>
                                   18:20 Keynote speech<br/>
                                   19:00 TABLE TOPICS SPEECH CONTEST<br/>
                                   20:00 Closing day 1<br/>
                                   20:20 Online networking activity in groups<br/><br/>
                                   <b>SATURDAY</b><br/>
                                   08:30	Zoom connecting<br/>
                                   09:00	Program starts<br/>
                                   09:15 EVALUATION SPEECH CONTEST<br/>
                                   10:30 HUMOROUS SPEECH CONTEST<br/>
                                   12:00 Lunch Break<br/>
                                   13:30 Zoom Connecting<br/>
                                   14:00 District Council Meeting<br/>
                                   16:30 INTERNATIONAL SPEECH CONTEST<br/>
                                   18:00 Online networking activity No. 1<br/>
                                   19:00 GALA session, recognitions<br/>
                                   20:00 Closing day 2<br/>
                                   20:20 Online networking activity No. 2<br/><br/>
                                   <b>SUNDAY</b><br/>
                                   08:30	Zoom connecting<br/>
                                   09:00	Workshop 1<br/>
                                   10:00 Workshop 2<br/>
                                   11:00 Workshop 3<br/>
                                   12:00 Workshop 4<br/>
                                   13:00 Closing day 3<br/><br/>
                                 </div>
                               </div>
                         </div>
                     </div>
                    </div>
                    <!-- END TAB 1 -->
                    
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="alert alert-danger">
                <p><strong>How can I participate?</strong> For the rules regarding participation you may access the official information <a href="https://www.toastmasters.org/leadership-central/speech-contests" target="_blank">here</a> </p>
             </div>
            </div>
          </div>
        </div>
        <!-- END CONTENT -->
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
            2021 ?? Brno Toastmasters. ALL Rights Reserved. <!-- <a href="javascript:;">Privacy Policy</a> | <a href="javascript:;">Terms of Service</a> -->
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