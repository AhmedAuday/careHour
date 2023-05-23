<?php
 include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
 include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
 include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

 // echo "hello1";
// if (isset($_POST['user'])) {
//     $selectedColor = $_POST['user'];
//     echo "Selected color: " . $selectedColor;
//   }

//check by if stament if the user is a patient or a doctor or a admin after login button is clicked
if(isset($_POST['Login'])){
    // echo "hello2";
    
    if(isset($_POST['user_type'])){
        // echo "hello3";
        $user_type = $_POST['user_type'];
        // echo $user_type;
        if($user_type == 'patient'){
            // echo "hello4";
            //mysql check if the user is a patient available in the database
            //if email and password is set it will be stored in the variable
            if(isset($_POST['email']) && isset($_POST['password'])){
                $email = $_POST['email'];
                $password = $_POST['password'];



                $patient= new Patients();
                $patient->setEmail($email);

                if($patient->getByEmail()){
                    // echo "email found";
                    if($patient->getPasswordd() == encrypt($password)){
                        // echo "password found";
                        $patient->giveAuthority();
                        if($patient->getAuthority() > 0){
                            // echo($patient->getAuthority());
                           //make a header to patint dashboard 
                            header("Location: patient.php");
                            exit();
                        }
                        exit();
                    }
                }
                
                
               

            }else{
                //if email and password is not set it will redirect to the sign-in page with an error message
                // $error = urlencode('Invalid username or password.');
                // header("Location: sign-in.php?error2=hikaka");
                // exit();


            }

            
        }else if($user_type == 'doctor'){
            $email = $_POST['email'];
            $password = $_POST['password'];



            $doctor= new Doctors();
            $doctor->setEmail($email);

            if($doctor->getByEmail()){
                // echo "email found";
                if($doctor->getPasswordd() == encrypt($password)){
                    // echo "password found";
                    $doctor->giveAuthority();
                    if($doctor->getAuthority() > 0){
                        // echo($patient->getAuthority());
                       //make a header to patint dashboard 
                        header("Location: doctor_main_dashboard.php");
                        exit();
                    }
                    exit();
                }
            }
    
        }else if($user_type == 'admin'){
            //mysql check if the user is a admin available in the database
            $email = $_POST['email'];
            $password = $_POST['password'];



            $admin= new Admins();
            $admin->setEmail($email);

            if($admin->getByEmail()){
                // echo "email found";
                if($admin->getPasswordd() == encrypt($password)){
                    // echo "password found";
                    $admin->giveAuthority();
                    if($admin->getAuthority() > 0){
                        // echo($patient->getAuthority());
                       //make a header to patint dashboard 
                        header("Location: admin_main_dashboard.php");
                        exit();
                    }
                    exit();
                }
            }

    
        }
    }
    // else{
    //     // echo "Please select a user type";
    //     $error = urlencode('Please select a user type.');
    //             header("Location: sign-up.php?error1=".$error);
                
    //     // header("Location: sign-in.php?error1=Please select a user type");
    //     exit();
    // }
    }

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Care Hour</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="/images/favicon.ico" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <!-- Typography CSS -->
        <link rel="stylesheet" href="/css/typography.css" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="/css/style.css" /> 
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="/css/responsive.css" />
    </head>

    <body>
        <!-- loader Start -->
        <!-- <div id="loading">
            <div id="loading-center"></div>
        </div> -->
        <!-- loader END -->
        <!-- Sign in Start -->
        
        <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="index.php"><img src="/images/logo.png" class="img-fluid"
                                    alt="logo" />
                                <span class="spanLogo">CareHour</span>
                            </a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                                data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1"
                                data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="/images/login/1.png" class="img-fluid mb-4" alt="logo" />
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>
                                        It is a long established fact that a reader will be
                                        distracted by the readable content.
                                    </p>
                                </div>
                                <div class="item">
                                    <img src="/images/login/2.png" class="img-fluid mb-4" alt="logo" />
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>
                                        It is a long established fact that a reader will be
                                        distracted by the readable content.
                                    </p>
                                </div>
                                <div class="item">
                                    <img src="/images/login/3.png" class="img-fluid mb-4" alt="logo" />
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>
                                        It is a long established fact that a reader will be
                                        distracted by the readable content.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign in</h1>
                            <!--radio button for the user to choose if they are a patient or a doctor or a admin-->
                        
                            
                            <form class="mt-4" method="POST">
                            <div class="iq-card-body">
                            <?php
                            //error message if the user did not select a user type                                                             
                            if(isset($_GET['error1'])){
                                echo '<p class="alert alert-danger text-center">'.urldecode($_GET['error1']).'</p>';
                            }
                            ?>

                           <p>Please chose which user are you.</p>
                           <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                              <input type="radio" id="customRadio-1" name="user_type" value="patient" class="custom-control-input bg-primary" >
                              <label class="custom-control-label" for="customRadio-1" > Patient </label>
                           </div>
                           <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                              <input type="radio" id="customRadio-2" name="user_type" value="doctor" class="custom-control-input bg-success">
                              <label class="custom-control-label" for="customRadio-2"> Doctor </label>
                           </div>
                           <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                              <input type="radio" id="customRadio-3" name="user_type" value="admin" class="custom-control-input bg-danger">
                              <label class="custom-control-label" for="customRadio-3"> Admin </label>

                           </div>
                           <!-- <input type="radio" id="" name="user" value="admin" class="">Shot -->
                        </div><p>
                                Enter your email address and password.
                            </p>
                                <?php 
                                if(isset($_GET['error2'])){
                                    echo '<p class="alert alert-danger text-center">'.$_GET['error2'].'</p>';
                                }
                                ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1"
                                        placeholder="Enter email" name="email"/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <a href="recoverpw.php" id="forget_pass" class="float-right">Forgot password?</a>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1"
                                        placeholder="Password" name="password" />
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right" name="Login">
                                        Sign in
                                    </button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Don't have an account? <a
                                            href="sign-up-v2.php">Sign up</a></span>
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
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <!-- Appear JavaScript -->
        <script src="/js/jquery.appear.js"></script>
        <!-- Countdown JavaScript -->
        <script src="/js/countdown.min.js"></script>
        <!-- Counterup JavaScript -->
        <script src="/js/waypoints.min.js"></script>
        <script src="/js/jquery.counterup.min.js"></script>
        <!-- Wow JavaScript -->
        <script src="/js/wow.min.js"></script>
        <!-- Apexcharts JavaScript -->
        <script src="/js/apexcharts.js"></script>
        <!-- Slick JavaScript -->
        <script src="/js/slick.min.js"></script>
        <!-- Select2 JavaScript -->
        <script src="/js/select2.min.js"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="/js/smooth-scrollbar.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="/js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="/js/custom.js"></script>
        <script>
  $(document).ready(function() {
    var elementToHide = $("#forget_pass");

    // Check the initial state of the radio buttons
    if ($('input[name=user_type][value=admin]').is(':checked')||$('input[name=user_type][value=doctor]').is(':checked')) {
      elementToHide.hide();
    }

    // Add event listener to the radio buttons
    $('input[name=user_type]').change(function() {
      if ($(this).val() === "admin"||$(this).val() === "doctor") {
        elementToHide.hide();
      } else {
        elementToHide.show();
      }
    });
  });
</script>
        
    </body>

</html>
