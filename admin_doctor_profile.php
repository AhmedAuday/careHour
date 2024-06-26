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

$curent_doc = new Doctors();
$patient = new Patients();

$docc = new Doctors();
$cDoc= $docc->getAll();

$id=$_GET['id'];


$curent_doc->setId($id);
$curent_doc->getById();
// echo $curent_doc->getFirst_name();


// $patint->setId($patint->getAuthority());
// $patint->getById()

?>




<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>CareHour</title>
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
        <!--<div id="loading">
            <div id="loading-center"></div>
        </div>-->
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            <!-- Sidebar  -->
            <div class="iq-sidebar">
                <div class="iq-sidebar-logo d-flex justify-content-between">
                    <a href>
                        <img src="images/logo.png" class="img-fluid" alt />
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
                                <i class="ri-subtract-line"></i><span>Doctor
                                    Dashboard</span>
                            </li>
                            <li>
                                <a href="admin_main_dashboard.php" class="iq-waves-effect"><i
                                        class="ri-briefcase-4-fill"></i><span>Dashboard</span></a>
                            </li>

                            <li>
                                <a href="admin_patient_dashboard.php" class="iq-waves-effect"><i
                                        class="ri-briefcase-4-fill"></i><span>Patient
                                        Dashboard</span></a>
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
                                    <li>
                                        <a href="admin_add_doctor.php"><i class="ri-user-add-fill"></i>
                                            Add Doctor</a>
                                    </li>
                                    <li class="active">
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
                                <a href class="logo">
                                    <img src="images/logo.png" class="img-fluid" alt />
                                    <span>CareHour</span>
                                </a>
                            </div>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <div class="iq-search-bar">
                                <form action="#" class="searchbox">
                                    <input type="text" class="text search-input" placeholder="Type here to search..." />
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
                                                style="height: 16px; width: 16px" />
                                            English <i class="ri-arrow-down-s-line"></i></a>
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
                                                            All Notifications<small
                                                                class="badge badge-light float-right pt-1">4</small>
                                                        </h5>
                                                    </div>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class>
                                                                <img class="avatar-40 rounded" src="images/user/01.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Emma
                                                                    Watson Bini</h6>
                                                                <small class="float-right font-size-12">Just
                                                                    Now</small>
                                                                <p class="mb-0">95
                                                                    MB</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class>
                                                                <img class="avatar-40 rounded" src="images/user/02.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">New
                                                                    customer is
                                                                    join</h6>
                                                                <small class="float-right font-size-12">5
                                                                    days
                                                                    ago</small>
                                                                <p class="mb-0">Jond
                                                                    Bini</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class>
                                                                <img class="avatar-40 rounded" src="images/user/03.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Two
                                                                    customer is
                                                                    left</h6>
                                                                <small class="float-right font-size-12">2
                                                                    days
                                                                    ago</small>
                                                                <p class="mb-0">Jond
                                                                    Bini</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class>
                                                                <img class="avatar-40 rounded" src="images/user/04.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">New
                                                                    Mail from
                                                                    Fenny</h6>
                                                                <small class="float-right font-size-12">3
                                                                    days
                                                                    ago</small>
                                                                <p class="mb-0">Jond
                                                                    Bini</p>
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
                                                            <div class>
                                                                <img class="avatar-40 rounded" src="images/user/01.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Bini
                                                                    Emma Watson</h6>
                                                                <small class="float-left font-size-12">13
                                                                    Jun</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class>
                                                                <img class="avatar-40 rounded" src="images/user/02.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Lorem
                                                                    Ipsum Watson</h6>
                                                                <small class="float-left font-size-12">20
                                                                    Apr</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class>
                                                                <img class="avatar-40 rounded" src="images/user/03.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Why
                                                                    do we use
                                                                    it?</h6>
                                                                <small class="float-left font-size-12">30
                                                                    Jun</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class>
                                                                <img class="avatar-40 rounded" src="images/user/04.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Variations
                                                                    Passages</h6>
                                                                <small class="float-left font-size-12">12
                                                                    Sep</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class>
                                                                <img class="avatar-40 rounded" src="images/user/05.jpg"
                                                                    alt />
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Lorem
                                                                    Ipsum
                                                                    generators</h6>
                                                                <small class="float-left font-size-12">5
                                                                    Dec</small>
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
                                        <img src="images/user/1.jpg" class="img-fluid rounded mr-3" alt="user" />
                                        <div class="caption">
                                            <h6 class="mb-0 line-height"><?=$admin->getUsername()?></h6>
                                            <span class="font-size-12">Available</span>
                                        </div>
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">
                                            <div class="iq-card-body p-0">
                                                <div class="bg-primary p-3">
                                                    <h5 class="mb-0 text-white line-height">
                                                        Hello <?=$admin->getUsername()?>
                                                    </h5>
                                                    <span class="text-white font-size-12">Available</span>
                                                </div>
                                                <a href="admin_profile.php" class="iq-sub-card iq-bg-primary-hover">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <i class="ri-file-user-line"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">My
                                                                Profile</h6>
                                                            <p class="mb-0 font-size-12">
                                                                View personal
                                                                profile details.
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
                                                            <h6 class="mb-0">Edit
                                                                Profile</h6>
                                                            <p class="mb-0 font-size-12">
                                                                Modify your
                                                                personal
                                                                details.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="account-setting.php" class="iq-sub-card iq-bg-primary-hover">
                                                    <div class="media align-items-center">
                                                        <div class="rounded iq-card-icon iq-bg-primary">
                                                            <i class="ri-account-box-line"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Account
                                                                settings</h6>
                                                            <p class="mb-0 font-size-12">
                                                                Manage your
                                                                account
                                                                parameters.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="d-inline-block w-100 text-center p-3">
                                                    <a class="bg-primary iq-sign-btn" href="sign-in.php"
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
                        <div class="col-lg-4">

                            <div class="col-lg-12">
                                <div class="iq-card iq-card-block iq-card-stretch
                                         iq-card-height-half">
                                    <div class="iq-card-body">
                                        <h6>Doctors</h6>
                                        <h3><b><?php echo $curent_doc->getNumberOfRows(); ?></b></h3>
                                    </div>
                                    <div id="wave-chart-7"></div>
                                </div>





                            </div>
























                            <div class="iq-card">
                                <div class="iq-card-body pl-0 pr-0 pt-0">
                                    <div class="doctor-details-block">
                                        <div class="doc-profile-bg bg-primary" style="height: 150px"></div>
                                        <div class="doctor-profile text-center">
                                            <img src="images/user/11.png" alt="profile-img"
                                                class="avatar-130 img-fluid" />
                                        </div>
                                        <div class="text-center mt-3 pl-3 pr-3">
                                            <h4><b><?php   echo $curent_doc->getFirst_name();   ?></b></h4>
                                            <p>Doctor</p>
                                            <p class="mb-0">
                                                <?php   echo $curent_doc->getBio();   ?>
                                            </p>
                                        </div>
                                        <hr />
                                        <ul
                                            class="doctoe-sedual d-flex align-items-center justify-content-between p-0 m-0">
                                            <li class="text-center">
                                                <h3 class="counter"><?php echo $curent_doc->getExperience_years(); ?></h3>
                                                <span>Experience Year</span>
                                            </li>
                                            <li class="text-center">
                                                <h3 class="counter"><?php echo $curent_doc->getDob(); ?></h3>
                                                <span>Date</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-8">






                            <div class="col-lg-6">

                                <div class="iq-card iq-card-block iq-card-stretch
                                             iq-card-height-half">
                                    <div class="iq-card-body">
                                        <h6>NEW PATIENTS</h6>
                                        <h3><b><?php echo $patient->getNumberOfRows(); ?></b></h3>
                                    </div>
                                    <div id="wave-chart-8"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Personal
                                            Information</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="about-info m-0 p-0">
                                        <div class="row">
                                            <div class="col-4">First Name:</div>
                                            <div class="col-8"><?php echo $curent_doc->getFirst_name(); ?></div>
                                            <div class="col-4">Last Name:</div>
                                            <div class="col-8"><?php echo $curent_doc->getLast_name(); ?></div>
                                            <div class="col-4">Age:</div>
                                            <div class="col-8"><?php echo $curent_doc->getDob(); ?></div>
                                            <div class="col-4">Specialty:</div>
                                            <div class="col-8"><?php echo $curent_doc->getSpecialty(); ?></div>
                                            <div class="col-4">Email:</div>
                                            <div class="col-8">
                                                <a>
                                                    <?php echo $curent_doc->getEmail(); ?>
                                                </a>
                                            </div>
                                            <div class="col-4">Phone:</div>
                                            <div class="col-8">
                                                <a>+964
                                                    <?php echo $curent_doc->getPhone(); ?> </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- <div class="row">




                                <div class="col-md-12">
                                    <div class="iq-card">
                                        <div class="iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title">Education</h4>
                                            </div>
                                        </div>
                                        <div class="iq-card-body">
                                            <table class="table mb-0 table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Year</th>
                                                        <th scope="col">Degree</th>
                                                        <th scope="col">Institute</th>
                                                        <th scope="col">Result</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2010</td>
                                                        <td>MBBS, M.D</td>
                                                        <td>University of
                                                            Wyoming</td>
                                                        <td>
                                                            <span class="badge badge-success">Distinction</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2014</td>
                                                        <td>M.D. of Medicine</td>
                                                        <td>Netherland Medical
                                                            College</td>
                                                        <td>
                                                            <span class="badge badge-success">Distinction</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="iq-card">
                                        <div class="iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title">Experience</h4>
                                            </div>
                                        </div>
                                        <div class="iq-card-body">
                                            <table class="table mb-0 table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Year</th>
                                                        <th scope="col">Department</th>
                                                        <th scope="col">Position</th>
                                                        <th scope="col">Hospital</th>
                                                        <th scope="col">Feedback</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2014 - 2018</td>
                                                        <td>MBBS, M.D</td>
                                                        <td>Senior doctor</td>
                                                        <td>Midtown Medical
                                                            Clinic</td>
                                                        <td>
                                                            <span class="badge badge-primary">Good</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018 - 2020</td>
                                                        <td>M.D. of Medicine</td>
                                                        <td>Associate Prof.</td>
                                                        <td>Netherland Medical
                                                            College</td>
                                                        <td>
                                                            <span class="badge badge-success">excellence</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> -->



                        </div>
                    </div>

                    <div class="row">

                    </div>

                    <!-- <div class="row">
                        <div class="col-lg-8">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">New Appointments</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle text-primary" id="dropdownMenuButton5"
                                                data-toggle="dropdown">
                                                <i class="ri-more-fill"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton5">
                                                <a class="dropdown-item" href="#"><i class="ri-eye-fill
                  mr-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-pencil-fill mr-2"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-printer-fill mr-2"></i>Print</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-file-download-fill mr-2"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Patient</th>
                                                    <th scope="col">Doctor</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Timing</th>
                                                    <th scope="col">Contact</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Petey Cruiser</td>
                                                    <td>Dr.Monty Carlo</td>
                                                    <td>20/02/2020</td>
                                                    <td>8:00 AM</td>
                                                    <td>+1-202-555-0146</td>
                                                </tr>
                                                <tr>
                                                    <td>Anna Sthesia</td>
                                                    <td>Dr.Pete Sariya</td>
                                                    <td>25/02/2020</td>
                                                    <td>8:30 AM</td>
                                                    <td>+1-202-555-0164</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Molive</td>
                                                    <td>Dr.Brock Lee</td>
                                                    <td>25/02/2020</td>
                                                    <td>9:45 AM</td>
                                                    <td>+1-202-555-0153</td>
                                                </tr>
                                                <tr>
                                                    <td>Anna Mull</td>
                                                    <td>Dr.Barb Ackue</td>
                                                    <td>27/02/2020</td>
                                                    <td>11:30 AM</td>
                                                    <td>+1-202-555-0154</td>
                                                </tr>
                                                <tr>
                                                    <td>Paige Turner</td>
                                                    <td>Dr.Walter Melon</td>
                                                    <td>28/02/2020</td>
                                                    <td>3:30 PM</td>
                                                    <td>+1-202-555-0101</td>
                                                </tr>
                                                <tr>
                                                    <td>Don Stairs</td>
                                                    <td>Dr.Arty Ficial</td>
                                                    <td>28/02/2020</td>
                                                    <td>4:30 PM</td>
                                                    <td>+1-202-555-0176</td>
                                                </tr>
                                                <tr>
                                                    <td>Pat Agonia</td>
                                                    <td>Dr.Barb Ackue</td>
                                                    <td>29/02/2020</td>
                                                    <td>5:00 PM</td>
                                                    <td>+1-202-555-0194</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> -->

                </div>
                <!-- Footer -->
                <footer class="bg-white iq-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6 text-right">
                                Copyright 2023 <a href="#">CareHour</a> All
                                Rights Reserved.
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
