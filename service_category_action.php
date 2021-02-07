<?php
	//open connection for database to select or insert 
 	include 'dbconnect.php';
	if(isset($_POST['cmd']))
  	{
	  	$service_category_name=$_POST['service_category_name'];
	  	$sel1="select * from `tbl_service_category` where `Cat_name`='$service_category_name'";
	  	$qry1=mysqli_query($con,$sel1);
	  	//return number of rows
	  	$num=mysqli_num_rows($qry1);
	  	if($num>0)
	  	{
	 		echo ("<script language='javascript'>window.alert('Already added this service catgeory!!')
		   	window.location.href='add_service_categories.php';</script>");
	  	}
	  	else
	  	{
	  		$sql=mysqli_query($con,"INSERT INTO `tbl_service_category`(`Cat_name`, `Status`) VALUES ('$service_category_name',1)");
	  		if($sql)
	  		{
		   		echo ("<script language='javascript'>window.alert('Service Category Added Successfully!!')
		   		window.location.href='add_service_categories.php';</script>");
	  		}
	  		else
	  		{
		   		echo ("<script language='javascript'>window.alert('Service Category Adding Failed!!Try Again..')
		   		window.location.href='add_service_categories.php';</script>");
	  		}
	  	}
  	}
?>