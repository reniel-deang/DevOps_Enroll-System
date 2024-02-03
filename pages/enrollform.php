<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MYCART - About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="../index.html">MyCart</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="../index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="../index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="../index.php#contact">Contact us</a></li>
          <li><a class="nav-link scrollto active" href="enrollform.php">Enroll Now</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <br>
    <br>

    <div class="section-title">
      <h2>Enroll now</h2>
      <p>
        Our shopping site stands out for its unwavering commitment to reliability, ensuring a seamless and trustworthy experience for our customers with a track record of dependable services, secure transactions, and prompt delivery, making us a reliable choice for all your shopping needs.</p>
    </div>

    <section>
    <div class="container mt-3">
      <h2>Select Your Appointment Schedule</h2>
      <p>Please Check the available dates below.</p>  
      <br>          
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Slots</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>February 1, 2024 | Thursday</td>
            <td>9:00 AM - 10:00 AM</td>
            <td>10</td>
            <td>Hehe</td>
          </tr>
        </tbody>
      </table>
    </div>
    </section>

    <form action="config/register.php" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6">
          <h2>I. Create Student Portal Account</h2>
          <br>   
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Please Enter required text below</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="user" class="form-control" placeholder="Enter username @student">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" placeholder="Email Address">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="pass" class="form-control" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->

             
            </div>
          </div>

          <div class="col-md-6">
          <h2>II. Educational Attainment</h2>
          <br>   
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">Input required informations</h2>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                <div class="card-body">
                  <div class="form-row">
                    <!-- Email Address Input -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Elementary</label>
                      <input type="text" class="form-control" placeholder="Enter school" name="elem">
                    </div>
                    <!-- Additional Textbox on the Right Side -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputAdditional">Graduation Year</label>
                      <input type="number" class="form-control" id="exampleInputAdditional" name="elemyear">
                    </div>
                 </div>

                 <div class="form-row">
                    <!-- Email Address Input -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Junior High School</label>
                      <input type="text" class="form-control" placeholder="Enter school" name="jhs">
                    </div>
                    <!-- Additional Textbox on the Right Side -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputAdditional">Graduation Year</label>
                      <input type="number" class="form-control" id="exampleInputAdditional" name="jhsyear">
                    </div>
                 </div>

                 <div class="form-row">
                    <!-- Email Address Input -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Senior High School</label>
                      <input type="text" class="form-control" placeholder="Enter school" name="shs">
                    </div>
                    <!-- Additional Textbox on the Right Side -->
                    <div class="form-group col-md-6">
                      <label for="exampleInputAdditional">Graduation Year</label>
                      <input type="number" class="form-control" id="exampleInputAdditional" name="shsyear">
                    </div>
                 </div>
                </div>
                <!-- /.card-body -->

              
            </div>
          </div>

          <section class="container mt-4">
          <div class="row">
            <div class="col-md-12">
            <h2>III. Enrollment Form</h2>
            <br>   
              <div class="card">
                <div class="card-header">
                  <h2 class="card-title">Please Enter your Information</h2>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               

                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputName">First Name</label>
                      <input type="text" class="form-control" id="inputName" placeholder="Enter your first name" name="fname">
                    </div>

                    <div class="form-group">
                      <label for="inputName">Middle Name</label>
                      <input type="text" class="form-control" id="inputName" placeholder="Enter your middle name" name="mname">
                    </div>

                    <div class="form-group">
                      <label for="inputName">Last Name</label>
                      <input type="text" class="form-control" id="inputName" placeholder="Enter your last name" name="lname">
                    </div>

                    <div class="form-group">
                      <label for="genderSelect">Gender</label>
                      <select class="form-control" id="genderSelect" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="courseSelect">Course</label>
                      <select class="form-control"  name="course">
                        <option value="" selected></option>
                        <option value="bscs">BS Computer Science</option>
                        <option value="bsit">BS Information Technology</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="courseSelect">Year</label>
                      <select class="form-control"  name="year">
                        <option value="" selected></option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="Iv">Iv</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="datepicker">Date of Birth</label>
                      <input type="date" class="form-control" id="datepicker" placeholder="Select date" name="birthday">
                    </div>

                    <div class="form-group">
                      <label for="inputName">Home Address</label>
                      <input type="text" class="form-control"  name="address">
                    </div>

                    <div class="form-group">
                      <label for="inputName">Phone Number</label>
                      <input type="number" class="form-control"  name="number">
                    </div>

                    <div class="form-group">
                      <label for="inputName">Guardian name</label>
                      <input type="text" class="form-control"  name="guardianname">
                    </div>

                    <div class="form-group">
                      <label for="inputName">Guardian Phone Number</label>
                      <input type="number" class="form-control"  name="guardiannumber">
                    </div>

                    <div class="form-group">
                      <label for="inputName">Guardian Address</label>
                      <input type="text" class="form-control"  name="guardianaddress">
                    </div>

                    <div class="form-group">
                      <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  <!-- /.card-body -->
               
              </div>
            </div>
          </div>
        </section>
        </div>
      </div>

    </section>
    </form>

  </div>
</section><!-- End Services Section -->


  </main><!-- End #main -->

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MYCART</h3>
            <p>
              San Joaqin <br>
              Sta.Ana, Pampanga<br>
              Philippines <br><br>
              <strong>Phone:</strong> +63912345678<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Customer Service</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>MYCART</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>