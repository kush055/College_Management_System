<?php include_once('config.php');?>

<?php
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$department = mysqli_real_escape_string($link, $_REQUEST['department']);
$position = mysqli_real_escape_string($link, $_REQUEST['position']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);



// Attempt insert query execution
$sql = "INSERT INTO `all_professor` (`id`, `first_name`, `last_name`, `dob`, `gender`, `department`, `position`, `phone`, `email`) VALUES (NULL, '$first_name ', '$last_name', '$dob', '$gender', '$department', '$position', '$phone', '$email');";
if(mysqli_query($link, $sql)){
    echo "alert('Thank you for your Feedback')";
	

	// $_SESSION['status']="Data Inserted";
	// $_SESSION['status_code']="success";
	header("Location: add-professors.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>