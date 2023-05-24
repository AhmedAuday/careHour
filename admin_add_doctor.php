<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';


  $admin = new Admins();
  if($admin->getAuthority() <= 0){
      header("Location: sign-in.php");
      exit();
  }
  $admin->setId($admin->getAuthority());
  $admin->getById();


  if(isset($_POST['submit'])){
    echo "<script>alert('hi')</script>";

       $admin = new Admins();
       $new_doctor = new Doctors();
               $new_doctor->setUser_id($admin->getById()); //TODO Cheak this plssse
               $new_doctor->setFirst_name($_POST['fname']);
               $new_doctor->setMiddle_name($_POST['mname']);
               $new_doctor->setLast_name($_POST['lname']);
               $new_doctor->setUsername($_POST['uname']);
               $new_doctor->setEmail($_POST['email']);
               $new_doctor->setPasswordd(encrypt($_POST['pwd']));
               $new_doctor->setImage_of_id("test1");
               $new_doctor->setProfile_image("test2");
               $new_doctor->setDob($_POST['dob']);
               $new_doctor->setSpecialty($_POST['specialty']);
               $new_doctor->setGender($_POST['gender']);
               $new_doctor->setAddresses($_POST['address']);
               $new_doctor->setEducation($_POST['education']);
               $new_doctor->setExperience_years($_POST['experience']);
               $new_doctor->setStart_office_hour($_POST['start_office_hour']);
               $new_doctor->setEnd_office_hour($_POST['end_office_hour']);
               $new_doctor->setBio($_POST['bio']);
               $new_doctor->setPhone($_POST['phone']);

               $new_doctor->add();
               
              

               
              
              
 }



?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no" />
        <title>Care Hour</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Typography CSS -->
        <link rel="stylesheet" href="css/typography.css" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css" />
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
            <div class="iq-sidebar">
                <div class="iq-sidebar-logo d-flex justify-content-between">
                    <a href="">
                        <img src="images/logo.png" class="img-fluid" alt="" />
                        <span>CareHour</span>
                    </a>
                    <div class="iq-menu-bt-sidebar">
                        <div class="iq-menu-bt align-self-center">
                            <div class="wrapper-menu">
                                <div class="main-circle"><i class="ri-more-fill"></i></div>
                                <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sidebar-scrollbar">
                    <nav class="iq-sidebar-menu">
                        <ul id="iq-sidebar-toggle" class="iq-menu">

                            <li class="iq-menu-title">
                                <i class="ri-subtract-line"></i><span>Doctor Dashboard</span>
                            </li>
                            <li>
                                <a href="admin_main_dashboard.php" class="iq-waves-effect"><i
                                        class="ri-briefcase-4-fill"></i><span>Dashboard</span></a>
                            </li>

                            <li>
                                <a href="admin_patient_dashboard.php" class="iq-waves-effect"><i
                                        class="ri-briefcase-4-fill"></i><span>Patient Dashboard</span></a>
                            </li>


                            <li>
                                <a href="admin_calendar.php" class="iq-waves-effect"><i
                                        class="ri-calendar-event-fill"></i><span>Calendar</span></a>
                            </li>


                            <li>
                                <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse"
                                    aria-expanded="false"><i class="ri-user-3-fill"></i><span>Doctors</span><i
                                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                    <li>
                                        <a href="admin_doctor-list.php"><i class="ri-file-list-fill"></i>All
                                            Doctors</a>
                                    </li>
                                    <li class="active">
                                        <a href="admin_add_doctor.php"><i class="ri-user-add-fill"></i>
                                            Add Doctor</a>
                                    </li>
                                    <li>
                                        <a href="admin_doctor_profile.php"><i class="ri-profile-fill"></i>Doctor
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a href="admin_doctor_profile_edit.php"><i class="ri-file-edit-fill"></i>
                                            Edit Doctor</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <div class="p-3"></div>
                </div>
            </div>
            <!-- Page Content  -->
            <div id="content-page" class="content-page">
                <!-- TOP Nav Bar -->
                <div class="iq-top-navbar">
                    <div class="iq-navbar-custom">
                        <div class="iq-sidebar-logo">
                            <div class="top-logo">
                                <a href="" class="logo">
                                    <img src="images/logo.png" class="img-fluid" alt="" />
                                    <span>CareHour</span>
                                </a>
                            </div>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <div class="iq-search-bar">
                                <form action="#" class="searchbox">
                                    <input type="text" class="text search-input" placeholder="Type
                                          here to search..." />
                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                </form>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="ri-menu-3-line"></i>
                            </button>
                            <div class="iq-menu-bt align-self-center">
                                <div class="wrapper-menu">
                                    <div class="main-circle"><i class="ri-more-fill"></i></div>
                                    <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                                </div>
                            </div>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list">
                                    <li class="nav-item">
                                        <a class="search-toggle iq-waves-effect language-title" href="#"><img
                                                src="images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1"
                                                style="height:
                        16px; width: 16px" /> English <i class="ri-arrow-down-s-line"></i></a>
                                        <div class="iq-sub-dropdown">
                                            <a class="iq-sub-card" href="#"><img src="images/small/flag-02.png"
                                                    alt="img-flaf" class="img-fluid mr-2" />French</a>
                                            <a class="iq-sub-card" href="#"><img src="images/small/flag-03.png"
                                                    alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                                            <a class="iq-sub-card" href="#"><img src="images/small/flag-04.png"
                                                    alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                                            <a class="iq-sub-card" href="#"><img src="images/small/flag-05.png"
                                                    alt="img-flaf" class="img-fluid mr-2" />German</a>
                                            <a class="iq-sub-card" href="#"><img src="images/small/flag-06.png"
                                                    alt="img-flaf" class="img-fluid mr-2" />Japanese</a>
                                        </div>
                                    </li>
                                    <li class="nav-item iq-full-screen">
                                        <a href="#" class="iq-waves-effect" id="btnFullscreen"><i
                                                class="ri-fullscreen-line"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="search-toggle iq-waves-effect">
                                            <i class="ri-notification-3-fill"></i>
                                            <span class="bg-danger dots"></span>
                                        </a>
                                        <div class="iq-sub-dropdown">
                                            <div class="iq-card shadow-none m-0">
                                                <div class="iq-card-body p-0">
                                                    <div class="bg-primary p-3">
                                                        <h5 class="mb-0 text-white">
                                                            All Notifications<small class="badge badge-light
                                float-right pt-1">4</small>
                                                        </h5>
                                                    </div>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="images/user/01.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Emma Watson Bini</h6>
                                                                <small class="float-right font-size-12">Just Now</small>
                                                                <p class="mb-0">95 MB</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="images/user/02.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">New customer is join</h6>
                                                                <small class="float-right font-size-12">5 days
                                                                    ago</small>
                                                                <p class="mb-0">Jond Bini</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="images/user/03.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Two customer is left</h6>
                                                                <small class="float-right font-size-12">2 days
                                                                    ago</small>
                                                                <p class="mb-0">Jond Bini</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="images/user/04.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">New Mail from Fenny</h6>
                                                                <small class="float-right font-size-12">3 days
                                                                    ago</small>
                                                                <p class="mb-0">Jond Bini</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="search-toggle iq-waves-effect">
                                            <i class="ri-mail-open-fill"></i>
                                            <span class="bg-primary count-mail"></span>
                                        </a>
                                        <div class="iq-sub-dropdown">
                                            <div class="iq-card shadow-none m-0">
                                                <div class="iq-card-body p-0">
                                                    <div class="bg-primary p-3">
                                                        <h5 class="mb-0 text-white">
                                                            All Messages<small class="badge badge-light
                                float-right pt-1">5</small>
                                                        </h5>
                                                    </div>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="images/user/01.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Bini Emma Watson</h6>
                                                                <small class="float-left font-size-12">13 Jun</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="images/user/02.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Lorem Ipsum Watson</h6>
                                                                <small class="float-left font-size-12">20 Apr</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="images/user/03.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Why do we use it?</h6>
                                                                <small class="float-left font-size-12">30 Jun</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="images/user/04.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Variations Passages</h6>
                                                                <small class="float-left font-size-12">12 Sep</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="images/user/05.jpg"
                                                                    alt="" />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Lorem Ipsum generators</h6>
                                                                <small class="float-left font-size-12">5 Dec</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="navbar-list">
                                <li>
                                    <a href="#" class="search-toggle iq-waves-effect d-flex
                                           align-items-center">
                                        <img src="images/user/1.jpg" class="img-fluid rounded mr-3" alt="user" />
                                        <div class="caption">
                                            <h6 class="mb-0 line-height">Bini Jets</h6>
                                            <span class="font-size-12">Available</span>
                                        </div>
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">
                                            <div class="iq-card-body p-0">
                                                <div class="bg-primary p-3">
                                                    <h5 class="mb-0 text-white line-height">
                                                        Hello Bini Jets
                                                    </h5>
                                                    <span class="text-white font-size-12">Available</span>
                                                </div>
                                                <a href="admin_profile.php" class="iq-sub-card
                          iq-bg-primary-hover">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <i class="ri-file-user-line"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">My Profile</h6>
                                                            <p class="mb-0 font-size-12">
                                                                View personal profile details.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="profile-edit.php" class="iq-sub-card
                          iq-bg-primary-hover">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <i class="ri-profile-line"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Edit Profile</h6>
                                                            <p class="mb-0 font-size-12">
                                                                Modify your personal details.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="account-setting.php" class="iq-sub-card
                          iq-bg-primary-hover">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <i class="ri-account-box-line"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Account settings</h6>
                                                            <p class="mb-0 font-size-12">
                                                                Manage your account parameters.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="d-inline-block w-100 text-center p-3">
                                                    <a class="bg-primary iq-sign-btn" href="sign-in.php"
                                                        role="button">Sign out<i class="ri-login-box-line
                              ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- TOP Nav Bar END -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Add New Doctor</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">

                                    <!-- TODO ### FIX THIS add upload to it### -->
                                    <form>
                                        <div class="form-group">
                                            <div class="add-img-user profile-img-edit">
                                                <img class="profile-pic img-fluid" src="images/user/11.png"
                                                    alt="profile-pic" />
                                                <div class="p-image">
                                                    <a href="javascript:void();" class="upload-button btn
                                                      iq-bg-primary">File Upload</a>
                                                    <input class="file-upload" type="file" accept="image/*" />
                                                </div>
                                            </div>
                                            <div class="img-extension mt-3">
                                                <div class="d-inline-block align-items-center">
                                                    <span>Only</span>
                                                    <a href="javascript:void();">.jpg</a>
                                                    <a href="javascript:void();">.png</a>
                                                    <a href="javascript:void();">.jpeg</a>
                                                    <span>allowed</span>

                                                </div>
                                            </div>
                                        </div>





                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">New Doctor Information</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="new-user-info">
                                        <form action="admin_add_doctor.php" method="post" id="add-doctor">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="fname">First Name:</label>
                                                    <input type="text" class="form-control" id="fname" name="fname"
                                                        placeholder="First Name" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="Mname">Middle Name:</label>
                                                    <input type="text" class="form-control" id="Mname" name="mname"
                                                        placeholder="Middle Name" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lname">Last Name:</label>
                                                    <input type="text" class="form-control" id="lname" name="lname"
                                                        placeholder="Last Name" />
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label for="lname">Speciality:</label>
                                                    <input type="text" class="form-control" id="Speciality"
                                                        name="speciality" placeholder="Speciality" />

                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label for="mobno">Mobile Number:</label>
                                                    <input type="text" class="form-control" id="mobno" name="phone"
                                                        placeholder="Mobile Number" />
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="dob">Date Of Birth:</label>
                                                    <input class="form-control" id="dob" value="19840124" name="dob" />
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="dob">Address:</label>
                                                    <input type="text" class="form-control" id="dob"
                                                        placeholder="Address" name="address" />
                                                </div>




                                                <div class="form-group col-md-6">
                                                    <label>Education</label>
                                                    <textarea class="form-control" name="education" rows="1"
                                                        style="line-height: 22px"></textarea>
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label>Bio</label>
                                                    <textarea class="form-control" name="bio" rows="1"
                                                        style="line-height: 22px"></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="officeS">Start Ofiice Hour:</label>
                                                    <input class="form-control" id="officeS" value="" type="time"
                                                        name="start_office_hour" />
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="officeE">End Ofiice Hour:</label>
                                                    <input class="form-control" id="officeE" value="" type="time"
                                                        name="end_office_hour" />
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="exe"> Experience Year </label>
                                                    <input class="form-control" id="exe" value="" type="number"
                                                        name="experience" />
                                                </div>
                                                <br>
                                                <div class="col-md-10">
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
                                            </div>

                                            <br><br>
                                            <h5 class="mb-3">Security</h5>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="uname">User Name:</label>
                                                    <input type="text" class="form-control" id="uname" name="uname"
                                                        placeholder="User Name" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email:</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="Email" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="pass">Password:</label>
                                                    <input type="password" class="form-control" id="pass"
                                                        placeholder="Password" name="pwd" />
                                                </div>

                                                <!-- TODO FIX THIS  -->
                                                <div class="form-group col-md-6">
                                                    <label for="rpass">Repeat Password:</label>
                                                    <input type="password" class="form-control" id="rpass"
                                                        placeholder="Repeat Password " />
                                                </div>

                                                <!-- TODO FIX THIS  -->
                                                <div class="form-group col-md-6">
                                                    <input type="file" class="custom-file-input"
                                                        id="validatedCustomFile" required="" name="photo_id">
                                                    <label class="custom-file-label" for="customFile">Upload ID
                                                        Photo:</label>
                                                </div>
                                            </div>

                                            <!-- TODO FIX THIS too if possible  -->
                                            <div class="checkbox">
                                                <label><input class="mr-2" type="checkbox" />Accept And continue</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                Add New Doctor
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="bg-white iq-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6 text-right">
                                Copyright 2023 <a href="#">CareHour</a> All Rights Reserved.
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
