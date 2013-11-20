<div class="new_recipe">
<?php 
echo form_open_multipart('admin/carousel/create');
echo form_label('Текст изображения:');
echo form_input('text', ''); ?>
<hr>
<?php echo form_label('Ссылка:');
echo form_input('url', ''); ?>
<hr>
<?php echo form_label('Изображение:');
echo form_upload('image', ''); ?>
<hr>
<?php echo form_submit('submit', 'Опубликовать');
echo form_close();
?>
<hr>
<p><a href="<?php echo base_url(); ?>index.php/admin/carousel">Назад</a></p>
</div>