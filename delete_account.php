<?php
session_start();
include("connection.php");
$id = $_SESSION['user']['id'];
$prof = mysqli_query($conn,"DELETE FROM `profile` WHERE `uid` = '$id'");
$acc = mysqli_query($conn,"DELETE FROM `users` WHERE `id` = '$id'");
if ($prof && $acc) {
    header("location:index.php");
}else {
    $_SESSION['error'] = "failed to delete account";
    header("location.dashboard.php");
}
?>