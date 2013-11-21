<div class="new_recipe">
<?php 
echo form_open('admin/items/create');
echo form_hidden('id', ''); ?>
<?php echo form_label('');
echo form_input('title', ''; ?>
<hr>
<?php echo form_label('');
echo form_textarea('description', ''); ?>
<hr>
<?php echo form_label('');
echo form_input('weight', ''); ?>
<hr>
<?php echo form_label('');
echo form_input('size', '');
?>
<hr>
<?php echo form_label('');
echo form_input('price', '');
?>
<hr>
<?php echo form_label('');
echo form_dropdown('category_id', $options);
?>
<hr>
<?php echo form_submit('submit', 'Сохранить');
echo form_close();
?>
<hr>
		<p><a href="<?php echo base_url(); ?>index.php/admin/items">Назад</a></p>
</div>