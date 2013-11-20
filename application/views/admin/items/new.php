<div class="new_recipe">
<?php 
echo form_open_multipart('admin/items/create');
echo form_input('title', '');
echo form_textarea('description', '');
echo form_input('weight', '');
echo form_input('size', '');
echo form_input('price', '');
echo form_upload('photo', '');
echo form_dropdown('category_id', $options);
echo form_submit('submit', 'Сохранить');
?>
</div>