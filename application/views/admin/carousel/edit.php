<div class="new_recipe">
<?php 
echo form_open_multipart('admin/carousel/update');
echo form_hidden('id', $carousel['id']);
echo form_label('Текст изображения:');
echo form_input('text', $carousel['text']); ?>
<hr>
<?php echo form_label('Ссылка:');
echo form_input('url', $carousel['url']); ?>
<hr>
<?php echo form_submit('submit', 'Сохранить');
echo form_close();
?>
<hr>
<p><a href="<?php echo base_url(); ?>index.php/admin/carousel">Назад</a></p>
</div>