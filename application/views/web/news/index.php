<div class="container news_block">
	<div class="span2">
		<div class="news_menu">
			<p>Новости:</p>
			<ul class="news_list">
				<?php foreach($news as $news_item):?>
				<li><a href="<?php echo base_url(); ?>index.php/news/<?php echo $news_item['id'] ?>"><?php echo $news_item['title']?></a></li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<div class="span7 news_content">
		<?php foreach($news as $news_item):?>
		<div class="news_header">
			<?php echo $news_item['title'] ?>
		</div>
		<div class="news_body">
			<?php echo $news_item['body'] ?>
		</div>
		<?php endforeach ?>
	</div>	
</div>