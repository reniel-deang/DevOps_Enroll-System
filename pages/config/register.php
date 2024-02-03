<?php
include "dbcon.php";
session_start();

if (isset($_POST['submit']))
{
    $elem = $_POST['elem'];
    $elemyear = $_POST['elemyear'];
    $jhs = $_POST['jhs'];
    $jhsyear = $_POST['jhsyear'];
    $shs = $_POST['shs'];
    $shsyear = $_POST['shsyear'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $guardianname = $_POST['guardianname'];
    $guardiannumber = $_POST['guardiannumber'];
    $guardianaddress = $_POST['guardianaddress'];
    
    $sql = "INSERT INTO tb_studentinfo (elem, elem_year, jhs, jhs_year, shs, shs_year, fname, mname, lname, gender, course, year, birthday, address, num, guardian, guardian_number, guardian_address) VALUES ('$elem', '$elemyear', '$jhs', '$jhsyear', '$shs', '$shsyear', '$fname', '$mname', '$lname', '$gender', '$course', '$year', '$birthday', '$address', '$number', '$guardianname', '$guardiannumber', '$guardianaddress')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>