<?php
include("connection.php");
session_start();
if(!isset($_SESSION['user'])){
    header('location:username.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
 <header class="text-white p-1 text-center my-2" style="background-color:tomato;">
        <h5>Assignment</h5>
    </header>
    <div class="logout"style="margin-left:90%; margin-top:-35px; color:white;">
    <form class="d-flex">
    <i class="fa fa-sign-out" aria-hidden="true"></i>
    <a href="logout.php" class=" btn-sm">
    Logout
    </a>
    </form>
    </div>
<!-- form container -->
<div class="py-2" style="height:80vh; background-color:grey;">
    <!-- <h1>Test</h1> -->
    <div class="border px-4 pt-4 position-relative w-50 h-25 px-20 bg-white">
        background image here sit amet consectetur adipisicing elit. Sunt, pariatur.
    </div>
    <div class="border px-4 pt-4 position-relative w-50 h-75 px-20 bg-white">
        <h5>Headlines
        <i class="fa fa-pencil" aria-hidden="true"></i>
        </h5> 
        <hr>
        <h6>Software development workers</h6>
        <h2 class="bg-primary text-white" style="font-size:14px; height:30px;padding:7px;">
            <i class="fa fa-key " aria-hidden="true"></i>
            Change Password
        </h2>
        <table>
                <tr>
                    <td>Current Password</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                   <div class="position-relative">
                   <td>
                    <i class="fa fa-key text-info" aria-hidden="true" style="position:absolute; top:158px;left:175px;"></i>
                    <input type="password" name="current_password" id="" class="form-control">
                    </td>
                   </div>
                </tr>
                <tr>
                    <div class="position:relative;">
                    <td>New Password</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>
                        <i class="fa fa-key text-info" aria-hidden="true" style="position:absolute; top:195px;"></i>
                        <input type="password" name="new_password" id="" class="form-control">
                    </td>
                    </div>
                </tr>
                <!-- <tr>
                    <td colspan="2">
                     
                    </td>
                </tr> -->
        </table>
        <div class="button">
        <button type="submit" class="btn btn-primary my-3 mx-5">Set New Password</button>
        </div>
        <!-- division left side -->




    </div>
</div>
<div class="footer">
        <header class="text-white p-1 text-center bg-primary">
        <h6>Musocial@gmail.com</h6>
        </header>
</div>
</body>
</html>