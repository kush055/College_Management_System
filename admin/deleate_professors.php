<?php
include "config.php";
$id=$_GET["id"];
mysqli_query($link,"delete from all_professor where id=$id");
?>

<script type="text/javascript">
	window.location="professors.php";
</script>