<?php
include "config.php";
$id=$_GET["id"];
mysqli_query($link,"delete from add_students where id=$id");
?>

<script type="text/javascript">
	window.location="students.php";
</script>