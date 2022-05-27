<?php
session_start();
include("connection.php");
$password = $_POST['password'];
$sql = "SELECT * FROM `users` WHERE `password`='$password'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if ($user['password'] == $password) {
        $_SESSION['user'] = $user;
        header('location:dashboard.php');
    } 
}
else {
    $_SESSION['error'] = "Plz type your password correctly";
    header("location:password.php");
}  
  if (empty($password)) {
    $_SESSION['error'] = "Empty password";
    header("location:password.php");
}
?>
