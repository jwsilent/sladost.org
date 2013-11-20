<div class="span11">
	<div class="recipe_item">
		<div>
			<p>Адрес эл. почты покупателя:</p>
			<p><?php echo $order['email'] ?></p>
		</div>
		<hr>
		<div>
			<p>Дата заказа:</p>
			<p><?php echo $order['updated_at'] ?></p>
		</div>
		<hr>
		<div>
			<p>Статус заказа:</p>
			<span><?php if ($order['is_closed']== '1') { ?>закрыт<?php } else { ?>открыт<?php }?></span>
		</div>
		<hr>
		<div>
			<p><?php if ($order['is_closed']== '0') { ?><a href="<?php echo base_url(); ?>index.php/admin/orders/<?php echo $order['id'] ?>/close">Закрыть заказ</a><?php }?></p>
			<p><a href="<?php echo base_url(); ?>index.php/admin/orders">Назад</a></p>
		</div>

		<?php foreach($items as $item):?>
			<p><?php echo $item['title']; ?></p>
			<p><?php echo $item['amount']; ?> руб.</p>
			<p><?php echo $item['quantity']; ?> шт.</p>
		<?php endforeach; ?>
	</div>
</div>