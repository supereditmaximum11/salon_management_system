<?php
	include 'admin_header.php';
?>
							<h1><font color="#606060"><center>APPOINTMENTS</h1></font><br>
							<?php
								$res1=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Status`='2'");
								$row1=mysqli_fetch_array($res1);
								if(empty($row1))
								{
									echo "<br><br><center><font color=red size=3>No Serviced Appointments Yet!!!</font></center>";
								}
								else
								{
							?>
									<table>
									<table border=3 width=70%>
									<tr>
										<th>NAME</th>
										<th>SERVICE</th>
										<th>DATE</th>
										<th>TIME</th>
										<th>STAFF</th>
										<th>STATUS</th>
										<th>PAYMENT</th>
										<th></th>
									</tr>
									<?php
										include 'dbconnect.php';
										$res=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Status`='2'");
										while($row=mysqli_fetch_array($res))
										{
											$a=$row['ser_cat_id'];
											$b=$row['Reg_no'];
											$c=$row['Staff_id'];
											$res1=mysqli_query($con,"SELECT * FROM `tbl_category` WHERE `ser_cat_id`='$a'");
											$row1=mysqli_fetch_array($res1);
											$res2=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$b'");
											$row2=mysqli_fetch_array($res2);
											$res3=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `Reg_id`='$c'");
											$row3=mysqli_fetch_array($res3);
									?>
											<tr>
												<td><center><?php echo $row2['F_name'];?></td>
												<td><center><?php echo $row1['ser_cat_name'];?></td>
												<td><center><?php echo $row['Date'];?></td>
												<td><center><?php echo $row['Time'];?></td>
												<td><center><?php echo $row3['F_name'];?> <?php echo $row3['L_name'];?></td>
												<td><center><font color="#872f9c"><b><?php echo "Serviced";?></b></td>
												<td><a href="payment.php?uid=<?php echo $row['App_id'];?>" onclick="return confirm('Payment Done??')">Pay</td>
											</tr>
											<?php
										}
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