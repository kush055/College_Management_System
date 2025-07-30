<?php include_once('config.php');?>

<?php
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$msg = mysqli_real_escape_string($link, $_REQUEST['msg']);





// Attempt insert query execution
$sql = "INSERT INTO message (msg  ) VALUES ('$msg'  )";
if(mysqli_query($link, $sql)){
    echo "alert('Thank you for your Feedback')";
	

	// $_SESSION['status']="Data Inserted";
	// $_SESSION['status_code']="success";
	header("Location: indextwo.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>