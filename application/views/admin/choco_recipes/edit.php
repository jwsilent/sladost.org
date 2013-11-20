<div class="new_recipe">
<?php 
echo form_open('admin/choco_recipes/update');
echo form_hidden('id', $recipe['id']);
echo form_label('Заголовок:'); 
echo form_input('title', $recipe['title']); ?>
<hr>
<?php echo form_label('Рецепт:');
echo form_textarea('body', $recipe['body']); ?>
<hr>
<?php echo form_submit('submit', 'Сохранить');
echo form_close();
?>
<hr>
<p><a href="<?php echo base_url(); ?>index.php/admin/choco_recipes">Назад</a></p>
</div>