<div class="sign_up">
	<div class="sign_up_header">
		<p>РЕГИСТРАЦИЯ</p>
	</div>
	<div class="sign_up_form">
		<?php echo form_open('registration'); ?>
		<div>
			<?php echo form_input('username', '','placeholder="Введите имя пользователя" class="input-xlarge"'); ?>
		</div>
		<div>
			<?php echo form_input('email', '','placeholder="Введите адрес эл. почты" class="input-xlarge"'); ?>
		</div>
		<div>
			<?php echo form_password('password', '','placeholder="Введите пароль" class="input-xlarge"'); ?>
		</div>
		<div>
			<?php echo form_submit('register', 'РЕГИСТРАЦИЯ', 'class="btn btn-danger submit_btn"'); ?>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
