<?php
session_start();
include("connection.php");
$email = $_SESSION['user']['email'];
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
    <form action="password_validation.php" method="post">
    <header class="text-white p-1 text-center" style="background-color:tomato;">
<h5>Assignment</h5>
</header>

<!-- form container -->
<div class="d-flex justify-content-center align-items-center" style="height:80vh;">
    <!-- <h1>Test</h1> -->
    <div class="border px-4 pt-4 position-relative text-center w-25">
    <i class="fa fa-user-circle text-info" aria-hidden="true" style="font-size:50px;position:absolute;top:-30px"></i>
        <h6>Welcome Back</h6>
            <div class="second my-2">
            <i class="fa fa-user-circle text-info" aria-hidden="true"></i>
                <?php print ucfirst($email);?>

                <?php 
                        if(isset($_SESSION['error'])){
                            ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>!!!Error</strong> <?php print $_SESSION['error'];?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                            <?php
                        unset($_SESSION['error']);
                        }
                        ?>

                <div class="position-relative">
                <input type="password" name="password" id="" placeholder="Password" class="px-4 form-control my-2">
                <i class="fas fa-key text-info" aria-hidden="true" style="position:absolute; top:12px;left:5px;"></i>
            </div>
                <button type="submit" class="btn btn-primary form-control my-2" style="border-radius:30px;">Sign In</button>
                <hr>
                <h6 class="" style="color:red;"> 
                <a href="#####.php">Forgot Password?</a> 
                </h6>
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
    </form>
</body>
</html>