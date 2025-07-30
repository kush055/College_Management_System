<?php 
include("config.php");

if(isset($_POST['submit']))
{
$email = $_POST['email'];
$pass = $_POST['pass'];

$res = mysqli_query($link,"select* from admin where email='$email'and pass='$pass'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "You are login Successfully ";
header("location:home.php");  
    
}
else
{
       echo "<script>
       alert('Please type correct name and password');
       window.location='sign-in.php';
       </script>";
}
}
?>


<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Goverment polytechnic</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link href="assets/css/login.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/themes/all-themes.css"/>
</head>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Goverment Polytechnic</span>Login <span class="msg">Sign in to start your session</span></h1>
        <div class="col-sm-12">
            <form id="sign_in" method="POST">
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="pass" placeholder="Password" required>
                    </div>
                </div>
                <div class="">
                    <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                    <label for="rememberme">Remember Me</label>
                </div>
                <div class="text-center">
                    <button value="submit" name="submit" class="btn btn-raised waves-effect g-bg-blush2">SIGN-IN</button>
                     
                </div>
               
            </form>
        </div>
    </div>    
</div>
<div class="theme-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 06:15:18 GMT -->
</html>