<?php
	include 'staff_header.php';
?>
							<script type="text/javascript">
							function validate()
							{
								var pas0=document.getElementById("txtoldpwd");
								var pas1=document.getElementById("txtnewpwd");
								var pas2=document.getElementById("txtconfirmpwd");					
								if(pas0.value=="")
								{
									alert("Old Password cant be null!!");
									pas1.focus();
									return false;
								}
								if(pas1.value=="")
								{
									alert("New Password cant be null!!");
									pas1.focus();
									return false;
								}
								if(pas2.value=="")
								{
									alert("Please confirm password!!");
									pass2.focus();
									return false;
								}
								if(pas1.value!=pas2.value)
								{
									alert("Passwords does not match!!");
									pas1.focus();
									return false;
								}
							    {  alert("Request Send!!"); }
							}
							</script>
							<?php
								error_reporting(0);
								$uname=$_SESSION['username'];
							?>
                            <form action="password_action.php" method="post" onsubmit="return validate()">
 				               	<br><br>
								<div>
									<?php
	                                    if($_GET['s']==1)
	                                    {
	                                        echo "<script>alert('Password Has Changed!!')</script>";
	                                    }
	                                    else if($_GET['s']==2)
	                                    {
	                                        echo "<script>alert('The Old Password is not matched!!')</script>";
	                                    }
	                                    else
	                                    {}
                                    ?>
										<h1><font color="#606060"><center>CHANGE PASSWORD</h1></font><br>
                                      	<table class="tb">
											<tr>
												<td></td>
											</tr>
											<tr>
                                             	<td><b>Old Password</b></td><td><input type="password" name="old" id="txtoldpwd"/></td>
                                         	</tr>
                                           	<tr>
                                             	<td><b>New Password</b></td><td><input type="password" name="new" id="txtnewpwd"/></td>
                                         	</tr>
                                          	<tr>
                                             	<td><b>Confirm Password</b></td><td><input type="password" name="confirm" id="txtconfirmpwd"/></td>
                                         	</tr>
                                         	<tr>
                                             	<td></td><td><input type="submit" name="changepwd" id="txtchangepwd" value="Change"/></td>
                                         	</tr>
											<tr>
												<td></td>
											</tr>
										</table>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
                 			



