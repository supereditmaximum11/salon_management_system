<?php
	include 'dbconnect.php';
	include 'customer_header.php';
?>
							<h1><font color="#606060"><center>APPOINTMENT STATUS</font></h1><br>
							<?php
								$res1=mysqli_query($con,"SELECT * FROM `tbl_appointment` WHERE `Reg_no`='$_SESSION[Reg_id]' and `Status` != '4'");
								$row1=mysqli_fetch_array($res1);
								if(empty($row1))
								{
									echo "<br><br><center><font color=red size=3>No Services Booked !!!</font></center>";
								}
								else
								{
							?>
									<table border=2 width=70%>
										<tr>
											<th>SERVICE</th>
											<th>DATE</th>
											<th>TIME</th>
											<th>STAFF PREFERRED</th>
											<th>STATUS</th>
											<th>ACTION</th>
										</tr>
										<?php
											$res=mysqli_query($con,"SELECT * FROM `tbl_appointment` WHERE `Reg_no`='$_SESSION[Reg_id]' and `Status` != '4'");
											while($row=mysqli_fetch_array($res))
											{
												$a=$row['ser_cat_id'];
												$r=$row['Staff_id'];
												$res1=mysqli_query($con,"SELECT * FROM `tbl_category` WHERE `ser_cat_id`='$a'");
												$row1=mysqli_fetch_array($res1);
												$res2=mysqli_query($con,"SELECT * FROM `tbl_registration` where `Reg_id`='$r'");
												$row2=mysqli_fetch_array($res2);
										?>
												<tr>
													<td><center><?php echo $row1['ser_cat_name'];?></td>
													<td><center><?php echo $row['Date'];?></td>
													<td><center><?php echo $row['Time'];?></td>
													<td><center><?php echo $row2['F_name'];?> <?php echo $row2['L_name'];?></td>
													<?php
														$s=$row['Status'];
														if($s==1)
														{
													?>
															<td><center><font color="#872f9c"><b><?php echo "Requested";?></b></td>
																<td><a href="appointment_cancel.php?uid=<?php echo $row['App_id'];?>" onclick="return confirm('Cancel Appointment??')"><img src="images/_cancel_button.png" width="24px">
																</td>
															<?php
														}
														else if($s==0)
														{
															?>
															<td><center><font color="#872f9c"><b><?php echo "Canceled";?></b></td>
															<td><a href="appointment_delete.php?uid=<?php echo $row['App_id'];?>" onclick="return confirm('Delete??')"><img src="images/_delete_button.png" width="24px">
															</td>
															<?php
														}
														else if($s==3)
														{
															?>
															<td><center><font color="#872f9c"><b><?php echo "Rejected";?></b></td>
															<td><a href="appointment_delete.php?uid=<?php echo $row['App_id'];?>" onclick="return confirm('Delete??')"><img src="images/_delete_button.png" width="24px">
															</td>
															<?php 
														} 
														else if($s==2)
														{
															?>
															<td><center><font color="#872f9c"><b><?php echo "Serviced";?></b></td>
															<?php 
														} 
														else if($s==5)
														{
															?>
															<td><center><font color="#872f9c"><b><?php echo "Paid";?></b></td>
															<td><a href="appointment_delete.php?uid=<?php echo $row['App_id'];?>" onclick="return confirm('Delete??')"><img src="images/_delete_button.png" width="24px">
															</td>
															<?php 
														} 

															?>
												</tr>
															<?php
											}
															?>
										</table>
										<?php	
								}
										?>
									
								<style>
									table {
									    border-collapse: collapse;
									    width: 100%;
									}
									th, td {
									    text-align: left;
									    padding: 8px;
									}
									tr:nth-child(even){background-color: #f2f2f2}
									th {
									        background-color: #872f9c;
									    color: white;
									}
								</style>
				        </div>
			        </div>
		        </div>
		    </div>
    	</div>
  	</div>
</body>
</html>