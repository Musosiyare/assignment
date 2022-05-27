<?php
session_start();
include("connection.php");
$id = $_SESSION['user']['id'];
$email = $_SESSION['user']['email'];
$pass = $_POST['current_password'];
$newpass = $_POST['new_password'];

$sql = mysqli_query($conn,"SELECT * FROM `users` WHERE `id` = $id AND `password` ='$pass'");
if (mysqli_num_rows($sql) > 0) {
    $data = mysqli_fetch_array($sql);
    $_SESSION['user'] = $data;

    $uod = mysqli_query($conn,"UPDATE `users` SET `password` = '$newpass' WHERE `id` = '$id'");
    if ($upd) {
        $_SESSION['success'] = "password changed";
        header("location:dashboard.php");
    }else {
        $_SESSION['success'] = "failed to change password";
        header("location:dashboard.php");
    }
}