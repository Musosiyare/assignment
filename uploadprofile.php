<?php
session_start();
include ("connection.php");
$id = $_SESSION['user']['id'];
$_SESSION['image'] = $fname = $_FILES['profile']['name'];
$path = "images/".$_FILES['profile']['name'];
// print_r ($_FILES);

if (move_uploaded_file($_FILES['profile']['tmp_name'],$path)) {
    $sql = mysqli_query($conn,"INSERT INTO `profile`(`uid`,`fname`) VALUES('$ID','$fname')");
    $_SESSION['success'] = "profile updated";
    header("location:dashboard.php");
}else {
  print  $_SESSION['error'] = "error occured";
    header("location:dashboard.php");
}