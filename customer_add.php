            			<?php
			              	include "aheader.php";
			              	include 'dbconnect.php';
			            ?>
			            <h1><font color="#606060"><center>    CUSTOMER REGISTRATION</h1></font>
			            <form name="customer_add.php" action="customer_action.php" method="post" onSubmit="return validate()" enctype="multipart/form-data">
			              	<table>
			                	<tr>
				                  	<td><b>First Name</b></td>
				                  	<td><input type="text" name="txt_Customer_FName" id="txt_Customer_FName" placeholder="Enter First name..." value="" required onchange='Validate();'></td>
				                  	<script>    
					                    function Validate() 
					                    {
					                    	var val = document.getElementById('txt_Customer_FName').value;
					                      	if (!val.match(/^[a-zA-Z]{3,}$/)) 
					                      	{
					                        	alert('Only alphabets are allowed and maximum letter is 3');
					                          	document.getElementById('txt_Customer_FName').value = "";
					                        	return false;
					                      	}
					                      	return true;
					                    }
					                </script>
					            </tr>
				                <tr>
						            <td><b>Last Name</b></td>
						            <td><input type="text" name="txt_Customer_LName" id="txt_Customer_LName" value="" placeholder="Enter Last name..." required onchange='Validatew();'></td>
						            <script>    
						                function Validatew() 
						                {
						                  	var val = document.getElementById('txt_Customer_LName').value;
						                  	if (!val.match(/^[a-zA-Z]{2,}$/)) 
						                  	{
						                    	alert('Only alphabets are allowed and maximum letter is 2');
						                      	document.getElementById('txt_Customer_LName').value = "";
						                    	return false;
						                  	}
						                  	return true;
						                }
						            </script>
				                </tr>
					            <tr>
					              	<td><b>Gender:</b></td>
					              	<td>  
					                	<input type="radio" name="txt_Customer_Gender" id="txt_Customer_Gender" value="Male" required>Male
					                	<input type="radio" name="txt_Customer_Gender" id="txt_Customer_Gender" value="Female" required>Female
					                </td>
					            </tr>
					            <tr>
					              	<td><b>House Number</b></td>
					              	<td><input type="text" name="txt_Housenum" id="txt_Housenum" value="" placeholder="Enter House number..." required onchange='Validname();'></td>
					               	<script>    
					                 	function ValidHousenum() 
					                 	{
					                   		var val = document.getElementById('txt_Housenum').value;
					                      	if (!val.match(/^[0-9]{3,}$/)) 
					                      	{
					                        	alert('Only numbers are allowed and maximum digit is 3');
					                          	document.getElementById('txt_Housenum').value = "";
					                        	return false;
					                      	}
					                      	return true;
					                    }
				                  	</script>
				                </tr>
				                <tr>
				                  	<td><b>Street Name</b></td>
				                  	<td><input type="text" name="txt_Street" id="txt_Street" value="" placeholder="Enter Street name..." required onchange='Validstreet();'></td>
				                  	<script>    
				                    	function Validstreet() 
				                    	{
					                      	var val = document.getElementById('txt_Street').value;
					                      	if (!val.match(/^[0-9a-zA-Z]{3,}$/)) 
					                      	{
					                        	alert('Must have minimum character of 3');
					                          	document.getElementById('txt_Street').value = "";
					                        	return false;
					                      	}
				                      	return true;
				                    	}
				                  	</script>
				                </tr>
				                <tr>
				                  	<td><b>Barangay</b></td>
				                  	<td><input type="text" name="txt_Brgy" id="txt_Brgy" value="" placeholder="Enter Barangay name..." required onchange='Validbrgy();'></td>
				                  	<script>    
					                    function Validbrgy() 
					                    {
					                      	var val = document.getElementById('txt_Brgy').value;
							                if (!val.match(/^[0-9a-zA-Z]{3,}$/)) 
							                {
							                   	alert('Must have minimum character of 3')
					                          	document.getElementById('txt_Brgy').value = "";
					                        	return false;
					                      	}
					                      	return true;
					                    }
				                  	</script>
				                </tr>
				                <tr>
				                  	<td><b>City</b></td>
				                  	<td><input type="text" name="txt_City" id="txt_City" value="" placeholder="Enter City..." required onchange='Validcity();'></td>
					              	<script>    
					                	function Validcity() 
						   	            {
						   	              	var val = document.getElementById('txt_City').value;
						                   	if (!val.match(/^[a-zA-Z]{3,}$/)) 
						                   	{
						                       	alert('Only alphabets are allowed and must have minimum character of 3');
					                         	document.getElementById('txt_City').value = "";
					                        	return false;
					                      	}  
					                      	return true;
					                    }
				                  	</script>                    
				                </tr>
				                <tr>
				                  	<td><b>Mobile No.</b></td>
				                  	<td><input type="text" name="Mobile" id="Mobile" maxlength='11' value="" placeholder="Enter Mobile number..." required onchange='Validmobile();'></td>
				                  	<script>    
				                    	function Validmobile() 
						                {
						                  	var val = document.getElementById('Mobile').value;
						                  	if (!val.match(/^[0][9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/)) 
						                   	{
						                     	alert('Enter valid Mobile number');
						                        document.getElementById('Mobile').value = "";
						                       	return false;
						                  	}  
						                  	return true;
						                }
					               	</script>  
					            </tr>
					            <tr>
					              	<td><b>Email</b></td>
					              	<td><input type="email" name="txt_Email" id="txt_Email" value="" placeholder="Enter Email Address..."required onchange='Validata();'>
					               	</td>
					               	<script>    
					                   	function Validata() 
					                    {
						                  	var val = document.getElementById('txt_Email').value;
						                  	if (!val.match(/([0-9a-zA-Z_\-\.]){1,}\@([0-9a-zA-Z_\-\.]){1,}\.([a-zA-Z]){2,4}$/)) 
						                   	{
						                     	alert('Enter a Valid Email');
						                        document.getElementById('txt_Email').value = "";
						                       	return false;
						                   	}
						                  	return true;
						                }  
					                </script>
					            </tr> 
					            <tr>    
					               	<td><b>Password</b></td>
					               	<td><input type="password" name="txt_Pwd" id="txt_Pwd" value="" placeholder="Enter Password..."required onchange='Validp();'>
					               	</td>
					               	<script>    
					                   	function Validp() 
						                {
						                  	var val = document.getElementById('txt_Pwd').value;
						                  	if (!val.match(/^[A-Za-z0-9!-*]{6,8}$/)) 
						                    {
						                       	alert('Password should contain atleast a character and a Number with length atleast 6 and atmost 8');
						                       	document.getElementById('txt_Pwd').value = "";
						                      	return false;
						                   	}
						                  	return true;
						                }
					              	</script>
					            </tr>
					            <tr>
					              	<td><b>Confirm Password</b></td>
					                <td><input type="password" name="txt_cPwd" id="txt_cPwd" value="" placeholder="Retype Password.."required onchange='check();'></td>
					               	<span id="message" ></span>
					               	<script>
						                function check()
						                {
						                  	if(document.getElementById("txt_cPwd").value!=document.getElementById("txt_Pwd").value)
						                   	{
						                     	document.getElementById("message").style.color='red';
						                       	document.getElementById("message");
						                       	alert('Passwords does not Match');
						                     	document.getElementById('txt_cPwd').value = "";
						                   	}
					                     	else
					                     	{
					                        	document.getElementById("message").style.color='green';
					                        	document.getElementById("message");
					                      	}
					                    }
				                  	</script>
				                </tr>
				                <tr>
				                  	<td><b>Upload Your Photo</b></td>
				                  	<td>
				                    	<input type="file" name="txt_Image" id="txt_Image"  placeholder="pic path" accept="image/jpg, image/JPG, image/JPEG, image/jpeg, image/png, image/PNG" required="required"  onChange="load_image(this.id,this.value)">
					                </td>     
					                <script type="text/javascript">            
						            	function load_image(id,ext)            
						                {             
						                  	if(validateExtension(ext) == false)             
						                   	{             
						                     	alert("Upload only JPEG or JPG or PNG format ");                                          
						                       	document.getElementById("txt_Image").value = "";            
							                    document.getElementById("file").focus();             
							                    return;             
						                    }              
						                }             
					                    function validateExtension(v)
						                {
						                  	var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG","png","PNG");
						                   	for(var ct=0;ct<allowedExtensions.length;ct++)
						                   	{
						                       	sample = v.lastIndexOf(allowedExtensions[ct]);
						                       	if(sample != -1){return true;}
						                   	}
						                   	return false;
						                 }
					               	</script>         
					            </tr>
				                <tr>  
				                  	<td><input type="submit" name="cmd" id="cmd" value="Save"></td>
				                </tr>
				            </table>
				        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>  
		
