<div class="new_recipe">
<?php 
echo form_open('admin/carousel/update');
	echo form_hidden('id', $carousel['id']);
	echo form_input('text', $carousel['text']);
	echo form_textarea('url', $carousel['url']);
	echo form_submit('submit', 'Сохранить');
?>
</div>