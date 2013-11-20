<div class="sign_up">
	<div class="sign_up_header">
		<p>ВХОД</p>
	</div>
	<div class="sign_up_form">
		<?php echo form_open('login'); ?>
		<div>
			<?php echo form_input('email', '','placeholder="Введите адрес эл. почты" class="input-xlarge"'); ?>
		</div>
		<div>
			<?php echo form_password('password', '','placeholder="Введите пароль" class="input-xlarge"'); ?>
		</div>
		<div>
			<?php echo form_submit('login', 'ВОЙТИ', 'class="btn btn-danger submit_btn"'); ?>
		</div>
		<?php echo form_close(); ?>
	</div>
	<?php echo validation_errors(); ?>
</div>
