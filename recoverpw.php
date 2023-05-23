
<?php
include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';



function generate_random_number() {
    return rand(10000000, 99999999);
}

$random_number = generate_random_number();
echo $random_number;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send'])){
    if(empty($_POST['email'])){
        // echo "Please enter your email";
        echo '<script>document.getElementById("check").innerhtml = "Please enter your email";</script>';
    }
        elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            // echo "Please enter a valid email";
            echo '<script>document.getElementById("check").innerhtml = "Please enter a valid email";</script>';
        }
        else{
            $email=$_POST['email'];
            $sql="SELECT * FROM users WHERE email='$email'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
            $count=mysqli_num_rows($result);
            if($count==1){
                $sql="UPDATE users SET password='$random_number' WHERE email='$email'";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo "Your new password is $random_number";
                    
                    $mail=new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->Host="smtp.gmail.com";
                    $mail->SMTPAuth=true;
                    $mail->Username="holandeveloper@gmail.com";
                    $mail->Password="mtcdjzwlwnwfoptz";
                    $mail->SMTPSecure="ssl";
                    $mail->Port=465;

                    $mail->setFrom("holandeveloper@gmail.com");
                    $mail->addAddress($_POST['email']);

                    $mail->isHTML(true);
                    $mail->Subject="Reset Password";
                    $text=" <h1>Reset Password</h1><br><br><br>
                    <h3>This your random new password</h3><br><br>
                    <h1>$random_number</h1><br><br>
                    <h3>Thank you for using our service</h3><br><br>
                    <h3>Regards</h3><br><br>
                    <h3>CareHour</h3><br><br>
                    <h3>Team</h3><br><br>
                    ";

                    $mail->Body=$text;  

                    $mail->send();
                    // make a script to show that the email has been sent by java script by id check


                    echo '<script>document.getElementById("check").innerhtml = "Email sent please check you email";</script>';
                    
                }
                else{
                    echo "Something went wrong 404";
                }
            }
            else{
                // echo "Email does not exist";
                echo '<script>document.getElementById("check").innerhtml = "Email does not exist";</script>';
            }
        }


    

    
}


?>


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
                    <a class="sign-in-logo mb-5" href="#"><img src="/images/logo.png" class="img-fluid" alt="logo">
                                <span class="spanLogo">CareHour</span>
                            </a>
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                            <div class="item">
                                <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">On CareHour</h4>
                                <p>We helpto find better solution to health care.</p>
                            </div>
                            <div class="item">
                                <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">We you and Doctor</h4>
                                <p>Everyone desrev a system to get easy  to use.</p>
                            </div>
                            <div class="item">
                                <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Thank You</h4>
                                <p>Thank you for chosing us.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Reset Password</h1>
                        <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
                        <form class="mt-4" method="POST">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="d-inline-block w-100">

                                <button type="submit" name="send" class="btn btn-primary float-right">Reset Password</button>
                            </div>
                            <p id="check"></p>

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