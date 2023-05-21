<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no" />
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
        <div id="loading">
            <div id="loading-center"></div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            <!-- Sidebar  -->
            <div class="iq-sidebar">
                <div class="iq-sidebar-logo d-flex justify-content-between">
                    <a href="index.php">
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
                                    aria-expanded="false"><i class="ri-user-3-fill"></i><span>Doctors</span><i
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

                            <li class="active">
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
                <div class="iq-top-navbar header-top-sticky">
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
                        <div class="col-lg-3 chat-data-left scroller">
                            <div class="chat-sidebar-channel scroller pl-3">
                                <div class="d-flex align-items-center justify-content-between border-bottom mb-3">
                                    <h5 class="">Public Channels</h5>
                                    <button type="submit" class="close-btn-res">
                                        <i class="ri-close-fill"></i>
                                    </button>
                                </div>
                                <ul class="iq-chat-ui nav flex-column nav-pills">
                                    <li>
                                        <a data-toggle="pill" href="#chatbox1">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                    <img src="/images/user/05.jpg" alt="chatuserimage"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <div class="chat-sidebar-name">
                                                    <h6 class="mb-0">Team Discussions</h6>
                                                    <span>Lorem Ipsum is</span>
                                                </div>
                                                <div class="chat-meta float-right text-center mt-2">
                                                    <div class="chat-msg-counter bg-primary text-white">
                                                        20
                                                    </div>
                                                    <span class="text-nowrap">05 min</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#chatbox2">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                    <img src="/images/user/06.jpg" alt="chatuserimage"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <div class="chat-sidebar-name">
                                                    <h6 class="mb-0">Announcement</h6>
                                                    <span>This Sunday we</span>
                                                </div>
                                                <div class="chat-meta float-right text-center mt-2">
                                                    <div class="chat-msg-counter bg-primary text-white">
                                                        10
                                                    </div>
                                                    <span class="text-nowrap">10 min</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="mt-3">Private Channels</h5>
                                <ul class="iq-chat-ui nav flex-column nav-pills">
                                    <li>
                                        <a data-toggle="pill" href="#chatbox3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                    <img src="/images/user/07.jpg" alt="chatuserimage"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-warning"></i></span>
                                                </div>
                                                <div class="chat-sidebar-name">
                                                    <h6 class="mb-0">Doctors</h6>
                                                    <span>There are many </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#chatbox4">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                    <img src="/images/user/08.jpg" alt="chatuserimage"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <div class="chat-sidebar-name">
                                                    <h6 class="mb-0">Nurses</h6>
                                                    <span>passages of Lorem</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#chatbox5">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                    <img src="/images/user/09.jpg" alt="chatuserimage"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-info"></i></span>
                                                </div>
                                                <div class="chat-sidebar-name">
                                                    <h6 class="mb-0">OT Special</h6>
                                                    <span>Lorem Ipsum used</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="mt-3">Direct Message</h5>
                                <ul class="iq-chat-ui nav flex-column nav-pills">
                                    <li>
                                        <a data-toggle="pill" href="#chatbox6">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                    <img src="/images/user/10.jpg" alt="chatuserimage"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-dark"></i></span>
                                                </div>
                                                <div class="chat-sidebar-name">
                                                    <h6 class="mb-0">Paul Molive</h6>
                                                    <span>translation by</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#chatbox7">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                    <img src="//images/user/05.jpg" alt="chatuserimage"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <div class="chat-sidebar-name">
                                                    <h6 class="mb-0">Paige Turner</h6>
                                                    <span>Lorem Ipsum which</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#chatbox8">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                    <img src="/images/user/06.jpg" alt="chatuserimage"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-primary"></i></span>
                                                </div>
                                                <div class="chat-sidebar-name">
                                                    <h6 class="mb-0">Barb Ackue</h6>
                                                    <span>simply random text</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#chatbox9">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                    <img src="/images/user/07.jpg" alt="chatuserimage"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-danger"></i></span>
                                                </div>
                                                <div class="chat-sidebar-name">
                                                    <h6 class="mb-0">Maya Didas</h6>
                                                    <span> but also the leap</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#chatbox10">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                    <img src="/images/user/08.jpg" alt="chatuserimage"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-warning"></i></span>
                                                </div>
                                                <div class="chat-sidebar-name">
                                                    <h6 class="mb-0">Monty Carlo</h6>
                                                    <span>Contrary to popular</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 chat-data p-0 chat-data-right">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="default-block" role="tabpanel">
                                    <div class="chat-start">
                                        <span class="iq-start-icon text-primary"><i
                                                class="ri-message-3-line"></i></span>
                                        <button id="chat-start" class="btn bg-primary mt-3">
                                            Start Conversation!
                                        </button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chatbox1" role="tabpanel">
                                    <div class="chat-head">
                                        <header
                                            class="d-flex justify-content-between align-items-center pt-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                    <i class="ri-menu-3-line"></i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                    <img src="/images/user/05.jpg" alt="avatar"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <h5 class="mb-0">Team Discussions</h5>
                                            </div>
                                            <div class="chat-user-detail-popup scroller">
                                                <div class="user-profile text-center">
                                                    <button type="submit" class="close-popup p-3">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                    <div class="user mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="/images/user/05.jpg" alt="avatar" />
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Bini Jordan</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Cape Town, RSA</p>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="chatuser-detail text-left mt-4">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Bini Name:</div>
                                                            <div class="col-6 col-md-6 text-right">Bini</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Tel:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                072 143 9920
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">
                                                                Date Of Birth:
                                                            </div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                July 12, 1989
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Gender:</div>
                                                            <div class="col-6 col-md-6 text-right">Male</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Language:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Engliah
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                                <a href="javascript:void();" class="chat-icon-phone iq-bg-primary">
                                                    <i class="ri-phone-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-video iq-bg-primary">
                                                    <i class="ri-vidicon-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-delete iq-bg-primary">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                <span class="dropdown iq-bg-primary">
                                                    <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer pr-0"
                                                        id="dropdownMenuButton02" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                    <span class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton02">
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                            Pin to top</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete chat</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-ban" aria-hidden="true"></i>
                                                            Block</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="chat-content scroller">
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/05.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>
                                                        Hey John, I am looking for the best admin template.
                                                    </p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Absolutely!</p>
                                                    <p>
                                                        XRay Dashboard is the responsive bootstrap 4 admin
                                                        template.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/05.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Looks clean and fresh UI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/05.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Okay Thanks..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                        <form class="d-flex align-items-center" action="javascript:void(0);">
                                            <div class="chat-attagement d-flex">
                                                <a href="javascript:void();"><i class="fa fa-smile-o pr-3"
                                                        aria-hidden="true"></i></a>
                                                <a href="javascript:void();"><i class="fa fa-paperclip pr-3"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <input type="text" class="form-control mr-3"
                                                placeholder="Type your message" />
                                            <button type="submit" class="btn btn-primary d-flex align-items-center p-2">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span
                                                    class="d-none d-lg-block ml-1">Send</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chatbox2" role="tabpanel">
                                    <div class="chat-head">
                                        <header
                                            class="d-flex justify-content-between align-items-center pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                    <i class="ri-menu-3-line"></i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                    <img src="/images/user/06.jpg" alt="avatar"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <h5 class="mb-0">Announcement</h5>
                                            </div>
                                            <div class="chat-user-detail-popup scroller">
                                                <div class="user-profile text-center">
                                                    <button type="submit" class="close-popup p-3">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                    <div class="user mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="/images/user/06.jpg" alt="avatar" />
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Mark Jordan</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Atlanta, USA</p>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="chatuser-detail text-left mt-4">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Bini Name:</div>
                                                            <div class="col-6 col-md-6 text-right">Mark</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Tel:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                072 143 9920
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">
                                                                Date Of Birth:
                                                            </div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                July 12, 1989
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Gender:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Female
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Language:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Engliah
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                                <a href="javascript:void();" class="chat-icon-phone">
                                                    <i class="ri-phone-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-video">
                                                    <i class="ri-vidicon-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                <span class="dropdown">
                                                    <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        id="dropdownMenuButton01" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                    <span class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton01">
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                            Pin to top</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete chat</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-ban" aria-hidden="true"></i>
                                                            Block</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="chat-content scroller">
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/06.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>
                                                        Hey John, I am looking for the best admin template.
                                                    </p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Absolutely!</p>
                                                    <p>
                                                        XRay Dashboard is the responsive bootstrap 4 admin
                                                        template.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/06.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Looks clean and fresh UI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/06.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Okay Thanks..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                        <form class="d-flex align-items-center" action="javascript:void(0);">
                                            <div class="chat-attagement d-flex">
                                                <a href="javascript:void();"><i class="fa fa-smile-o pr-3"
                                                        aria-hidden="true"></i></a>
                                                <a href="javascript:void();"><i class="fa fa-paperclip pr-3"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <input type="text" class="form-control mr-3"
                                                placeholder="Type your message" />
                                            <button type="submit" class="btn btn-primary d-flex align-items-center p-2">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span
                                                    class="d-none d-lg-block ml-1">Send</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chatbox3" role="tabpanel">
                                    <div class="chat-head">
                                        <header
                                            class="d-flex justify-content-between align-items-center pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                    <i class="ri-menu-3-line"></i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                    <img src="/images/user/07.jpg" alt="avatar"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <h5 class="mb-0">Designer</h5>
                                            </div>
                                            <div class="chat-user-detail-popup scroller">
                                                <div class="user-profile text-center">
                                                    <button type="submit" class="close-popup p-3">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                    <div class="user mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="/images/user/07.jpg" alt="avatar" />
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Paige Turner</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Cape Town, RSA</p>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="chatuser-detail text-left mt-4">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Bini Name:</div>
                                                            <div class="col-6 col-md-6 text-right">pai</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Tel:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                072 143 9920
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">
                                                                Date Of Birth:
                                                            </div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                July 12, 1989
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Gender:</div>
                                                            <div class="col-6 col-md-6 text-right">Male</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Language:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Engliah
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                                <a href="javascript:void();" class="chat-icon-phone">
                                                    <i class="ri-phone-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-video">
                                                    <i class="ri-vidicon-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                <span class="dropdown">
                                                    <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        id="dropdownMenuButton1" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                    <span class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                            Pin to top</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete chat</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-ban" aria-hidden="true"></i>
                                                            Block</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="chat-content scroller">
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/07.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>
                                                        Hey John, I am looking for the best admin template.
                                                    </p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Absolutely!</p>
                                                    <p>
                                                        XRay Dashboard is the responsive bootstrap 4 admin
                                                        template.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/07.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Looks clean and fresh UI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/07.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Okay Thanks..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                        <form class="d-flex align-items-center" action="javascript:void(0);">
                                            <div class="chat-attagement d-flex">
                                                <a href="javascript:void();"><i class="fa fa-smile-o pr-3"
                                                        aria-hidden="true"></i></a>
                                                <a href="javascript:void();"><i class="fa fa-paperclip pr-3"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <input type="text" class="form-control mr-3"
                                                placeholder="Type your message" />
                                            <button type="submit" class="btn btn-primary d-flex align-items-center p-2">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span
                                                    class="d-none d-lg-block ml-1">Send</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chatbox4" role="tabpanel">
                                    <div class="chat-head">
                                        <header
                                            class="d-flex justify-content-between align-items-center pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                    <i class="ri-menu-3-line"></i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                    <img src="/images/user/08.jpg" alt="avatar"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <h5 class="mb-0">Developer</h5>
                                            </div>
                                            <div class="chat-user-detail-popup scroller">
                                                <div class="user-profile text-center">
                                                    <button type="submit" class="close-popup p-3">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                    <div class="user mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="/images/user/08.jpg" alt="avatar" />
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Barb Ackue</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Cape Town, RSA</p>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="chatuser-detail text-left mt-4">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Bini Name:</div>
                                                            <div class="col-6 col-md-6 text-right">Babe</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Tel:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                072 143 9920
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">
                                                                Date Of Birth:
                                                            </div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                July 12, 1989
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Gender:</div>
                                                            <div class="col-6 col-md-6 text-right">Feale</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Language:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Engliah
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                                <a href="javascript:void();" class="chat-icon-phone">
                                                    <i class="ri-phone-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-video">
                                                    <i class="ri-vidicon-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                <span class="dropdown">
                                                    <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        id="dropdownMenuButton2" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                    <span class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton2">
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                            Pin to top</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete chat</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-ban" aria-hidden="true"></i>
                                                            Block</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="chat-content scroller">
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/08.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>
                                                        Hey John, I am looking for the best admin template.
                                                    </p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Absolutely!</p>
                                                    <p>
                                                        XRay Dashboard is the responsive bootstrap 4 admin
                                                        template.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/08.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Looks clean and fresh UI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/08.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Okay Thanks..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                        <form class="d-flex align-items-center" action="javascript:void(0);">
                                            <div class="chat-attagement d-flex">
                                                <a href="javascript:void();"><i class="fa fa-smile-o pr-3"
                                                        aria-hidden="true"></i></a>
                                                <a href="javascript:void();"><i class="fa fa-paperclip pr-3"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <input type="text" class="form-control mr-3"
                                                placeholder="Type your message" />
                                            <button type="submit" class="btn btn-primary d-flex align-items-center p-2">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span
                                                    class="d-none d-lg-block ml-1">Send</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chatbox5" role="tabpanel">
                                    <div class="chat-head">
                                        <header
                                            class="d-flex justify-content-between align-items-center pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                    <i class="ri-menu-3-line"></i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                    <img src="/images/user/09.jpg" alt="avatar"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <h5 class="mb-0">Testing Team</h5>
                                            </div>
                                            <div class="chat-user-detail-popup scroller">
                                                <div class="user-profile text-center">
                                                    <button type="submit" class="close-popup p-3">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                    <div class="user mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="/images/user/09.jpg" alt="avatar" />
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Peta Saireya</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Cape Town, RSA</p>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="chatuser-detail text-left mt-4">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Bini Name:</div>
                                                            <div class="col-6 col-md-6 text-right">Pet</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Tel:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                072 143 9920
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">
                                                                Date Of Birth:
                                                            </div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                July 12, 1989
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Gender:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Female
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Language:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Engliah
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                                <a href="javascript:void();" class="chat-icon-phone">
                                                    <i class="ri-phone-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-video">
                                                    <i class="ri-vidicon-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                <span class="dropdown">
                                                    <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        id="dropdownMenuButton3" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                    <span class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton3">
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                            Pin to top</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete chat</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-ban" aria-hidden="true"></i>
                                                            Block</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="chat-content scroller">
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/09.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>
                                                        Hey John, I am looking for the best admin template.
                                                    </p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Absolutely!</p>
                                                    <p>
                                                        XRay Dashboard is the responsive bootstrap 4 admin
                                                        template.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/09.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Looks clean and fresh UI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/09.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Okay Thanks..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                        <form class="d-flex align-items-center" action="javascript:void(0);">
                                            <div class="chat-attagement d-flex">
                                                <a href="javascript:void();"><i class="fa fa-smile-o pr-3"
                                                        aria-hidden="true"></i></a>
                                                <a href="javascript:void();"><i class="fa fa-paperclip pr-3"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <input type="text" class="form-control mr-3"
                                                placeholder="Type your message" />
                                            <button type="submit" class="btn btn-primary d-flex align-items-center p-2">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span
                                                    class="d-none d-lg-block ml-1">Send</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chatbox6" role="tabpanel">
                                    <div class="chat-head">
                                        <header
                                            class="d-flex justify-content-between align-items-center pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                    <i class="ri-menu-3-line"></i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                    <img src="/images/user/10.jpg" alt="avatar"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <h5 class="mb-0">Paul Molive</h5>
                                            </div>
                                            <div class="chat-user-detail-popup scroller">
                                                <div class="user-profile text-center">
                                                    <button type="submit" class="close-popup p-3">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                    <div class="user mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="/images/user/10.jpg" alt="avatar" />
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Paul Molive</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Cape Town, RSA</p>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="chatuser-detail text-left mt-4">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Bini Name:</div>
                                                            <div class="col-6 col-md-6 text-right">Pau</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Tel:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                072 143 9920
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">
                                                                Date Of Birth:
                                                            </div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                July 12, 1989
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Gender:</div>
                                                            <div class="col-6 col-md-6 text-right">Male</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Language:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Engliah
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                                <a href="javascript:void();" class="chat-icon-phone">
                                                    <i class="ri-phone-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-video">
                                                    <i class="ri-vidicon-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                <span class="dropdown">
                                                    <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        id="dropdownMenuButton4" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                    <span class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton4">
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                            Pin to top</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete chat</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-ban" aria-hidden="true"></i>
                                                            Block</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="chat-content scroller">
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/10.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>
                                                        Hey John, I am looking for the best admin template.
                                                    </p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Absolutely!</p>
                                                    <p>
                                                        XRay Dashboard is the responsive bootstrap 4 admin
                                                        template.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/10.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Looks clean and fresh UI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/10.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Okay Thanks..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                        <form class="d-flex align-items-center" action="javascript:void(0);">
                                            <div class="chat-attagement d-flex">
                                                <a href="javascript:void();"><i class="fa fa-smile-o pr-3"
                                                        aria-hidden="true"></i></a>
                                                <a href="javascript:void();"><i class="fa fa-paperclip pr-3"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <input type="text" class="form-control mr-3"
                                                placeholder="Type your message" />
                                            <button type="submit" class="btn btn-primary d-flex align-items-center p-2">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span
                                                    class="d-none d-lg-block ml-1">Send</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chatbox7" role="tabpanel">
                                    <div class="chat-head">
                                        <header
                                            class="d-flex justify-content-between align-items-center pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                    <i class="ri-menu-3-line"></i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                    <img src="/images/user/05.jpg" alt="avatar"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <h5 class="mb-0">Paige Turner</h5>
                                            </div>
                                            <div class="chat-user-detail-popup scroller">
                                                <div class="user-profile text-center">
                                                    <button type="submit" class="close-popup p-3">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                    <div class="user mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="/images/user/05.jpg" alt="avatar" />
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Paige Turner</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Cape Town, RSA</p>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="chatuser-detail text-left mt-4">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Bini Name:</div>
                                                            <div class="col-6 col-md-6 text-right">Pai</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Tel:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                072 143 9920
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">
                                                                Date Of Birth:
                                                            </div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                July 12, 1989
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Gender:</div>
                                                            <div class="col-6 col-md-6 text-right">Feale</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Language:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Engliah
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                                <a href="javascript:void();" class="chat-icon-phone">
                                                    <i class="ri-phone-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-video">
                                                    <i class="ri-vidicon-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                <span class="dropdown">
                                                    <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        id="dropdownMenuButton5" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                    <span class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton5">
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                            Pin to top</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete chat</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-ban" aria-hidden="true"></i>
                                                            Block</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="chat-content scroller">
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/05.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>
                                                        Hey John, I am looking for the best admin template.
                                                    </p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Absolutely!</p>
                                                    <p>
                                                        XRay Dashboard is the responsive bootstrap 4 admin
                                                        template.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/05.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Looks clean and fresh UI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/05.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Okay Thanks..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                        <form class="d-flex align-items-center" action="javascript:void(0);">
                                            <div class="chat-attagement d-flex">
                                                <a href="javascript:void();"><i class="fa fa-smile-o pr-3"
                                                        aria-hidden="true"></i></a>
                                                <a href="javascript:void();"><i class="fa fa-paperclip pr-3"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <input type="text" class="form-control mr-3"
                                                placeholder="Type your message" />
                                            <button type="submit" class="btn btn-primary d-flex align-items-center p-2">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span
                                                    class="d-none d-lg-block ml-1">Send</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chatbox8" role="tabpanel">
                                    <div class="chat-head">
                                        <header
                                            class="d-flex justify-content-between align-items-center pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                    <i class="ri-menu-3-line"></i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                    <img src="/images/user/06.jpg" alt="avatar"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <h5 class="mb-0">Barb Ackue</h5>
                                            </div>
                                            <div class="chat-user-detail-popup scroller">
                                                <div class="user-profile text-center">
                                                    <button type="submit" class="close-popup p-3">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                    <div class="user mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="/images/user/06.jpg" alt="avatar" />
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Barb Ackue</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Cape Town, RSA</p>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="chatuser-detail text-left mt-4">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Bini Name:</div>
                                                            <div class="col-6 col-md-6 text-right">Babe</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Tel:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                072 143 9920
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">
                                                                Date Of Birth:
                                                            </div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                July 12, 1989
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Gender:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Female
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Language:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Engliah
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                                <a href="javascript:void();" class="chat-icon-phone">
                                                    <i class="ri-phone-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-video">
                                                    <i class="ri-vidicon-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                <span class="dropdown">
                                                    <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        id="dropdownMenuButton6" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                    <span class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton6">
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                            Pin to top</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete chat</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-ban" aria-hidden="true"></i>
                                                            Block</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="chat-content scroller">
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/06.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>
                                                        Hey John, I am looking for the best admin template.
                                                    </p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Absolutely!</p>
                                                    <p>
                                                        XRay Dashboard is the responsive bootstrap 4 admin
                                                        template.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/06.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Looks clean and fresh UI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/06.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Okay Thanks..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                        <form class="d-flex align-items-center" action="javascript:void(0);">
                                            <div class="chat-attagement d-flex">
                                                <a href="javascript:void();"><i class="fa fa-smile-o pr-3"
                                                        aria-hidden="true"></i></a>
                                                <a href="javascript:void();"><i class="fa fa-paperclip pr-3"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <input type="text" class="form-control mr-3"
                                                placeholder="Type your message" />
                                            <button type="submit" class="btn btn-primary d-flex align-items-center p-2">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span
                                                    class="d-none d-lg-block ml-1">Send</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chatbox9" role="tabpanel">
                                    <div class="chat-head">
                                        <header
                                            class="d-flex justify-content-between align-items-center pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                    <i class="ri-menu-3-line"></i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                    <img src="/images/user/07.jpg" alt="avatar"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <h5 class="mb-0">Maya Didas</h5>
                                            </div>
                                            <div class="chat-user-detail-popup scroller">
                                                <div class="user-profile text-center">
                                                    <button type="submit" class="close-popup p-3">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                    <div class="user mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="/images/user/07.jpg" alt="avatar" />
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Maya Didas</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Cape Town, RSA</p>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="chatuser-detail text-left mt-4">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Bini Name:</div>
                                                            <div class="col-6 col-md-6 text-right">Babe</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Tel:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                072 143 9920
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">
                                                                Date Of Birth:
                                                            </div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                July 12, 1989
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Gender:</div>
                                                            <div class="col-6 col-md-6 text-right">Male</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Language:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Engliah
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                                <a href="javascript:void();" class="chat-icon-phone">
                                                    <i class="ri-phone-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-video">
                                                    <i class="ri-vidicon-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                <span class="dropdown">
                                                    <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        id="dropdownMenuButton7" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                    <span class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton7">
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                            Pin to top</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete chat</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-ban" aria-hidden="true"></i>
                                                            Block</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="chat-content scroller">
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/07.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>
                                                        Hey John, I am looking for the best admin template.
                                                    </p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Absolutely!</p>
                                                    <p>
                                                        XRay Dashboard is the responsive bootstrap 4 admin
                                                        template.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/07.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Looks clean and fresh UI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/07.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Okay Thanks..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                        <form class="d-flex align-items-center" action="javascript:void(0);">
                                            <div class="chat-attagement d-flex">
                                                <a href="javascript:void();"><i class="fa fa-smile-o pr-3"
                                                        aria-hidden="true"></i></a>
                                                <a href="javascript:void();"><i class="fa fa-paperclip pr-3"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <input type="text" class="form-control mr-3"
                                                placeholder="Type your message" />
                                            <button type="submit" class="btn btn-primary d-flex align-items-center p-2">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span
                                                    class="d-none d-lg-block ml-1">Send</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chatbox10" role="tabpanel">
                                    <div class="chat-head">
                                        <header
                                            class="d-flex justify-content-between align-items-center pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                    <i class="ri-menu-3-line"></i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                    <img src="/images/user/08.jpg" alt="avatar"
                                                        class="avatar-50 rounded" />
                                                    <span class="avatar-status"><i
                                                            class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                                </div>
                                                <h5 class="mb-0">Monty Carlo</h5>
                                            </div>
                                            <div class="chat-user-detail-popup scroller">
                                                <div class="user-profile text-center">
                                                    <button type="submit" class="close-popup p-3">
                                                        <i class="ri-close-fill"></i>
                                                    </button>
                                                    <div class="user mb-4">
                                                        <a class="avatar m-0">
                                                            <img src="/images/user/08.jpg" alt="avatar" />
                                                        </a>
                                                        <div class="user-name mt-4">
                                                            <h4>Monty Carlo</h4>
                                                        </div>
                                                        <div class="user-desc">
                                                            <p>Cape Town, RSA</p>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="chatuser-detail text-left mt-4">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Bini Name:</div>
                                                            <div class="col-6 col-md-6 text-right">Babe</div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Tel:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                072 143 9920
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">
                                                                Date Of Birth:
                                                            </div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                July 12, 1989
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Gender:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Female
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-6 col-md-6 title">Language:</div>
                                                            <div class="col-6 col-md-6 text-right">
                                                                Engliah
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                                <a href="javascript:void();" class="chat-icon-phone">
                                                    <i class="ri-phone-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-video">
                                                    <i class="ri-vidicon-line"></i>
                                                </a>
                                                <a href="javascript:void();" class="chat-icon-delete">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                                <span class="dropdown">
                                                    <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        id="dropdownMenuButton8" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                    <span class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton8">
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-thumb-tack" aria-hidden="true"></i>
                                                            Pin to top</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete chat</a>
                                                        <a class="dropdown-item" href="JavaScript:void(0);"><i
                                                                class="fa fa-ban" aria-hidden="true"></i>
                                                            Block</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="chat-content scroller">
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/08.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>
                                                        Hey John, I am looking for the best admin template.
                                                    </p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Absolutely!</p>
                                                    <p>
                                                        XRay Dashboard is the responsive bootstrap 4 admin
                                                        template.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/08.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Looks clean and fresh UI.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/08.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-user">
                                                <a class="avatar m-0">
                                                    <img src="/images/user/1.jpg" alt="avatar"
                                                        class="avatar-35 rounded" />
                                                </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                                <div class="chat-message">
                                                    <p>Okay Thanks..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                        <form class="d-flex align-items-center" action="javascript:void(0);">
                                            <div class="chat-attagement d-flex">
                                                <a href="javascript:void();"><i class="fa fa-smile-o pr-3"
                                                        aria-hidden="true"></i></a>
                                                <a href="javascript:void();"><i class="fa fa-paperclip pr-3"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                            <input type="text" class="form-control mr-3"
                                                placeholder="Type your message" />
                                            <button type="submit" class="btn btn-primary d-flex align-items-center p-2">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i><span
                                                    class="d-none d-lg-block ml-1">Send</span>
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
