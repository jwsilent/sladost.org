<div class="crud_links">
</div>
<?php foreach ($orders as $order): ?>

<div class="span11">
	<div class="recipe_item">
		<a href="orders/<?php echo $order['id'] ?>"><?php echo $order['email'] ?></a>
		<span><?php if ($order['is_closed']== '1') { ?>закрыт<?php } else { ?>открыт<?php }?></span>
		<div class="recipe_item_controls">
			<p><?php if ($order['is_closed']== '0') { ?><a href="orders/<?php echo $order['id'] ?>/close">Закрыть заказ</a><?php }?></p>
			<p><a href="orders/<?php echo $order['id'] ?>/delete">Удалить</a></p>
		</div>
	</div>
</div>

<?php endforeach ?>