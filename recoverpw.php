<<<<<<< HEAD
<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';
?>


=======

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Required variables
$FROMEMAIL  = '"Nobody" <holandeveloper@gmail.com>';
$TOEMAIL    = "holandeveloper@gmail.com";
$SUBJECT    = "A simple hello";
$PLAINTEXT  = "Hello from my PHP script";
$RANDOMHASH = "anyrandomhash";
$FICTIONALSERVER = "@email.myownserver.com";
$ORGANIZATION = "myownserver.com";

// Basic headers
$headers = "From: ".$FROMEMAIL."\n";
$headers .= "Reply-To: ".$FROMEMAIL."\n";
$headers .= "Return-path: ".$FROMEMAIL."\n";
$headers .= "Message-ID: <".$RANDOMHASH.$FICTIONALSERVER.">\n";
$headers .= "X-Mailer: Your Website\n";
$headers .= "Organization: $ORGANIZATION\n";
$headers .= "MIME-Version: 1.0\n";

// Add content type (plain text encoded in quoted printable, in this example)
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

// Convert plain text body to quoted printable
$message = quoted_printable_encode($PLAINTEXT);

// Create a BASE64 encoded subject
$subject = "=?UTF-8?B?".base64_encode($SUBJECT)."?=";

// Send email
// mail($TOEMAIL, $subject, $message, $headers, "-f".$FROMEMAIL);
mail($TOEMAIL, $subject, $message );
?>
>>>>>>> 06fb09cff6ca0dd09b2406feb546e64002089f26


<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Typography CSS -->
        <link rel="stylesheet" href="css/typography.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
    </head>

    <body>
        <!-- loader Start -->
        <!-- <div id="loading">
        <div id="loading-center">
        </div>
    </div> -->
        <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="/images/logo.png" class="img-fluid"
                                    alt="logo">
                                <span class="spanLogo">CareHour</span>
                            </a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                                data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1"
                                data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content.</p>
                                </div>
                                <div class="item">
                                    <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content.</p>
                                </div>
                                <div class="item">
                                    <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Reset Password</h1>
                            <p>Enter your email address and we'll send you an email with instructions to reset your
                                password.</p>
                            <form class="mt-4">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1"
                                        placeholder="Enter email">
                                </div>

                                <div class="d-inline-block w-100">

                                    <button type="submit" class="btn btn-primary float-right">Reset Password</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Appear JavaScript -->
        <script src="js/jquery.appear.js"></script>
        <!-- Countdown JavaScript -->
        <script src="js/countdown.min.js"></script>
        <!-- Counterup JavaScript -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Wow JavaScript -->
        <script src="js/wow.min.js"></script>
        <!-- Apexcharts JavaScript -->
        <script src="js/apexcharts.js"></script>
        <!-- Slick JavaScript -->
        <script src="js/slick.min.js"></script>
        <!-- Select2 JavaScript -->
        <script src="js/select2.min.js"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="js/smooth-scrollbar.js"></script>
        <!-- lottie JavaScript -->
        <script src="js/lottie.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="js/custom.js"></script>
    </body>

</html>
