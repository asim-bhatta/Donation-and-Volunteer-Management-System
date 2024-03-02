<?php
    session_start();
    require 'admin/CRUD/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>LCK Everest Sunshine</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         
      </div><nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"><a href="index.html"><img src="images/leo.ico"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="admin/login_system/login_form.php">Donate</a>
                  </li>
                  <!-- <li class="nav-item">
                     <a class="nav-link" href="contact.html">Contact Us</a>
                  </li> -->
                  <li class="nav-item">
                     <a class="nav-link" href="events.html">Events</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#mission">Our Mission</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="admin/login_system/logout.php">Logout</a>
                  </li>
                  <!-- <li class="nav-item">
                     <a class="nav-link" href="admin/login_system/register_form.php">Become A Volunteer</a>
                  </li> -->
               </ul>
               <form class="form-inline my-2 my-lg-0">
               <button class="donate_btn"><a href="admin/login_system/volunteer-registerform.php">Volunteer Now</a></button>
               </form>
            </div>
         </nav>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <h1><i>Online fundraising for Child & Old Age Care.</i></h1>
                  <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> -->
                  <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> -->
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                        <div class="container">

                  
                           <h1 class="banner_taital">Welcome Volunteer!</h1>
                           <p class="banner_text"> </p>
                           <!-- <div class="read_bt"><a href="#">Read More</a></div> -->
                        </div>
                     </div>
                  </div>
                  <!-- <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">Help Poor Child</h1>
                        <p class="banner_text">Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going </p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div> -->
                  <!-- <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">Help Poor Child</h1>
                        <p class="banner_text">Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going </p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">Help Poor Child</h1>
                        <p class="banner_text">Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going </p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">Help Poor Child</h1>
                        <p class="banner_text">Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going </p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="donation_box">
            <h4 class="donation_taital">Contact For Donation</h4>
            <div class="mail_box">
               <input type="" class="mail_text" placeholder="Your Name" name="Your Name">
               <input type="" class="mail_text" placeholder="Email" name="Email">
               <input type="" class="mail_text" placeholder="Phone" name="Phone">
            </div>
            <div class="send_bt"><a href="#">Send</a></div>
         </div>
         <div class="fundraise_section">
            <div class="fundraise_section_main">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="box_main">
                        <div class="icon_1"><img src="images/icon-1.png"></div>
                        <h4 class="volunteer_text">VOLUNTEERS</h4>
                        <p class="lorem_text">Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                        <div class="join_bt"><a href="#">Join Now</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="box_main active">
                        <div class="icon_1"><img src="images/icon-2.png"></div>
                        <h4 class="volunteer_text">FUNDRAISE</h4>
                        <p class="lorem_text">Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                        <div class="join_bt"><a href="#">Join Now</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="box_main">
                        <div class="icon_1"><img src="images/icon-3.png"></div>
                        <h4 class="volunteer_text">DONATION</h4>
                        <p class="lorem_text">Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                        <div class="join_bt"><a href="#">Join Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div> -->
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <a id = "about"></a> 
         <div class="container">
            <div class="row">
               <div class="col-sm-8">
                  <h2 class="about_taital">about Leo Club Of Kathmandu Everest Sunshine</h2>
                  <p class="about_text">Leo Club Of Everest Sunshine is a nonprofit that supports other nonprofits by connecting them to donors and companies. Since 2002, we've helped trusted, community-led organizations from Mechi to Mahakali (and hundreds of places in between) access the tools, training, and support they need to make our world a better place.
                    
                  </p>
                  <!-- <div class="readmore_bt"><a href="#">Read more</a></div> -->

               </div>
               <div class="col-sm-4">
                  <div class="about_img"><img src="images/girl.jpg"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- mission section start -->
      <div class="mission_section layout_padding">
      <a id = "mission"></a> 
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="mission_taital">Mission causes</h1>
                  <p class="mission_text">Our impact goes beyond moving money to where it’s needed most; it’s also about putting communities in the driver’s seat of change and shifting power to transform the way aid and philanthropy work. </p>
               </div>
            </div>
         </div>
         <div class="mission_section_2">
            <div class="row">
               <div class="offset-md-2"></div>
               <div class="col-md-5">
                  <div class="container_main">
                     <img src="images/old3.jpg" alt="Avatar" class="image">
                     <!-- <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">whichalteration in some </h4>
                           <p class="alteration_text">Alteration in some form, by injected humour, or randomised words whichalteration in some form, by injected humour, or randomised words which</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#">Read More</a></div>
                              <div class="donate_bt"><a href="donate.html">Donate Now</a></div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="container_main">
                     <!-- <img src="images/img-2.png" alt="Avatar" class="image"> -->
                     <!-- <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">whichalteration in some </h4>
                           <p class="alteration_text">Alteration in some form, by injected humour, or randomised words whichalteration in some form, by injected humour, or randomised words which</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#">Read More</a></div>
                              <div class="donate_bt"><a href="donate.html">Donate Now</a></div>
                           </div>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="mission_section_2">
            <div class="row">
               <div class="col-md-5">
                  <div class="container_main">
                     <!-- <img src="images/img-3.png" alt="Avatar" class="image"> -->
                     <!-- <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">whichalteration in some </h4>
                           <p class="alteration_text">Alteration in some form, by injected humour, or randomised words whichalteration in some form, by injected humour, or randomised words which</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#">Read More</a></div>
                              <div class="donate_bt"><a href="donate.html">Donate Now</a></div>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="container_main">
                     <!-- <img src="images/img-4.png" alt="Avatar" class="image"> -->
                     <!-- <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">whichalteration in some </h4>
                           <p class="alteration_text">Alteration in some form, by injected humour, or randomised words whichalteration in some form, by injected humour, or randomised words which</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#">Read More</a></div>
                              <div class="donate_bt"><a href="donate.html">Donate Now</a></div>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
               <div class="offset-md-2"></div>
            </div>
         </div>
         <div class="mission_section_2">
            <div class="row">
               <div class="offset-md-2"></div>
               <div class="col-md-5">
                  <div class="container_main">
                     <img src="images/children3.jpg" alt="Avatar" class="image">
                     <!-- <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">whichalteration in some </h4>
                           <p class="alteration_text">Alteration in some form, by injected humour, or randomised words whichalteration in some form, by injected humour, or randomised words which</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#">Read More</a></div>
                              <div class="donate_bt"><a href="donate.html">Donate Now</a></div>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="container_main">
                     <img src="images/mental.jpg" alt="Avatar" class="image">
                     <!-- <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">whichalteration in some </h4>
                           <p class="alteration_text">Alteration in some form, by injected humour, or randomised words whichalteration in some form, by injected humour, or randomised words which</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#">Read More</a></div>
                              <div class="donate_bt"><a href="donate.html">Donate Now</a></div>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mission section end -->
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="news_taital">FEATURED CAUSE</h1>
                  <!-- <p class="news_text">going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p> -->
               </div>
            </div>
            <div class="news_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="news_img"><img src="images/children1.jpg"></div>
                  <!-- <div class="date_bt">
                        <div class="date_text active"><a href="#">7</a></div>
                        <div class="date_text"><a href="#">FEB</a></div>
                     </div> -->
               </div>
                  <div class="col-md-6">
                     <h1 class="give_taital">GIVE EDUCATION</h1>
                     <p class="ipsum_text">The more we can do to help our kids achieve that goal, the better chance they have for success in the future.

                        We’re developing targeted programs to make that happen:
                        
                        More reading, math and science tutors
                        More early education classes for preschoolers
                        More computer classes that expose teens to technology
                        More financial assistance to help pay for school. 
                     </p>
                     <h5 class="raised_text">Raised: Rs 20,010     <span class="goal_text">Goal: Rs 70,000</span></h5>
                     <div class="donate_btn_main">
                        <!-- <div class="readmore_btn"><a href="#">Read More</a></div> -->
                        <div class="readmore_btn_1"><a href="admin/login_system/volunteer-registerform.php">Volunteer Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- news section end -->
      <!-- events section start -->
      <div class="events_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <!-- <h1 class="news_taital">FEATURED CAUSE</h1> -->
                  <!-- <p class="news_text">We are facing a mental health crisis. Support programs and resources that ensure no one has to suffer alone due to stigma or healthcare inaccessibility.</div> -->
            </div>
            <div class="events_section_2">
               <div class="row">
                  <div class="col-md-5">
                     <!-- <div class="img_7"><img src="images/mental.jpg" class="img_7"></div> -->
                     <!-- <div class="date_bt">
                        <div class="date_text active"><a href="#">01</a></div>
                        <div class="date_text"><a href="#">FEB</a></div>
                     </div> -->
                  </div>
                  <!-- <div class="col-md-7">
                     <h1 class="give_taital_1">BREAK THE MENTAL HEALTH STIGMA</h1>
                     <p class="ipsum_text_1">We are facing a mental health crisis. Support programs and resources that ensure no one has to suffer alone due to stigma or healthcare inaccessibility.</p>
                     <h5 class="raised_text_1">Raised: Rs 10,010 <span class="goal_text">Goal: Rs 40,000</span></h5>
                     <div class="donate_btn_main"> -->
                        <!-- <div class="readmore_btn"><a href="#">Read More</a></div> -->
                        <!-- <div class="readmore_btn_1"><a href="admin/login_system/volunteer-registerform.php">Volunteer Now</a></div>
                     </div> -->
                  </div>
               </div>
            </div>
            <div class="events_section_2">
               <div class="row">
                  <div class="col-md-5">
                     <div class="img_7"><img src="images/old.jpg" class="img_7"></div>
                     <!-- <div class="date_bt">
                        <div class="date_text active"><a href="#">10</a></div>
                        <div class="date_text"><a href="#">FEB</a></div>
                     </div> -->
                  </div>
                  <div class="col-md-7">
                     <h1 class="give_taital_1">Old Age Home</h1>
                     <p class="ipsum_text_1">Would you like to provide assistance to older adults who need companionship or care? There are plenty of volunteer opportunities that involve helping elderly individuals. Senior centers, nursing homes, and other organizations that provide services to older adults are great places to donate your time if you want to help people in this population.</p>
                     <h5 class="raised_text_1">Raised: Rs 30,010     <span class="goal_text">Goal: Rs 50,000</span></h5>
                     <div class="donate_btn_main">
                        <!-- <div class="readmore_btn"><a href="#">Read More</a></div> -->
                        <div class="readmore_btn_1"><a href="admin/login_system/volunteer-registerform.php">Volunteer Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- events section end -->
      <!-- donate section start -->
      <div class="donate_section layout_padding">
         <div class="container">
            <h1 class="donate_taital">Donated people Say </h1>
            <div class="donate_taital_main">
               <div id="main_slider" class="carousel slid" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="donate_left">
                           <!-- <div class="client_img"><img src="images/client-img.png"></div> -->
                        </div>
                        <div class="donate_right">
                           <h3 class="client_name_text">Anjan Subedi</h3>
                           <p class="dummy_text">Donating here was one of the most satisfying thing I've ever done in my life. Watching the difference a small amount of money makes around me is exhiliharing!</div>
                     </div>
                     <!-- <div class="carousel-item">
                        <div class="donate_left">
                           <div class="client_img"><img src="images/client-img.png"></div>
                        </div>
                        <div class="donate_right">
                           <h3 class="client_name_text">Mardo Merk</h3>
                           <p class="dummy_text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefinedIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="donate_left">
                           <div class="client_img"><img src="images/client-img.png"></div>
                        </div>
                        <div class="donate_right">
                           <h3 class="client_name_text">Mardo Merk</h3>
                           <p class="dummy_text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefinedIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined</p>
                        </div>
                     </div> -->
                  <!-- </div> -->
                  <!-- <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a> -->
               </div>
            </div>
         </div>
      </div>
      <!-- donate section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="footer_logo"><img src="images/leo.ico"></div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">NAVIGATION</h4>
                  <div class="footer_menu_main">
                     <div class="footer_menu_left">
                        <div class="footer_menu">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="donate.html">Donate</a></li>
                              <li><a href="contact.html">Contact us</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="footer_menu_right">
                        <div class="footer_menu">
                           <ul>
                              <li><a href="about.html">About</a></li>
                              <!-- <li><a href="news.html">News</a></li> -->
                              <li><a href="mission.html">Our Mission</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">What We Believe In</h4>
                  <p class="footer_text">Helping the needy</p>
                  <p class="footer_text">Making a difference</p>
                  <p class="footer_text">Bringing Smiles</p>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">address</h4>
                  <p class="footer_text">Macchapokhari, New Bus-Park</p>
                  <p class="footer_text">+01 6678590</p>
                  <p class="footer_text">P.O. Box 9599, Kathmandu, Nepal</p>
                  <p class="footer_text">everestsunshine32@gmail.com</p>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-3">
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><img src="images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                           <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        </ul>
                     </div>
                  </div>
                  
                  <div class="col-sm-8 col-md-8 col-lg-9">
                     <!-- <h1>Contact Us</h1> -->
                     <!-- <input type="textarea" class="address_text" placeholder="Enter your Message" name="text"> -->
                     <!-- <input type="text" class="address_text" placeholder="Enter your Email" name="text">
                    <br> <button type="button" class="get_bt">SUBMIT</button> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved.</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>