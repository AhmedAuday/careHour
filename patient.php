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

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.api-ninjas.com/v1/quotes?category=medical",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-api-key: ikvZ6B8DHjPbdg/jQ9RgNQ==uclebjeFzSf94Ic3"
    ],
]);



?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no" />
        <title>CareHour</title>
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
        <style>
        @import "bourbon";
        @import "neat";

        $base-duration: 500ms;

        // Colors
        $color-1: #2c3e50;
        $color-2: #3498db;
        $color-3: #2ecc71;
        $color-4: #e74c3c;

        // Breakpoints
        $sm: new-breakpoint(min-width 320px);
        $med: new-breakpoint(min-width 768px);
        $lg: new-breakpoint(min-width 1024px);

        *,
        *:before,
        *:after {
            box-sizing: border-box;
            outline: none;
        }

        body {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
            background-color: whitesmoke;
            font-family: "Source Sans Pro", sans-serif;
            font-size: 16px;
            font-smooth: auto;
            font-weight: 300;
            line-height: 1.5;
            color: #444;
            background-image: url("http://dakotarumors.com/assets/img/header-bg.jpg");
            background-position: center center;
            background-size: cover;

            &:before {
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(white, 0.7);
                z-index: -1;
            }
        }

        p {
            font-weight: 400;
        }

        a {
            text-decoration: none;
        }

        label {
            cursor: pointer;
        }

        .modal-btn {
            position: relative;
            display: table-cell;
            width: 100px;
            height: 100px;
            background-color: $color-1;
            box-shadow: 0 0 40px rgba(black, 0.3);
            border-radius: 50%;
            font-size: 36px;
            color: white;
            text-align: center;
            line-height: 2.75;
            transition: box-shadow 250ms ease;

            &:hover {
                box-shadow: 0 0 5px rgba(black, 0.3);
            }
        }

        .modal-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            z-index: 10;
            visibility: hidden;
            transition: background-color $base-duration/2 linear;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 50%;
            height: auto;
            margin-top: -18%;
            margin-left: -25%;
            padding: 30px;
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 0 50px rgba(black, 0.5);
            transform: scale(0);
            transition: transform $base-duration/2 ease;
            visibility: hidden;
            z-index: 20;

            .close {
                position: relative;
                float: right;
                font-size: 18px;
                transition: transform $base-duration ease;
                z-index: 11;

                &:hover {
                    color: $color-2;
                    transform: rotate(540deg);
                }
            }

            header {
                position: relative;
                display: block;
                border-bottom: 1px solid #eee;
                //background-color: gray;

                h2 {
                    margin: 0 0 10px;
                    padding: 0;
                    font-size: 28px;
                }
            }

            article {
                position: relative;
                display: block;
                margin: 0;
                padding: 0;
                font-size: 16px;
                line-height: 1.75;

                p {
                    //margin-bottom: 30px;
                }
            }

            footer {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: flex-end;
                width: 100%;
                margin: 0;
                padding: 10px 0 0;

                .button {
                    position: relative;
                    padding: 10px 30px;
                    border-radius: 3px;
                    font-size: 14px;
                    font-weight: 400;
                    color: white;
                    text-transform: uppercase;
                    overflow: hidden;

                    &:before {
                        position: absolute;
                        content: "";
                        top: 0;
                        left: 0;
                        width: 0;
                        height: 100%;
                        background-color: rgba(white, 0.2);
                        transition: width 250ms ease;
                        z-index: 0;
                    }

                    &:hover {
                        &:before {
                            width: 100%;
                        }
                    }

                    &.success {
                        margin-right: 5px;
                        background-color: $color-3;
                    }

                    &.danger {
                        background-color: $color-4;
                    }
                }
            }
        }

        #modal {
            display: none;

            &:checked~.modal-bg {
                visibility: visible;
                background-color: black;
                opacity: 0.7;
                transition: background-color $base-duration/2 linear;
            }

            &:checked~.modal-content {
                visibility: visible;
                transform: scale(1);
                transition: transform $base-duration/2 ease;
                z-index: 111;
            }
        }

        </style>
        <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* body{
    background-color: #0855ae;
} */
        .popup {
            background-color: #ceebee;
            width: 420px;
            padding: 30px 40px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            border-radius: 8px;
            font-family: "Poppins", sans-serif;
            display: none;
            text-align: center;
        }

        .popup #close {
            display: block;
            margin: 0 0 20px auto;
            background-color: transparent;
            font-size: 30px;
            color: #ffffff;
            background: #03549a;
            border-radius: 100%;
            width: 40px;
            height: 40px;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .popup .out_title {
            margin-top: -20px;
        }

        .popup .qoute {
            font-size: 14px;
            text-align: justify;
            margin: 20px 0;
            line-height: 25px;
        }

        </style>
    </head>

    <body class="sidebar-main-menu">
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
                                <a href="patient.php" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Patient
                                        Dashboard</span></a>
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

                            <li>
                                <a href="chat.php" class="iq-waves-effect"><i
                                        class="ri-message-fill"></i><span>Chat</span></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="p-3"></div>
                </div>
            </div>

            <!-- end Side Bar  -->

            <!-- Page Content  -->
            <div id="content-page" class="content-page">
                <!-- TOP Nav Bar -->
                <div class="iq-top-navbar header-top-sticky">
                    <div class="iq-navbar-custom">
                        <div class="iq-sidebar-logo">
                            <div class="top-logo">
                                <a href="patient.php" class="logo">
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
                    <br><br><br>
                    <!-- <input type="checkbox" id="modal" />
                    <p class="blurp">Do it. Click the Button. I dare you.</p>
                    <label for="modal" class="modal-btn">
                    	<i class="fa fa-fire" aria-hidden="true"></i>
                    </label>
                    <div class="modal-bg"></div> 
                    <label for="modal" class="modal-bg"></label>
                    <div class="modal-content">
                    	<label for="modal" class="close">
                    		<i class="fa fa-times" aria-hidden="true"></i>
                    	</label>
                    	<header>
                    		<h2>So This is a Modal</h3>
                    	</header>
                    	<article class="content">
                    		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.</p>
                    	</article>
                    	<footer>
    
                    		<label for="modal" class="button danger">Close</label>
                    	</footer>
                    </div>
                 </div>       -->
                    <div class="row">
                        <div class="col-lg-4 row m-0 p-0">
                            <div class="col-sm-12">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-user-profile-block"
                                    style="height: 75%">
                                    <div class="iq-card-body">
                                        <div class="user-details-block">
                                            <div class="user-profile text-center">
                                                <img src="/images/user/11.png" alt="profile-img"
                                                    class="avatar-130 img-fluid" />
                                            </div>
                                            <div class="text-center mt-3">
                                                <h4>
                                                    <b>
                                                        <?php
                                                        
                                                        
                                                        echo ($patint->getFirst_name()."".$patint->getMiddle_name());
                                                        
                                                        
                                                        
                                                        ?>
                                                    </b>
                                                </h4>
                                                <p><?php
                                                    $t = time() - $patint->getDate_of_birth();
                                                    echo ($t/86400/30/12); ?></p>
                                                <p>
                                                    <?php echo "Patient" ?>
                                                </p>
                                            </div>
                                            <ul
                                                class="doctoe-sedual d-flex align-items-center justify-content-between p-0 mt-4 mb-0">
                                                <li class="text-center">
                                                    <h6 class="text-primary">Weight</h6>
                                                    <h3>60<span>kg</span></h3>
                                                </li>
                                                <li class="text-center">
                                                    <h6 class="text-primary">Height</h6>
                                                    <h3>170<span>cm</span></h3>
                                                </li>
                                                <li class="text-center">
                                                    <h6 class="text-primary">Goal</h6>
                                                    <h3 class="text-warning">55<span>kg</span></h3>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body">
                                        <div class="patient-steps">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="col-md-6">
                                                    <div class="data-block">
                                                        <p class="mb-0">Walked</p>
                                                        <h5>4532 steps</h5>
                                                    </div>
                                                    <div class="data-block mt-3">
                                                        <p class="mb-0">My Goal</p>
                                                        <h5>6500 steps</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress-round patient-progress mx-auto"
                                                        data-value="80">
                                                        <span class="progress-left">
                                                            <span class="progress-bar border-secondary"></span>
                                                        </span>
                                                        <span class="progress-right">
                                                            <span class="progress-bar border-secondary"></span>
                                                        </span>
                                                        <div
                                                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center text-center">
                                                            <div class="h4 mb-0">
                                                                4532<br />
                                                                <span class="font-size-14">left</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul
                                                class="patient-role list-inline d-flex align-items-center p-0 mt-4 mb-0">
                                                <li class="text-left">
                                                    <h6 class="text-primary">Carbs</h6>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-primary" data-percent="85"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-left">
                                                    <h6 class="text-primary">Protein</h6>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-danger" data-percent="65"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-left">
                                                    <h6 class="text-primary">Fat</h6>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-info" data-percent="70"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr />
                                        <div class="patient-steps2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="col-md-6">
                                                    <div class="data-block">
                                                        <p class="mb-0">Burned</p>
                                                        <h5>325 kcal</h5>
                                                    </div>
                                                    <div class="data-block mt-3">
                                                        <p class="mb-0">My Goal</p>
                                                        <h5>800 kcal</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="progress-round patient-progress mx-auto"
                                                        data-value="60">
                                                        <span class="progress-left">
                                                            <span class="progress-bar border-secondary"></span>
                                                        </span>
                                                        <span class="progress-right">
                                                            <span class="progress-bar border-secondary"></span>
                                                        </span>
                                                        <div
                                                            class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center text-center">
                                                            <div class="h4 mb-0 text-warning">
                                                                325<br />
                                                                <span class="font-size-14 text-secondary">left</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul
                                                class="patient-role list-inline d-flex align-items-center p-0 mt-4 mb-0">
                                                <li class="text-left">
                                                    <h6 class="text-primary">Carbs</h6>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-primary" data-percent="50"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-left">
                                                    <h6 class="text-primary">Protein</h6>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-danger" data-percent="60"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-left">
                                                    <h6 class="text-primary">Fat</h6>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-info" data-percent="70"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-body pb-0">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="iq-card">
                                                <div class="iq-card-body bg-primary rounded pt-2 pb-2 pr-2">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <p class="mb-0">
                                                            Advice! Connect your Apple Watch for better
                                                            results.
                                                        </p>
                                                        <div class="rounded iq-card-icon bg-white">
                                                            <img src="/images/page-img/37.png" class="img-fluid"
                                                                alt="icon" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="iq-card">
                                                <div class="iq-header-title">
                                                    <h4 class="card-title text-primary">
                                                        Popular Training
                                                    </h4>
                                                </div>
                                                <div class="iq-card-body pl-0 pr-0 pb-0">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="training-block d-flex align-items-center">
                                                                <div class="rounded-circle iq-card-icon iq-bg-primary">
                                                                    <img src="/images/page-img/34.png" class="img-fluid"
                                                                        alt="icon" />
                                                                </div>
                                                                <div class="ml-3">
                                                                    <h5 class="">Power Training</h5>
                                                                    <p class="mb-0">395 kcal / h</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="training-block d-flex align-items-center">
                                                                <div class="rounded-circle iq-card-icon iq-bg-primary">
                                                                    <img src="/images/page-img/35.png" class="img-fluid"
                                                                        alt="icon" />
                                                                </div>
                                                                <div class="ml-3">
                                                                    <h5 class="">Yoga Training</h5>
                                                                    <p class="mb-0">395 kcal / h</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="training-block d-flex align-items-center">
                                                                <div class="rounded-circle iq-card-icon iq-bg-primary">
                                                                    <img src="/images/page-img/36.png" class="img-fluid"
                                                                        alt="icon" />
                                                                </div>
                                                                <div class="ml-3">
                                                                    <h5 class="">Stretching</h5>
                                                                    <p class="mb-0">395 kcal / h</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="iq-card">
                                                <div class="iq-card-header d-flex justify-content-between p-0 bg-white">
                                                    <div class="iq-header-title">
                                                        <h4 class="card-title text-primary">
                                                            Activity Statistic
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="iq-card-body p-0">
                                                    <div id="patient-chart-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="iq-card mb-0">
                                                <div class="iq-card-header d-flex justify-content-between p-0 bg-white">
                                                    <div class="iq-header-title">
                                                        <h4 class="card-title text-primary">My Training</h4>
                                                    </div>
                                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle iq-bg-primary btn"
                                                                id="dropdownMenuButton4" data-toggle="dropdown">
                                                                <i class="ri-add-line m-0 text-primary"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton4">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-eye-fill mr-2"></i>View</a>
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
                                                <div class="iq-card-body p-0">
                                                    <table class="table mb-0 table-borderless table-box-shadow">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Training</th>
                                                                <th scope="col">TRX Cardio</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Burned</td>
                                                                <td>350 kcal</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Spend</td>
                                                                <td>1hr 45m</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="table mb-0 table-borderless mt-4 table-box-shadow">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Training</th>
                                                                <th scope="col">Stretching</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Burned</td>
                                                                <td>180 kcal</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Spend</td>
                                                                <td>30m</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="iq-card">
                                                <div class="iq-card-header d-flex justify-content-between p-0 bg-white">
                                                    <div class="iq-header-title">
                                                        <h4 class="card-title text-primary">Heart Rate</h4>
                                                    </div>
                                                </div>
                                                <div class="iq-card-body p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mr-3">
                                                            <h4 class="">75 bpm</h4>
                                                            <p class="mb-0 text-primary">Health Zone</p>
                                                        </div>
                                                        <div class="rounded-circle iq-card-icon iq-bg-primary">
                                                            <i class="ri-windy-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="iq-card">
                                                <div class="iq-card-header d-flex justify-content-between p-0 bg-white">
                                                    <div class="iq-header-title">
                                                        <h4 class="card-title text-primary">
                                                            Water Balance
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="iq-card-body p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mr-3 text-left">
                                                            <p class="mb-0">Drunk</p>
                                                            <h4 class="">1250 ml/ 2000 ml</h4>
                                                        </div>
                                                        <div class="rounded-circle iq-card-icon iq-bg-primary">
                                                            <i class="ri-add-fill"></i>
                                                        </div>
                                                    </div>
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
        <!-- Wrapper END -->
        <!-- Start Pop UP quotes -->
        <div class="popup">
            <button id="close">&times;</button>
            <h2 class="out_title">Healthy Qoute</h2>
            <p class="qoute">
                <?php 
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                foreach (json_decode($response) as $key => $value) {
                    echo $value->quote;
                }
                //echo $response;
            }
            
            ?>

            </p>

        </div>
        <!--Script-->
        <script type="text/javascript">
        window.addEventListener("load", function() {
            setTimeout(
                function open(event) {
                    document.querySelector(".popup").style.display = "block";
                },
                2000
            )
        });


        document.querySelector("#close").addEventListener("click", function() {
            document.querySelector(".popup").style.display = "none";
        });
        </script>
        <!-- End Pop UP quotes -->



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
        <!-- am core JavaScript -->
        <script src="/js/core.js"></script>
        <!-- am charts JavaScript -->
        <script src="/js/charts.js"></script>
        <!-- am animated JavaScript -->
        <script src="/js/animated.js"></script>
        <!-- am kelly JavaScript -->
        <script src="/js/kelly.js"></script>
        <!-- Flatpicker Js -->
        <script src="/js/flatpickr.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="/js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="/js/custom.js"></script>
    </body>

</html>
