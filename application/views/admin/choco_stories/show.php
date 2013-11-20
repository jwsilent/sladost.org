<div class="span11">
	<div class="recipe_item">
		<p>Заголовок:</p>
		<p><?php echo $recipe['title'] ?></p>
		<hr>
		<p>Дата создания:</p>
		<p><?php echo $recipe['created_at'] ?></p>
		<hr>
		<p>Рецепт:</p>
		<p><?php echo $recipe['body'] ?></p>
	</div>
	<hr>
	<p><a href="<?php echo base_url(); ?>index.php/admin/choco_recipes">Назад</a></p>
</div>