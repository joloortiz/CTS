<html>
<body>
<h1>Edit Profile</h1>
<?php  
$attributes = array('name' => 'form', 'onsubmit' => 'return validate(this)', 'id' => 'form', 'class' => 'form');
echo form_open("users/update/".$this->uri->segment(3), $attributes);
if(isset($records)): foreach($records as $row):
?>
	
	<p>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" value="<?php echo $row->u_username; ?>">
	</p>                                              
	<p>
		<label for="email">Email:</label>
		<input type="text" name="email" id="email" value="<?php echo $row->u_email; ?>">
	</p>
	<p>
		<label for="fname">First Name:</label>
		<input type="text" name="fname" id="fname" value="<?php echo $row->u_fname; ?>">
	</p>
	<p>
		<label for="mname">Middle Name:</label>
		<input type="text" name="mname" id="mname" value="<?php echo $row->u_mname; ?>">
	</p>
	<p>
		<label for="mname">Last Name:</label>
		<input type="text" name="lname" id="lname" value="<?php echo $row->u_lname; ?>">
	</p>
	<p>
		<label for="address">Address:</label>
		<input type="text" name="address" id="address" value="<?php echo $row->u_address; ?>">
	</p>
	<p>
		<label for="gender">Gender:</label>
		<?php 
			if($row->u_gender == "Male"): 
				$male = TRUE;
				$female = FALSE;
			elseif($row->u_gender == "Female"): 
				$female = TRUE;
				$male = FALSE;
			else: 
				$male = FALSE;
				$female = FALSE;
			endif;
		?>
		<?php echo form_radio('gender', 'Male', $male); ?>Male
		<?php echo form_radio('gender', 'Female', $female); ?>Female
	</p>		
	<p>
		<input type="submit" value="Submit">
	</p>
	
<?php 
endforeach;
endif;
echo form_close(); 

$attributes = array('name' => 'form', 'onsubmit' => 'return validate(this)', 'id' => 'form', 'class' => 'form');
echo form_open('users/update_password/'.$this->uri->segment(3), $attributes);
if(isset($records)): foreach($records as $row):
?>
	<hr/>	
	<h1>Change Password</h1>
	<p>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" value="">
	</p>
	<p>
		<label for="passconf">Confirm Password:</label>
		<input type="password" name="passconf" id="passconf" value="">
	</p>
	<p>
		<input type="submit" value="Submit">
	</p>
<?php 
endforeach;
endif;
echo form_close();
?>	
</body>
</html>