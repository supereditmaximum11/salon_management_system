<?php
	include 'admin_header.php';
?>
							<br><br>
							<h1><font color="#606060"><center>EDIT SERVICE CATEGORIES</font></h1><br>
							<form name="view_service_category.php" action="#" method="post">
								<?php
									include 'dbconnect.php';
									$kid=$_GET['uid'];
									$res=mysqli_query($con,"select * from `tbl_service_category` where Cat_id='$kid'");
									while($row=mysqli_fetch_array($res))
									{
								?>
										<form action="#" method="post">
											<table>
												<tr>
													<td><b>Service Name:</b></td><td><input type="text" name="service_category_name" value="<?php echo $row['Cat_name'];?>"/></td>
												</tr>
												<tr><td></td><td><input type="submit" name="submit" value="Save"></td></tr>
											</table>
										</form>
									<?php
								}
								if(isset($_POST["submit"]))
								{
									$n=$_POST["service_category_name"];
									$edit=mysqli_query($con,"UPDATE `tbl_service_category` SET `Cat_name`='$n' WHERE Cat_id='$kid'");
									header("location:view_service_category.php");
								}	
									?>
							</form>
            			</div>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>
</body>
</html>		