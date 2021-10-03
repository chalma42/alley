<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/swiper-bundle.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/sticky.js"></script>
	<script type="text/javascript" src="js/inputmask.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<title>Афиша элемент подробно - ТРЦ Аллея</title>
</head>
<body>
	<!-- Header -->
	<?php include 'blocks/header.php'; ?>
	<!-- /Header -->

	<!-- Bread -->
	<section class="bread" style="padding-top: 26px;">
		<div class="container">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="poster.php">Афиша</a></li>
				<li><a href="">Готовим паэлью в гастромаркете</a></li>
			</ul>
		</div>
	</section>
	<!-- /Bread -->

	<!-- Content -->
	<section class="poster_page">
		<div class="container">
			<h1>Готовим паэлью в гастромаркете</h1>
			<div class="poster_page_wrapper flex">
				<div class="poster_page_photos">
					<div class="no_photo">
						<img src="img/no_photo.png">
						<span>Нет фото</span>
					</div>
				</div>
				<div class="poster_page_content">
					<div class="poster_page_labels">
						<div class="poster_page_labels_logo">
							<img src="img/arbat_logo.png">
						</div>
						<div class="poster_page_labels_date">
							22 марта <br>
							<span>Мастер-класс</span>
						</div>
					</div>
					<p>Приятно провести вечер и научиться готовить паэлью приглашает гастромаркет Арбат</p>
					<div class="buttons">
						<a href="">Записаться</a>
					</div>
					<p class="small_text">Билеты на отправление в страну изысканной кулинарии уже вовсю раскупают. Присоединяйтесь и вы!</p>
					<p class="small_text">С меню кулинарных мастер-классов на период с 20 по 23 мая вы можете ознакомиться в карусели. А записаться на них по телефону: 89147589955.</p>
				</div>
				<div class="poster_page_banner">
					<img src="img/banner.png">
				</div>
			</div>
		</div>
	</section>
	<!-- /Content -->

	<!-- Footer -->
	<?php include 'blocks/footer.php' ?>
	<!-- /Footer -->

	<!-- Modals -->
	<?php include 'blocks/popup.php' ?>
	
</body>
</html>