<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>

<?php
$pagename = "club";
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
                            Our Club organization <br>
                            and <br>
                            meeting roles<br/>
                            <span class="carousel-title-normal"></span>
                        </h2>
                        <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">Lead with confidence!</p>
                        <h2 class="">

                        </h2>
                        <!-- <a class="carousel-btn-green" data-animation="animated fadeInUp" href="https://tmclub.eu/profile.php?mode=register&YerThere=true" target="_blank">Join Now!</a> -->
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
          <h1>Meet our club</h1>
          <div class="content-page">
            <div class="row">
              <div class="alert alert-info">
                <p>
                  <strong>Brno Toastmasters club</strong> is organized on the same basis as every other Toastmasters International club. All club members are eligible for candidating once a year for one position as a club officer. The officer roles are described below.<br/>
                  During meetings, members are encouraged to select a meeting role for which everyone prepares based on the role description presented below.
                </p>
             </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <ul class="tabbable faq-tabbable">
                  <li><a href="#tab_1" data-toggle="tab">Officers Roles</a></li>
                  <li class="active"><a href="#tab_2" data-toggle="tab">Meeting Roles</a></li>
                </ul>
              </div>
              <div class="col-md-9 col-sm-9">
                  <div class="tab-content" style="padding:0; background: #fff;">
                    <!-- START TAB 0 -->
                    <div class="tab-pane" id="tab_1">
                      <div class="panel-group" id="accordion1">
                         <div class="panel panel-success">
                            <div class="panel-heading">
                               <h4 class="panel-title">
                                     <a href="#accordion1_1" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                      Club President
                                     </a>
                               </h4>
                            </div>
                            <div class="panel-collapse collapse" id="accordion1_1">
                               <div class="panel-body">
                                     <p>The President serves as the Chief Executive Officer and is responsible for general supervision and operation of the club. The President presides at club meetings and leads the executive committee in planning and accomplishing club responsibilities and goals. In coordination with other club officers, the President is responsible for submission of the club's semi- annual membership report to World Headquarters. The President is the principal communicator to Toastmasters International.</p>
                                     <p>Specific duties:</p>
                                     <ul>
                                       <li>Plans and follow-ups on goals set by club.</li>
                                       <li>Ensures that officer changes and membership renewals are send to World Headquarters in time.</li>
                                       <li>Encourages all officers to go to training and give information when and where the training sessions are held.</li>
                                       <li>Informs members about workshops, contests and other events in the District.</li>
                                       <li>Goes to autumn and/or spring conference to vote on District issues. Arranges a proxy if unable to attend.</li>
                                     </ul>
                                      <div class="alert alert-info">
                                        <p>
                                          For Toastmasters international description of the President role <strong><a href="https://toastmasterscdn.azureedge.net/medias/files/department-documents/club-documents/club-officer-training-materials/president-manual.pdf" target="_blank">check the oficial document</a></strong> 
                                        </p>
                                     </div>
                               </div>
                            </div>
                         </div>
                         <div class="panel panel-default">
                               <div class="panel-heading">
                               <h4 class="panel-title">
                                     <a href="#accordion1_2" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                      Immediate Past President
                                     </a>
                               </h4>
                               </div>
                               <div class="panel-collapse collapse" id="accordion1_2">
                                  <div class="panel-body">
                                      <p>The IPP provides guidance and serves as a resource to club officers and members. The IPP chairs the Nominating Committee, assists in the preparation of the Club Success Plan and promotes the club's efforts to become a Distinguished Club. The IPP attends all Club Officer's Meeting and has an active voice in all decisions made.</p>
                                  </div>
                               </div>
                         </div>
                         <div class="panel panel-success">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#accordion1_3" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                Vice President of Education
                              </a>
                            </h4>
                            </div>
                            <div class="panel-collapse collapse" id="accordion1_3">
                            <div class="panel-body">
                              <p>The VPE is responsible for planning successful club meetings which provide each member the opportunity to achieve his or her educational goals.</p>
                              <p>Specific duties:</p>
                              <ul>
                                <li>Schedules the agendas.</li>
                                <li>Finds out and monitors each member's needs and schedules accordingly.</li>
                                <li>Signs member's manuals, updates member progress charts and reports educational program completion to World Headquarters.</li>
                                <li>Coordinates with each week's Toastmaster and provides the necessary information such as who has an assigned duty, provides email addresses for the people with upcoming duties, and gives the future Toastmaster a sample agenda to follow.</li>
                                <li>Ensures that a new member receives orientation to Club procedures and the Toastmasters educational programme and is assigned a Mentor if desired.</li>
                                <li>In the absence of the President, the VPE presides at Club and Committee meetings.</li>
                                <li>Goes to autumn and/or spring conference to vote on District issues. Arranges a proxy if unable to attend.</li>
                              </ul>
                              <div class="alert alert-info">
                                <p>
                                  For Toastmasters international description of the Vice President of Education role <strong><a href="https://toastmasterscdn.azureedge.net/medias/files/department-documents/club-documents/club-officer-training-materials/vice-president-education-manual.pdf" target="_blank">check the oficial document</a></strong> 
                                </p>
                             </div>
                            </div>
                            </div>
                         </div>
                         <div class="panel panel-success">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#accordion1_4" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                                Vice President of Membership
                              </a>
                            </h4>
                            </div>
                            <div class="panel-collapse collapse" id="accordion1_4">
                            <div class="panel-body">
                              <p>The VPM plans, organises and implements an on-going marketing effort to maintain or increase the Club membership level. This involves enticing guests to join and encouraging existing members to stay.</p>
                              <p>Specific duties:</p>
                              <ul>
                                <li>Maintains attendance records and an accurate membership roster.</li>
                                <li>Records the names and contact details of all guests, and follows up with them after the meeting.</li>
                                <li>Asks guests to join.</li>
                                <li>Helps each new member to fill in the Membership Application form and gives it to the Treasurer. The form can be downloaded at <a href="http://www.toastmasters.org/memberapp.aspx" target="_blank">http://www.toastmasters.org/memberapp.aspx</a> and printed double-sided with the setting 'flip on long edge'.</li>
                                <li>Arranges for each new member to pay the correct joining fee.</li>
                                <li>Provides recognition of Toastmasters who contribute to the increase of club membership.</li>
                                <li>Informs World Headquarters of any member's change in contact details. The easiest way to do this is on the Club Business section of the TI website at <a href="http://www.toastmasters.org" target="_blank">http://www.toastmasters.org</a></li>
                                <li>If the Club uses easy-Speak, enters new member details on it.</li>
                              </ul>
                            <div class="alert alert-info">
                              <p>
                                For Toastmasters international description of the Vice President of Membership role <strong><a href="https://toastmasterscdn.azureedge.net/medias/files/department-documents/club-documents/club-officer-training-materials/vice-president-membership-manual.pdf" target="_blank">check the oficial document</a></strong> 
                              </p>
                           </div>
                          </div>
                            </div>
                         </div>
                         <div class="panel panel-success">
                          <div class="panel-heading">
                          <h4 class="panel-title">
                            <a href="#accordion1_5" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                              Vice President Public Relations
                            </a>
                          </h4>
                          </div>
                          <div class="panel-collapse collapse" id="accordion1_5">
                          <div class="panel-body">
                            <p>The VPPR develops, implements and administers a programme that maintains a positive image of Toastmasters for all members, guests and the general public. This officer is responsible for internal and external public relations for the club, with the ultimate goal of attracting the maximum number of guests to meetings.</p>
                            <p>Specific duties:</p>
                            <ul>
                              <li>Prepares and distributes news releases regarding club activities and publicising club events.</li>
                              <li>Works with club officers to develop club-specific material to be given to guests along with other more generic Toastmasters public relations material.</li>
                              <li>Ensures the Club web page on this site (and any other website for the Club) is up to date and accurate.</li>
                            </ul>
                          
                          <div class="alert alert-info">
                            <p>
                              For Toastmasters international description of the Vice President Public Relations role <strong><a href="https://toastmasterscdn.azureedge.net/medias/files/department-documents/club-documents/club-officer-training-materials/vice-president-public-relations-manual.pdf" target="_blank">check the oficial document</a></strong> 
                            </p>
                         </div>
                        </div>
                          </div>
                       </div>
                       <div class="panel panel-success">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                          <a href="#accordion1_6" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                            Treasurer
                          </a>
                        </h4>
                        </div>
                        <div class="panel-collapse collapse" id="accordion1_6">
                        <div class="panel-body">
                          <p>The Treasurer is responsible for receiving and disbursing money.</p>
                          <p>Specific duties:</p>
                          <ul>
                            <li>Arranges with the Club's bank to be responsible for the Club's bank account.</li>
                            <li>Notifies members of semi-annual dues payable, collects dues, deposits them in the Club's bank account and submits USD 27.00 for each member to World Headquarters.</li>
                            <li>Collects from a new member the appropriate amount (see 'New Member Fees' file below), deposits it in the Club's bank account and submits the appropriate portion to World Headquarters.</li>
                            <li>Issues receipts for amounts received.</li>
                            <li>Makes all payments promptly.</li>
                            <li>Examines all bank statements and World Headquarters statements and verifies accuracy.</li>
                          </ul>
                        
                        <div class="alert alert-info">
                          <p>
                            For Toastmasters international description of the Treasurer role <strong><a href="https://toastmasterscdn.azureedge.net/medias/files/department-documents/club-documents/club-officer-training-materials/treasurer-manual.pdf" target="_blank">check the oficial document</a></strong> 
                          </p>
                       </div>
                      </div>
                        </div>
                     </div>
                     <div class="panel panel-success">
                      <div class="panel-heading">
                      <h4 class="panel-title">
                        <a href="#accordion1_7" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                          Secretary
                        </a>
                      </h4>
                      </div>
                      <div class="panel-collapse collapse" id="accordion1_7">
                      <div class="panel-body">
                        <p>TThe Secretary is responsible for Club records and correspondence, and is custodian of the Club Constitution and By-Laws and all other official Club documents.</p>
                        <p>Specific duties:</p>
                        <ul>
                          <li>Records and provides minutes of Club Officer meetings AND Club business at regular club meetings, too.</li>
                          <li>Provide minutes of when the Treasurer was elected if needed to change the bank mandate to the new Treasurer and President (or other officer).</li>
                          <li>Organises or helps with other administrative tasks - for example, keeping a Club library or arranging the Christmas Dinner.</li>
                        </ul>
                      
                      <div class="alert alert-info">
                        <p>
                          For Toastmasters international description of the Secretary role <strong><a href="https://toastmasterscdn.azureedge.net/medias/files/department-documents/club-documents/club-officer-training-materials/secretary-manual.pdf" target="_blank">check the oficial document</a></strong> 
                        </p>
                     </div>
                    </div>
                      </div>
                   </div>
                   <div class="panel panel-success">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="#accordion1_8" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle collapsed">
                        Sergeant at Arms
                      </a>
                    </h4>
                    </div>
                    <div class="panel-collapse collapse" id="accordion1_8">
                    <div class="panel-body">
                      <p>The S/A makes proper physical arrangements and sets out materials for all club meetings. The S/A serves as master host in welcoming members and guests and ensures that guests receives material provided by the VPM and VPPR.</p>
                      <p>Specific duties:</p>
                      <ul>
                        <li>This officer is responsible for the orderly conduct of the club meeting, including: collection of ballots, tallying of votes and control of club property between meetings.</li>
                        <li>Arrive 10 minutes before Toastmaster meetings and set up the room.</li>
                        <li>Make up nametags for new members. Distribute nametags to guests.</li>
                        <li>Coordinates and implements orders of supplies in support of club activities such as manuals, office supplies, etc.</li>
                        <li>Helps with counting ballots</li>
                      </ul>
                    
                    <div class="alert alert-info">
                      <p>
                        For Toastmasters international description of the Secretary role <strong><a href="https://toastmasterscdn.azureedge.net/medias/files/department-documents/club-documents/club-officer-training-materials/sergeant-at-arms-manual.pdf" target="_blank">check the oficial document</a></strong> 
                      </p>
                   </div>
                  </div>
                    </div>
                 </div>
                     </div>
                    </div>
                    <!-- END TAB 1 -->
                    <!-- START TAB 2 -->
                    <div class="tab-pane active" id="tab_2">
                       <div class="panel-group" id="accordion2">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                             <h4 class="panel-title">
                                <a href="#accordion2_1" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                Toastmaster
                                </a>
                             </h4>
                          </div>
                          <div class="panel-collapse collapse" id="accordion2_1">
                             <div class="panel-body">
                                <p><strong>The main duty of the Toastmaster is to act as the host and make introductions</strong></p>
                                <p>Participants should be introduced in a way that enourages the audience to listen to them. The Toastmaster creates an atmosphere of interest, expectation, and receptivity.
                                Usually this task will not be assigned to you until you are familiar with the Club and its procedures.</p>
                                <p><strong>Before the meeting</strong></p>
                                <p><strong>Check with the Vice President Education</strong> to find out if a special theme has been set for the meeting and if there are any agenda changes.<br/>
                                <!-- <p><strong>Call the Table Topics Master</strong> to discuss his or her duties. Provide the Table Topics Master with a list of agenda participants to ensure these people will not be called on for responses.</p> -->
                                <strong>Call all Speakers in advance</strong> to remind them that they are speaking. Ask for their speech title, manual project number, purpose to be achieved, time requested and something interesting which you can use when introducing them (job, family, hobbies, education, why this topic for this audience etc.).</p>
                                <p><strong>Here's a sample script which you can use by filling in the gaps:</strong></p>
                                <p>
                                  Approach lectern, face audience<br/>
                                  Thank you Mr/Madam Chair, Ladies and Gentlemen, It gives me great pleasure to introduce [speaker's name] who is giving speech [ speech # ] from the Pathway - [ theme ] The title of [ speaker's name ] speech is [ "speech title" ]. The objectives of the speech are [ summarise objectives ]. <br/>
                                  Tonight/Today we are going to find out [ description of talk and reason, connection of topic to speaker, qualifications or experience, special interests, handouts, audience role, level of interest ]. <br/>
                                  The timing for this speech is [ # minutes ] minutes. Please welcome [ speaker's name ] - [ speech title ]. <br/>
                                  {Lead applause and sit down}
                                </p>
                                <p>
                                  Prepare introductions for each Speaker (see above). A proper introduction can add to the success of the Speaker's presentation. <br>
                                  Prepare remarks which can be used to bridge the gaps between programme segments. You may never use them, but you should be prepared to avoid possibly awkward periods of silence. <br>
                                  Remember that performing as Toastmaster is one of the most valuable experiences in your Club work. The assignment requires careful preparation in order to have a smoothly-run meeting. <br>
                                </p>
                                <p><strong>At the meeting</strong></p>
                                <p>
                                  Arrive early in order to finish any last-minute details. <br>
                                  Check with the speakers for any last-minute changes. <br>
                                  In British clubs - sit near the front of the room for quick and easy access to the lectern. <br>
                                  In Irish clubs - you will normally be sitting at the top table. <br>
                                </p>
                                <p><strong>During the meeting</strong></p>
                                <p>Preside with sincerity, energy and decisiveness. Take your audience on a pleasant journey and make them feel that all is going well. <br>
                                  Study the Agenda carefully so that you do not miss any Timekeepers Reports or invitations to vote. <br>
                                  Always lead the applause before and after each presenter. <br>
                                  After your introduction of another presenter, remain standing near the lectern until you have shaken hands - signifying your hand over of control of the meeting - then be seated. <br>
                                  When another presenter has finished, shake hands again to signify that control of the meeting is returning to you. <br>
                                </p>
                                <div class="alert alert-info">
                                  <p>
                                    For more information <strong><a href="https://www.toastmasters.org/membership/club-meeting-roles/toastmaster" target="_blank">check the Toastmasters International general information</a></strong> 
                                  </p>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="panel panel-success">
                             <div class="panel-heading">
                             <h4 class="panel-title">
                                <a href="#accordion2_2" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                Word of the Day
                                </a>
                             </h4>
                             </div>
                             <div class="panel-collapse collapse" id="accordion2_2">
                             <div class="panel-body">
                               <p>Learn a new word every meeting</p>
                               <p>Word of the day assigned member is responsible of chosing one word that all speaking participants should use as often as possible to prove they have understood the meaning of the respective word and that they can use it properly in their own speeches.</p>
                               <p><strong>The word of the day role taker must count the number of times each person uses the respective word and present a repport before the end of the meeting</strong></p>
                             </div>
                             </div>
                       </div>
                       <div class="panel panel-success">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                           <a href="#accordion2_3" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                             Timekeeper
                           </a>
                        </h4>
                        </div>
                        <div class="panel-collapse collapse" id="accordion2_3">
                         <div class="panel-body">
                           <p>The Timekeeper is reponsible for keeping track of time. (The role is also known as the Timer.)</p>
                           <p>One of the skills in speech training is expressing a thought within a specific time. The Timekeeper helps those at the meeting practise this. As well as recording the times, the Timekeeper should regard each report to the meeting as a mini-speech opportunity.</p>
                           <p><strong>Before the meeting</strong></p>
                           <p>
                            Confirm scheduled programme participants with the Toastmaster and General Evaluator. <br>
                            Confirm time required for each prepared speech with the speakers. <br>
                            Write out your explanation in the clearest possible language and rehearse it. For the benefit of guests, be sure to emphasize timing rules and how timing signals will be given.
                           </p>
                           <p><strong>On arrival at the meeting</strong></p>
                           <p>
                            Get timing equipment from the Sergeant at Arms. Be sure you understand how to operate the stopwatch and signal device and make certain that timing equipment works. <br>
                            Sit where the signal device can be seen easily by those at the lecturn.
                           </p>
                           <p><strong>During the meeting</strong></p>
                           <p>
                            When introduced, explain the timing rules and demonstrate the signal device. <br>
                            Throughout the meeting, signal each programme participant as indicated below. In addition, signal the Chairman, Toastmaster and Table Topics Master with red when they have reached their allotted or agreed-upon time. <br>
                            Record each participant's name and time used. <br>
                            When called to report by the Toastmaster, stand by your chair, announce the speaker's name and the time taken. When reporting on the Table Topics timings, remind the audience of the title or subject of each Topic.
                           </p>
                           <p><strong>After the meeting</strong></p>
                           <p>
                            Return the stopwatch and timing signal device to the Sergeant at Arms. Give the completed Timekeeper's report to the Secretary for recording speech times.
                           </p>
                         <div class="alert alert-info">
                           <p>
                             As an online Timekeeping web application you can use: <a href="https://tmtimer.calebgrove.com/" target="_blank">https://tmtimer.calebgrove.com/</a>
                           </p>
                       </div>
                        </div>
                        </div>
                  </div>
                  <div class="panel panel-success">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="#accordion2_4" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                        Prepared Speaker
                      </a>
                    </h4>
                    </div>
                    <div class="panel-collapse collapse" id="accordion2_4">
                      <div class="panel-body">
                        <p><strong>Overview</strong></p>
                        <p>A major portion of each meeting is centered around three or more Prepared Speakers. Speeches typically last from five to seven minutes. Preparation is essential!</p>
                        <div class="alert alert-info">
                          <p>
                            The prepared speaker has to prepare and present his/her speech according to chosen pathway and based on the pathway guides.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-success">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                          <a href="#accordion2_5" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                          Table Topics Master
                          </a>
                    </h4>
                    </div>
                    <div class="panel-collapse collapse" id="accordion2_5">
                    <div class="panel-body">
                      <p>
                      Table Topics are impromptu speeches. The purpose of the Table Topics section is to help members think on their feet and speak on a given subject for between one and two minutes. It also allows speaking opportunities for those who are not programmed for other roles on the Agenda.
                      </p>
                      <p><strong>Before the meeting</strong></p>
                      <p>Draw up a list of Topics. Ideas can be found in The Toastmaster magazine, national papers or websites. Do not repeat the previous meeting</p>
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-success">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                          <a href="#accordion2_6" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                          Evaluator
                          </a>
                    </h4>
                    </div>
                    <div class="panel-collapse collapse" id="accordion2_6">
                    <div class="panel-body">
                      <p>
                        After every Prepared Speech and for each Table Topic the Speaker receives an Evaluation.
                      </p>
                      <p>The Evaluation you present can make the difference between a worthwile or a wasted speech for your Speaker. The purpose of Evaluation is to help the Speaker become less self-conscious and a better Speaker. This requires that you be fully aware of the Speaker's skill level, habits and mannerisms, as well as his or her progress to date. If the Speaker uses a technique or some gesture that receives a good response from the audience, tell the Speaker so that they will be encouraged to use it again.</p>
                      <p>Record your impressions of the speech. Be as objective as possible and remember that good Evaluations may give new life to discouraged members and poor Evaluations may dishearten members who tried their best. Remember, always give the Speaker specific methods for improving for each recommendation. Begin and end your oral evaluation with encouragement or praise. Don't try to cover too much in your talk - possibly one point on organisation, one on delivery and one on attainment of purpose with a statement about the greatest asset and a suggestion for future improvement. You can cover more points with the Speaker personally after the meeting.</p>
                      <p>Praise a successful speech and specifically tell in which ways it was successful. Don't allow a Speaker to remain unaware of a valuable asset such as a smile, a sense of humour, or a good voice. On the other hand, don't allow the Speaker to remain ignorant of a serious fault or mannerism. Give the Speaker the deserved praise and tactful suggestions in the manner you would like to receive them when you are the Speaker.</p>
                      <p>In a Table Topics Evaluation you should be brief. This is not just because of time limitations, but because there is no point going into detail on aspects that the Speaker has had no time to think about. You should also bear in mind how hard some people find impromptu speaking. For example, someone uncomfortable with Topics who feels a sense of achievement by merely remaining somewhat vertical is going to be disheartened by a thesis on how they could have improved their body language. A suggested Topics Evaluation routine is one commendation, one recommendation then one commendation; each expressed in a nutshell.</p>
                      <p>Above all, in any evaluation... bear in mind that everyone finds naked criticism of their efforts hurtful - not just you!</p>
                      <div class="alert alert-info">
                        <p>
                          Further information on Evaluations from Toastmasters International: <a href="https://toastmasterscdn.azureedge.net/medias/files/department-documents/education-documents/202-effective-evaluation.pdf" target="_blank">https://toastmasterscdn.azureedge.net/medias/files/department-documents/education-documents/202-effective-evaluation.pdf</a> <br>
                          Other information on Evaluations on easySPEAK: <a href="https://tmclub.eu/kb.php?mode=article&k=104" target="_blank">https://tmclub.eu/kb.php?mode=article&k=104</a>
                        </p>
                    </div>
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-success">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                          <a href="#accordion2_7" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                            Sergeant at Arms
                          </a>
                    </h4>
                    </div>
                    <div class="panel-collapse collapse" id="accordion2_7">
                    <div class="panel-body">
                      <p>
                        <strong>Outside the meetings</strong>
                      </p>
                      <p>
                        Ensure the meeting location has been booked <br>
                        Maintain Club equipment in working order and check after every meeting to ensure adequate supplies are available
                      </p>
                      <p><strong>At the meeting</strong></p>
                      <p>Arrange the room at least ten minutes before the meeting begins <br>
                        Make sure the lectern is in place, the lights are set up, the banner is displayed, seats are arranged properly with comments slips and any voting slips on them <br>
                        Make sure name badges are available <br>
                        Greet members and guests and arrange for guests to sit with members <br>
                        Ensure the meeting starts on time <br>
                        Collect voting slips and count votes (if voting applies in your Club)</p>
                    </div>
                    </div>
                  </div>
                  </div>
                    </div>
                    <!-- END TAB 2 -->
                  </div>
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