<div class="new_recipe">
<?php 
echo form_open_multipart('admin/items/update');
echo form_hidden('id', $item['id']);
echo form_input('title', $item['title']);
echo form_textarea('description', $item['description']);
echo form_input('weight', $item['weight']);
echo form_input('size', $item['size']);
echo form_input('price', $item['price']);
echo form_upload('photo', '');
echo form_dropdown('category_id', $options);
echo form_submit('submit', 'Сохранить');
?>
</div>