<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  


  $patint=new Patients();
if($patint->getAuthority() <= 0){
    header("Location: sign-in.php");
    exit();
}
$patint->setId($patint->getAuthority());
$patint->getById();
// $id=$patint->getId();


  
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
        <!--<div id="loading">
            <div id="loading-center"></div>
        </div>-->
        <!-- loader END -->
        <!-- Wrapper Start -->
        <form method="POST">
        <div class="wrapper">
            <!-- Sidebar  -->
            <div class="iq-sidebar">
                <div class="iq-sidebar-logo d-flex justify-content-between">
                    <a href="patient.php">
                        <img src="/images/logo.png" class="img-fluid" alt="" />
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
                                <i class="ri-subtract-line"></i><span>Dashboard</span>
                            </li>

                            <li>
                                <a href="dashboard-3.php" class="iq-waves-effect"><i
                                        class="ri-group-fill"></i><span>Patient Dashboard</span></a>
                            </li>

                            <li>
                                <a href="document.php" class="iq-waves-effect"><i
                                        class="ri-group-fill"></i><span>document</span></a>
                            </li>

                            <li>
                                <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse"
                                    aria-expanded="true"><i class="ri-user-3-fill"></i><span>Doctors</span><i
                                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                    <li>
                                        <a href="doctor-list.php"><i class="ri-file-list-fill"></i>All Doctors</a>
                                    </li>

                                    <li>
                                        <a href="my-docotor-list.php"><i class="ri-profile-fill"></i>MY Doctors</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="chat.php" class="iq-waves-effect"><i
                                        class="ri-message-fill"></i><span>Chat</span></a>
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
                                <a href="index.php" class="logo">
                                    <img src="/images/logo.png" class="img-fluid" alt="" />
                                    <span>Care Hour</span>
                                </a>
                            </div>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                           
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
                                                src="/images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1"
                                                style="height: 16px; width: 16px" />
                                            English <i class="ri-arrow-down-s-line"></i></a>
                                        <div class="iq-sub-dropdown">
                                            <a class="iq-sub-card" href="#"><img src="/images/small/flag-02.png"
                                                    alt="img-flaf" class="img-fluid mr-2" />French</a>
                                            <a class="iq-sub-card" href="#"><img src="/images/small/flag-03.png"
                                                    alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                                            <a class="iq-sub-card" href="#"><img src="/images/small/flag-04.png"
                                                    alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                                            <a class="iq-sub-card" href="#"><img src="/images/small/flag-05.png"
                                                    alt="img-flaf" class="img-fluid mr-2" />German</a>
                                            <a class="iq-sub-card" href="#"><img src="/images/small/flag-06.png"
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
                                                            All Notifications<small
                                                                class="badge badge-light float-right pt-1">4</small>
                                                        </h5>
                                                    </div>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="/images/user/01.jpg"
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
                                                                <img class="avatar-40 rounded" src="/images/user/02.jpg"
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
                                                                <img class="avatar-40 rounded" src="/images/user/03.jpg"
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
                                                                <img class="avatar-40 rounded" src="/images/user/04.jpg"
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
                                                            All Messages<small
                                                                class="badge badge-light float-right pt-1">5</small>
                                                        </h5>
                                                    </div>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded" src="/images/user/01.jpg"
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
                                                                <img class="avatar-40 rounded" src="/images/user/02.jpg"
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
                                                                <img class="avatar-40 rounded" src="/images/user/03.jpg"
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
                                                                <img class="avatar-40 rounded" src="/images/user/04.jpg"
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
                                                                <img class="avatar-40 rounded" src="/images/user/05.jpg"
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
                                    <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                        <img src="/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user" />
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
                                                <a href="pprofile.php" class="iq-sub-card iq-bg-primary-hover">
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
                                                <a href="profile-edit.php" class="iq-sub-card iq-bg-primary-hover">
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

                                                <a href="privacy-setting.php" class="iq-sub-card iq-bg-primary-hover">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <i class="ri-lock-line"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Privacy Settings</h6>
                                                            <p class="mb-0 font-size-12">
                                                                Control your privacy parameters.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="d-inline-block w-100 text-center p-3">
                                                    <a class="bg-primary iq-sign-btn" href="logout.php"
                                                        role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
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
                        <div class="col-lg-12">
                            <div class="iq-card">
                                <div class="iq-card-body p-0">
                                    <div class="iq-edit-list">
                                        <ul class="iq-edit-profile d-flex nav nav-pills">
                                            <li class="col-md-3 p-0">
                                                <a class="nav-link active" data-toggle="pill"
                                                    href="#personal-information">
                                                    Personal Information
                                                </a>
                                            </li>
                                            <li class="col-md-3 p-0">
                                                <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                                    Change Password
                                                </a>
                                            </li>
                                            <!-- <li class="col-md-3 p-0">
                                                <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                                    Email and SMS
                                                </a>
                                            </li> -->
                                            <li class="col-md-3 p-0">
                                                <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                                    Manage Contact
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                                <img class="profile-pic" src="/images/user/11.png"
                                                                    alt="profile-pic" />
                                                                <div class="p-image">
                                                                    <i class="ri-pencil-line upload-button"></i>
                                                                    <input class="file-upload" type="file"
                                                                        accept="image/*" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="form-group col-sm-6">
                                                            <label for="fname">First Name:</label>
                                                            <input type="text" class="form-control" id="fname"
                                                            name="fname"
                                                                value="<?=$patint->getFirst_name()?>" />
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="lname">Middle Name:</label>
                                                            <input type="text" class="form-control" id="lname"
                                                            name="mname"
                                                                value="<?=$patint->getMiddle_name()?>" />
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="lname">Last Name:</label>
                                                            <input type="text" class="form-control" id="lname"
                                                            name="lname"
                                                                value="<?=$patint->getLast_name()?>" />
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="uname">User Name:</label>
                                                            <input type="text" class="form-control" id="uname"
                                                            name="uname"
                                                                value="<?=$patint->getUsername()?>" />
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="cname">City:</label>
                                                            <input type="text" class="form-control" id="cname"
                                                            name="city"
                                                                value="<?=$patint->getCity()?>" />
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                        <label>Blood Type:</label>
                                                        <select class="form-control" id="exampleFormControlSelect4"
                                                            name="blood">
                                                            <option value="<?php echo $patint->getBlood_type(); ?>" ><?php echo $patint->getBlood_type(); ?></option>
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
                                                        <div class="form-group col-sm-6">
                                                            <label class="d-block">Gender:</label>
                                                            <div
                                                                class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio6"
                                                                    name="customRadio1" class="custom-control-input"
                                                                    checked="" />
                                                                <label class="custom-control-label" for="customRadio6">
                                                                    Male
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="customRadio7"
                                                                    name="customRadio1" class="custom-control-input" />
                                                                <label class="custom-control-label" for="customRadio7">
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="dob">Date Of Birth:</label>
                                                            <input class="form-control" id="dob" value="<?php
                                                            $t = time() - $patint->getDate_of_birth();
                                                    echo showYear()-floor($t/86400/30/12); 
                                                    ?>">
                                                    </p>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label>Marital Status:</label>
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                <option selected="">Single</option>
                                                                <option>Married</option>
                                                                <option>Widowed</option>
                                                                <option>Divorced</option>
                                                                <option>Separated</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label>Age:</label>
                                                            
                                                            <input class="form-control" id="dob" value="<?php
                                                            $t = time() - $patint->getDate_of_birth();
                                                    echo floor($t/86400/30/12); 
                                                    ?>">
                                                        </div>
                                                    
                                                        
                                                        <div class="form-group col-sm-12">
                                                            <label>Address:</label>
                                                            <textarea class="form-control" name="address" rows="5"
                                                        name="address"
                                                                style="line-height: 22px">
                                                                <?php
                                                                echo $patint->getAddresses();
                                                                
                                                                ?>
                                             </textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mr-2" name="submit_update">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn iq-bg-danger">
                                                        cancel
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                                        <div class="iq-card">
                                            <div class="iq-card-header d-flex justify-content-between">
                                                <div class="iq-header-title">
                                                    <h4 class="card-title">Change Password</h4>
                                                </div>
                                            </div>
                                            <div class="iq-card-body">
                                                
                                                    <div class="form-group">
                                                        <label for="cpass">Current Password:</label>
                                                        
                                                        <input type="submit" name="forget" value="Forgot Password" class="float-right">
                                                        <input type="Password" class="form-control" id="cpass"
                                                        name="cpass"
                                                            />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="npass">New Password:</label>
                                                        <input type="Password" class="form-control" id="npass"
                                                        name="npass"
                                                            value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vpass">Verify Password:</label>
                                                        <input type="Password" class="form-control" id="vpass"
                                                        name="vpass"
                                                            value="" />
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mr-2" name="submit_update">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn iq-bg-danger">
                                                        cancel
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="tab-pane fade" id="emailandsms" role="tabpanel">
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
                                                                    for="email03">Someone adds you as a
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
                                                    <button type="submit" class="btn btn-primary mr-2" name="submit_update">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn iq-bg-danger">
                                                        cancel
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
--><div class="tab-pane fade" id="manage-contact" role="tabpanel">
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
                                                        name="phone"
                                                            value="<?=$patint->getPhone_number()?>" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="text" class="form-control" id="email"
                                                        name="email"
                                                            value="<?=$patint->getEmail()?>" />
                                                    </div>
                                                   
                                                    <button type="submit" class="btn btn-primary mr-2" name="submit_update">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn iq-bg-danger">
                                                        cancel
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
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
        <!-- lottie JavaScript -->
        <script src="/js/lottie.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="/js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="/js/custom.js"></script>
    </body>

</html>
<?php


if(isset($_POST['submit_update'])){




if($patint->getFirst_name()!=$_POST['fname']){
$patint->setFirst_name($_POST['fname']);


}


  if($patint->getMiddle_name()!=$_POST['mname']){

$patint->setMiddle_name($_POST['mname']);



  }


  if($patint->getLast_name()!=$_POST['lname']){

    $patint->setLast_name($_POST['lname']);
  }
  

  if($patint->getUsername()!=$_POST['uname']){
    $patint->setUsername($_POST['uname']);
  }
 

//   if($patint->getEmail()!=$_POST['email']){
// $patint->setEmail($_POST['email']);
//   }
  

 
  
 

 

  

  if($patint->getBlood_type()!=$_POST['blood']){
    $patint->setBlood_type($_POST['blood']);
  }
  

 

  if($patint->getAddresses()!=$_POST['address']){
    $patint->setAddresses($_POST['address']);
  }
 

  if($patint->getCity()!=$_POST['city']){
    $patint->setCity($_POST['city']);   
  }
 

  



$patint->update();






}

?>