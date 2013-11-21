<div class="new_recipe">
<?php 
echo form_open('admin/items/update');
echo form_hidden('id', $item['id']); ?>
<?php echo form_label('Наименование:');
echo form_input('title', $item['title']); ?>
<hr>
<?php echo form_label('Описание:');
echo form_textarea('description', $item['description']); ?>
<hr>
<?php echo form_label('Вес:');
echo form_input('weight', $item['weight']); ?>
<hr>
<?php echo form_label('Размер:');
echo form_input('size', $item['size']);
?>
<hr>
<?php echo form_label('Цена:');
echo form_input('price', $item['price']);
?>
<hr>
<?php echo form_label('Категория:');
echo form_dropdown('category_id', $options);
?>
<hr>
<?php echo form_submit('submit', 'Сохранить');
echo form_close();
?>
<hr>
	<p><a href="<?php echo base_url(); ?>index.php/admin/items">Назад</a></p>
</div>