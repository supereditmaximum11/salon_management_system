<?php
	include 'dbconnect.php';
	$kid=$_GET['uid'];
	$resl=mysqli_query($con,"UPDATE `tbl_appointment` SET `status`=4 WHERE App_id='$kid'");
	header("location:appointment_status.php");
?>