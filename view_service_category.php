<?php
	include 'admin_header.php';
?>

							<br><br>
							<h1><font color="#606060"><center>SERVICE CATEGORIES</font></h1><br>
							<?php
								$res1=mysqli_query($con,"select * from `tbl_service_category`");
								$row1=mysqli_fetch_array($res1);
								if(empty($row1))
								{
									echo "<font color=red size=3>No Services Added Yet !!!</font>";
								}
								else
								{
							?>
									<form name="view_service_category.php" action="#" method="post" >
										<table width=75%>
											<tr>
												<th>Service name</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
											<?php
												include 'dbconnect.php';
												$results=mysqli_query($con,"select * from `tbl_service_category`");
												while($row=mysqli_fetch_array($results))
												{
											?>
													<?php
														echo "<tr>
														<td>$row[Cat_name]</td>
														<td><a href='edit_service_category.php?uid=$row[Cat_id]'><img src=images/_edit_button.png width=24px></a></td>";
													?>
													<td><a href="delete_service_category.php?uid=<?php echo $row['Cat_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/_delete_button.png" width="24px"></td></tr>
													<?php	
												}
								}
													?>
										</table>
										<br><br><a href="add_service_categories.php">Add New Service Categories</a>
										<br>
									</form>	
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
										    background-color: #872f9c;;
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