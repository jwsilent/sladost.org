<div class="new_recipe">
<?php 
echo form_open_multipart('admin/carousel/create');
echo form_input('text', '');
echo form_input('url', '');
echo form_upload('image', '');
echo form_submit('submit', 'Опубликовать');
?>
</div>