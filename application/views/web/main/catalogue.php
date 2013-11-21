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
				<p><?php echo $item['title']; ?> </p>
				<p class="price">Цена: <?php echo $item['price'] ?></p>
				<a class="main_button add_to_cart" href="#" itemid="<?php echo $item['id']; ?>"><div class="main_button">В КОРЗИНУ</div></a>
			</div>
		<?php endforeach ?>
	</div>
</div>

<div class="for_pop_up"></div>

<script>
var is_logged_in = "<?php echo $this->session->userdata('is_logged_in'); ?>";
var user_id = <?php echo  $this->session->userdata('user_id'); ?>;
</script>

<script  src="<?php echo asset_url(); ?>js/add_to_cart.js"></script>