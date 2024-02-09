
<!DOCTYPE html>
<html lang="en">
  <?php 
  include '../config/dbcon.php';
  session_start();

  if (isset($_SESSION['status']))

  {
    $total = "SELECT * FROM tb_studentinfo";
    $result = $conn->query($total);
    $showtotal = mysqli_num_rows($result);

    $enrolled = "SELECT * FROM tb_userdata WHERE verified = 1";
    $result1 = $conn->query($enrolled);
    $showenrolled = mysqli_num_rows($result1);

    $pending = "SELECT * FROM tb_userdata WHERE verified = 0";
    $result2 = $conn->query($pending);
    $showpending = mysqli_num_rows($result2);

  }
  else
  {
    header('Location: ../../index.php');
    session_unset();
  }
 
  
 
  ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{ display: none; }
    </style>
  
  <title>Management Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper"> 
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="../config/logout.php" role="button">
          <i class="fas fa-people-arrows"></i>
        </a>
      </li>

      

    </ul>
  </nav>



 
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Administration</span>
    </a>

 
    <div class="sidebar">

      <br>
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <br>


      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Main Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Manage Content
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ManageElement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Students
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

    </div>

  </aside>
<!-- ****** BODY ****** -->

  <div class="content-wrapper" style="padding: 25px;">
  <?php
    if(isset($_SESSION['alert'])){
      echo $_SESSION['alert'];
    }
  ?>  
    <div id="footer" class="shadow p-3 mb-5 bg-body rounded text-center">
        <h3 style="text-align: center;"> Update Logo </h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profilepicModal">
            Update
        </button>
        <br><br>	
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <img style="width: 40vh" src="../assets/logo/icon.png" alt="Logo" class="img-fluid">
        </div>
        </div>
  <form method="POST">
        <div id="footer" class="shadow p-3 mb-5 bg-body rounded">
            <h3 style="text-align: center;"> School Profile </h3>
            <div class="container mt-3">
            <div class="table-responsive">
                <table class="table table-borderless">
                        <thead>
                            <tr>
                            <th>Category</th>
                            <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                    <tr>
                    <td><i class="fas fa-user"></i> Name</td>
                    <td>
                        <div class="input-group">
                        <input type="text" value="Holy Cross College of Pampanga" placeholder="Insert a school name here" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolName" required="">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                    </td>
                    </tr>
                    
                    <tr>
                    <td><i class="fas fa-map-marker-alt"></i> Location</td>
                    <td>
                        <div class="input-group">
                        <input type="text" value="Sta. Lucia, Sta. Ana, Pampanga" placeholder="Insert a school address here" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolAddress" required="">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                    </td>
                    </tr>
                    
                    <tr>
                    <td><i class="fas fa-envelope"></i> Email Address</td>
                    <td>
                        <div class="input-group">
                        <input type="text" placeholder="Insert a school email here" value="sample@gmail.com" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolEmail" required="">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                    </td>
                    </tr>
                    
                    <tr>
                    <td><i class="fas fa-mobile-alt"></i> Mobile Number</td>
                    <td>
                        <div class="input-group">
                        <input type="text" value="09123456789" placeholder="Insert a school phone number here" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolMobilePhone" required="">
                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                    </td>
                    </tr>
                    
                    <tr>
                    <td><i class="fas fa-phone"></i> Telephone Number</td>
                    <td>
                        <div class="input-group">
                        <input type="text" value="09246810121" placeholder="Insert a school tel number here" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolTelePhone" required="">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                    </td>
                    </tr>
                    
                    <tr>
                    <td><i class="fas fa-comment"></i> Description</td>
                    <td>
                    <div class="input-group">
                        <input type="text" value="Preliminary Exam" placeholder="Insert a school description here" style="background-color: inherit; width: 250px; height: 30px; padding: 20px; border-style: solid;" name="schoolDescriptiom" required="">
                        <span class="input-group-text"><i class="fas fa-comment"></i></span>
                        </div>
                    </td>
                    </tr>
                    
                    
                    
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button style="float: right" formaction="../config/updateFooter.php" type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i>
                            </button>
                        </td>
                        </tr>
                        </tbody>
                </table>
            </div>
            </div>
            
            
    </div>
    </form>


    <!--********  COVER PAGE  ********--> 

    <div class="shadow p-3 mb-5 bg-body rounded" style="text-align: center">
        <h3 id="gallery"> Cover Page </h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModal">
            Upload
        </button>

        <!-- modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change the logo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" >
                        <form method="post" enctype="multipart/form-data" action="../config/coverPageadd.php">
                            <input type="file" name="image" required>
                            <input type="submit" value="Upload" class="btn btn-primary" name="submit">
                        </form>
                        
                    </div>
                    <div class="modal-footer" >
                    
                    
                    </div>
                </div>
            </div>
        </div>
       

        <!-- grid layout -->
        <div class="row" style="margin-top: 20px; display: flex; justify-content: center;"> 

            <?php
            $glob = glob("../..//assets/img/cms-image/cover-page/"."*.png");


            if($glob == null)
            {
            echo '<img src="../../assets/img/cms-image/cover-page/gif empty.gif" alt="Empty Logo" style="width: 30%">
            <br>
            <p><strong> You can upload a cover photo for your website homepage </strong></p>';
            }else
            {
                foreach($glob as $file){

                echo '  <div class="card" style="width: 300px; margin: 20px; padding: 0;">
                            <img class="card-img-top" src="' . $file .' " style="height: 300px; width: 100%" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <form method="POST">
                                        <input type="text" class="form-control"  style="border: none;" placeholder="Insert a title" name="title"> 
                                        <input type="hidden" value="23" name="id">
                                    </form>
                                </h5>
                                <p class="card-text">
                                    <textarea placeholder="Insert a Caption" class="form-control" name="caption" style="border: none; background-color: inherit;"></textarea>
                                </p>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i>
                                </button>
                                <button formaction="../config/deleteImages.php" type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    ';
            }
            }    
            ?>      
        </div>
    </div>    <!--********  END COVER PAGE  ********--> 




    <div class="shadow p-3 mb-5 bg-body rounded" style="text-align: center">
        <h3 id="gallery"> Cards and Images </h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#imageModalCards">
            Upload
        </button>

        <!-- modal -->
        <div class="modal fade" id="imageModalCards" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change the logo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="../config/card-and-image.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="image" id="fileToUpload" required="">
                          <br>
                          <br>
                        <div class="form-group">
                          <label for="textInput">Title:</label>
                          <input type="text" class="form-control" id="textInput" name="title" required="">
                        </div>
                        <div class="form-group">
                          <label for="textAreaInput">Caption:</label>
                          <textarea class="form-control" id="textAreaInput" name="caption" rows="3" required=""></textarea>
                        </div>
                        <input type="submit" value="Upload" class="btn btn-primary" name="submit2">

                      </form>
                    </div>
                    <div class="modal-footer" >
                    
                    
                    </div>
                </div>
            </div>
        </div>

        <!-- grid layout -->
        <div class="row" style="margin-top: 20px; display: flex; justify-content: center;"> 

            <?php
            $globImage = glob("../..//assets/img/cms-image/card-and-imag/"."*.png");

            echo $globImage == null ;



            if($globImage == null)
            {
            echo '<img src="../../assets/img/cms-image/card-and-imag/gif robot.gif" alt="Empty Logo" style="width: 30%">
            <br>
            <p><strong> You can upload a cards and images to showcase in your home </strong></p>';
            }else
            {
                foreach($globImage as $file){

                echo '  <div class="card" style="width: 300px; margin: 20px; padding: 0;">
                            <img class="card-img-top" src="' . $file .' " style="height: 300px; width: 100%" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <form method="POST">
                                        <input type="text" class="form-control"  style="border: none;" placeholder="Insert a title" name="title"> 
                                        <input type="hidden" value="23" name="id">
                                    </form>
                                </h5>
                                <p class="card-text">
                                    <textarea placeholder="Insert a Caption" class="form-control" name="caption" style="border: none; background-color: inherit;"></textarea>
                                </p>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i>
                                </button>
                                <button formaction="../config/deleteImages.php" type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    ';
            }
            }    
            ?>      
        </div>


  </div>
  

  <footer class="main-footer">
    All rights reserved
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>


  <aside class="control-sidebar control-sidebar-dark">

  </aside>
    
    
</div>

<div class="container mt-3">

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
</body>
</html>
