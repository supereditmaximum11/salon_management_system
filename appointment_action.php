<?php
 	include 'dbconnect.php';
	date_default_timezone_set('Asia/Manila'); 
	session_start();
	$uname=$_SESSION['username'];
	$sel="select Reg_id,F_name from tbl_registration Where Email='$uname'";
    $qry=mysqli_query($con,$sel);
    $ans=mysqli_fetch_array($qry);
    $a=$ans['Reg_id'];
	$ii=0;
	$num=0;
	$f=0;
	$service=$_POST['service'];
	$sql=mysqli_query($con,"select * from tbl_category where ser_cat_name='$service'" );
	$row=mysqli_fetch_array($sql);
	$b=$row['ser_cat_id'];
	$_SESSION['ser_cat_id']=$b;
	$c=$row['Cat_id'];
	$date=$_POST['txt_Appoinment_Date']; 
	$time=$_POST['time'];
	$s=$_POST['txt_staff'];  	
	$at="10:00";
	$bt="16:30";
	$ct=date("H:i");
	$cd=date("Y-m-d");
	if(($time>=$at)&&($time<=$bt))
	{
		if((($date==$cd)&&($time>$ct))||($date>$cd))
		{			
			$resu=mysqli_query($con,"select * from `tbl_appointment` where `Staff_id`='$s' and `Date`='$date'");
			while($rw=mysqli_fetch_array($resu))
			{
				$f=1; 
				$ti=$time;
				$a1=strtotime("-30 minutes",strtotime($ti));
				$a2=date("H:i",$a1);
				$b1=strtotime("+30 minutes",strtotime($ti));
				$b2=date("H:i",$b1);
				$query = "select * from tbl_appointment where `Time` BETWEEN '$a2' AND '$b2' and `Date`='$date' and `Status` IN (1,2,4,5);";
				$sel1=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($sel1))
				{
		  			$num++;
				}
				if($num>0)
				{
	 				echo ("<script language='javascript'>window.alert('Already booked in this time..Try another time..')
		   			window.location.href='appointment_status.php';</script>");
	  			}
				else
				{
					$sql=mysqli_query($con,"select * from tbl_appointment where Date='$date' and `Staff_id`='$s' and `Status` IN (1,2,4,5);" );
					while($row=mysqli_fetch_array($sql))
					{
		  				$ii++;
					}
					if($ii>2)
					{
						echo ("<script language='javascript'>window.alert('Appointment is full for the date:.$date')
			   			window.location.href='appointment_add.php?uid=$_SESSION[ser_cat_id]'</script>");
						break;			
					}
					else
					{
		 				$sql=mysqli_query($con,"INSERT INTO `tbl_appointment`(`Reg_no`, `ser_cat_id`, `Cat_id`,`Date`,`Time`,`Staff_id`,`Status`) 
		  				VALUES ('$a','$b','$c','$date','$time','$s',1)");
		 				if($sql)
		  				{
							echo ("<script language='javascript'>window.alert('Service Booked!!')
							window.location.href='appointment_status.php';</script>");
		  				}
		  				else
		  				{
			   				echo ("<script language='javascript'>window.alert('Booking Failed.Try Again!!')
			   				window.location.href='appointment_status.php';</script>");
		  				}
					}
				}
			}
			if($f==0)
			{
				$sql=mysqli_query($con,"INSERT INTO `tbl_appointment`(`Reg_no`, `ser_cat_id`, `Cat_id`,`Date`,`Time`,`Staff_id`,`Status`) 
				VALUES ('$a','$b','$c','$date','$time','$s',1)");
				if($sql)
				{
					echo ("<script language='javascript'>window.alert('Service Booked luh!!')
					window.location.href='appointment_status.php';</script>");
				}
				else
				{
					   echo ("<script language='javascript'>window.alert('Booking Failed.Try Again!!')
					   window.location.href='appointment_status.php';</script>");
				}  
			}   
		}
		else
		{
?>
			<center><h2><script language='javascript'>window.alert('Sorry,the time you selected already passed!!')
			window.location.href='appointment_add.php?uid=<?php echo $_SESSION['ser_cat_id'];?>'</script></h2>
			<?php 
		}
	}
	else
	{ 	
		?>
		<center><h2><script language='javascript'>window.alert('Sorry, Appointment time is from 10:00am - 4:30pm!!')
		window.location.href='appointment_add.php?uid=<?php echo $_SESSION['ser_cat_id'];?>'</script></h2>
		<?php 
	}
		?>