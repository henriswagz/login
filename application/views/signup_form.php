<div id="register_form">
	<h1>Create an Account!</h1>
	
	
		<?php
			echo form_open('index.php/login/create_member');
			echo form_input('first_name', set_value('first_name', 'First Name'));
			echo form_input('last_name', set_value('last_name', 'Last Name'));
			echo form_input('email', set_value('email', 'Email Address'));
			echo form_input('username', set_value('username', 'Username'));
			echo form_password('password', '', 'placeholder="Confirm Password"');
			echo form_password('password_confirm', '', 'placeholder="Confirm Password" class="password_confirm"');
			echo form_submit('submit', 'Create Account');
			?>
			<?php echo validation_errors('<p class="error">'); ?>


</div>