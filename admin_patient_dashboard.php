<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no" />
        <title>Doctor Dash</title>
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
        <!-- Full calendar -->
        <link href="fullcalendar/core/main.css" rel="stylesheet" />
        <link href="fullcalendar/daygrid/main.css" rel="stylesheet" />
        <link href="fullcalendar/timegrid/main.css" rel="stylesheet" />
        <link href="fullcalendar/list/main.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
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
                                <i class="ri-subtract-line"></i><span>Dashboard</span>
                            </li>
                            <li>
                                <a href="admin_main_dashboard.php" class="iq-waves-effect"><i
                                        class="ri-briefcase-4-fill"></i><span>Dashboard</span></a>
                            </li>

                            <li class="active">
                                <a href="admin_patient_dashboard.php" class="iq-waves-effect"><i
                                        class="ri-briefcase-4-fill"></i><span>Patient Dashboard</span></a>
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
                            <li>
                                <a href="calendar.php" class="iq-waves-effect"><i
                                        class="ri-calendar-event-fill"></i><span>Calendar</span></a>
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
                                                            All Messages<small
                                                                class="badge badge-light float-right pt-1">5</small>
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
                                                <a href="admin_profile.php" class="iq-sub-card iq-bg-primary-hover">
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
                                                <a href="account-setting.php" class="iq-sub-card iq-bg-primary-hover">
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
                        <div class="col-lg-8">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Activity Statistic</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="home-chart-05"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body p-0 rounded">
                                    <img src="images/page-img/39.png" class="img-fluid rounded" alt="banner-img" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Patient Distribution</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="doc-chart-01" style="height: 415px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Patients In</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="bar-chart-6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Patients Satisfactions</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <h2>
                                        3,897<span class="text-success font-size-14 ml-3 mr-3"><i
                                                class="ri-arrow-up-fill mr-2"></i>+3.3%</span><small
                                            class="text-secondary font-size-14">Generated by clients</small>
                                    </h2>
                                    <div class="progress mt-3">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="20"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="10"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                                        <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="10"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                    </div>
                                    <div class="table-responsive mt-4">
                                        <table class="table mb-0 table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="iq-profile-avatar status-online mt-4"></div>
                                                    </td>
                                                    <td>
                                                        <h4>Excellent</h4>
                                                    </td>
                                                    <td><span class="text-muted">2400</span></td>
                                                    <td>60%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="iq-profile-avatar status-blue mt-4"></div>
                                                    </td>
                                                    <td>
                                                        <h4>Very Good</h4>
                                                    </td>
                                                    <td><span class="text-muted">1200</span></td>
                                                    <td>30%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="iq-profile-avatar status-primary mt-4"></div>
                                                    </td>
                                                    <td>
                                                        <h4>Good</h4>
                                                    </td>
                                                    <td><span class="text-muted">240</span></td>
                                                    <td>6%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="iq-profile-avatar status-info mt-4"></div>
                                                    </td>
                                                    <td>
                                                        <h4>Fair</h4>
                                                    </td>
                                                    <td><span class="text-muted">80</span></td>
                                                    <td>2%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="iq-profile-avatar status-away mt-4"></div>
                                                    </td>
                                                    <td>
                                                        <h4>Poor</h4>
                                                    </td>
                                                    <td><span class="text-muted">40</span></td>
                                                    <td>1%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="iq-profile-avatar status-danger mt-4"></div>
                                                    </td>
                                                    <td>
                                                        <h4>Very Poor</h4>
                                                    </td>
                                                    <td><span class="text-muted">40</span></td>
                                                    <td>1%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Tasks</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <ul class="nav nav-pills" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                    role="tab" aria-controls="home" aria-selected="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                    role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                                    role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck11" />
                                                    <label class="custom-control-label" for="customCheck11">You should
                                                        check in some of
                                                        below.</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck10" />
                                                    <label class="custom-control-label" for="customCheck10">Get the
                                                        address of customer</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck12" />
                                                    <label class="custom-control-label" for="customCheck12">Contact
                                                        Vendor for parcel</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck13" />
                                                    <label class="custom-control-label" for="customCheck13">Refule
                                                        delivery truck</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck14" />
                                                    <label class="custom-control-label" for="customCheck14">Pick up for
                                                        order no. 334</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck15" />
                                                    <label class="custom-control-label" for="customCheck15">Pay taxes
                                                        for every bill</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck16" />
                                                    <label class="custom-control-label" for="customCheck16">I am
                                                        designers &amp; I have no
                                                        life</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck17" />
                                                    <label class="custom-control-label" for="customCheck17">This is a
                                                        good product. Buy it
                                                        :)
                                                    </label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck18" />
                                                    <label class="custom-control-label" for="customCheck18">You should
                                                        check in on some of
                                                        below.</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck19" />
                                                    <label class="custom-control-label" for="customCheck19">You should
                                                        check in on some of
                                                        below.</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                            aria-labelledby="contact-tab">
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck110" />
                                                    <label class="custom-control-label" for="customCheck110">You should
                                                        check in on some of
                                                        below.</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck111" />
                                                    <label class="custom-control-label" for="customCheck111">You should
                                                        check in on some of
                                                        below.</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                            <div class="d-flex tasks-card" role="alert">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck112" />
                                                    <label class="custom-control-label" for="customCheck112">You should
                                                        check in on some of
                                                        below.</label>
                                                </div>
                                                <button type="button" class="close ml-auto" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="ri-close-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Patient Timeline</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle text-primary" id="dropdownMenuButton4"
                                                data-toggle="dropdown">
                                                View All
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton4">
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
                                    <ul class="iq-timeline">
                                        <li>
                                            <div class="timeline-dots"></div>
                                            <h6 class="float-left mb-1">Patient Checkup</h6>
                                            <small class="float-right mt-1">23 November 2019</small>
                                            <div class="d-inline-block w-100">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-dots border-success"></div>
                                            <h6 class="float-left mb-1">Patient Admit</h6>
                                            <small class="float-right mt-1">24 November 2019</small>
                                            <div class="d-inline-block w-100">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-dots border-primary"></div>
                                            <h6 class="float-left mb-1">Treatment Starts</h6>
                                            <small class="float-right mt-1">24 November 2019</small>
                                            <div class="d-inline-block w-100">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-dots border-warning"></div>
                                            <h6 class="float-left mb-1">Patient Discharge</h6>
                                            <small class="float-right mt-1">30 November 2019</small>
                                            <div class="d-inline-block w-100">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Quisque scelerisque
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Patients Lists</h4>
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
                                                    <th scope="col">E-mail Id</th>
                                                    <th scope="col">Contact</th>
                                                    <th scope="col">Disease</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Petey Cruiser</td>
                                                    <td>peteycruiser01@gmail.com</td>
                                                    <td>+1-202-555-0146</td>
                                                    <td>Fever</td>
                                                </tr>
                                                <tr>
                                                    <td>Anna Sthesia</td>
                                                    <td>annasthesia121@gmail.com</td>
                                                    <td>+1-202-555-0164</td>
                                                    <td>Cancer</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Molive</td>
                                                    <td>paulmolive30@gmail.com</td>
                                                    <td>+1-202-555-0153</td>
                                                    <td>Diabetes</td>
                                                </tr>
                                                <tr>
                                                    <td>Anna Mull</td>
                                                    <td>annamull07@gmail.com</td>
                                                    <td>+1-202-555-0154</td>
                                                    <td>eye</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Patients Reports</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <ul class="report-lists m-0 p-0">
                                        <li class="d-flex mb-4 align-items-center">
                                            <div class="media-support-info">
                                                <h6>X-ray.pdf</h6>
                                                <a href="#">View report</a>
                                            </div>
                                            <button type="button" class="btn btn-success" name="button">
                                                Download
                                            </button>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <div class="media-support-info">
                                                <h6>pathologyreport.pdf</h6>
                                                <a href="#">View report</a>
                                            </div>
                                            <button type="button" class="btn btn-success" name="button">
                                                Download
                                            </button>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <div class="media-support-info">
                                                <h6>laboratoryreports.pdf</h6>
                                                <a href="#">View report</a>
                                            </div>
                                            <button type="button" class="btn btn-danger" name="button">
                                                On Hold
                                            </button>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="media-support-info">
                                                <h6>operativereport.pdf</h6>
                                                <a href="#">View report</a>
                                            </div>
                                            <button type="button" class="btn btn-success" name="button">
                                                Download
                                            </button>
                                        </li>
                                    </ul>
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
        <!-- am core JavaScript -->
        <script src="js/core.js"></script>
        <!-- am charts JavaScript -->
        <script src="js/charts.js"></script>
        <!-- am animated JavaScript -->
        <script src="js/animated.js"></script>
        <!-- am kelly JavaScript -->
        <script src="js/kelly.js"></script>
        <!-- Flatpicker Js -->
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <!-- Chart Custom JavaScript -->
        <script src="js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="js/custom.js"></script>
    </body>

</html>
