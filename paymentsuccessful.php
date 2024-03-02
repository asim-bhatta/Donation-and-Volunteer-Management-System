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
    <!-- site metas -->
    <title>Payment Successful</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- favicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs -->
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html"><img src="images/leo.ico"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/login_system/login_form.php">Donate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mission.html">Our Mission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/login_system/login_form.php">Login/Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/login_system/login_form.php">Become A Volunteer</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="donate_btn" type="submit">Donate Now</button>
            </form>
        </div>
    </nav>
</div>
<!-- header section end -->
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="mail_section_1">
                        <h1 class="contact_taital">Payment Successful!!</h1>
                        <h1>Dear donor, Thank you for your donation!!</h1>
                        <h2>You will be updated with an donation usage report of your donation in a few days via email.</h2>
                        <div class="container mt-4">
                            <h2>Receipt</h2>
                            <table class="tbl" border="1px solid blue">
                                <thead>
                                <tr>
                                    <!-- <th class="th">Donor Name</th> -->
                                    <th class="th">Payment_Id</th>
                                    <th class="th">Donor_Id</th>
                                    <th class="th">Donation Amount</th>
                                    <th class="th">Payment Method</th>
                                    
                                    <th class="th">Payment Date</th>
                                </tr>
                                </thead>
                                <tbody class="tbdy">
                                <?php
                                $get_donation = "select * from `payment`";
                                $result = mysqli_query($con, $get_donation);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    $payment_id = $row['payment_id'];
                                    $id = $row['id'];
                                    $amount = $row['amount'];
                                    $payment_method = $row['Payment_method'];
                                    $date = $row['date'];
                                }
                                ?>

                                <!-- <td><?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'You(Donor)'; ?></td><br> -->
                                <td><?php echo $payment_id; ?></td>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $amount; ?>/-</td>
                                <td><?php echo $payment_method; ?></td>

                                <td><?php echo $date; ?></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <!-- Your Google Map or other content can go here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section end -->
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
                    <!-- Your contact form or other content can go here -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>
