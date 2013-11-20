<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php foreach ($news as $news_item): ?>

<div class="span11">
	<h4><?php echo $news_item['title'] ?></h4>
	<p><?php echo $news_item['body'] ?></p>
</div>

<?php endforeach ?>
</body>
</html>