<?php
session_start();
include "dbcon.php";


$id = $_POST['id'];
$userid = $_POST['userid'];
$sql = "DELETE FROM tb_studentinfo WHERE student_id= '$id'";
$sql1 = "DELETE FROM tb_userdata WHERE user_id= '$userid'";

if ($conn->query($sql) === TRUE) {
    $conn->query($sql1);
    $_SESSION['success'] = '<div class="alert alert-danger">
    <strong>Success! </strong> Application Successfully Deleted </a>.
  </div>';
    header('Location: ../dashboardcontent/enrollmentsystem.php');
} else {
    $_SESSION['success'] = '<div class="alert alert-danger">
    <strong>Failed!</strong>Something went wrong , please try again</a>.
  </div>';
    header('Location: ../dashboardcontent/enrollmentsystem.php');
}

?>
