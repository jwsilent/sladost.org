<div class="crud_links">
	<a class="btn" href="#">Удалить всё</a>
	<a class="btn" href="carousel/new">Создать</a>		

</div>
<?php foreach ($carousels as $carousel): ?>

<div class="span11">
	<div class="story_item">
		<a href="carousel/<?php echo $carousel['id'] ?>"><?php echo $carousel['text'] ?></a>
		<div class="story_item_controls">
			<p><a href="carousel/<?php echo $carousel['id'] ?>/edit">Редактировать</a></p>
			<p><a href="carousel/<?php echo $carousel['id'] ?>/delete">Удалить</a></p>
		</div>
	</div>
</div>

<?php endforeach ?>