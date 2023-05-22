
<?php
 include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
 include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
 include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

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
        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
        <!-- Typography CSS -->
        <link rel="stylesheet" href="../../css/typography.css" />
        <!-- Style CSS for sign up -->
        <link rel="stylesheet" href="../../css/signup.css" />
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="../../css/responsive.css" />
    </head>

    <body>
        <!-- loader Start -->
        <!-- <div id="loading">
                <div id="loading-center"></div>
            </div> -->
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            <!-- Sidebar  -->

            <!-- Page Content  -->

            <div id="content-page" class="content-page">
                <!-- TOP Nav Bar END -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="iq-card">
                                <div class="iq-card-body p-0">
                                    <div class="iq-edit-list">
                                        <ul class="iq-edit-profile d-flex nav nav-pills">
                                            <li class="col-md-3 p-0">
                                                <a class="nav-link active" data-toggle="pill"
                                                    href="#personal-information">
                                                    Register
                                                </a>
                                            </li>
                                            <!-- <li class="col-md-3 p-0">
            <a
              class="nav-link"
              id="change-pwd-link"
              data-toggle="pill"
              href="#chang-pwd"
            >
              Change Password
            </a>
          </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form method="POST">
                        <div class="col-lg-12">
                            <div class="iq-edit-list-data">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                        <div class="iq-card">
                                            <div class="iq-card-header d-flex justify-content-between">
                                                <div class="iq-header-title">
                                                    <h4 class="card-title">Personal Information</h4>
                                                </div>
                                            </div>
                                            <div class="iq-card-body">
                                                <form>
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-md-12">
                                                            <div class="profile-img-edit">

                                                                <div class="p-image">
                                                                    <i class="ri-pencil-line upload-button"></i>
                                                                    <!-- <input  type="file"
                                                                    accept="image/*" />
                                                                    <label for="profile_image">Profile Image:</label> -->
                                                                    <input type="file" name="profile_image"
                                                                        id="profile_image" accept="image/*" >

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="form-group col-sm-6">
                                                            <label for="fname">First Name:</label>
                                                            <input type="text" class="form-control" id="fname" name="fname"
                                                                value="Bini" />
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="lname">Middle Name:</label>
                                                            <input type="text" class="form-control" id="lname" name="mname"
                                                                value="Jets" />
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="lname">Last Name:</label>
                                                            <input type="text" class="form-control" id="lname" name="lname"
                                                                value="Jets" />
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="Phone number">Phone number:</label>
                                                            <input type="text" value="+964" class="form-control"
                                                                oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="phone" />
                                                        </div>


                                                        <div class="form-group col-sm-6">
                                                            <label>City:</label>
                                                            <select class="form-control" id="exampleFormControlSelect4">
                                                                <option value="">Select a state</option>
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

                                                        <div class="form-group col-sm-6">
                                                            <label class="d-block">Gender:</label>
                                                            <div
                                                                class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio6"
                                                                    name="gender" class="custom-control-input"
                                                                    checked="" value="male"/>
                                                                <label class="custom-control-label" for="customRadio6">
                                                                    Male
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio7"
                                                                    name="gender" class="custom-control-input" value="female"/>
                                                                <label class="custom-control-label" for="customRadio7">
                                                                    Female
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio8"
                                                                    name="gender" class="custom-control-input" value="other"/>
                                                                <label class="custom-control-label" for="customRadio8">
                                                                    Other
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="dob">Date Of Birth:</label>
                                                            <input class="form-control" id="dob" value="1984-01-24" name="dob"/>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label>Marital Status:</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="">
                                                                <option selected="">Single</option>
                                                                <option>Married</option>

                                                            </select>
                                                        </div>
                                                        <!-- <div class="form-group col-sm-6">
                                                            <label>Age:</label>
                                                            <select class="form-control" id="exampleFormControlSelect2">
                                                                <option>12-18</option>
                                                                <option>19-32</option>
                                                                <option selected="">33-45</option>
                                                                <option>46-62</option>
                                                                <option>63 ></option>
                                                                <option>Above 63 ></option>
                                                            </select>
                                                        </div> -->


                                                        <div class="form-group col-sm-6">
                                                            <label>allergies:</label>
                                                            <select class="form-control" id="exampleFormControlSelect3" name="">
                                                                <option value="hi">Dont have</option>
                                                                <option value="hi">Asthma</option>
                                                                <option value="hi">Eczema</option>
                                                                <option value="hi">Food allergies</option>
                                                                <option value="hi">Insect sting allergies</option>
                                                                <option value="hi">Drug allergies</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-sm-6">
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
                                                            <select class="form-control" id="exampleFormControlSelect4" name="blood">

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




                                                        <!-- <div class="form-group col-sm-6">
                                                                <label>Long Term Diseases:</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect4">
                                                                    <option>Dont have</option>
                                                                    <option value="Heart disease">Heart disease</option>
                                                                    <option value="Stroke">Stroke</option>
                                                                    <option value="Lung cancer">Lung cancer</option>
                                                                    <option value="Colorectal cancer">Colorectal cancer
                                                                    </option>
                                                                    <option value="Depression">Depression</option>
                                                                    <option value="Type 2 diabetes">Type 2 diabetes
                                                                    </option>
                                                                    <option value="Arthritis">Arthritis</option>
                                                                    <option value="Osteoporosis">Osteoporosis</option>
                                                                    <option value="Asthma">Asthma</option>
                                                                    <option
                                                                        value="Chronic obstructive pulmonary disease (COPD)">
                                                                        Chronic obstructive pulmonary disease (COPD)
                                                                    </option>
                                                                    <option value="Chronic kidney disease">Chronic
                                                                        kidney disease</option>
                                                                    <option value="Oral disease">Oral disease</option>


                                                                </select>

                                                            </div> -->





                                                        <div class="form-group col-sm-12">
                                                            <label>spicifie your allerge:</label>
                                                            <textarea class="form-control" name="address" rows="5"
                                                                style="line-height: 22px">
                        spicifie you allerge if you have one
                                   </textarea>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label>Address:</label>
                                                            <textarea class="form-control" name="address" rows="5"
                                                                style="line-height: 22px">
                      37 Cardinal Lane
                      Petersburg, VA 23803
                      
                      United States of America
                      Zip Code: 85001
                                 </textarea>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="lname">Email</label>
                                                            <input type="text" class="form-control" id="lname"
                                                                name="uname" value="test@hi.c" />
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="lname">Password</label>
                                                            <input type="password" class="form-control" id="lname"
                                                                name="password" value="bxdsmb" />
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="lname">Vertify Password</label>
                                                            <input type="password" class="form-control" id="lname"
                                                                name="Vpassword" value="bxdsmb" />
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck1" />
                                                            <label class="custom-control-label" for="customCheck1">Agree
                                                                And Continue</label>
                                                        </div>

                                                    </div>
                                                    <!-- TODO Fix This Part  -->

                                                    <div class="d-inline-block w-100">

                                                        <button type="submit" class="btn btn-primary float-left" name="submit">
                                                            Register
                                                        </button>
                                                    </div>

                                                    <!-- End of TODO Fix This Part  -->

                                                    <button type="reset" class="btn iq-bg-danger">
                                                        cancel
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- TODO Find about this section  -->

                                    <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                                        <div class="iq-card">
                                            <div class="iq-card-header d-flex justify-content-between">
                                                <div class="iq-header-title">
                                                    <h4 class="card-title">Email and SMS</h4>
                                                </div>
                                            </div>
                                            <div class="iq-card-body">
                                                <form>
                                                    <div class="form-group row align-items-center">
                                                        <label class="col-md-3" for="emailnotification">Email
                                                            Notification:</label>
                                                        <div class="col-md-9 custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="emailnotification" checked="" />
                                                            <label class="custom-control-label"
                                                                for="emailnotification"></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center">
                                                        <label class="col-md-3" for="smsnotification">SMS
                                                            Notification:</label>
                                                        <div class="col-md-9 custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="smsnotification" checked="" />
                                                            <label class="custom-control-label"
                                                                for="smsnotification"></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center">
                                                        <label class="col-md-3" for="npass">When To Email</label>
                                                        <div class="col-md-9">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="email01" />
                                                                <label class="custom-control-label" for="email01">You
                                                                    have new notifications.</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="email02" />
                                                                <label class="custom-control-label" for="email02">You're
                                                                    sent a direct message</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="email03" checked="" />
                                                                <label class="custom-control-label"
                                                                    for="email03">Someone
                                                                    adds you as a
                                                                    connection</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center">
                                                        <label class="col-md-3" for="npass">When To Escalate
                                                            Emails</label>
                                                        <div class="col-md-9">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="email04" />
                                                                <label class="custom-control-label" for="email04">
                                                                    Upon new order.</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="email05" />
                                                                <label class="custom-control-label" for="email05">
                                                                    New membership approval</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="email06" checked="" />
                                                                <label class="custom-control-label" for="email06">
                                                                    Member registration</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mr-2">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn iq-bg-danger">
                                                        cancel
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                                        <div class="iq-card">
                                            <div class="iq-card-header d-flex justify-content-between">
                                                <div class="iq-header-title">
                                                    <h4 class="card-title">Manage Contact</h4>
                                                </div>
                                            </div>
                                            <div class="iq-card-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="cno">Contact Number:</label>
                                                        <input type="text" class="form-control" id="cno"
                                                            value="001 2536 123 458" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="text" class="form-control" id="email"
                                                            value="Binijone@demo.com" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="url">Url:</label>
                                                        <input type="text" class="form-control" id="url"
                                                            value="https://getbootstrap.com" />
                                                    </div>

                                                    <!-- the sign up button -->

                                                    <div class="d-inline-block w-100">
                                                        <button type="submit" class="btn btn-primary float-right" name="submit">
                                                            Sign Up
                                                        </button>
                                                    </div>

                                                    <!-- end of the sign up button -->
                                                    <button type="reset" class="btn iq-bg-danger">
                                                        cancel
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ?????-?????- -->


                            </div>
                        </div>
                    </div>
                </div>
</form>
                <!-- Footer -->
                <footer class="bg-white iq-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6 text-right">
                                Copyright 2023 <a>CareHour</a> All Rights Reserved.
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
        <!-- sign up JavaScript -->
        <script src="../../js/sign-up.js"></script>
    </body>
<?php



 if(isset($_POST['submit'])){
    // echo "<script>alert('hello')</script>";
    
       $patient_data = new Patients();
               $patient_data->setFirst_name($_POST['fname']);
               $patient_data->setMiddle_name($_POST['mname']);
               $patient_data->setLast_name($_POST['lname']);
               $patient_data->setUsername($_POST['uname']);
               $patient_data->setEmail($_POST['email']);
               $patient_data->setPasswordd(encrypt($_POST['password']));
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
            //    header("Location: patient.php");
            //    exit();
 }

?>


</html>
