<html>
<head><?php echo link_tag( ASSETS_DIR . SCRIPTS_DIR . 'module-add-user-validate/form-validate.css' ); ?></head>
<body>
<h2>Edit Client</h2>
<hr>
<?php  
$attributes = array('name' => 'form', 'onsubmit' => 'return validate(this)', 'id' => 'form', 'class' => 'form');
echo form_open('clients/form_validate', $attributes);
if(isset($records)): foreach($records as $row):
?>
	<p>
			<label for="firstname">First Name:</label> <input type="text"
				name="firstname" id="firstname" value="<?php echo $row->c_fname; ?>">
				
		</p>
		<p>
			<label for="middlename">Middle Name:</label> <input type="text"
				name="middlename" id="middlename" value="<?php echo $row->c_mname; ?>" >
		</p>
		<p>
			<label for="lastname">Last Name:</label> <input type="text"
				name="lastname" id="lastname" value="<?php echo $row->c_lname; ?>">
				
		</p>
		<p>
			<label for="email">E-mail:</label> <input type="text" name="email"
				id="email" value="<?php echo $row->c_email; ?>">
				
		</p>
		<p>
			<label for="mobilenumber">Mobile No:</label> <input type="text"
				name="mobilenumber" id="mobilenumber" value="<?php echo $row->c_mobileno; ?>">
				<?php echo form_error('mobilenumber','<div class="error">','</div>'); ?>
		</p>
		<p>
			<label for="telnumber">Telephone No:</label> <input type="text"
				name="telnumber" id="telnumber" value="<?php echo $row->c_telno; ?>">
				
		</p>
		<p>
			<label for="address">Address:</label> 			
			<input type="text"
				name="address" id="address" value="<?php echo $row->c_address; ?>">
		</p>
			<p>
			<label for="gender">Gender:</label> <?php $options = array(
                  'male'  => 'Male',
                  'female'    => 'Female',
                 
                );
			

echo form_dropdown('gender', $options, $row->c_gender);
?>
		</p>
		<p>
			<input type="submit" value="Submit">
		</p>

<?php 
endforeach;
endif;
echo form_close(); ?>	
</body>
</html>

