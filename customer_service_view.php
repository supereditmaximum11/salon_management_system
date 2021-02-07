							<?php
								include 'customer_header.php';
							?>
							<br><br>
							<?php
								$x=$_GET['uid'];
								$res1=mysqli_query($con,"select * from `tbl_category` where Cat_id in (select Cat_id from `tbl_service_category` where Cat_id='$x')");
								$row1=mysqli_fetch_array($res1);
								if(empty($row1))
								{
									echo "<font color=#606060><center><h1>SERVICES</h1></font>";
									echo "<br><br><center><font color=red size=3>No Services Added Yet !!!</font></center>";
								}
								else
								{
							?>
								<table width=75%>
									<tr>
										<th>Category name</th>
										<th>Price</th>
										<th>Book Now</th>
									</tr>
									<?php
										include 'dbconnect.php';
										$x=$_GET['uid'];
										$results=mysqli_query($con,"select * from `tbl_category` where Cat_id in (select Cat_id from `tbl_service_category` where Cat_id='$x')");
										$res=mysqli_query($con,"select * from tbl_service_category where Cat_id='$x'");
										$row1=mysqli_fetch_array($res);
										echo "<h1><center><font color=#606060>".$row1['Cat_name']."</font></h1><br>";
										while($row=mysqli_fetch_array($results))
										{	
											echo "<tr><td>$row[ser_cat_name]</td>
													<td>$row[ser_cat_price]</td>
													<td><a href='appointment_add.php?uid=$row[ser_cat_id];'><img src=images/_book_button.png width=35px></a></td></tr>";		
										}
								}
									?>
								</table>
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
       				 