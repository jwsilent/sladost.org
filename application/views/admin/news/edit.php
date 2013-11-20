<div class="new_recipe">
<?php 
echo form_open('admin/news/update');
echo form_hidden('id', $news_item['id']);
echo form_label('Заголовок:'); 
echo form_input('title', $news_item['title']); ?>
<hr>
<?php echo form_label('Новость:');
echo form_textarea('body', $news_item['body']); ?>
<hr>
<?php echo form_submit('submit', 'Сохранить');
echo form_close();
?>
<hr>
<p><a href="<?php echo base_url(); ?>index.php/admin/news">Назад</a></p>
</div>