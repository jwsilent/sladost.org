<div class="container news_block">
	<div class="span2">
		<div class="news_menu">
			<p>Истории:</p>
			<ul class="news_list">
				<?php foreach($stories as $story):?>
				<li><a href="index.php/choco_stories/<?php echo $story['id'] ?>"><?php echo $story['title']?></a></li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<div class="span7 news_content">
		<div class="news_header">
			<?php echo $story['title'] ?>
		</div>
		<div class="news_body">
			<?php echo $story['body'] ?>
		</div>
	</div>	
</div>