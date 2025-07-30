<?php 
include("config.php");

if(isset($_POST['submit1']))
{
$email = $_POST['email'];
$pass = $_POST['pass'];

$res = mysqli_query($link,"select* from user where email='$email'and pass='$pass'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "You are login Successfully ";
header("location:admin/home.php");  
    
}
else
{
       echo "<script>
       alert('Please type correct name and password');
       window.location='signup.php';
       </script>";
}
}
?>
<?php 

if(isset($_POST['submit2']))
{
$email = $_POST['email'];
$pass = $_POST['pass'];

$res = mysqli_query($link,"select* from mentor where email='$email'and pass='$pass'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "You are login Successfully ";
header("location:admin/home.php");  
    
}
else
{
       echo "<script>
       alert('Please type correct name and password');
       window.location='signup.php';
       </script>";
}
}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="piya.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Mentor Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pass" placeholder="Password" required="">
					 <button value="submit1" name="submit1" class="btn btn-raised waves-effect g-bg-blush2">login</button>
				</form>
			</div>

			
	</div>
</body>
</html>