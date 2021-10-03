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

	<title>Все арендаторы - ТРЦ Аллея</title>
</head>
<body>
<?php include 'blocks/header.php'; ?>	

	<section class="bread" style="background: #F3F3F3;padding-top: 26px;">
		<div class="container">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="#">Все арендаторы</a></li>
			</ul>
		</div>
	</section>

	<section class="all_rents_page">
		<div class="container">
			<h1>Все арендаторы</h1>
			<div class="all_rents_page_wrapper flex">
				<div class="filter">
					<form>
						<!-- <input type="text" name="search_filter" class="search_filter" placeholder="Поиск арендатора"> -->
						<span class="label">Синий феникс</span>
						<div class="categories">
							<div class="category open">
								<div class="category_name"><img src="img/filter1.png"> ДОМ, САД,<br> животные </div>
								<ul>
									<li>
										<a href="">Строительные товары</a>
										<div class="category_content">Что-то</div>
									</li>
									<li>
										<a href="">Животные</a>
										<div class="category_content">Что-то</div>
									</li>
									<li>
										<a href="">Интерьер</a>
										<div class="category_content">Что-то</div>
									</li>
									<li>
										<a href="">Хобби</a>
										<div class="category_content">Что-то</div>
									</li>
								</ul>
							</div>
							<div class="category">
								<div class="category_name"><img src="img/filter2.png"> ЕДА </div>
								<ul>
									<li>
										<a href="">Продукты</a>
										<div class="category_content">Что-то</div>
									</li>
									<li>
										<a href="">Кафе</a>
										<div class="category_content">Что-то</div>
									</li>
								</ul>
							</div>
							<div class="category">
								<div class="category_name"><img src="img/filter3.png"> ОДЕЖДА<br> И АКСЕССУАРЫ</div>
								<ul>
									<li>
										<a href="">Одежда</a>
										<div class="category_content">Что-то</div>
									</li>
									<li>
										<a href="">Аксессуары</a>
										<div class="category_content">Что-то</div>
									</li>
								</ul>
							</div>
							<div class="category">
								<div class="category_name"><img src="img/filter4.png"> ЭЛЕКТРОНИКА<br> И СВЯЗЬ</div>
								<ul>
									<li>
										<a href="">Цифровая и бытовая техника</a>
										<div class="category_content">Что-то</div>
									</li>
									<li>
										<a href="">Салоны связи</a>
										<div class="category_content">Что-то</div>
									</li>
								</ul>
							</div>
							<div class="category">
								<div class="category_name"><img src="img/filter5.png"> КРАСОТА<br> И ЗДОРОВЬЕ </div>
								<ul>
									<li>
										<a href="">Аптека</a>
										<div class="category_content">Что-то</div>
									</li>
									<li>
										<a href="">Косметика</a>
										<div class="category_content">Что-то</div>
									</li>
								</ul>
							</div>
							<div class="category">
								<div class="category_name"><img src="img/filter6.png"> ДЕТЯМ</div>
								<ul>
									<li>
										<a href="">Товары для детей</a>
										<div class="category_content">Что-то</div>
									</li>
								</ul>
							</div>
						</div>
						<a href="scheme.html" class="show_to_scheme">Показать на схеме ТЦ</a>
					</form>
				</div>
				<div class="all_rents_page_items flex">
					<div class="all_rents_page_items_empty_request">
						К сожалению, по Вашему запросу арендаторов не найдено <br>
						<a href="all_rents.html">Вернуться ко всем арендаторам</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<?php include 'blocks/footer.php' ?>
	<?php include 'blocks/popup.php' ?>
</body>
</html>