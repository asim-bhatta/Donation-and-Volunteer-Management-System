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
      <style>
    .img-thumb {
        width:13.5vw !important;
        height:31.5vh !important;
        object-fit:cover;
        object-position:center top;
        min-width: 180px;
    }
    .schedule-holder {
        position: absolute;
        padding: 5px 15px;
        top: 43%;
        font-size: 1.5em;
        font-weight: 700;
        background-color: #21252970 !important;
    }
    .read-holder{
        position: absolute;
        bottom:3px;
        left:-1px;
    }
</style>
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
                  <!-- <li class="nav-item">
                     <a class="nav-link" href="#mission">Our Mission</a>
                  </li> -->
                  <li class="nav-item">
                     <a class="nav-link" href="admin/login_system/login_form.php">Login/Register</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="admin/login_system/register_form.php">Become A Volunteer</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <!-- <div class="search_icon"><a class="nav-link" href="admin/login_system/login_form.php"><img src="images/search-icon.png"></a></div> -->
                  <!-- <button class="donate_btn" <a class="nav-link" href="admin/login_system/login_form.php"> </a>type="submit">Donate Now</button> -->
                  <!-- <div class="donate_btn"><a class="nav-link" href="donate.html" type="submit">Donate Now</a></div> -->
                  <!-- <button class="donate_btn"><a class="nav-link" href="admin/login_system/login_form.php"></a>Donate Now</button> -->
                  <button class="donate_btn" type="submit"><a href="admin/login_system/login_form.php"></a>Donate Now</button>
               </form>
            </div>
         </nav>
      <!-- header section end -->
  
<section class="py-5">
    <div class="container">
        <!-- <h3 class='text-center'>Upcoming Events</h3> -->
        <hr>

    <div class="w-100 row row-cols-1 row-cols-sm-1 row-cols-lg-3 row-cols-md-3 gx-3">
        <?php 
        $events = $con->query("SELECT * FROM events where date(schedule) >= '".date("Y-m-d")."' order by date(schedule) asc ");
        while($row = $events->fetch_array()):
        ?>
        <div class="col">
            <div class="card d-flex">
                <span class="schedule-holder bg-dark"><?php echo date("M d") ?></span>
                <img src="<?php echo validate_image($row['img_path']) ?>" alt="<?php echo $row['img_path'] ?>" class="img-top img-thumb">
                <div class="card-body position-relative">
                    <div class="container-fluid">
                        <h4><b><?php echo $row['title'] ?></b></h4>
                        <hr>
                        <small class="truncate-5"><b><?php echo $row['description'] ?></b></small>
                    </div>
                    <div class="w-100 d-flex justify-content-end mt-1 read-holder" align="bottom">
                        <a href="javascript:void(0)" class="read_more btn btn-flat btn-sm btn-info" data-id="<?php echo $row['id'] ?>"><b>Read More</b></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    </div>
</section>
<script>
    $(function(){
        $('.read_more').click(function(){
            uni_modal("<i class='fa fa-calendar-day'></i> Upcoming Event",'view_event.php?id='+$(this).attr('data-id'))
        })
    })
</script>

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
                     <!-- <h5 class="raised_text">Raised: Rs 20,010     <span class="goal_text">Goal: Rs 70,000</span></h5> -->
                     <div class="donate_btn_main">
                        <!-- <div class="readmore_btn"><a href="#">Read More</a></div> -->
                        <div class="readmore_btn_1"><a href="admin/login_system/login_form.php">Donate Now</a></div>
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
                  <!-- <h1 class="news_taital">UPCOMING EVENTS</h1> -->
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
                     <div class="donate_btn_main">
                        <div class="readmore_btn"><a href="#">Read More</a></div>
                        <div class="readmore_btn_1"><a href="admin/login_system/login_form.php">Donate Now</a></div>
                     </div>
                  </div> -->
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
                        <div class="readmore_btn_1"><a href="admin/login_system/login_form.php">Donate Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="events_section_2">
               <div class="row">
                  <div class="col-md-5">
                     <div class="img_7"><img src="images/dog.jpg" class="img_7"></div> -->
                     <!-- <div class="date_bt">
                        <div class="date_text active"><a href="#">10</a></div>
                        <div class="date_text"><a href="#">FEB</a></div>
                     </div> -->
                  <!-- </div> -->
                  <!-- <div class="col-md-7">
                     <h1 class="give_taital_1">Stray Dog Rehabilitation Assistant</h1>
                     <p class="ipsum_text_1">Much of Nepalese culture including many other Asian cultures unfortunately do not hold dogs with the same esteem as western cultures. You're helping educate and care for mistreated animals
                        A social experience, you'll be staying in large volunteer houses with many international travellers
                        Experience the real Nepal in the lively and incredible city of Kathmandu. The volunteer houses are very safe with dedicated staff who really care and want each volunteer to have wonderful experience
                        Make memories you will remember for the rest of your life. Meet new people and learn about the world and yourself.</p>
                     <h5 class="raised_text_1">Raised: Rs 30,010     <span class="goal_text">Goal: Rs 50,000</span></h5>
                     <div class="donate_btn_main">
                       
                        <div class="readmore_btn_1"><a href="admin/login_system/login_form.php">Donate Now</a></div>
                     </div>
                  </div> -->
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
                              <!-- <li><a href="contact.html">Contact us</a></li> -->
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

