<div class="new_recipe">
<?php 
echo form_open('admin/news/create');
echo form_label('Заголовок:'); 
echo form_input('title', ''); ?>
<hr>
<?php echo form_label('Новость:');
echo form_textarea('body', ''); ?>
<hr>
<?php echo form_submit('submit', 'Опубликовать');
echo form_close();
?>
<hr>
<p><a href="<?php echo base_url(); ?>index.php/admin/news">Назад</a></p>
</div>