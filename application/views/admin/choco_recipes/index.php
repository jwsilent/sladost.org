<div class="crud_links">
		<a class="btn" href="choco_recipes/new">Создать</a>
</div>
<?php foreach ($recipes as $recipe): ?>

<div class="span11">
	<div class="recipe_item">
		<a href="choco_recipes/<?php echo $recipe['id'] ?>"><?php echo $recipe['title'] ?></a>
		<div class="recipe_item_controls">
			<p><?php echo $recipe['created_at'] ?></p>
			<p><a href="choco_recipes/<?php echo $recipe['id'] ?>/edit">Редактировать</a></p>
			<p><a href="choco_recipes/<?php echo $recipe['id'] ?>/delete">Удалить</a></p>
		</div>
	</div>
</div>

<?php endforeach ?>