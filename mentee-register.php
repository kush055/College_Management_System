<?php 
include_once('header.php')
?>


<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 offset-md-4">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
<h3>Mentee Register <a href="mentor-register.php">Not a Mentee?</a></h3>
</div>

<form action="https://mentoring-html.dreamguystech.com/template/dashboard.php">
<div class="form-group form-focus">
<input type="text" class="form-control floating">
<label class="focus-label">Name</label>
</div>
<div class="form-group form-focus">
<input type="text" class="form-control floating">
<label class="focus-label">Mobile Number</label>
</div>
<div class="form-group form-focus">
<input type="password" class="form-control floating">
<label class="focus-label">Create Password</label>
</div>
<div class="text-end">
<a class="forgot-link" href="login.php">Already have an account?</a>
</div>
<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>
<div class="row form-row social-login">
<div class="col-6">
<a href="#" class="btn btn-facebook btn-block w-100"><i class="fab fa-facebook-f me-1"></i> Login</a>
</div>
<div class="col-6">
<a href="#" class="btn btn-google btn-block w-100"><i class="fab fa-google me-1"></i> Login</a>
</div>
</div>
</form>

</div>
</div>
</div>

</div>
</div>
</div>
</div>


<?php 
include_once('footer.php')
?>