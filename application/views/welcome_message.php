<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CTS - Login Page</title>
	<?php echo link_tag( ASSETS_DIR . 'stylesheets/reset.css' ); ?>
	<?php echo link_tag( ASSETS_DIR . 'stylesheets/default.css' ); ?>
</head>
<body>
<div id="container">
	<?php echo heading('Hi There', 2) ?>
	<div id="login_page">
		<?php echo form_open('users/sign_in', array('class' => 'login', 'id' => 'login_form') ); ?>
		<form action="sign_in/" class="login-form">

			<?php $attrib_username  = array( 'name' => 'username', 'value' => 'username', 'id' => 'username'); ?>
			<?php $attrib_password  = array( 'name' => 'password', 'value' => 'password', 'id' => 'password'); ?>
			<?php $attrib_submit  = array( 'name' => 'sign_in', 'value' => 'Sign-in', 'id' => 'sign_in'); ?>
			<?php $attrib_remember_me  = array( 'name' => 'remember_me', 'value' => 'remember' , 'id' => 'remember_me'); ?>

			<?php echo heading('Login', 1) ?>
				<?php echo form_input( $attrib_username ); ?>
				<?php echo form_password( $attrib_password ); ?>
				<?php echo form_submit( $attrib_submit ); ?>
				<?php echo form_label( form_checkbox( $attrib_remember_me ) . 'Remember Me!' , 'remember_me' ); ?>
		<?php echo form_close(); ?>

	</div>
<div>
 	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</div>

</body>
</html>