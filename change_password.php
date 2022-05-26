<?php
session_start();
include("connection.php");
$current = $_POST['current_password'];
$new = $_POST['new_password'];
$sql = "UPDATE `users` SET `fname`='',`lname`='[value-3]',`email`='[value-4]',`verify`='[value-5]',`password`='[value-6]' WHERE 1";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
