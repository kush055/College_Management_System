<?php include_once('config.php');?>

<?php
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$pass = mysqli_real_escape_string($link, $_REQUEST['pass']);


// Attempt insert query execution
$sql = "INSERT INTO reg (name, email, pass) VALUES ('$name', '$email',  '$pass')";
if(mysqli_query($link, $sql)){
    echo "alert('Thank you for your Feedback')";
	

	// $_SESSION['status']="Data Inserted";
	// $_SESSION['status_code']="success";
	header("Location: signup.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>