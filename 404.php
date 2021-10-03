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

	<title>Страница не найдена - ТРЦ Аллея</title>
</head>
<body>
	<!-- Header -->
	<?php include 'blocks/header.php'; ?>
	<!-- /Header -->

	<!-- Bread -->
	<section class="bread" style="padding-top: 26px;">
		<div class="container">
			<ul>
				<li><a href="index.html">Главная</a></li>
				<li><a href="#">404</a></li>
			</ul>
		</div>
	</section>

	<!-- /Bread -->

	<!-- Content -->
	<section class="fzf_page">
		<div class="container">
			<img src="img/404.png">
			<a href="index.html" class="fzf_button">На главную</a>
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