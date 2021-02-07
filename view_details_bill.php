							<?php 
								session_start();
							?>
							<center>
								<h1>Reflection Salon & Spa</h1>
								<h2>Bill Details</h2>
							</center>
							<form action="#" method="post" enctype="multipart/form-data">
								<table width=75%>
									<tr>	
										<th>Service</th>
										<th>Amount</th>
									</tr>
									<tr>
										<?php
											include 'dbconnect.php';
											$kid=$_GET['uid'];
											$result=mysqli_query($con,"select * from tbl_appointment where `App_id`='$kid' and Status='2'");
											while($row=mysqli_fetch_array($result))
											{
												$id=$row['Reg_no'];
												$results=mysqli_query($con,"select * from tbl_registration where `Reg_id`='$id'");
												$rows=mysqli_fetch_array($results);
												echo "Name : $rows[F_name] $rows[L_name]<br><br>";
												echo "Date : $row[Date]<br><br>";
												$a=$row['ser_cat_id'];
												$result1=mysqli_query($con,"select * from tbl_category where ser_cat_id='$a'");
												$row1=mysqli_fetch_array($result1);
													
										?>
												<td><?php echo $row1['ser_cat_name'];?></td>
												<td><?php echo $row1['ser_cat_price'];?></td>
									</tr>
								</table>
								<?php
											}
								?>
								<td><br><br><center><font size="5"> <a href="javascript:window.print()">Click to print !!</td></tr></a></font></center>
								<br><br><a href="view_bill.php?uid=<?php echo  $_SESSION['Reg_id'];?>"><img src="images/_back_button.png" width="50px"></a>
							</form>
							<style>
								table {
								    border-collapse: 2;
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

