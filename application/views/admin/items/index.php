<div class="crud_links">
	<a class="btn" href="#">Удалить всё</a>
	<a class="btn" href="items/new">Создать</a>
		

<div class="xls_upload">
		<?php 
			echo form_open_multipart('admin/items/create_from_xls');
			echo form_upload('xls_file', '');
			echo form_dropdown('category_id', $options);
			echo form_submit('submit', 'Загрузить');
			echo form_close();
		?>
</div>

<div class="sort_by_category">
		<?php 
			echo form_open('admin/items/index_by_category');
			echo form_dropdown('category_id', $options);
			echo form_submit('submit', 'Перейти');
			echo form_close();
		?>
</div>

</div>
<br>

<div class="span11">
	<div class="story_item" style="background:none;">
		<span >Наименование</span>
		<div class="story_item_controls">
			<p>Дата добавления</p>

		</div>
	</div>
</div>
<span></span>
<br>


<?php foreach ($items as $item): ?>

<div class="span11">
	<div class="recipe_item">
		<a href="items/<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a>
			<div class="recipe_item_controls">
				<p><?php echo $item['created_at'] ?></p>
				<p><a href="items/<?php echo $item['id'] ?>/edit">Редактировать</a></p>
				<p><a href="items/<?php echo $item['id'] ?>/delete">Удалить</a></p>
			</div>
	</div>
</div>

<?php endforeach ?>

