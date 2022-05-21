<?php
session_start();
include("connection.php");
$email = $_POST['email'];
$sql = "SELECT * FROM `users` WHERE `email`='$email'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if ($user['email'] == $email) {
        $_SESSION['user'] = $user;
        header('location:password.php');
    } 
}
else {
    $_SESSION['error'] = "Plz type your password correctly";
    header("location:username.php");
}
?>
