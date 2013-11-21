<div class="crud_links">
	<a class="btn" href="choco_stories/new">Создать</a>
</div>

<div class="span11">
	<div class="story_item" style="background:none;">
		<span >Название</span>
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

<?php foreach ($choco_stories as $story): ?>

<div class="span11">
	<div class="story_item">
		<a href="choco_stories/<?php echo $story['id'] ?>"><?php echo $story['title'] ?></a>
		<div class="story_item_controls">
			<p><?php echo $story['created_at'] ?></p>
			<p><a href="choco_stories/<?php echo $story['id'] ?>/edit">Редактировать</a></p>
			<p><a href="choco_stories/<?php echo $story['id'] ?>/delete">Удалить</a></p>
		</div>
	</div>
</div>

<?php endforeach ?>