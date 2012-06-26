<html>
<head>
<script type="text/javascript"
	src="<?php echo site_url(ASSETS_DIR . SCRIPTS_DIR . 'module-add-user-validate/form-validate.js'); ?>"></script>
<?php echo link_tag( ASSETS_DIR . SCRIPTS_DIR . 'module-add-user-validate/form-validate.css' ); ?>
<div id="right-area">
<title>Add Client</title>
<div id="main-content">
</head>

<body>

	<h2 id="title-area" style="padding: 20px; margin: auto 20px;">Add Client</h2>

	<hr>
	
		
		<?php  
		$attributes = array('name' => 'form', 'onsubmit' => 'return validate(this)', 'id' => 'form', 'class' => 'form');
		echo form_open('clients/form_validate', $attributes)
		?>

		<p>
			<label for="firstname">First Name:</label> <input type="text"
				name="firstname" id="firstname">
				<?php echo form_error('firstname','<div class="error">','</div>'); ?>
		</p>
		<p>
			<label for="middlename">Middle Name:</label> <input type="text"
				name="middlename" id="middlename">
		</p>
		<p>
			<label for="lastname">Last Name:</label> <input type="text"
				name="lastname" id="lastname">
				<?php echo form_error('lastname','<div class="error">','</div>'); ?>
		</p>
		<p>
			<label for="email">E-mail:</label> <input type="text" name="email"
				id="email">
				<?php echo form_error('email','<div class="error">','</div>'); ?>
		</p>
		<p>
			<label for="mobilenumber">Mobile No:</label> <input type="text"
				name="mobilenumber" id="mobilenumber">
				<?php echo form_error('mobilenumber','<div class="error">','</div>'); ?>
		</p>
		<p>
			<label for="telnumber">Telephone No:</label> <input type="text"
				name="telnumber" id="telnumber">
				<?php echo form_error('telnumber','<div class="error">','</div>'); ?>
		</p>
		<p>
			<label for="address">Address:</label> 			
			<textarea rows="5" style="resize: none;"
				name="address" id="address"></textarea>
		</p>
			<p>
			<label for="gender">Gender:</label> <?php $options = array(
                  'male'  => 'Male',
                  'female'    => 'Female',
                 
                );

echo form_dropdown('gender', $options, 'male');
?>
		</p>
		<p>
			<input type="submit" value="Submit">
		</p>

		<?php echo form_close(); ?>
	</div>
	</div>
</body>
</html>

