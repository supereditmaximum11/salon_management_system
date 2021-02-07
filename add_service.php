<?php
  	include 'dbconnect.php';
  	include 'admin_header.php';    
?>
							<?php unset($_SESSION['categories']);?>
							<script type="text/javascript">
								function validate()
								{	
					               	var  dvar1 = document.getElementById("service_name");
								    if(dvar1.value=="")
								    {
								        alert("Enter Category name...");
								        dvar1.focus();
								        return false;
								    }
								    else		
								    {      
								        var expn2=/^[a-zA-Z\s]+$/;                          
								        if(dvar1.value.match(expn2))	     
								        {                          
								        }                  
								        else       
								        {                
								          	alert("Enter a valid service name"); 
								          	dvar1.focus();                    
								          	return false;        
								        }
								    }
								}
							</script>
							<br><br>
							<h1><font color="#606060"><center>ADD SERVICES</font></h1><br>
							<form name="add_service.php" action="service_action.php" method="post" onSubmit="return validate()" enctype="multipart/form-data">
							    <table>
							    	<tr>
							            <td><b>Service Category Name</b></td>
							            <td>
							                <select  name="service_category_name"  id="service_category_name" required="">
							                    <option value ="">--Select--</option>
							                    <?php
							                        $res=mysqli_query($con,"SELECT * FROM `tbl_service_category`");
							                        $r=mysqli_num_rows($res);
							                        while($row=mysqli_fetch_array($res))
							                        {  
							                    ?>
							                           <option value = <?php echo $row['Cat_id'];?>>	  <?php echo $row['Cat_name'];?></option>
							                           <?php
							                        }
							                           ?>
							                </select>
							            </td>
							        </tr>
							        <tr>
							        	<td><b>Service Name</b></td>
							            <td><input type="text" name="service_name" id="service_name" value="" placeholder="Enter service name..." required></td>
							        </tr>
							        <tr>
							            <td><b>Price</b></td>
							            <td><input type="number" name="service_price" id="service_price" value="" placeholder="Enter service price..."required></td>
							        </tr>
							        <tr>
							            <td></td>
							            <td><input type="submit" name="cmd" id="cmd" value="Save"></td>
							        </tr>
							    </table>
							</form>		  
							<a href="view_service.php"><center>View Service</a>  
            			</div>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>
</body>
</html>
          		 