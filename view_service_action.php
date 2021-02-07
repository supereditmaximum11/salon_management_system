<?php
	include 'dbconnect.php';
?>
							<?php
								$x=$_SESSION['categories'];
								$res1=mysqli_query($con,"select * from `tbl_category` where Cat_id in (select Cat_id from `tbl_service_category` where Cat_id='$x')");
								$row1=mysqli_fetch_array($res1);
								if(empty($row1))
								{
									echo "<font color=red size=3><center>No Service Added Yet !!!</font></center>";
								}
								else
								{
							?>
									<table width=75% align="center">
										<tr>
											<th>Category name</th>
											<th>Price</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
										<?php
											$x=$_SESSION['categories'];
											$results=mysqli_query($con,"select * from `tbl_category` where Cat_id in (select Cat_id from `tbl_service_category` where Cat_id='$x')");
											$results1=mysqli_query($con,"select Cat_name from `tbl_service_category` where Cat_id='$x'");
											$row1=mysqli_fetch_array($results1);
										?>
										<h1><font color="#606060">
										<center>
										<?php
											echo $row1['Cat_name'];
										?>
										</h1></font>
										<?php
											while($row=mysqli_fetch_array($results))
											{
										?>
							  			<?php
											echo"<tr>
												<td>$row[ser_cat_name]</td>
												<td>$row[ser_cat_price]</td>
												<td><a href='edit_service.php?uid=$row[ser_cat_id]'><img src=images/_edit_button.png width=24px></a></td>";
										?>
										<td><a href="delete_service.php?uid=<?php echo $row['ser_cat_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/_delete_button.png" width="24px"></td></tr>
										<?php	
											}
								}
										?>
									<td>
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