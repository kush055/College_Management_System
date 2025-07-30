<?php include_once('config.php');?>

<?php
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$department = mysqli_real_escape_string($link, $_REQUEST['department']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);



// Attempt insert query execution
$sql = "INSERT INTO add_students (first_name, last_name, phone, dob, age, gender, department, email ) VALUES ('$first_name', '$last_name','$phone', '$dob', '$age', '$gender', '$department', '$email'  )";
if(mysqli_query($link, $sql)){
    echo "alert('Thank you for your Feedback')";
	

	// $_SESSION['status']="Data Inserted";
	// $_SESSION['status_code']="success";
	header("Location: add-students.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>