<div class="span11">
	<div class="recipe_item">
		<p>Текст изображения:</p>
		<p><?php echo $carousel['text'] ?></p>
		<hr>
		<p>Ссылка:</p>
		<p style="color: grey;"><?php echo $carousel['url'] ?></p>
		<hr>
		<p>Изображение:</p>
		<img style="width: 40%;" src="<?php echo '/sladost.org/assets/uploads/carousel/'. $carousel['photo_url'] ?>"></img>
		<hr>
		<p><a href="<?php echo base_url(); ?>index.php/admin/carousel">Назад</a></p>
	</div>
</div>