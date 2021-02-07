<!DOCTYPE HTML>
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
  	<script src="js/jquery.min.js"></script> 
  	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src='menu_jquery.js'></script>
  	<link rel='stylesheet' type='text/css' href='styles.css' />
  	<link rel='stylesheet' type='text/css' href='table.css' />
	<link rel='stylesheet' type='text/css' href='bootstrap.css' />
	<style>
		.h_top {
			padding:10px 0;
			background:#c32ce6;
		}
		.h_bottom {
			background:#872f9c;
			padding:20px 0;
			box-shadow:inset 0px 8px 10px #872f9c;
		}
		#cssmenu {
		  	background: #872f9c;
		  	margin: 0;
		  	width: auto;
		  	padding: 0;
		  	line-height: 1;
		  	display: block;
		  	position: relative;
		  	font-family: 'PT Sans', sans-serif;
		}
		#cssmenu > ul > li.has-sub > a:before {
		    display: block;
		    content: '';
		    border: 4px solid transparent;
		    border-top-color: #872f9c;
		    z-index: 2;
		    height: 0;
		    width: 0;
		    position: absolute;
		    right: 16px;
		    top: 21px;
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="h_top">
			<div class="wrap">
			 	<div class="logo">
					<a><img src="images/_Logo.png" alt="" width="300px"/></a>
				</div>
        		<div class="clear"></div>
  			</div>
  		</div>
		<div class="h_bottom">
			<div class="wrap">
		     	<div id='cssmenu'>
					<?php session_start();
						include 'dbconnect.php';
						if(!isset($_SESSION['Reg_id']))
						{
							header("location:login.php");
						}
					?>
						<ul>
						   	<li ><a href='customer_first.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>Home</span></a></li>
							<li class="has-sub"><a href='#'><span>Services</span></a>
						      	<ul> 
							  		<?php
								 		$res=mysqli_query($con,"SELECT * FROM `tbl_service_category`");
										$r=mysqli_num_rows($res);
										while($row1=mysqli_fetch_array($res))
								  		{  
								  	?>
								  			<li><a href="customer_service_view.php?uid=<?php echo $row1['Cat_id'];?>"><?php echo $row1['Cat_name']; ?></a></li>
								  			<?php
								  		}
								  			?>
						      	</ul>
						   	</li>	 
						    <li class='has-sub'><a href='#'><span>Appointments</span></a>
						      	<ul>
								 	<li ><a href='appointment_status.php'><span>Appointment Status</span></a></li>
								 	<li ><a href='view_bill.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>View Bills</span></a></li>
						      	</ul>
						   	</li>
						   	<li class='has-sub'><a href='#'><span>Customers</span></a>
						      	<ul>
						         	<li ><a href='customer_home.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>Customer Details</span></a> </li>
						         	<li ><a href='customer_edit.php?uid=<?php echo $_SESSION['Reg_id'];?>'><span>Edit Profile</span></a></li> 
						      	</ul>
						   	</li>
						  	<li class='has-sub'><a href='#'><span>Settings</span></a>
						      	<ul>
							  		<li ><a href='customer_change_pass.php'><span>Change Password</span></a></li>
						         	<li ><a href='logout.php'><span>Logout</span></a></li>
						      	</ul>
						   </li>
						</ul>
				</div>
			</div>
		</div>
		<div class="main">
		    <div class="content" style="    padding: 106px 0;">
		    	 <div class="wrap">
		    	 	<div class="image group">
						<div class="grid span_2_of_3">