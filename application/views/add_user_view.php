<html>
<head>
<script type="text/javascript" src="<?php echo site_url(ASSETS_DIR . SCRIPTS_DIR . 'module-add-user-validate/form-validate.js'); ?>"></script>
<?php echo link_tag( ASSETS_DIR . SCRIPTS_DIR . 'module-add-user-validate/form-validate.css' ); ?>
</head>
<body>
<h2>Add User</h2>
<div id='adduser'>
<?php echo validation_errors(); ?>
<?php  
$attributes = array('name' => 'form', 'onsubmit' => 'return validate(this)', 'id' => 'form', 'class' => 'form');
echo form_open('users/form_validate', $attributes)
?>
	
	<p>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
	</p>                                              
	<p>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
	</p>
	<p>
		<label for="passconf">Confirm Password:</label>
		<input type="password" name="passconf" id="passconf">
	</p>
	<p>
		<label for="email">E-mail:</label>
		<input type="text" name="email" id="email">
	</p>
	<p>
		<input type="submit" value="Submit">
	</p>
	
<?php echo form_close(); ?>	
</div>
</body>
</html>

