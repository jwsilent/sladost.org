<div class="crud_links">
	<a class="btn" href="categories/new">Создать</a>
</div>
<?php foreach ($categories as $category): ?>

<div class="span11">
	<div class="story_item">
		<a href="categories/<?php echo $category['id'] ?>"><?php echo $category['title'] ?></a>
		<div class="story_item_controls">
			<p><a href="categories/<?php echo $category['id'] ?>/edit">Редактировать</a></p>
			<p><a href="categories/<?php echo $category['id'] ?>/delete">Удалить</a></p>
		</div>
	</div>
</div>

<?php endforeach ?>