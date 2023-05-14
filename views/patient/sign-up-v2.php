<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title>
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

      .content-page, body.sidebar-main .content-page {
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
    <div id="loading">
      <div id="loading-center"></div>
    </div>
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
                  <form id="form-wizard1" class="text-center mt-4">
                    <ul id="top-tab-list" class="p-0">
                      <li class="active" id="account">
                        <a href="javascript:void();">
                          <i class="ri-lock-unlock-line"></i
                          ><span>Account</span>
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
                              <input
                                type="email"
                                class="form-control"
                                name="email"
                                placeholder="Email Id"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Username: *</label>
                              <input
                                type="text"
                                class="form-control"
                                name="uname"
                                placeholder="UserName"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Password: *</label>
                              <input
                                type="password"
                                class="form-control"
                                name="pwd"
                                placeholder="Password"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Confirm Password: *</label>
                              <input
                                type="password"
                                class="form-control"
                                name="cpwd"
                                placeholder="Confirm Password"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <button
                        type="button"
                        name="next"
                        class="btn btn-primary next action-button float-right"
                        value="Next"
                      >
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
                              <input
                                type="text"
                                class="form-control"
                                name="fname"
                                placeholder="First Name"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Middle Name: *</label>
                              <input
                                type="text"
                                class="form-control"
                                name="mname"
                                placeholder="Middle Name"
                              />
                            </div>
                          </div>
                         
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Last Name: *</label>
                              <input
                                type="text"
                                class="form-control"
                                name="lname"
                                placeholder="Last Name"
                              />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Contact No.: *</label>
                              <input
                                type="text"
                                class="form-control"
                                name="phno"
                                placeholder="Contact No."
                              />
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <label>City:</label>
                            <select class="form-control" id="exampleFormControlSelect4">
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
                          <div
                              class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadio8"
                                  name="customRadio1" class="custom-control-input" />
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
                          <input class="form-control" id="dob" value="1984-01-24" />
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
                        <select class="form-control" id="exampleFormControlSelect4">

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
                      <textarea class="form-control" name="address" rows="5" style="line-height: 22px">
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
                      <button
                        type="button"
                        name="next"
                        class="btn btn-primary next action-button float-right"
                        value="Next"
                      >
                        Next
                      </button>
                      <button
                        type="button"
                        name="previous"
                        class="btn btn-dark previous action-button-previous float-right mr-3"
                        value="Previous"
                      >
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
                            <h2 class="steps">Step 3 - 4</h2>
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
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Upload Your Photo:</label>
                       </div><br><br>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Upload ID Photo:</label>
                       </div><br><br>
                      </div>
                      <button
                        type="button"
                        name="next"
                        class="btn btn-primary next action-button float-right"
                        value="Submit"
                      >
                        Submit
                      </button>
                      <button
                        type="button"
                        name="previous"
                        class="btn btn-dark previous action-button-previous float-right mr-3"
                        value="Previous"
                      >
                        Previous
                      </button>
                    </fieldset>
                    <fieldset>
                      <div class="form-card">
                        <div class="row">
                          <div class="col-7">
                            <h3 class="mb-4 text-left">Finish:</h3>
                          </div>
                          <div class="col-5">
                            <h2 class="steps">Step 4 - 4</h2>
                          </div>
                        </div>
                        <br /><br />
                        <h2 class="text-success text-center">
                          <strong>SUCCESS !</strong>
                        </h2>
                        <br />
                        <div class="row justify-content-center">
                          <div class="col-3">
                            <img
                              src="images/page-img/img-success.png"
                              class="fit-image"
                              alt="fit-image"
                            />
                          </div>
                        </div>
                        <br /><br />
                        <div class="row justify-content-center">
                          <div class="col-7 text-center">
                            <h5 class="purple-text text-center">
                              You Have Successfully Signed Up
                            </h5>
                          </div>
                        </div>
                      </div>
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
                    <a href="privacy-policy.html">Privacy Policy</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="terms-of-service.html">Terms of Use</a>
                  </li>
                </ul>
              </div>
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
  </body>
</html>
