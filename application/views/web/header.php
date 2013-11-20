<?php
$is_logged_in = $this->session->userdata('is_logged_in');
$username = $this->session->userdata('username');
$user_id = $this->session->userdata('user_id');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Сладкий Мир</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/bootstrap.css"> <!--some CSS here-->
		<link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/custom.css"> <!--some CSS here-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="http://www.gmarwaha.com/jquery/jcarousellite/js/jcarousellite_1.0.1.min.js"></script>
		<script type="text/javascript" src="<?php echo asset_url(); ?>js/bootstrap.js"></script> <!--some JS here-->
		
	</head>
	<body>
		<div class="masterhead">
				<div class="header_contacts">
					<p>НАШ ТЕЛЕФОН:</p>
					<p>+7 927 007 80 11</p>
					<a href="#reserveModal" role="button" data-toggle="modal"><p class="header_address">ЗАКАЗАТЬ ЗВОНОК</p></a>
				</div>
				<div class="navbar">
					<div class="container">
						<a class="brand" href="<?php echo base_url(); ?>index.php" name="top">
							<div class="brand_logo"></div>
							<div class="brand_text">
								<p>СЛАДКИЙ</p>
								<p>МИР</p>
							</div>
						</a>
							<ul class="nav">
								<li <?php if ($this->uri->segment(1)=='') { ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>index.php">ГЛАВНАЯ</a></li>
								<li <?php if ($this->uri->segment(1)=='catalogue') { ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>index.php/catalogue">КАТАЛОГ</a></li>
								<li class="dropdown <?php if ($this->uri->segment(1)=='news' || $this->uri->segment(1)=='choco_stories' || $this->uri->segment(1)=='choco_recipes') { ?>active<?php } ?>">
                  					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
      									ИНФОРМАЦИЯ
						   				<b class="caret"></b>
    								</a>
    								<ul class="dropdown-menu">
										<li><a href="<?php echo base_url(); ?>index.php/news">Новости</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/choco_stories">Шоколадные истории</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/choco_recipes">Шоколадные рецепты</a></li>
    								</ul>
    							</li>
								<li <?php if ($this->uri->segment(1)=='delivery') { ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>index.php/delivery">ДОСТАВКА</a></li>
								<li <?php if ($this->uri->segment(1)=='cart') { ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>index.php/cart">КОРЗИНА</a></li>
								<li <?php if ($this->uri->segment(1)=='about') { ?>class="active"<?php } ?>><a href="<?php echo base_url(); ?>index.php/about">О НАС</a></li>
							</ul>					
							<?php if (!$is_logged_in) { ?>
								<a href="<?php echo base_url(); ?>index.php/login" class="btn btn-danger auth-button">ВОЙТИ</a>
								<a href="<?php echo base_url(); ?>index.php/registration" class="btn btn-danger auth-button">РЕГИСТРАЦИЯ</a>
							<?php } else { ?>
								<p>Рады Вас видеть, <?php echo $username ?></p>
								<a href="<?php echo base_url(); ?>index.php/logout" class="btn btn-danger auth-button">ВЫЙТИ</a>
							<?php } ?>
					</div>
					<!--/.navbar-inner -->

				</div>
				<!--/.navbar -->
		</div>

<div id="reserveModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	<h3 id="myModalLabel">Заказать звонок</h3>
  </div>
  <div class="modal-body">
  	<?php echo form_open('reserve_call'); ?>
    <?php echo form_input('phone', '','placeholder="Введите номер телефона" class="input-xlarge"'); ?>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
    <?php echo form_submit('reserve', 'Заказать звонок', 'class="btn btn-primary"'); ?>
    <?php echo form_close(); ?>
  </div>
</div>
		<div class="container">