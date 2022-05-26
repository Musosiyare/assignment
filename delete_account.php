<?php
session_start();
include("connection.php");
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id= $_POST['id'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
$sql = mysqli_query("DELETE  FROM `users` WHERE `id`='$id'");
$result = mysqli_query($conn,$sql);
if ($result) {
  echo "Account deleted";
}
else {
    echo "Error occured";
}
}
?>