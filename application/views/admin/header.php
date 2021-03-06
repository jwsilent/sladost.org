<?php $is_admin = $this->session->userdata('is_admin'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>sladost.org - Панель администратора</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/bootstrap.css"> <!--some CSS here-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo asset_url();?>js/bootstrap.js"></script> <!--some JS here-->
	<script src="<?php echo asset_url() ?>js/tiny_mce/tiny_mce.js" type="text/javascript">
	</script>
	<script type="text/javascript">  
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave, jbimages",
		language : "en",
		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,|,insertfile,|,link,image,jbimages",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		relative_urls: false

		// Replace values for the template plugin
	});

</script>
</head>
<body>
	<div class="container">
	<div class="navbar">
			<a class="brand" href="<?php echo base_url(); ?>index.php/admin" name="top">
					<p>Панель администратора</p>
			</a>
				<ul class="nav">
					<li <?php if ($this->uri->segment(2)=='categories') { ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>index.php/admin/categories">КАТАЛОГ</a></li>
					<li <?php if ($this->uri->segment(2)=='items') { ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>index.php/admin/items">ТОВАРЫ</a></li>
					<li <?php if ($this->uri->segment(2)=='carousel') { ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>index.php/admin/carousel">ПРОМО</a></li>
                  	<li class="dropdown <?php if ($this->uri->segment(2)=='news' || $this->uri->segment(2)=='choco_recipes' || $this->uri->segment(2)=='choco_stories') { ?>active<?php } ?>">
                  		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
      						ИНФОРМАЦИЯ
						   	<b class="caret"></b>
    					</a>
    					<ul class="dropdown-menu">
							<li><a href="<?php echo base_url(); ?>index.php/admin/news">Новости</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/admin/choco_stories">Шоколадные истории</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/admin/choco_recipes">Шоколадные рецепты</a></li>
    					</ul>
    				</li>
					<li <?php if ($this->uri->segment(2)=='orders') { ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>index.php/admin/orders">ЗАКАЗЫ</a></li>
				</ul>
											<?php if ($is_admin) { ?>
								<a href="<?php echo base_url(); ?>index.php/admin/logout" class="btn btn-primary auth-button">ВЫЙТИ</a>
							<?php } ?>

	</div>
	<!--/.navbar -->