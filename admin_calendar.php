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
        <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no" />

        <script>
        // Ignore this in your implementation
        window.isMbscDemo = true;
        </script>

        <title>CareHour</title>
        <!-- Mobiscroll JS and CSS Includes -->
        <link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
        <script src="js/mobiscroll.javascript.min.js"></script>


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
        <!-- Full calendar -->
        <link href="/fullcalendar/core/main.css" rel="stylesheet" />
        <link href="/fullcalendar/daygrid/main.css" rel="stylesheet" />
        <link href="/fullcalendar/timegrid/main.css" rel="stylesheet" />
        <link href="/fullcalendar/list/main.css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/flatpickr.min.css" />

        <link rel="stylesheet" href="/css/calander.css" />





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
                    <a href="index.phpchat.php">
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



                            <li class="active">
                                <a href="doctor_calendar.php" class="iq-waves-effect"><i
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



                            <!-- Todo here -->
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
                                <a href="index.phpchat.php" class="logo">
                                    <img src="/images/logo.png" class="img-fluid" alt="" />
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
                                                <a href="pprofile.phpchat.php" class="iq-sub-card iq-bg-primary-hover">
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
                                                <a href="profile-edit.phpchat.php"
                                                    class="iq-sub-card iq-bg-primary-hover">
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

                                                <a href="privacy-setting.phpchat.php"
                                                    class="iq-sub-card iq-bg-primary-hover">
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
                    <div class="row row-eq-height">
                        <div class="col-md-3">
                            <div class="iq-card calender-small">
                                <div class="iq-card-body">
                                    <input type="text" class="flatpicker d-none" />
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Classification</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <a href="#"><i class="fa fa-plus mr-0" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <ul class="m-0 p-0 job-classification">
                                        <li class="">
                                            <i class="ri-check-line bg-danger"></i>Meeting
                                        </li>
                                        <li class="">
                                            <i class="ri-check-line bg-success"></i>Business travel
                                        </li>
                                        <li class="">
                                            <i class="ri-check-line bg-warning"></i>Personal Work
                                        </li>
                                        <li class="">
                                            <i class="ri-check-line bg-info"></i>Team Project
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Today's Schedule</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <ul class="m-0 p-0 today-schedule">
                                        <li class="d-flex">
                                            <div class="schedule-icon">
                                                <i class="ri-checkbox-blank-circle-fill text-primary"></i>
                                            </div>
                                            <div class="schedule-text">
                                                <span>Web Design</span>
                                                <span>09:00 to 12:00</span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="schedule-icon">
                                                <i class="ri-checkbox-blank-circle-fill text-success"></i>
                                            </div>
                                            <div class="schedule-text">
                                                <span>Participate in Design</span>
                                                <span>09:00 to 12:00</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div mbsc-page class="demo-create-read-update-delete-CRUD">
                                <div style="height:100%">
                                    <div id="demo-add-delete-event"></div>

                                    <div style="display: none">
                                        <div id="demo-add-popup">
                                            <div class="mbsc-form-group">
                                                <label>
                                                    Title
                                                    <input mbsc-input id="event-title">
                                                </label>
                                                <label>
                                                    Description
                                                    <textarea mbsc-textarea id="event-desc"></textarea>
                                                </label>
                                            </div>
                                            <div class="mbsc-form-group">
                                                <label>
                                                    All-day
                                                    <input mbsc-switch id="event-all-day" type="checkbox" />
                                                </label>
                                                <label>
                                                    Starts
                                                    <input mbsc-input id="start-input" />
                                                </label>
                                                <label>
                                                    Ends
                                                    <input mbsc-input id="end-input" />
                                                </label>
                                                <div id="event-date"></div>
                                                <div id="event-color-picker" class="event-color-c">
                                                    <div class="event-color-label">Color</div>
                                                    <div id="event-color-cont">
                                                        <div id="event-color" class="event-color"></div>
                                                    </div>
                                                </div>
                                                <label>
                                                    Show as busy
                                                    <input id="event-status-busy" mbsc-segmented type="radio"
                                                        name="event-status" value="busy">
                                                </label>
                                                <label>
                                                    Show as free
                                                    <input id="event-status-free" mbsc-segmented type="radio"
                                                        name="event-status" value="free">
                                                </label>
                                                <div class="mbsc-button-group">
                                                    <button class="mbsc-button-block" id="event-delete" mbsc-button
                                                        data-color="danger" data-variant="outline">Delete event</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="demo-event-color">
                                            <div class="crud-color-row">
                                                <div class="crud-color-c" data-value="#ffeb3c">
                                                    <div class="crud-color mbsc-icon mbsc-font-icon mbsc-icon-material-check"
                                                        style="background:#ffeb3c"></div>
                                                </div>
                                                <div class="crud-color-c" data-value="#ff9900">
                                                    <div class="crud-color mbsc-icon mbsc-font-icon mbsc-icon-material-check"
                                                        style="background:#ff9900"></div>
                                                </div>
                                                <div class="crud-color-c" data-value="#f44437">
                                                    <div class="crud-color mbsc-icon mbsc-font-icon mbsc-icon-material-check"
                                                        style="background:#f44437"></div>
                                                </div>
                                                <div class="crud-color-c" data-value="#ea1e63">
                                                    <div class="crud-color mbsc-icon mbsc-font-icon mbsc-icon-material-check"
                                                        style="background:#ea1e63"></div>
                                                </div>
                                                <div class="crud-color-c" data-value="#9c26b0">
                                                    <div class="crud-color mbsc-icon mbsc-font-icon mbsc-icon-material-check"
                                                        style="background:#9c26b0"></div>
                                                </div>
                                            </div>
                                            <div class="crud-color-row">
                                                <div class="crud-color-c" data-value="#3f51b5">
                                                    <div class="crud-color mbsc-icon mbsc-font-icon mbsc-icon-material-check"
                                                        style="background:#3f51b5"></div>
                                                </div>
                                                <div class="crud-color-c" data-value="">
                                                    <div
                                                        class="crud-color mbsc-icon mbsc-font-icon mbsc-icon-material-check">
                                                    </div>
                                                </div>
                                                <div class="crud-color-c" data-value="#009788">
                                                    <div class="crud-color mbsc-icon mbsc-font-icon mbsc-icon-material-check"
                                                        style="background:#009788"></div>
                                                </div>
                                                <div class="crud-color-c" data-value="#4baf4f">
                                                    <div class="crud-color mbsc-icon mbsc-font-icon mbsc-icon-material-check"
                                                        style="background:#4baf4f"></div>
                                                </div>
                                                <div class="crud-color-c" data-value="#7e5d4e">
                                                    <div class="crud-color mbsc-icon mbsc-font-icon mbsc-icon-material-check"
                                                        style="background:#7e5d4e"></div>
                                                </div>
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
                                Copyright 2023 <a href="#">CareHour</a> All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->
            </div>
        </div>


        <!-- 
        <script>
        
        </script> -->













        <script src="/js/calandar.js"></script>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.counterup.min.js"></script>
        <script src="/js/jquery.appear.js"></script>
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <!-- Appear JavaScript -->
        <!-- Countdown JavaScript -->
        <script src="/js/countdown.min.js"></script>
        <!-- Counterup JavaScript -->
        <script src="/js/waypoints.min.js"></script>
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
        <!-- Smooth Scrollbar JavaScript -->
        <script src="/js/smooth-scrollbar.js"></script>
        <!-- lottie JavaScript -->
        <script src="/js/lottie.js"></script>
        <!-- Full calendar -->
        <script src="/fullcalendar/core/main.js"></script>
        <script src="/fullcalendar/daygrid/main.js"></script>
        <script src="/fullcalendar/timegrid/main.js"></script>
        <script src="/fullcalendar/list/main.js"></script>
        <!-- Flatpicker Js -->
        <script src="/js/flatpickr.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="/js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="/js/custom.js"></script>
    </body>

</html>
