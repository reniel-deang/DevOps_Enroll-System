<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<?php
include '../config/dbcon.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management Dashboard</title>

    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="grades.css">

    <!--Modal-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
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
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="ManageElem.php" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Manage Content
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>

                        <li class="nav-item menu-open">
                            <a href="enrollmentsystem.php" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Enrollment Sytem
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="class.php" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Class List
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item" style="color:white; padding-top: 20px; padding-bottom: 20px;">
                            _______________________________

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../config/logout.php" class="nav-link">

                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Log Out
                                    <!--<i class="fas fa-angle-left right"></i>-->
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <!--
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">E-Grades</h1>
      </div>
    </div>
  </div>
</div>
-->




            <section class="content">



                <!--ENROLLMENT SCHEDULING PART-->
                <div class="shadow p-3 mb-5 bg-body round">
                    <div class="container mt-3">
                        <h2>Enrollment Scheduling Appointment</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Slots</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form method="POST"></form>
                                        <input type="hidden" value="69" name="id">
                                        <td>February 15, 2024 | Thursday</td>
                                        <td>07:20 AM</td>
                                        <td>08:20 AM</td>
                                        <td>6</td>
                                        <td>
                                            <input type="submit" class="btn btn-danger" value="Delete"
                                                formaction="../config/deleteSchedule.php">
                                        </td>

                                    </tr>


                                    <form action="#addscheduleinthispart" method="POST"></form>
                                    <tr>
                                        <td> <input type="date" name="date" id="date-input" class="form-control"
                                                required=""></td>
                                        <td><input type="time" name="time" id="time-input" class="form-control"
                                                required=""></td>
                                        <td> </td>
                                        <td><input type="number" min="1" name="slots" id="time-input"
                                                class="form-control" required=""></td>
                                        <td><input type="submit" class="btn btn-primary" value="  Add  "> </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--END-->


                <!--STUDENT APPROVAL REQUEST/ ONLY TABLE HEAD WHEN NO REQUEST-->
                <div class="shadow p-3 mb-5 bg-body round">
                    <div class="container mt-3">
                        <h2>Student Approval Requests</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Appointment Date</th>
                                        <th>Time</th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form method="POST"></form>
                                        <input type="hidden" value="" name="id">

                                        <td>February 15, 2024</td>
                                        <td>07:20 AM</td>

                                        <td>admin@student </td>

                                        <td>admin admin admin </td>

                                        <td>BS Computer Engineering </td>

                                        <td>I </td>

                                        <td>PENDING</td>

                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"><a
                                                    href="studentapproval.php" style="color:white">Open</a>

                                            </button>
                                        </td>


                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>







                <!--END-->

                <!--MASTERLIST OF THE STUDENT WHERE YOU CAN EDIT INFO  -->
                <div class="shadow p-3 mb-5 bg-body round">
                    <div class="container mt-3">
                        <h2>Master List</h2>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                        <th>Section</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>


                                        <td>anitamaxwynn@student </td>
                                        <td>Anita Max Wynn </td>
                                        <td>BS Computer Engineering </td>
                                        <td> III </td>
                                        <td> A </td>
                                        <td>ENROLLED</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"><a
                                                    href="masterlist.php" style="color:white">Open</a>

                                            </button>
                                        </td>


                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!--END-->



                <!--SUBJECTS WHERE YOU CAN EDIT AND ADD -->
                <div class="shadow p-3 mb-5 bg-body round">
                    <div class="container mt-3">
                        <h2>Subjects</h2>
                        <div class="table-responsive">
                            <form method="POST" style="display: flex; align-items: center;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Course</th>
                                            <th>Instructor</th>
                                            <th>Year</th>
                                            <th>Hours</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <input type="hidden" value="21" name="id">

                                            <td><input type="text" value="DevOps2" class="form-control" name="subject"
                                                    required=""></td>

                                            <td>
                                                <select class="form-control" name="course">
                                                    <option value="BS Computer Engineering" selected="">BS Computer
                                                        Engineering</option>
                                                    <option value="BS Information Technology">BS Information Technology
                                                    </option>
                                                    <option value="BS Computer Science">BS Computer Science</option>
                                                </select>
                                            </td>
                                            <td><input type="text" value="Engr. Sample" class="form-control"
                                                    name="instructor" required=""></td>
                                            <td style="width: 10%">
                                                <select class="form-control" name="year">
                                                    <option value="I">I</option>
                                                    <option value="II">II</option>
                                                    <option value="III">III</option>
                                                    <option value="IV" selected="">IV</option>
                                                </select>
                                            </td>
                                            <td style="width: 10%"><input type="number" min="1" value="6"
                                                    class="form-control" name="hours" required=""></td>
                                            <td>
                                                <button type="submit" class="btn btn-success"
                                                    formaction="updateSubject.php"><i class="fas fa-save"></i></button>
                                                <button type="submit" class="btn btn-danger"
                                                    formaction="deleteSubject.php"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <input type="hidden" value="22" name="id">

                                            <td><input type="text" value="CpE Practice and Design" class="form-control"
                                                    name="subject" required=""></td>

                                            <td>
                                                <select class="form-control" name="course">
                                                    <option value="BS Computer Engineering" selected="">BS Computer
                                                        Engineering</option>
                                                    <option value="BS Information Technology">BS Information Technology
                                                    </option>
                                                    <option value="BS Computer Science">BS Computer Science</option>
                                                </select>
                                            </td>

                                            <td><input type="text" value="Dr. Sample" class="form-control"
                                                    name="instructor" required="">
                                            </td>

                                            <td style="width: 10%">
                                                <select class="form-control" name="year">
                                                    <option value="I">I</option>
                                                    <option value="II">II</option>
                                                    <option value="III">III</option>
                                                    <option value="IV" selected="">IV</option>
                                                </select>
                                            </td>

                                            <td style="width: 10%"><input type="number" min="1" value="2"
                                                    class="form-control" name="hours" required="">
                                            </td>

                                            <td>
                                                <button type="submit" class="btn btn-success"
                                                    formaction="updateSubject.php"><i class="fas fa-save"></i></button>
                                                <button type="submit" class="btn btn-danger"
                                                    formaction="deleteSubject.php"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>

                                        <form method="POST"></form>


                                        <td><input type="text" name="subject" class="form-control"
                                                placeholder="Type an subject" required=""></td>
                                        <td><select class="form-control" name="course">
                                                <option selected="" disabled="" value="">Select course...</option>
                                                <option value="BS Computer Engineering">BS Computer Engineering</option>
                                                <option value="BS Information Technology'">BS Information Technology
                                                </option>
                                                <option value="BS Computer Science">BS Computer Science</option>
                                            </select></td>
                                        <td><input type="text" name="instructor" class="form-control"
                                                placeholder="Type a instructor" required=""></td>
                                        <td> <select name="year" class="form-select" id="inputCourse" required="">
                                                <option selected="" disabled="" value=""> Year</option>
                                                <option>I</option>
                                                <option>II</option>
                                                <option>III</option>
                                                <option>IV</option>
                                            </select></td>
                                        <td><input type="number" min="1" name="hours" class="form-control"
                                                placeholder="Type a hours" required=""></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary" formaction="addSubject.php">
                                                <i class="fas fa-plus"></i> </button>
                                        </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <!--END-->



            </section>

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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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