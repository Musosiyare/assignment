<?php
session_start();
include("connection.php");
$fname = "";
$email = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $_SESSION['fn'] = $fname= $_POST['fname'];
   $lname= $_POST['lname'];
   $_SESSION['em'] = $email= $_POST['email'];
   $password= $_POST['password'];
   $sql= mysqli_query($conn,"INSERT INTO `users`(`id`, `fname`, `lname`, `email`, `verify`, `password`)
    VALUES ('','$fname','$lname','$email','','$password')");
    // $result = mysqli_query($conn,$sql);
    if ($sql) {
        echo "Connection successful";
        header("location:insert_user.php");
    }

    else {
        echo "Error occured !!!";
    }
}
?>


<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="d-flex justify-content-center align-items-center" style="height:80vh;">
    <!-- <h1>Test</h1> -->
    <div class="border px-4 pt-4 position-relative text-center w-25">
    <i class="fa fa-user-circle text-info" aria-hidden="true" style="font-size:50px;position:absolute;top:-30px"></i>
        <h6>Congrat, <b><?php echo ucfirst($_SESSION['fn']) ; ?> </b></h6>
        <br>
        <div class="border py-1 my-2 rounded-pill" style="overflow:hidden;">
            <i class="fa fa-user-circle text-info m-1" aria-hidden="true" style="font-size:23px;"></i>

            <b><?php echo ucfirst( $_SESSION['em']); ?></b> 

        </div><br><br>
        <p><b>Help us in the journey of Trust</b></p>
        <p>Check your above email to confirm the email ownership</p>
         <a href="username.php">
         <i class="fa fa-arrow-circle-o-left" aria-hidden="true" style="font-size:30px;"></i>
         </a>
</div>

<!-- php code for insertion -->
