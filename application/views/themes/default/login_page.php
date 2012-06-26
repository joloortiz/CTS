		<?php echo form_open('login/validate_credentials', array('class' => 'login', 'id' => 'login_form') ); ?>

			<?php $attrib_username  = array( 'name' => 'username', 'value' => 'username', 'id' => 'username'); ?>
			<?php $attrib_password  = array( 'name' => 'password', 'value' => 'password', 'id' => 'password'); ?>
			<?php $attrib_submit  = array( 'name' => 'sign_in', 'value' => 'Sign-in', 'id' => 'sign_in'); ?>
			<?php $attrib_remember_me  = array( 'name' => 'remember_me', 'value' => 'remember' , 'id' => 'remember_me'); ?>
			<?php $attrib_remember_label = array( 'id' => 'remember_label' ) ?>

			<?php echo heading('User Login', 1) ?>
				<?php echo form_input( $attrib_username ); ?>
				<?php echo form_password( $attrib_password ); ?>
				<?php echo form_submit( $attrib_submit ); ?>
				<?php echo form_label( form_checkbox( $attrib_remember_me ) . 'Keep me logged in!' ,'remember_me' ,$attrib_remember_label ); ?>
		<?php echo form_close(); ?>
<p class="aligncenter">Forgot your password? <a href="">Click Here</a></p>