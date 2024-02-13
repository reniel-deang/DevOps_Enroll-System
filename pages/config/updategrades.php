<?php
session_start();
include "dbcon.php";

if (isset($_POST['create'])) {
    $user_id = $_GET['id'];
    $subject = $_POST['subjectname'];
    $instructor = $_POST['instructor'];
    $user_id = $_POST['user_id'];
    $prelim = $_POST['prelim'];
    $midterm = $_POST['midterm'];
    $finals = $_POST['finals'];
    $average = $_POST['average'];
    $remarks = $_POST['remarks'];

    $sql = "INSERT INTO tb_grades (subject, instructor, prelim, midterm, finals, average, remarks, user_id)
VALUES ('$subject', '$instructor', '$prelim', '$midterm', '$finals', '$average', '$remarks', ' $user_id ')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../dashboardcontent/class.php');

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>