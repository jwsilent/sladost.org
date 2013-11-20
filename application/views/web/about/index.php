<div class="span4">
	<div class="about_header">
		<p>О НАС</p>
	</div>
	<div class="about_address">
		<p>АДРЕС:</p>
		<p>Улица, дом 1</p>
	</div>
	<div class="about_phone">
		<p>ТЕЛЕФОН:</p>
		<p>+7 927 007 80 11</p>
		<a href="#reserveModal" role="button" data-toggle="modal"><p class="header_address">ЗАКАЗАТЬ ЗВОНОК</p></a>
	</div>
</div>
	
<div class="span4">
	<div class="about_feedback_form">
		<div>
			<p>ОБРАТНАЯ СВЯЗЬ</p>
		</div>
		
		<div>
		<?php echo form_open('feedback'); ?>
		<div>
			<?php echo form_input('name', '','placeholder="Представьтесь" class="input-xlarge"'); ?>
		</div>
		<div>
			<?php echo form_input('subject', '','placeholder="Тема обращения" class="input-xlarge"'); ?>
		</div>
		<div>
			<?php echo form_textarea('body', '','placeholder="Текст обращения" class="input-xlarge"'); ?>
		</div>
		<div>
			<?php echo form_submit('submit', 'ОТПРАВИТЬ', 'class="btn btn-primary submit_btn"'); ?>
		</div>
		<?php echo form_close(); ?>
		</div>
	</div>
</div>