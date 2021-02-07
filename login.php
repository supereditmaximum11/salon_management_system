<!DOCTYPE HTML>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<script src="js/jquery.min.js"></script> 
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
		.menu li a:hover,.menu li.active a{
			border-radius:10px;-webkit-border-radius:10px;-moz-border-radius:10px;-o-border-radius:10px;
			background:#b987c4;
		}
		.contact-form input[type="submit"] {
		    background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #b987c4), color-stop(100%, #b987c4));
		    background: -webkit-linear-gradient(top, #c32ce6, #872f9c);
		    background: -moz-linear-gradient(top, #c32ce6, #872f9c);
		    background: -o-linear-gradient(top, #c32ce6, #872f9c);
		    background: linear-gradient(top, #c32ce6, #872f9c);
		    background-color: #b987c4;
		    border-color: #b987c4;
		    color: white;
		    text-shadow: 0 -1px 1px rgba(19, 28, 0, 0.35);
		    -webkit-box-shadow: inset 0px 1px 0px rgba(255, 255, 255, 0.5), 0px 1px 2px rgba(0, 0, 0, 0.15);
		    -moz-box-shadow: inset 0px 1px 0px rgba(255, 255, 255, 0.5), 0px 1px 2px rgba(0, 0, 0, 0.15);
		    box-shadow: inset 0px 1px 0px rgba(255, 255, 255, 0.5), 0px 1px 2px rgba(0, 0, 0, 0.15);
		    border: 1px solid #b987c4;
		    display: inline-block;
		    padding: 10px 20px;
		    font-family: 'ambleregular';
		    font-weight: 300;
		    font-size: 14px;
		    cursor: pointer;
		    text-transform: uppercase;
		    -webkit-appearance: none;
		    float: right;
		}
		.contact-form input[type="submit"]:hover{
		  	background-color: #7db500;
		  	background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #a0e800), color-stop(100%, #6b9c00));
		  	background: -webkit-linear-gradient(top, #c32ce6, #872f9c);
		  	background: -moz-linear-gradient(top, #c32ce6, #872f9c);
		  	background: -o-linear-gradient(top, #c32ce6, #872f9c);
		  	background: linear-gradient(top, #c32ce6, #872f9c);
		}
		.contact-form input[type="submit"]:active{
		  	-webkit-box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.3), 0px 1px 0px white;
		  	-moz-box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.3), 0px 1px 0px white;
		  	box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.3), 0px 1px 0px white;
		  	text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.4);
		  	background: #c32ce6;
		  	color: #872f9c; 
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
	     		<div class="menu">
	     			<ul>
			    		<li><a href="index.php">Home</a></li>
			    		<li class="active"><a href="login.php">Login</a></li>
			    		<li><a href="customer_add.php">Register</a></li>					
			    		<li><a href="about.php">About Us</a></li>
			    		<div class="clear"></div>
     				</ul>
	     		</div>
  				<div class="clear"></div>
	      	</div>	     
	  	</div>	
    </div> 
	<div class="main">
    	<div class="content">
    	 	<div class="wrap">
    	     	<div class="contact-form">	
    	     		<h2><font color="#606060">Login Form</h2></font>
					<form method="post" action="#">
						<div>
							<span><label>USERNAME</label></span>
							<span><input name="username" type="text" style="width: 44%;"></span>
						</div>
						<div>
							<span><label>PASSWORD</label></span>
							<span><input name="password" type="password" style="width: 44%;"></span>
						</div>
	                    <br><br>
	                    <span><input type="submit" name="submit" value="submit" style="float:left;"></span><br><br><br>			  
					</form>  
					<?php
						include "dbconnect.php";
						if(isset($_POST['submit'])){
						 	$uname=$_POST['username'];
						 	$pwd=$_POST['password'];
							$p=md5($pwd);
							//$pwd may use for selecting if manually entered in database 
							//$p or md5($pwd) is a one-way hashing, so it can't be once the original value has been passed through the hashing algorithm, this occurs when you enter the value in the system
							$a=mysqli_query($con,"select * from `tbl_login` where `Username`='$uname' and (`Password`='$p' or `Password`='$pwd')");
							$row=mysqli_fetch_array($a);
							if(!empty($row))
							{ 
								if($row['Role_id']==1)
								{
									session_start();
									$_SESSION['username']=$row['Username'];
									$_SESSION['Reg_id']=$row['Reg_id'];
									header("Location:customer_first.php?uid=$row[Reg_id]");
								}
								else if($row['Role_id']==2)
								{
									session_start();
									$_SESSION['username']=$row['Username'];
									$_SESSION['Reg_id']=$row['Reg_id'];
									header("Location:staff_first.php");			
								}		
								else 
								{	
									session_start();
									$_SESSION['username']=$row['Username'];
									$_SESSION['Reg_id']=$row['Reg_id'];
									header("Location:admin_home.php");
								}
							}
							else
								echo "<script>alert('Username/Password Incorrect')</script>"; 
						}	
					?>
				  	<div class="clear"></div>
				</div>
		 	</div>
	   		<div class="clear"></div>
     	</div>
    </div>
</body>
</html>
