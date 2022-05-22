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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
    <div class="row">
        <div class="col-md-7 col-sm-12">
                <div class="border px-4 pt-4 position-relative w-50 px-20 bg-white">
                    background image here sit amet consectetur adipisicing elit. Sunt, pariatur.
                </div>
                <div class="div">
                <h5>Headlines <i class="fa fa-pencil" aria-hidden="true"></i> </h5> 
                <hr>
                <h6>Software development workers</h6>
                <h2 class="bg-primary text-white" style="font-size:14px; height:30px;padding:7px;">
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
                        <i class="fas fa-key text-info" aria-hidden="true" style="position:absolute; top:158px;left:175px;"></i>
                        <input type="password" name="current_password" id="" class="form-control">
                        </td>
                    </div>
                    </tr>
                    <tr>
                        <div class="position:relative;">
                        <td>New Password</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>
                            <i class="fas fa-key text-info" aria-hidden="true" style="position:absolute; top:195px;"></i>
                            <input type="password" name="new_password" id="" class="form-control">
                        </td>
                        </div>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td> <button type="submit" class="btn btn-primary my-3 mx-5">Set New Password</button></td>
                    </tr>
                   
                </table>
        </div>
        <div class="col-md-5 col-sm-12">
           <h1> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur amet atque dolorem ea! Facere atque consequatur explicabo illo tempore quos animi assumenda doloremque quam veniam magnam, sit quasi repellendus, cumque, aliquam consectetur praesentium illum velit minima! Reprehenderit obcaecati dicta in laborum iste earum quos animi fugiat consectetur quod facilis officia libero reiciendis alias, saepe sed adipisci asperiores molestias vero odit aut iure distinctio, necessitatibus facere. Nihil repudiandae iure, voluptatum soluta ut aut reprehenderit error, architecto natus maiores enim pariatur aliquid odio cum esse voluptatibus et asperiores voluptatem iusto quod at, odit unde? Praesentium tempore dicta at nulla soluta unde sapiente.
           </h1>
        </div>
    </div>



    </div>
</div>
<div class="d-flex justify-content-between bg-primary py-3 text-white">
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