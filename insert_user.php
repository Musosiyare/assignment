<?php
include "connection.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $fname= $_POST['fname'];
   $lname= $_POST['lname'];
   $email= $_POST['email'];
   $password= $_POST['password'];

   $sql= mysqli_query($conn,"INSERT INTO `users`(`id`, `fname`, `lname`, `email`, `verify`, `password`)
    VALUES ('','$fname','$lname','$email','','$password')");

    // $result = mysqli_query($conn,$sql);
    if ($sql) {
        echo "Connection successful";
        header("location:index.php");
    }

    else {
        echo "Error occured !!!";
    }
}
?>