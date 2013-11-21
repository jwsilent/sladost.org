<div class="catalogue_description">
	<?php echo $category['description']; ?>
</div>
<?php foreach ($items as $item): ?>
<div class="catalogue_element">
	<div class="cat_element_picture" style="background-image: url(../uploads/items/<?php echo $item['photo_url']; ?>);"></div>
	<p><?php echo $item['title'] ?> </p>
	<p class="price">Цена: <?php echo $item['price'] ?></p>
	<a class="main_button add_to_cart" href="#" itemid="<?php echo $item['id']; ?>"><div class="main_button">В КОРЗИНУ</div></a>
</div>
<?php endforeach ?>