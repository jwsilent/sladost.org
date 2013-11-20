<div class="container news_block">
	<div class="span2">
		<div class="news_menu">
			<p>Рецепты:</p>
			<ul class="news_list">
				<?php foreach($recipes as $recipe):?>
				<li><a href="index.php/choco_recipes/<?php echo $recipe['id'] ?>"><?php echo $recipe['title']?></a></li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<div class="span7 news_content">
		<div class="news_header">
			<?php echo $recipe['title'] ?>
		</div>
		<div class="news_body">
			<?php echo $recipe['body'] ?>
		</div>
	</div>	
</div>