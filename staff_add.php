<?php
  	include 'dbconnect.php';
  	include 'admin_header.php';
?>
			              	<h1><font color="#606060"><center>STAFF REGISTRATION</h1></font><br>
			              	<form name="staff_add.php" action="staff_action.php" method="post" onSubmit="return validate()" enctype="multipart/form-data">
			                	<table>
			                  		<tr>
					                    <td><b>First name</b></td>
					                    <td><input type="text" name="txt_staff_FName" id="txt_staff_FName" value="" placeholder="Enter First name..." required onchange='Validate();'></td>
					                    <script>    
					                      	function Validate() 
					                      	{
					                        	var val = document.getElementById('txt_staff_FName').value;
					                        	if (!val.match(/^[A-Za-z]{3,}$/)) 
					                        	{
					                          		alert('Only alphabets are allowed');
					                            	document.getElementById('txt_staff_FName').value = "";
					                          		return false;
					                        	}
					                        	return true;
					                      	}
					                    </script>
			                  		</tr>
				                  	<tr>
					                    <td><b>Last name</b></td>
					                    <td><input type="text" name="txt_staff_LName" id="txt_staff_LName" value="" placeholder="Enter Last name..." required onchange='Validatew();'></td>
					                    <script>    
					                      	function Validatew() 
					                      	{
					                        	var val = document.getElementById('txt_staff_LName').value;
					                        	if (!val.match(/^[A-Za-z]{3,}$/)) 
					                        	{
					                          		alert('Only alphabets are allowed');
					                            	document.getElementById('txt_staff_LName').value = "";
					                          		return false;
					                        	}
					                        	return true;
					                      	}
					                    </script>
				                  	</tr>
				              		<tr>
					                    <td><b>Gender:</b></td>
					                    <td>
					                    	<input type="radio" name="txt_staff_Gender" id="txt_staff_Gender" value="Male"required>Male
				              		  		<input type="radio" name="txt_staff_Gender" id="txt_staff_Gender" value="Female"required>Female
				              		  	</td>
				                  	</tr>
			              			<tr></tr>
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
				                  	<td><b>Brgy</b></td>
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
					                    <td><input type="text" name="txt_City" id="txt_City" value="" placeholder="Enter City name..." required onclick='Validcity();'></td>
					                    <script>    
					                      	function Validcity() 
					                      	{
					                        	var val = document.getElementById('"txt_City').value;
					                        	if (!val.match(/^[A-Za-z]{3,}$/)) 
					                        	{
					                          		alert('Only alphabets are allowed');
					                          		document.getElementById('"txt_City').value = "";
					                          		return false;
					                        	}
					                        	return true;
					                      	}
					                    </script>
				                  	</tr>
				                  	<tr>
					                    <td><b>Mobile</b></td>
					                    <td><input type="text" name="txt_Mobile" id="txt_Mobile" value="" placeholder="Enter Mobile number..." required onchange='Validat();'></td>
					                    <script>    
				                      		function Validat() 
				                      		{
						                        var val = document.getElementById('Mobile').value;
						                        if (!val.match(/^[7-9][0-9]{1,9}$/)) 
						                        {
						                          	alert('Only Numbers are allowed and must contain 10 number');
						                          	document.getElementById('Mobile').value = "";
						                          	return false;
						                        }
						                        return true;
				                      		}
				                    	</script>
				                  	</tr>
				              		<tr>
					                    <td><b>Email</b></td>
					                    <td><input type="email" name="txt_Email" id="txt_Email" value="" placeholder="Enter Email address..." required onchange='Validata();'></td>
					                    <script>    
					                      	function Validata() 
					                      	{
						                      	var val = document.getElementById('txt_Email').value;
						                      	if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
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
					              		<td><b>Qualification</b></td>
					              		<td>
					              			<select name="qualification" size="1">
					              				<option>--Select--</option>
							              		<option value="UG">UG</option>
							              		<option value="PG">PG</option>
					              			</select>
					              		</td>
					                </tr>
				              		<tr>
					                    <td><b>Specialization</b></td>
					                    <td>
					                    	<select name="txt_specialization">
						              		  	<option>--Select--</option>
						              		  	<?php
						              		    	$res=mysqli_query($con,"SELECT * FROM `tbl_service_category`");
							              		    $r=mysqli_num_rows($res);
							              		    while($row=mysqli_fetch_array($res))
							              		    {  
						              		  	?>
						              		      		<option value = <?php echo $row['Cat_id'];?>>	  <?php echo $row['Cat_name']; ?></option>
						              		      		<?php
						              		   	 	}
						              		      		?>
					                      </select>  
				                  	</tr>
				              		<tr> 
					                    <td><b>University/College</b></td>
					                    <td><input type="text" name="txt_university" id="txt_university" value="" placeholder="Enter School Name..." required></td>
				              		</tr>
			                  		<tr>
			              		  		<td><b>Year Of Pass</b></td>
			                    		<td><input type="year" name="txt_year" id="txt_year" value="" placeholder="Enter Year..." required></td>
			              			</tr>
				              		<tr>
				                    	<td><b>Experience</b></td>
				                    	<td><input type="text" name="txt_experience" id="txt_experience" value="" placeholder="Enter Number of years..." required></td>
				              		</tr>
				              		<tr>
					                    <td><b>Password</b></td>
					                    <td><input type="password" name="txt_Pwd" id="txt_Pwd" value="" placeholder="Enter Password..."required onchange='Validp();'></td>
					                    <script>    
					                      	function Validp() 
					                      	{
					                        	var val = document.getElementById('txt_Pwd').value;
					                        	if (!val.match(/^[A-Za-z0-9!-*]{6,8}$/)) 
					                        	{
					                          		alert('Password should contain atleast a character and a Number with length atleast 6 and atmost 8')
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
					                    <script>
					                      	function check(){
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
			              				<span id="message" ></span>
			                  		</tr>
			                  		<tr>
					                    <td><b>Image</b></td>
					                    <td><input type="file" name="txt_Image" id="txt_Image"  placeholder="pic path" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required="required"  onChange="load_image(this.id,this.value)"></td>
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
  	</div>
</body>
</html>

