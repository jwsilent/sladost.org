<div class="crud_links">
</div>


<div class="span11">
	<div class="recipe_item" style="background:none;">
		<span >E-mail пользователя</span>
		<span class="order_status" style="left: 345px;">Статус заказа</span>
		<div class="recipe_item_controls">
		</div>
	</div>
</div>
<span></span>
<span></span>

<br>

<?php foreach ($orders as $order): ?>

<div class="span11">
	<div class="recipe_item">
		<a href="orders/<?php echo $order['id'] ?>"><?php echo $order['email'] ?></a>
		<span class="order_status"><?php if ($order['is_closed']== '1') { ?>закрыт<?php } else { ?>открыт<?php }?></span>
		<div class="recipe_item_controls">
			<p><?php if ($order['is_closed']== '0') { ?><a href="orders/<?php echo $order['id'] ?>/close">Закрыть заказ</a><?php }?></p>
			<p><a href="orders/<?php echo $order['id'] ?>/delete">Удалить</a></p>
		</div>
	</div>
</div>

<?php endforeach ?>