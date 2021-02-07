<?php
	include 'admin_header.php';
	include 'dbconnect.php';
?>
							<form name="view_service.php" action="#" method="post" >
								<br><br><h1><font color="#606060"><center>CATEGORIES</font></h1><br>
								<table>
									<tr>
										<td>
											<b>Select Category</b>&nbsp;
										</td>
										<td>
											<select name="categories" required>
												<option value="">--Select--</option>
												<?php
													$res=mysqli_query($con,"SELECT * FROM `tbl_service_category`");
													$r=mysqli_num_rows($res);
													while($row=mysqli_fetch_array($res))
													{  
												?>
														<option value = <?php echo $row['Cat_id'];?>>
															<?php echo $row['Cat_name']; ?>
														</option>
														<?php
													}
														?>
											</select>
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
											<input type="submit" name="submit" value="View" >
										</td>
									</tr>
								</table> 
								<br>
								<?php
									if(isset($_POST['categories']) && isset($_POST['submit']) || isset($_SESSION['categories'])) 
									{
										if(isset($_POST['categories']) && isset($_POST['submit']))
										{
											$a=$_POST['categories'];
											$_SESSION['categories'] = $a;
											include 'view_service_action.php';
											
										}
										else if (isset($_SESSION['categories']))
										{
											include 'view_service_action.php';
											unset($_SESSION['categories']);
										}
										else		
										{}
									}	
								?>
								<br>
								<a href="add_service.php">Add New Service</a>
							</form>
            			</div>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>
</body>
</html>



		 