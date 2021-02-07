<?php
	include 'customer_header.php';
?>
							<h1><font color="#606060"><center>USER PROFILE</h1></font></fieldset>
							<?php
								$kid =$_GET['uid'];
								$sel = "SELECT * FROM `tbl_registration` WHERE `Reg_id` = '$kid'";
								$result = mysqli_query($con , $sel);
								$row =mysqli_fetch_array($result);
							?>
							<div>
								<table><font size="4">
									
									<tr><td><b>NAME&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['F_name'];?>&nbsp<?php echo $row['L_name'];?></b></td></tr>
									<tr><td><b>GENDER&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Gender'];?></b></td></tr>
									<tr><td><b>HOUSE NO.&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['House_num'];?></b></td></tr>
									<tr><td><b>STREET&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Street'];?></b></td></tr>
									<tr><td><b>BARANGAY&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Barangay'];?></b></td></tr>
									<tr><td><b>CITY&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['City'];?></b></td></tr>
									<tr><td><b>PHONE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Mobile'];?></b></td></tr>
									<tr><td><b>EMAIL&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['Email'];?></b></td></tr>
									<img src="Uploads/<?php echo $row['Image'];?>" alt="" height="300" width="250" style="padding-right: 418px; margin-bottom: -280px; padding-left: 500px; margin-top: -173px;">
								</font></table>
							</div>
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
								    background-color: #6ea522;
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
