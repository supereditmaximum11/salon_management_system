<?php
	include 'dbconnect.php';
	if(isset($_POST['cmd']))
  	{
	  	$service_category_name=$_POST['service_category_name'];
	  	$service_name=$_POST['service_name'];
	  	$amount=$_POST['service_price'];
	  	$sel1="select * from `tbl_category` where `Cat_id`='$service_category_name' and `ser_cat_name`='$service_name' and `ser_cat_price`='$amount'";
	  	$qry1=mysqli_query($con,$sel1);
	  	$num=mysqli_num_rows($qry1);
	  	if($num>0)
	  	{
	 		echo ("<script language='javascript'>window.alert('Already added this service !!')window.location.href='add_service.php'</script>");
	  	}
	  	else
	  	{
	  		$sql=mysqli_query($con,"INSERT INTO `tbl_category`(`Cat_id`, `ser_cat_name`, `ser_cat_price`,`status`) 
	 		VALUES ('$service_category_name','$service_name','$amount','1')");
		  	if($sql)
		  	{
			   echo ("<script language='javascript'>window.alert('Service Added Successfully!!')
			   	window.location.href='add_service.php';</script>");
		  	}
		  	else
		 	{
			   echo ("<script language='javascript'>window.alert('Addition Failed!!Try Again..')
			   	window.location.href='add_service.php';</script>");
		  	}
		}
  	}
?>