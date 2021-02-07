<?php
  	include 'dbconnect.php';
  	include 'admin_header.php';
?>
				            <script type="text/javascript">
				                function validate()
				                {
				                  	var  dvar1 = document.getElementById("service_category_name");
				                  	if(dvar1.value=="")
				                  	{
				                    	alert("Enter service category name...");
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
					                      	alert("Enter a valid service category name"); 
					                      	dvar1.focus();                    
					                      	return false;        
					                    }
				                  	}
				                }
				            </script>
				            <br><br>
				            <h1><font color="#606060"><center>ADD SERVICE CATEGORIES</font></h1><br>
				            <form name="add_service_categories.php" action="service_category_action.php" method="post" onSubmit="return validate()" enctype="multipart/form-data">
				                <table>
				                  	<tr>
				                    	<td><b>Service Category Name:</b></td>
				                    	<td><input type="text" name="service_category_name" id="service_category_name" placeholder="Enter service category name..." value="" required></td>
				                  	</tr>
				                  	<tr>
					              		<td></td>
					                    <td><input type="submit" name="cmd" id="cmd" value="Save"></td>
				                    </tr>
				                </table>
				            </form>
				            <a href="view_service_category.php"><center>View Service Category</a>
            			</div>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>
</body>
</html>
          