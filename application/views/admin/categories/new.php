<div class="new_recipe">
<?php 
echo form_open('admin/categories/create');
echo form_label('Название категории:');
echo form_input('title', ''); ?>
<hr>
<?php 
echo form_label('Описание:');
echo form_textarea('description', ''); ?>
<hr>
<?php 
echo form_label('Добавить в категорию:');
echo form_dropdown('parent_category_id', $options); ?>
<hr>
<?php echo form_submit('submit', 'Опубликовать'); ?>
<hr>
<?php
echo form_close(); ?>
<hr>
<p><a href="<?php echo base_url(); ?>index.php/admin/categories">Назад</a></p>
</div>