<div class="span11">
	<div class="recipe_item">
		<p>Заголовок:</p>
		<p><?php echo $news_item['title'] ?></p>
		<hr>
		<p>Дата создания:</p>
		<p><?php echo $news_item['created_at'] ?></p>
		<hr>
		<p>Новость:</p>
		<p><?php echo $news_item['body'] ?></p>
	</div>
	<hr>
	<p><a href="<?php echo base_url(); ?>index.php/admin/news">Назад</a></p>
</div>