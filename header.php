<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title><?php echo wp_get_document_title(); ?></title>

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <meta name="description" content="Стриптиз клуб Гвоздь - забей свой гвоздь в серые будни города! Кураж, голые девочки, белые танцы, приятные бонусы от бара, драйв, лесби, бдсм и многое другое…">
  <meta name="keywords" content="стриптиз клуб, мужской стриптиз клуб, стрип клуб, стриптиз клуб уфа, гвоздь стриптиз клуб, гвоздь стриптиз уфа, шоу без притворства, стриптиз уфа">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/source/jquery.fancybox.css" media="screen">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/pushy/pushy.css" media="screen">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
	
	<script src="<?php echo get_template_directory_uri(); ?>/libs/modernizr/modernizr.js"></script>

	<?php wp_head(); ?>

</head>

<body>

<header>
	<!-- Pushy Menu -->
	<nav class="pushy pushy-left">
		<?php wp_nav_menu(); ?>
	</nav>

	<!-- Site Overlay -->
	<div class="site-overlay"></div>

	<div class="panel-mobile">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/img/menu-button.svg" alt="" class="menu-mobile menu-btn" width="35" height="31">
		</div>
	</div>
	<div class="top-panel">
		<div class="text_gradient"><?php echo get_bloginfo('description'); ?></div>
	</div>
	<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo"></a>
	<div class="header__phone">
		<div class="header__phone1">Наш телефон:</div>
		<?php $options = get_option('sample_theme_options'); ?>
		<a href="tel:+79870478120" class="header__phone2"><?php echo $options['phone1']; ?></a>
	</div>
	<div class="header__adress">
		<h4 class="header__adress_1">Наш адрес:</h4>
		<h3 class="header__adress_2"><span class="addr1"><?php echo $options['addres1']; ?></span><br><span class="addr2"><?php echo $options['addres2']; ?></span><br><span class="addr3"><?php echo $options['addres3']; ?></span></h3>
	</div>
	<img class="img__header-girls" src="<?php echo get_template_directory_uri(); ?>/img/img-header-girls.png" alt="">
	<div class="big-panels-list">
		<img src="<?php echo get_template_directory_uri(); ?>/img/img-box.png" alt="" class="img-box">
		<div class="triple-list">
			<div class="triple-left">Веселим <br>без развода</div>
			<div class="triple-center">Лесбо-шоу без притворства - только хардкор</div>
			<div class="triple-right">Получи <br>свой подарок<a href="<?php echo get_template_directory_uri(); ?>/popup.html" class="fancybox fancybox.iframe triple-button">Забронировать столик</a></div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/big-panel-left.png" alt="" class="big-panel big-panel_left">
		<img src="<?php echo get_template_directory_uri(); ?>/img/big-panel-right.png" alt="" class="big-panel big-panel_right">
		<img src="<?php echo get_template_directory_uri(); ?>/img/big-panel-center.png" alt="" class="big-panel_center">
		<img src="<?php echo get_template_directory_uri(); ?>/img/big-panel-center.png" alt="" class="big-panel big-panel_mobile">
	</div>
	<div class="container nav-container">
		<nav class="nav nav_top">
			<?php wp_nav_menu(); ?>
		</nav>
	</div>

</header>
