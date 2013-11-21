<div class="span11">
	<div class="recipe_item">
		<p>Наименование:</p>
		<p><?php echo $item['title'] ?></p>
		<hr>
		<p>Дата создания:</p>
		<p><?php echo $item['created_at'] ?></p>
		<hr>
		<p>Описание:</p>
		<p><?php echo $item['description']?></p>
		<hr>
		<p>Вес:</p>
		<p><?php echo $item['weight']?></p>
		<hr>
		<p>Размер:</p>
		<p><?php echo $item['size']?></p>
		<hr>
		<p>Цена:</p>
		<p><?php echo $item['price']?></p>
		<hr>
		<p>Изображение:</p>
		<img src="<?php echo '/assets/uploads/items/'. $item['photo_url'] ?>"></img>
	</div>
</div>