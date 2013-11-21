<div class="crud_links">
	<a class="btn"  href="news/new">Создать</a>
</div>

<div class="span11">
	<div class="story_item" style="background:none;">
		<span >Наименование</span>
		<div class="story_item_controls">
			<p>Дата создания</p>
			<p>Редактировать</p>
			<p>Удалить</p>
		</div>
	</div>
</div>
<span></span>
<br>
<br>

<?php foreach ($news as $news_item): ?>

<div class="span11">
	<div class="recipe_item">
		<a href="news/<?php echo $news_item['id'] ?>"><?php echo $news_item['title'] ?></a>
		<div class="recipe_item_controls">
			<p><?php echo $news_item['created_at'] ?></p>
			<p><a href="news/<?php echo $news_item['id'] ?>/edit">Редактировать</a></p>
			<p><a href="news/<?php echo $news_item['id'] ?>/delete">Удалить</a></p>
		</div>
	</div>
</div>

<?php endforeach ?>