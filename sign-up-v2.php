<?php
      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
      include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';
// <<<<<<< HEAD

     
      if(isset($_POST['submit'])){
         echo "<script>alert('hi')</script>";
            $patient_data = new Patients();
                    $patient_data->setFirst_name($_POST['fname']);
                    $patient_data->setMiddle_name($_POST['mname']);
                    $patient_data->setLast_name($_POST['lname']);
                    $patient_data->setUsername($_POST['uname']);
                    $patient_data->setEmail($_POST['email']);
                    $patient_data->setPasswordd(encrypt($_POST['pwd']));
                    $patient_data->setImage_of_id("test1");
                    $patient_data->setProfile_image("test2");
                    $patient_data->setDate_of_birth($_POST['dob']);
                    $patient_data->setBlood_type($_POST['blood']);
                    $patient_data->setGender($_POST['gender']);
                    $patient_data->setAddresses($_POST['address']);
                    $patient_data->setCity($_POST['city']);
                    $patient_data->setPhone_number($_POST['phone']);
                    $patient_data->add();
                    $patient_data->getLastRow();
                    $patient_data->giveAuthority();
                    // echo " hi kaka";
                    // header("Location: ../patient.php");
                    // exit();
      }
// =======
      

    //   $patient = new Patients();
    //   if(isset($_POST['submit'])){
    //   if(!empty($_POST['email']) && !empty($_POST['uname']) &&!empty($_POST['fname'])){
    //     $patient_data->setEmail($_POST['email']);
    //     $patient_data->setUsername($_POST['uname']);
    //     $patient_data->setPasswordd(encrypt($_POST['password']));
       
    //     $patient_data->setFirst_name($_POST['fname']);
    //     $patient_data->setMiddle_name($_POST['mname']);
    //     $patient_data->setLast_name($_POST['lname']);
    //     $patient_data->setDate_of_birth($_POST['dob']);
    //     $patient_data->setBlood_type($_POST['blood_type']);
    //     $patient_data->setGender($_POST['gender']);
    //     $patient_data->setAddress($_POST['address']);
    //     $patient_data->setCity($_POST['city']);
    //     $patient_data->setPhone_number($_POST['phone']);
    //     $patient_data->setImage_of_id("http://1");
    //     $patient_data->setProfile_image("http://2");
    //     $patient_data->setTime(time());


    //     $patient_data->add();
    //     $patient->getLastRow();
    //     $patient_data->giveAuthority();
    //     echo " hi kaka";
    //   }}
// >>>>>>> 6cc34de1c09087f4d69ff9f74353002af62c59f8
    
      

            
      




      // if(!empty($_POST['email']) && !empty($_POST['uname'])){
      //   $admin->setEmail($_POST['email']);
      //   $admin->setUsername($_POST['uname']);
      //   $admin->setPassword(encrypt($_POST['password']));
      //   $admin->setRole($_POST['role']);
      //   $admin->setCreated_at(getCurrentTime());
      //   $admin->setUpdated_at(getCurrentTime());
      //   $admin->setDeleted_at(getCurrentTime());
      //   $admin->setDeleted(0);
      //   $admin->setActive(1);
      //   $admin->setToken(encode($_POST['email']));
      //   $admin->setToken_expire(getCurrentTime());
      //   $admin->add();
      //   $admin->getLastRow();
      //   $admin->giveAuthority();
      // }
//       include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
//       include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
//       include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';


// $patient=new Patients();

// $patient->setFirst_name($_POST['']);
// //give the object setters
// $patient->







?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>CareHour SignUp</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
        <!-- Typography CSS -->
        <link rel="stylesheet" href="../../css/typography.css" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="../../css/style.css" />
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="../../css/responsive.css" />

        <style>
        .content-page,
        body.sidebar-main .content-page {
            margin-left: 0;

        }

        .content-page {
            padding: 18px 15px 0;
            min-height: 100vh;
        }

        </style>
    </head>

    <body>
        <!-- loader Start -->
        <!-- <div id="loading">
      <div id="loading-center"></div>
    </div> -->
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">

            <!-- Page Content  -->
            <div id="content-page" class="content-page">

                <!-- TOP Nav Bar END -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Simple Wizard</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <form id="form-wizard1" class="text-center mt-4" method="POST"
                                        action="sign-up-v2.php">
                                        <ul id="top-tab-list" class="p-0">
                                            <li class="active" id="account">
                                                <a href="javascript:void();">
                                                    <i class="ri-lock-unlock-line"></i><span>Account</span>
                                                </a>
                                            </li>
                                            <li id="personal">
                                                <a href="javascript:void();">
                                                    <i class="ri-user-fill"></i><span>Personal</span>
                                                </a>
                                            </li>
                                            <li id="payment">
                                                <a href="javascript:void();">
                                                    <i class="ri-camera-fill"></i><span>Image</span>
                                                </a>
                                            </li>
                                            <li id="confirm">
                                                <a href="javascript:void();">
                                                    <i class="ri-check-fill"></i><span>Finish</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- fieldsets -->
                                        <fieldset>
                                            <div class="form-card text-left">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h3 class="mb-4">Account Information:</h3>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 1 - 4</h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email: *</label>
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Email Id" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Username: *</label>
                                                            <input type="text" class="form-control" name="uname"
                                                                placeholder="UserName" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Password: *</label>
                                                            <input type="password" class="form-control" name="pwd"
                                                                placeholder="Password" id="pwd" />

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Confirm Password: *</label>
                                                            <input type="password" class="form-control" name="cpwd"
                                                                placeholder="Confirm Password" id="cpwd" />
                                                            <span id='message'></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" name="next"
                                                class="btn btn-primary next action-button float-right" value="Next"
                                                id="next1" disabled>
                                                Next
                                            </button>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card text-left">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h3 class="mb-4">Personal Information:</h3>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 2 - 4</h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name: *</label>
                                                            <input type="text" class="form-control" name="fname"
                                                                placeholder="First Name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Middle Name: *</label>
                                                            <input type="text" class="form-control" name="mname"
                                                                placeholder="Middle Name" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Last Name: *</label>
                                                            <input type="text" class="form-control" name="lname"
                                                                placeholder="Last Name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Contact No.: *</label>
                                                            <input type="text" class="form-control" name="phone"
                                                                placeholder="Contact No." />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>City:</label>
                                                        <select class="form-control" id="exampleFormControlSelect4"
                                                            name="city">
                                                            <option value="">Select a City</option>
                                                            <option value="Anbar">Anbar</option>
                                                            <option value="Babil">Babil</option>
                                                            <option value="Baghdad">Baghdad</option>
                                                            <option value="Basra">Basra</option>
                                                            <option value="Dhi Qar">Dhi Qar</option>
                                                            <option value="Diyala">Diyala</option>
                                                            <option value="Dohuk">Dohuk</option>
                                                            <option value="Erbil">Erbil</option>
                                                            <option value="Karbala">Karbala</option>
                                                            <option value="Kirkuk">Kirkuk</option>
                                                            <option value="Maysan">Maysan</option>
                                                            <option value="Muthanna">Muthanna</option>
                                                            <option value="Najaf">Najaf</option>
                                                            <option value="Ninawa">Ninawa</option>
                                                            <option value="Qadisiyyah">Qadisiyyah</option>
                                                            <option value="Salah ad Din">Salah ad Din</option>
                                                            <option value="Sulaymaniyah">Sulaymaniyah</option>
                                                            <option value="Wasit">Wasit</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="d-block">Gender:</label>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio6" name="gender"
                                                                class="custom-control-input" checked="" />
                                                            <label class="custom-control-label" for="customRadio6">
                                                                Male
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio7" name="gender"
                                                                class="custom-control-input" />
                                                            <label class="custom-control-label" for="customRadio7">
                                                                Female
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadio8" name="gender"
                                                                class="custom-control-input" />
                                                            <label class="custom-control-label" for="customRadio8">
                                                                Other
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Marital Status:</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option selected="">Single</option>
                                                            <option>Married</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="dob">Date Of Birth:</label>
                                                        <input class="form-control" id="dob" value="1984-01-24"
                                                            name="dob" />
                                                    </div>
                                                    <!--  -->
                                                    <div class="col-sm-6">
                                                        <label>allergies:</label>
                                                        <select class="form-control" id="exampleFormControlSelect3">
                                                            <option>Dont have</option>
                                                            <option>Asthma</option>
                                                            <option>Eczema</option>
                                                            <option selected="">Food allergies</option>
                                                            <option>Insect sting allergies</option>
                                                            <option>Drug allergies</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>allergies severity:</label>
                                                        <select class="form-control" id="exampleFormControlSelect3">
                                                            <option>None</option>
                                                            <option>Mild</option>
                                                            <option>Moderate</option>
                                                            <option>Severe</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label>Blood Type:</label>
                                                        <select class="form-control" id="exampleFormControlSelect4"
                                                            name="blood">

                                                            <option value="A+">A+</option>
                                                            <option value="O-">O-</option>
                                                            <option value="A-">A-</option>
                                                            <option value="B+">B+</option>
                                                            <option value="B-">B-</option>
                                                            <option value="AB+">AB+</option>
                                                            <option value="AB-">AB-</option>
                                                            <option value="O+">O+</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group col-sm-12">
                                                        <label>spicifie your allerge:</label>
                                                        <textarea class="form-control" name="address" rows="5"
                                                            style="line-height: 22px">
                                                                              </textarea>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>Address:</label>
                                                        <textarea class="form-control" name="address" rows="5"
                                                            style="line-height: 22px"></textarea>
                                                    </div>


                                                    <!--  -->
                                                </div>
                                            </div>
                                            <button type="button" name="next"
                                                class="btn btn-primary next action-button float-right" value="Next">
                                                Next
                                            </button>
                                            <button type="button" name="previous"
                                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                                value="Previous">
                                                Previous
                                            </button>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card text-left">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h3 class="mb-4">Image Upload:</h3>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 3 - 3</h2>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
                          <label>Upload Your Photo:</label>
                          <input
                            type="file"
                            class="form-control"
                            name="pic"
                            accept="image/*"
                          />
                        </div>
                        <div class="form-group">
                          <label>Upload ID Photo:</label>
                          <input
                            type="file"
                            class="form-control"
                            name="pic-2"
                            accept="image/*"
                          />
                        </div> -->
                                                <div class="custom-file">
                                                    <<<<<<< HEAD <input type="file" class="custom-file-input"
                                                        id="validatedCustomFile" name="Profile">
                                                        =======
                                                        <input type="file" class="custom-file-input"
                                                            id="validatedCustomFile" required="" name="Profile">
                                                        >>>>>>> 6cc34de1c09087f4d69ff9f74353002af62c59f8
                                                        <label class="custom-file-label" for="customFile">Upload Your
                                                            Photo:</label>
                                                </div><br><br>
                                                <div class="custom-file">
                                                    <<<<<<< HEAD <input type="file" class="custom-file-input"
                                                        id="validatedCustomFile" name="photo_id">
                                                        =======
                                                        <input type="file" class="custom-file-input"
                                                            id="validatedCustomFile" required="" name="photo_id">
                                                        >>>>>>> 6cc34de1c09087f4d69ff9f74353002af62c59f8
                                                        <label class="custom-file-label" for="customFile">Upload ID
                                                            Photo:</label>
                                                </div><br><br>
                                            </div>
                                            <button type="submit" name="submit" value="Submit">
                                                Submit
                                            </button>
                                            <button type="button" name="previous"
                                                class="btn btn-dark previous action-button-previous float-right mr-3"
                                                value="Previous">
                                                Previous
                                            </button>
                                        </fieldset>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="bg-white iq-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="">Privacy Policy</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="">Terms of Use</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 text-right">
                                Copyright <?=date("Y")?> <a href="#">CareHour</a> All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->
            </div>
        </div>
        <!-- Wrapper END -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/popper.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <!-- Appear JavaScript -->
        <script src="../../js/jquery.appear.js"></script>
        <!-- Countdown JavaScript -->
        <script src="../../js/countdown.min.js"></script>
        <!-- Counterup JavaScript -->
        <script src="../../js/waypoints.min.js"></script>
        <script src="../../js/jquery.counterup.min.js"></script>
        <!-- Wow JavaScript -->
        <script src="../../js/wow.min.js"></script>
        <!-- Apexcharts JavaScript -->
        <script src="../../js/apexcharts.js"></script>
        <!-- Slick JavaScript -->
        <script src="../../js/slick.min.js"></script>
        <!-- Select2 JavaScript -->
        <script src="../../js/select2.min.js"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="../../js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="../../js/jquery.magnific-popup.min.js"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="../../js/smooth-scrollbar.js"></script>
        <!-- lottie JavaScript -->
        <script src="../../js/lottie.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="../../js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="../../js/custom.js"></script>
        <!-- signup via js-->
        <script src="controller\patients.js">



        </script>
        <!-- Checking confirm password -->

        <!-- make a function keyup to confirm password pwd and cpwd wothout reload the page-->
        <script>
        $('#pwd, #cpwd').on('keyup', function() {
            if ($('#pwd').val() == $('#cpwd').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
            // make a lenght password checking bigger than 8
            if ($('#pwd').val().length < 8) {
                $('#message').html('Password must be at least 8 characters').css('color', 'red');

            }
            // checking for characters in password to be at least 1 and capital letter
            if ($('#pwd').val().match(/[a-z]/g) && $('#pwd').val().match(/[A-Z]/g)) {
                $('#message').html('Password must contain at least 1 capital letter').css('color', 'red');
            }
            // checking for special characters in password to be at least 1
            if ($('#pwd').val().match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) {
                $('#message').html('Password must contain at least 1 special character').css('color', 'red');
            }
            // checking for space in password
            if ($('#pwd').val().match(/s/)) {
                $('#message').html('Password must not contain space').css('color', 'red');
            }
            //if password value is empty check and make next button disabled
            if (($('#pwd').val() == null || $('#pwd').val() == "")) {
                $('#next1').prop('disabled', true);
            };
            // next1 should check if both password and confirm password are matching then enable the next button
            if ($('#pwd').val() == $('#cpwd').val() && $('#pwd').val().length >= 8) {
                $('#next1').prop('disabled', false);
                // if not matching then disable the next button
            } else {
                $('#next1').prop('disabled', true);
            }





        });
        </script>
    </body>

</html>
