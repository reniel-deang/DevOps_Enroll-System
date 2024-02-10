<?php

session_start();
include "dbcon.php";

$image = $_FILES['image']['name'];
$title = $_POST['title'];
$caption = $_POST['caption'];

$sql = "INSERT INTO tb_cardHomepage (img, title, caption)
VALUES ('$image', '$title', '$caption')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['alert'] = '<div class="alert alert-success" role="alert">
    THE FILE '. $_FILES["image"]["name"] .' HAS BEEN UPLOADED TO HOMEPAGE.</div>';
    header("Location: ../dashboardcontent/ManageElem.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
