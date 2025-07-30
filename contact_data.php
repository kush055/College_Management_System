<?php include_once('config.php');?>

<?php
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);


// Attempt insert query execution
$sql = "INSERT INTO contact (fname, lname, email, message) VALUES ('$fname', '$lname',  '$email', '$message')";
if(mysqli_query($link, $sql)){
    echo "alert('Thank you for your Feedback')";
	

	// $_SESSION['status']="Data Inserted";
	// $_SESSION['status_code']="success";
	header("Location: contact.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>