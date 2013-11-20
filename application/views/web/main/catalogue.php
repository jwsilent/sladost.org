<div class="main_catalogue">
	<div class="main_cat_header">
		<p>КАТАЛОГ</p>
		<div class="main_horizontal_line"></div>
		<a class="main_button" href="<?php echo base_url(); ?>index.php/catalogue"><div class="main_button">ВЕСЬ КАТАЛОГ</div></a>
	</div>
	<div class="main_catalogue_index">
		<?php foreach ($items as $item): ?>
			<div class="catalogue_element">
				<div class="cat_element_picture" style="background-image: url(../uploads/items/<?php echo $item['photo_url']; ?>)"></div>
				<p><?php echo $item['title']; ?></p>
				<a class="main_button" href="#"><div class="main_button">В КОРЗИНУ</div></a>
			</div>
		<?php endforeach ?>
	</div>
</div>