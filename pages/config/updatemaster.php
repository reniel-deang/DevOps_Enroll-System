<?php
session_start();
include "dbcon.php";
$id = $_POST['id'];
$user = $_POST['username'];
$elem = $_POST['elementary_school'];
$elemyear = $_POST['elementary_graduation_year'];
$jhs = $_POST['junior_high_school'];
$jhsyear = $_POST['junior_high_graduation_year'];
$shs = $_POST['senior_high_school'];
$shsyear = $_POST['senior_high_graduation_year'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['sex'];
$course = $_POST['course'];
$year = $_POST['year'];
$section = $_POST['section'];
$birthday = $_POST['birthdate'];
$address = $_POST['homeAddress'];
$number = $_POST['phoneNumber'];
$guardianname = $_POST['guardianName'];
$guardiannumber = $_POST['guardianPhone'];
$guardianaddress = $_POST['guardianAddress'];
$verified = 1;

$sql = "UPDATE tb_studentinfo SET  username = '$user',  elem= '$elem', elem_year= '$elemyear', jhs= '$jhs', jhs_year= '$jhsyear', shs= '$shs', shs_year= '$shsyear', fname= '$fname', mname= '$mname', lname= '$lname', gender= '$gender', course= '$course', year= '$year' ,section = '$section', birthday= '$birthday', address= '$address' , num= '$number', guardian= '$guardianname', guardian_number= '$guardiannumber', guardian_address= '$guardianaddress', status = '$verified' WHERE student_id= '$id'";

if ($conn->query($sql) === TRUE) {
    $_SESSION['success'] = '<div class="alert alert-success">
    <strong>Success! </strong>User Successfully Updated</a>.
  </div>';
    header('Location: ../dashboardcontent/enrollmentsystem.php');
} else {
    $_SESSION['success'] = '<div class="alert alert-danger">
    <strong>Failed!</strong>Something went wrong , please try again</a>.
  </div>';
    header('Location: ../dashboardcontent/enrollmentsystem.php');
}

?>
