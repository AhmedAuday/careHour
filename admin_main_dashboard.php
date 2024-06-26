<?php

  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/secuerity.inc.php';
  include_once $_SERVER["DOCUMENT_ROOT"].'/includes/time.inc.php';

  $doc = new Doctors();

  $patient = new Patients();

  $admin = new Admins();
  $admin->setId($admin->getAuthority());
  $admin->getById();

  


 



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
                                <i class="ri-subtract-line"></i><span>Admin Dashboard</span>
                            </li>
                            <li class="active">
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
                                    <li>
                                        <a href="admin_add_doctor.php"><i class="ri-user-add-fill"></i>
                                            Add Doctor</a>
                                    </li>
                                    <li>
                                        <a href="admin_doctor_profile.php"><i class="ri-profile-fill"></i>Doctor
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a href="admin_doctor_profile_edit.phpl"><i class="ri-file-edit-fill"></i>
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
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                        <div class="iq-card-body iq-bg-primary rounded">
                                            <div class="d-flex align-items-center
                                                            justify-content-between">
                                                <div class="rounded-circle iq-card-icon bg-primary">
                                                    <i class="ri-user-fill"></i>
                                                </div>
                                                <div class="text-right">
                                                    <h2 class="mb-0">
                                                        <span
                                                            class="counter"><?php echo $doc->getNumberOfRows() ?></span>
                                                    </h2>
                                                    <h5 class="">Doctors</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                        <div class="iq-card-body iq-bg-danger rounded">
                                            <div class="d-flex align-items-center
                                                    justify-content-between">
                                                <div class="rounded-circle iq-card-icon bg-danger">
                                                    <i class="ri-group-fill"></i>
                                                </div>
                                                <div class="text-right">
                                                    <h2 class="mb-0">
                                                        <span
                                                            class="counter"><?php echo $patient->getNumberOfRows() ?></span>
                                                    </h2>
                                                    <h5 class="">Patients</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                        <div class="iq-card-body iq-bg-info rounded">
                                            <div class="d-flex align-items-center
                        justify-content-between">
                                                <div class="rounded-circle iq-card-icon bg-info">
                                                    <i class="ri-group-fill"></i>
                                                </div>

                                                <!-- TODO add Apotiments -->
                                                <div class="text-right">
                                                    <h2 class="mb-0">
                                                        <span class="counter">4500</span>
                                                    </h2>
                                                    <h5 class="">Apotiments</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Doctors</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <ul id="doster-list-slide" class="d-flex flex-wrap align-items-center p-0">


                                        <li class="doctor-list-item col-md-3 text-center p-2">





                                            <?php 

                                            $doctors =$doc->getAll();
                                        foreach ($doc as $d) {
                                           echo "<div class='doctor-list-item-inner rounded'>
                                           <div class='donter-profile'>
                                               <img src='images/user/05.jpg' class='img-fluid rounded-circle'
                                                   alt='user-img' />
                                           </div>
                                           <div class='doctor-detail mt-3'>
                                               <h5>Dr.$d->first_name.' '.$d->last_name.</h5>
                                               <h6>.$d->specialty.</h6>
                                           </div>
                                           <hr />
                                           <div class='doctor-description'>
                                               <p class='mb-0 text-center pl-2 pr-2'>
                                                   .$d->bio.
                                               </p>
                                           </div>
                                       </div>";
                                        }

                                        ?>
                                        </li>
                                        <!-- Card end  -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-lg-8">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Patient Report Start  -->
                                    <!-- TODO Implemnt all Patient With there report here  -->
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                        <div class="iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title">Patient Reports</h4>
                                            </div>
                                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton5"
                                                        data-toggle="dropdown">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton5">
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
                                        <div class="iq-card-body">
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Patient</th>
                                                            <th scope="col">Patient Name</th>
                                                            <th scope="col">Diagnosis</th>
                                                            <th scope="col">Treatment</th>
                                                            <th scope="col">Notes</th>
                                                            <th scope="col">Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        <?php

                                                                $patients= $patient->getAll();
              
                                                    
                                                     foreach ($patients as $p) {

                                                        $patient_his =new Patient_files();
                                                        $patient_his->setPatient_id($p->id);
                                                        $patient_his->getByPatient_id();

                                                    

            

                                                        $patient_history = new Patient_history();
                                                        $patient_history->setFiles_id($patient_his->getId());
                                                        $patient_history->getByFiles_id();

                                                        
                                                        
                                                       echo "
                                                       <tr>
                                                            <td class='text-center'>
                                                                <img class='rounded-circle img-fluid avatar-40'
                                                                    src='images/user/01.jpg' alt='profile' />
                                                            </td>
                                                       <td>. $p->first_name .</td>
                                                           <td>
                                                           .{$patient_history->getDiagnosis()}.
                                                               
                                                           </td>
                                                           
                                                           <td>12-02-2020</td>
                                                           <td>
                                                               <i class='ri-file-pdf-line font-size-16 text-danger'></i>
                                                           </td>
                                                           <td>Fracture</td>
                                                           </tr>



                                                    </tbody>
                                                       ";
                                                     }
                                                    
                                                     ?>


                                                </table>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <!-- Patient Report End  -->



                            </div>
                        </div>
                        <!-- <div class="col-md-12 col-lg-4">
              <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                    <h4 class="card-title">Total Accident Report</h4>
                  </div>
                </div>
                <div class="iq-card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>$40K</h3>
                    </div>
                  </div>
                  <div id="chart-7"></div>
                  <div class="row text-center mt-3">
                    <div class="col-sm-6">
                      <h6 class="text-truncate d-block">Last Month</h6>
                      <p class="m-0">358</p>
                    </div>
                    <div class="col-sm-6">
                      <h6 class="text-truncate d-block">Current Month</h6>
                      <p class="m-0">194</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                    <h4 class="card-title">Total Death Report</h4>
                  </div>
                </div>
                <div class="iq-card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>$20K</h3>
                    </div>
                  </div>
                  <div id="chart-8"></div>
                  <div class="row text-center mt-3">
                    <div class="col-sm-6">
                      <h6 class="text-truncate d-block">Last Month</h6>
                      <p class="m-0">220</p>
                    </div>
                    <div class="col-sm-6">
                      <h6 class="text-truncate d-block">Current Month</h6>
                      <p class="m-0">120</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                    <h4 class="card-title">Overall Progress</h4>
                  </div>
                </div>
                <div class="iq-card-body">
                  <div id="apex-radialbar-chart"></div>
                </div>
              </div>
            </div> -->
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
