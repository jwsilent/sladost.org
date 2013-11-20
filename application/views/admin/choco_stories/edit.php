<div class="new_recipe">
<?php 
echo form_open('admin/choco_stories/update');
echo form_hidden('id', $story['id']);
echo form_label('Заголовок:'); 
echo form_input('title', $story['title']); ?>
<hr>
<?php echo form_label('История:');
echo form_textarea('body', $story['body']); ?>
<hr>
<?php echo form_submit('submit', 'Сохранить');
echo form_close();
?>
<hr>
<p><a href="<?php echo base_url(); ?>index.php/admin/choco_stories">Назад</a></p>
</div>