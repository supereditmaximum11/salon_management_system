<?php
	include 'dbconnect.php';
	include 'admin_header.php';
							$kid=$_GET['uid'];
							$res=mysqli_query($con,"select * from `tbl_category` where `ser_cat_id`='$kid'");
							$row=mysqli_fetch_array($res);
?>
							<br><br>
							<h1><font color="#606060"><center>EDIT SERVICES</h1><br></font>
							<form name="edit_service.php" action="#" method="post" >
							    <table>
									<tr>
							          	<td><b>Category Name</b></td>
							          	<td><input type="text" name="category_name" id="category_name" value="<?php echo $row['ser_cat_name'];?>"></td>
							        </tr>
									<tr>
							          	<td><b>Price</b></td>
							          	<td><input type="text" name="category_price" id="category_price" value="<?php echo $row['ser_cat_price'];?>"></td>
							        </tr>
									  	<td></td>
							          	<td><input type="submit" name="cmd" id="cmd" value="Save"></td>
							        </tr>
								</table>
							</form>
							<?php
								if(isset($_POST['cmd']))
								{
									$b=$_POST['category_name'];
									$c=$_POST['category_price'];
									$edit=mysqli_query($con,"UPDATE `tbl_category` SET `ser_cat_name`='$b',`ser_cat_price`='$c' where `ser_cat_id`='$kid'");
									header("location:view_service.php");
									include 'view_service_action.php';
								}
							?>
            			</div>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>
</body>
</html>