<div class="span11">
	<div class="recipe_item">
		<p><?php echo $item['title'] ?></p>
		<p><?php echo $item['created_at'] ?></p>
		<p><?php echo $item['description']?></p>
		<p><?php echo $item['weight']?></p>
		<p><?php echo $item['size']?></p>
		<p><?php echo $item['price']?></p>
		<img src="<?php echo '/sladost.org/assets/uploads/items/'. $item['photo_url'] ?>"></img>
	</div>
</div>