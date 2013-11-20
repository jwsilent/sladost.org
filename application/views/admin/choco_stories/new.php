<div class="new_recipe">
<?php 
echo form_open('admin/choco_stories/create');
echo form_label('Заголовок:'); 
echo form_input('title', ''); ?>
<hr>
<?php echo form_label('История:');
echo form_textarea('body', ''); ?>
<hr>
<?php echo form_submit('submit', 'Опубликовать');
echo form_close();
?>
<hr>
<p><a href="<?php echo base_url(); ?>index.php/admin/choco_stories">Назад</a></p>
</div>