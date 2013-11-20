<div class="cart">
	<div class="cart_header">
		<p>КОРЗИНА</p>
		<div class="main_horizontal_line"></div>
	</div>
	<?php foreach($cart_items as $cart_item): ?>
	<div class="cart_element" cartitemid="<?php echo $cart_item['id']; ?>">
		<div class="cart_el_thumb" style="backgroung-image: url(../assets/uploads/items/<$?php echo cart_item['photo_url'] ?>)"></div>
		<div class="cart_el_title"><p><?php echo $cart_item['title']?> <?php echo $cart_item['weight']  ?> грамм</p></div>
		<div class="cart_el_quantity"><p><?php echo $cart_item['quantity'] ?>шт.</p></div>
		<div class="cart_el_price"><p><?php echo $cart_item['amount'] ?>руб.</p></div>
		<a class="delete_link" cartitemid="<?php echo $cart_item['id']; ?>" href="#"><div class="cart_el_del"></div></a>
		<div class="main_horizontal_line"></div>
	</div>
	<?php endforeach ?>
	<div class="order_form">
		<?php if (isset($cart_items[0])) { echo form_open('make_order'); ?>
			<?php echo form_submit('make_order', 'ОФОРМИТЬ ЗАКАЗ', 'class="btn btn-danger submit_btn"'); ?>
		<?php echo form_close(''); ?>
		<?php echo form_open('empty_cart'); ?>
			<?php echo form_submit('empty_cart', 'ОЧИСТИТЬ КОРЗИНУ', 'class="btn btn-warning submit_btn"'); ?>
		<?php echo form_close(''); } else { ?>
		<p>Ваша корзина пуста.</p>
		<?php }?>

	</div>
</div>

<script>
$('a.delete_link').click(function(){
	var r = confirm("Уверены, что хотите удалить?");
	if (r == true)
	{
		c_link = $(this).attr('cartitemid');
		$.ajax({
			type: "POST",
			url: "/sladost.org/index.php/delete_from_cart",
			data: { id: c_link},
			success: function (result) {
				$('div[cartitemid="' + c_link + '"]').remove();
			}
			});
	}

});
</script>