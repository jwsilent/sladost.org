<div class="main_catalogue">
	<div class="main_cat_header">
		<p>КАТАЛОГ</p>
					<div class="main_horizontal_line" style="width: 841px;"></div>
				</div>
				<div class="span2">
					<div class="cat_menu">
						<ul class="category">
							<?php foreach ($categories as $category): ?>
								<li parentid="<?php echo $category['parent_category_id']; ?>" categoryid="<?php echo $category['id']; ?>">
								<a class="category_link" categoryid="<?php echo $category['id']; ?>" parentid="<?php echo $category['parent_category_id']; ?>" href='#' onclick="return false;"><?php echo $category['title'] ?></a>
								<ul class="subcategory" parentid="<?php echo $category['parent_category_id']; ?>" categoryid="<?php echo $category['id']; ?>"></ul>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="span10">
					<div class="main_catalogue_index">
					</div>
				</div>
			</div>

			<div class="for_pop_up"></div>

<script>
var is_logged_in = "<?php echo $this->session->userdata('is_logged_in'); ?>";
var user_id = <?php echo  $this->session->userdata('user_id'); ?>;
</script>

<script  src="<?php echo asset_url(); ?>js/add_to_cart.js"></script>

