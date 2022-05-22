<?php
include("connection.php");
session_start();
if(!isset($_SESSION['user'])){
    header('location:username.php');
}
$fname = $_SESSION['user']['fname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-between py-2 p-5" style="background-color:tomato;">
        <h5 style="color:black;font-weight:bold;">PHP Assignment</h5>
        
        <h4 style="color:white;font-family:perpetua;">
            <i class="fa fa-user-circle text-info" aria-hidden="true" style="font-size:30px;"></i>
            <?php print ucfirst($fname); ?>
          </h4>
        <a href="logout.php" style="color:white;">
        <i class="fa fa-sign-out" aria-hidden="true">
            <h6>Logout</h6>
        </i>
    </a>
        
    </div>
<!-- form container -->
<div class="py-2" style="height:80vh; background-color:white;">
    <!-- <h1>Test</h1> -->
    <div class="row py-2">
        <div class="col-md-7 col-sm-12">
                <div class="border px-4 pt-4 position-relative bg-white ">
                    background image here sit amet consectetur adipisicing elit. Sunt, pariatur.
                    background image here sit amet consectetur adipisicing elit. Sunt, pariatur.
                    background image here sit amet consectetur adipisicing elit. Sunt, pariatur.
                    background image here sit amet consectetur adipisicing elit. Sunt, pariatur.
                    background image here sit amet consectetur adipisicing elit. Sunt, pariatur.
                    background image here sit amet consectetur adipisicing elit. Sunt, pariatur.
                </div>
                <div class="border bg-white py-2 px-2 ">
                <h5>Headlines <i class="fa fa-pencil" aria-hidden="true"></i> </h5> 
                <hr>
                <h6>Software development workers</h6>
                <h2 class="bg-primary text-white" style="font-size:14px; height:30px;padding:7px; padding:6px;">
                    <i class="fa fa-key " aria-hidden="true"></i>
                    Change Password
                </h2>
                </div>
                <table>
                    <tr>
                        <td>Current Password</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <div class="position-relative">
                    <td>
                        <!-- <i class="fas fa-key text-info" aria-hidden="true" style="position:absolute; top:268px;left:150px;"></i> -->
                        <input type="password" name="current_password" id="" class="form-control">
                        </td>
                    </div>
                    </tr>
                    <tr>
                        <div class="position:relative;">
                        <td>New Password</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>
                            <!-- <i class="fas fa-key text-info" aria-hidden="true" style="position:absolute; top:300px;left:150px;"></i> -->
                            <input type="password" name="new_password" id="" class="form-control">
                        </td>
                        </div>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="checkbox" name="" id="">
                            Remind me to change password for each three months
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td> <button type="submit" class="btn btn-primary my-3 mx-5">Set New Password</button></td>
                    </tr>
                   
                </table>
        </div>
        <div class="col-md-5 col-sm-12 px-3 h-25">
         <p>
             <h6>
                <center> ACCOUNT SETINGS </center> <br><hr>
                 <!-- <hr style="color:blue; border:large;padding:2px;">
                 Edit profile <br>
                 <hr style="color:blue; border:large;padding:2px;">
                 Change password<br>
                 <hr style="color:blue; border:large;padding:2px;">
                  Sign in activities <br>
                 <hr style="color:blue; border:large;padding:2px;">
                 Session timeout <br>
                 <hr style="color:blue; border:large;padding:2px;">
                 Memorialisation  <br>
                 <hr style="color:blue; border:large;padding:2px;">
                  Email & sms notification  <br>
                 <hr style="color:blue; border:large;padding:2px;">
                  Push notification <br>
                 <hr style="color:blue; border:large;padding:2px;">
                  Delete my account  <br>
                 <hr style="color:blue; border:large;padding:2px;">
             </h6> -->
         </p>
        </div>
    </div>
    </div>
</div>
<div class="d-flex justify-content-between bg-primary py-3 text-white p-5">
<h6>Developed by Musocial</h6>
<h6>Kigali Rwanda</h6>
<h6>
<i class="fa fa-facebook" aria-hidden="true" style="font-size:20px;"></i>
<i class="fa fa-twitter" aria-hidden="true" style="font-size:20px;"></i>
<i class="fa fa-instagram" aria-hidden="true" style="font-size:20px;"></i>
</h6>        
</div>
</div>
</body>
</html>