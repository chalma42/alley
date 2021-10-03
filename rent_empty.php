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

	<title>Страница арендатора - ТРЦ Аллея</title>
</head>
<body>
	<?php include 'blocks/header.php'; ?>

	<section class="bread" style="padding-top: 26px;">
		<div class="container">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="all_rents.php">Все арендаторы</a></li>
				<li><a href="#">Дизайн удачи</a></li>
			</ul>
		</div>
	</section>

	<section class="rent_page">
		<div class="rent_page_main empty">
			<div class="container _anim-items _anim-no-hide">
				<img src="img/welcome.png">
				<div class="rent_page_logo">
					<img src="img/empty_logo.png">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="rent_page_wrapper _anim-items flex">
				<div class="rent_page_desc">
					<h1 class="rent_page_title">Магазин декора для дома «Дизайн удачи»</h1>
					<p>На полках вы найдёте милые стильные предметы интерьера от известных брендов:</p>
				</div>
				<div class="rent_page_contacts">
					<div class="rent_page_title">Контакты</div>
					<p class="address">ТЦ “Аллея” г. Южно-Сахалинск,  ул. Фархутдинова 3, 2 этаж</p>
				</div>
			</div>
			<div class="rent_page_poster _anim-items">
				<div class="rent_page_poster_title">Афиша </div>
				<p>Пока нет событий и новостей</p>
			</div>
		</div>
	</section>

	<?php include 'blocks/footer.php' ?>
	<?php include 'blocks/popup.php' ?>
</body>
</html>