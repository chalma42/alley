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

	<!--@chalma стили для фильтра-->
	<link rel="stylesheet" type="text/css" href="css/style-mix.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/swiper-bundle.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/sticky.js"></script>
	<script type="text/javascript" src="js/inputmask.js"></script>

	<!--@chalma скрипты для фильтра-->
	<script type="text/javascript" src="js/mix/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="js/mix/main.js"></script>

	

	<script type="text/javascript" src="js/script.js"></script>

	<title>Все арендаторы - ТРЦ Аллея</title>
	<style>
		.header_bottom {
			padding-top: 18px;
			background-color: #f3f3f3;
		}
	</style>

</head>
<body>

<?php include 'blocks/header_all_rents.php'; ?>

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
			<div class="all_rents_page_wrapper flex cd-main-content">
				<div class="filter">
					<form>
						<!-- <input type="text" name="search_filter" class="search_filter" placeholder="Поиск арендатора"> -->
						<a href="" class="search_filter">Поиск арендатора</a>
						<!--
						<div class="categories">
								<div class="category_name">Магазины</div>
								<div class="category_name">Кафе</div>
								<div class="category_name">Развлечения</div>
								<div class="category_name">Услуги</div>
						</div>
						-->
						<ul class="categories cd-filter-content cd-filters list">
							<li>
								<input class="filter" data-filter="" type="radio" name="radioButton" id="radio0" >
								<label class="radio-label all category_name" for="radio0">Все</label>
							</li>
							<li>
								<input class="filter" data-filter=".radio1" type="radio" name="radioButton" id="radio1" >
								<label class="radio-label shops category_name" for="radio1">Магазины</label>
							</li>
	
							<li>
								<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2" >
								<label class="radio-label cafe category_name" for="radio2">Кафе</label>
							</li>
	
					
							<li>
								<input class="filter" data-filter=".radio4" type="radio" name="radioButton" id="radio4">
								<label class="radio-label services category_name" for="radio4">Услуги</label>
							</li>
							<li>
								<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
								<label class="radio-label entertainments category_name" for="radio3">Развлечения</label>
							</li>
						</ul> <!-- cd-filter-content -->
					</form>
				</div>
				<div class="all_rents_page_items flex cd-gallery">
					<!--<section class="cd-gallery">
						<ul>
							<li class="mix radio2 "><img src="img/img-1.jpg" alt="Image 1"></li>
							<li class="mix radio2 "><img src="img/img-2.jpg" alt="Image 2"></li>
							<li class="mix radio3 "><img src="img/img-3.jpg" alt="Image 3"></li>
							<li class="mix radio2 "><img src="img/img-4.jpg" alt="Image 4"></li>
							<li class="mix radio3 "><img src="img/img-5.jpg" alt="Image 5"></li>
							<li class="mix radio3 "><img src="img/img-6.jpg" alt="Image 6"></li>
							<li class="mix radio2 "><img src="img/img-7.jpg" alt="Image 7"></li>
							<li class="mix radio3 "><img src="img/img-8.jpg" alt="Image 8"></li>
							<li class="mix radio2 "><img src="img/img-9.jpg" alt="Image 9"></li>
							<li class="mix radio2 "><img src="img/img-10.jpg" alt="Image 10"></li>
							<li class="mix radio3 "><img src="img/img-11.jpg" alt="Image 11"></li>
							<li class="mix radio3 "><img src="img/img-12.jpg" alt="Image 12"></li>
						</ul>
						<div class="cd-fail-message">No results found</div>
					</section>  cd-gallery -->
					<section class="cd-gallery" id="cd-gallery">
						<ul>
							<li class="mix radio4 ">
								<div class="all_rents_page_item">
									<a href="rent-mts.php">
									<div class="all_rents_page_item_img">
										<img src="img/mts_logo.png">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">МТС</div>
									<div class="all_rents_page_item_desc">Салон связи</div>
									</a>
								</div>
							</li>
							<li class="mix radio1 ">
								<div class="all_rents_page_item">
									<a href="rent.php">
									<div class="all_rents_page_item_img">
										<img src="img/design_logo.png">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Дизайн удачи</div>
									<div class="all_rents_page_item_desc">Интерьер салон</div>
									</a>
								</div>
							</li>
							<li class="mix radio1 ">
								<div class="all_rents_page_item">
									<a href="rent_Panda.php">
										<div class="all_rents_page_item_img">
											<img src="img/panda_logo.png">
										</div>
										<div class="all_rents_page_item_icons">
											<ul>
												<li><img src="img/icons/rent_icon1.png"></li>
												<li><img src="img/icons/rent_icon2.png"></li>
												<li><img src="img/icons/rent_icon3.png"></li>
												<li><img src="img/icons/rent_icon4.png"></li>
												<li><img src="img/icons/rent_icon5.png"></li>
											</ul>
										</div>
										<div class="all_rents_page_item_title">Панда</div>
										<div class="all_rents_page_item_desc">Сеть зоомаркетов</div>
									</a>
								</div>
							</li>
							<li class="mix radio2 ">
								<div class="all_rents_page_item">
									<a href="#">
										<div class="all_rents_page_item_img">
											<img src="img/lkofe.png">
										</div>
										<div class="all_rents_page_item_icons">
											<ul>
												<li><img src="img/icons/rent_icon1.png"></li>
												<li><img src="img/icons/rent_icon2.png"></li>
												<li><img src="img/icons/rent_icon3.png"></li>
												<li><img src="img/icons/rent_icon4.png"></li>
												<li><img src="img/icons/rent_icon5.png"></li>
											</ul>
										</div>
										<div class="all_rents_page_item_title">CoffeLike</div>
										<div class="all_rents_page_item_desc">Кофейня</div>
									</a>
								</div>
							</li>
							<li class="mix radio4 ">
								<div class="all_rents_page_item">
									<a href="rent-svyaznoi.php">
										<div class="all_rents_page_item_img">
											<img src="img/svaz.png">
										</div>
										<div class="all_rents_page_item_icons">
											<ul>
												<li><img src="img/icons/rent_icon1.png"></li>
												<li><img src="img/icons/rent_icon2.png"></li>
												<li><img src="img/icons/rent_icon3.png"></li>
												<li><img src="img/icons/rent_icon4.png"></li>
												<li><img src="img/icons/rent_icon5.png"></li>
											</ul>
										</div>
										<div class="all_rents_page_item_title">Связной</div>
										<div class="all_rents_page_item_desc">Салон связи</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent-sibylla.php">
										<div class="all_rents_page_item_img">
											<img src="img/sibilla_logo.png">
										</div>
										<div class="all_rents_page_item_icons">
											<ul>
												<li><img src="img/icons/rent_icon1.png"></li>
												<li><img src="img/icons/rent_icon2.png"></li>
												<li><img src="img/icons/rent_icon3.png"></li>
												<li><img src="img/icons/rent_icon4.png"></li>
												<li><img src="img/icons/rent_icon5.png"></li>
											</ul>
										</div>
										<div class="all_rents_page_item_title">Sibylla</div>
										<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="#">
										<div class="all_rents_page_item_img">
											<img src="img/farm_logo.png">
										</div>
										<div class="all_rents_page_item_icons">
											<ul>
												<li><img src="img/icons/rent_icon1.png"></li>
												<li><img src="img/icons/rent_icon2.png"></li>
												<li><img src="img/icons/rent_icon3.png"></li>
												<li><img src="img/icons/rent_icon4.png"></li>
												<li><img src="img/icons/rent_icon5.png"></li>
											</ul>
										</div>
										<div class="all_rents_page_item_title">Фарм Люкс</div>
										<div class="all_rents_page_item_desc">Аптека</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_May_be_coffe.php">
										<div class="all_rents_page_item_img">
											<img src="img/mkofe_logo.png">
										</div>
										<div class="all_rents_page_item_icons">
											<ul>
												<li><img src="img/icons/rent_icon1.png"></li>
												<li><img src="img/icons/rent_icon2.png"></li>
												<li><img src="img/icons/rent_icon3.png"></li>
												<li><img src="img/icons/rent_icon4.png"></li>
												<li><img src="img/icons/rent_icon5.png"></li>
											</ul>
										</div>
										<div class="all_rents_page_item_title">Может, кофе</div>
										<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_avakado.php">
										<div class="all_rents_page_item_img">
											<img src="img1/Avacado_Logo.png" width="100%">
										</div>
										<div class="all_rents_page_item_icons">
											<ul>
												<li><img src="img/icons/rent_icon1.png"></li>
												<li><img src="img/icons/rent_icon2.png"></li>
												<li><img src="img/icons/rent_icon3.png"></li>
												<li><img src="img/icons/rent_icon4.png"></li>
												<li><img src="img/icons/rent_icon5.png"></li>
											</ul>
										</div>
										<div class="all_rents_page_item_title">Avocado</div>
										<div class="all_rents_page_item_desc">Одежда</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_BaskinRobbins.php">
									<div class="all_rents_page_item_img">
										<img src="img1/BaskinRobbins_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Баскин Роббинс</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_Belorus.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Belorus_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Белорусский</div>
									<div class="all_rents_page_item_desc">Продукты</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_BigBen.php">
									<div class="all_rents_page_item_img">
										<img src="img1/BigBen_Logo.png">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">BIG BEN</div>
									<div class="all_rents_page_item_desc">Одежда и аксессуары</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_Burbon.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Burbon_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Бурбон</div>
									<div class="all_rents_page_item_desc">Кофейня</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_Burger.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Burger_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">BEEF BURGER</div>
									<div class="all_rents_page_item_desc">Бургерная</div>
									</a>
								</div>
							</li>
							
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_children_land.php">
									<div class="all_rents_page_item_img">
										<img src="img1/ChildrenLand_logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Детский Мир</div>
									<div class="all_rents_page_item_desc">Детям</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_CoffeeRum.php">
									<div class="all_rents_page_item_img">
										<img src="img1/CoffeeRum_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Coffee Rum</div>
									<div class="all_rents_page_item_desc">Кофе и другие напитки</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_CraftBear.php">
									<div class="all_rents_page_item_img">
										<img src="img1/CRAFT-BEER_Logo.png" >
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">CRAFT BEER</div>
									<div class="all_rents_page_item_desc">Пиво</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_CranchCofe.php">
									<div class="all_rents_page_item_img">
										<img src="img1/CranchCofe_Logo.png" >
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Crunch Cafe</div>
									<div class="all_rents_page_item_desc">Кофейня</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_CreemAndJame.php">
									<div class="all_rents_page_item_img">
										<img src="img1/CAJ_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Крем и Джем</div>
									<div class="all_rents_page_item_desc">Продукты</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_detaly.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Detaly_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Детали</div>
									<div class="all_rents_page_item_desc">Одежда</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_Duduk.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Duduk_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Дудук</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_Ekleshu.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Ekleshu_Logo.png" >
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Эклешу</div>
									<div class="all_rents_page_item_desc">Кондитерские изделия</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_FourEyes.php">
									<div class="all_rents_page_item_img">
										<img src="img1/FourEyes_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Четыре Глаза</div>
									<div class="all_rents_page_item_desc">Оптическая техника</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_GoldCaw.php">
									<div class="all_rents_page_item_img">
										<img src="img1/GoldCaw_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Золотой Теленок</div>
									<div class="all_rents_page_item_desc">Продукты</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_GoldRussia.php">
									<div class="all_rents_page_item_img">
										<img src="img1/GoldRussia_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Золотая Русь</div>
									<div class="all_rents_page_item_desc">Ювелирные изделия</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_GoodDay.php">
									<div class="all_rents_page_item_img">
										<img src="img1/GoodDay_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">GOOD DAY</div>
									<div class="all_rents_page_item_desc">Продукты</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_GrillHouse.php">
									<div class="all_rents_page_item_img">
										<img src="img1/GrillHouse_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Гриль Хаус</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_hanan.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Hanan_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Ханаан</div>
									<div class="all_rents_page_item_desc">Продукты</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_JapenDoneks.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Doneks_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Японские пончики</div>
									<div class="all_rents_page_item_desc">Кондитерские изделия</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_KannamChicken.php">
									<div class="all_rents_page_item_img">
										<img src="img1/KannamChicken_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">КАННАМ ЧИКЕН</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_KiaraFleur.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Kiara Fleur_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Kiara Fleur</div>
									<div class="all_rents_page_item_desc">Цветы</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_Kochevnick.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Kochevnick_logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Кочевник</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_LaPima.php">
									<div class="all_rents_page_item_img">
										<img src="img1/LaPrima_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">La Prima</div>
									<div class="all_rents_page_item_desc">Для дома</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_liberty.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Liberty_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">LIBERTY</div>
									<div class="all_rents_page_item_desc">Одежда</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_LetCosmetic.php">
									<div class="all_rents_page_item_img">
										<img src="img1/LetCosmetic_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Letique Cosmetics</div>
									<div class="all_rents_page_item_desc">Косметика</div>
									</a>
								</div>
							</li>
							<li class="mix radio4">
								<div class="all_rents_page_item">
									<a href="rent_megaphone.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Megaphone_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Мегафон</div>
									<div class="all_rents_page_item_desc">Салон связи</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_MiliJoys.php">
									<div class="all_rents_page_item_img">
										<img src="img1/MiliJoys_Logo.png" >
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">MiLi JOYS</div>
									<div class="all_rents_page_item_desc">Подарки</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_MrSabai.php">
									<div class="all_rents_page_item_img">
										<img src="img1/MrSabai_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Мистер Сабай</div>
									<div class="all_rents_page_item_desc">Продукты</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_mVideo.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Mvideo_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">М-Видео</div>
									<div class="all_rents_page_item_desc">Бытовая техника и электроника</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_Palermo.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Palermo_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">PALERMO</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_Pokehouse.php">
									<div class="all_rents_page_item_img">
										<img src="img1/PokeHouse_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">POKE HOUSE</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_ProductVietnam.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Chines_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Товары из вьетнама</div>
									<div class="all_rents_page_item_desc">Продукты</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_RollingRoll.php">
									<div class="all_rents_page_item_img">
										<img src="img1/RollingRoll_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">РОЛЛИНГ РОЛЛ</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_SahalinSeaProduct.php">
									<div class="all_rents_page_item_img">
										<img src="img1/LandSahalin_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Остров Сахалин</div>
									<div class="all_rents_page_item_desc">Продукты</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_SahalinSweet.php">
									<div class="all_rents_page_item_img">
										<img src="img1/SahalinSweet_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Островной Кондитер</div>
									<div class="all_rents_page_item_desc">Кондитерские изделия</div>
									</a>
								</div>
							</li>
							<li class="mix radio4">
								<div class="all_rents_page_item">
									<a href="rent_Sberbank.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Sberbank_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Сбербанк/ банкомат</div>
									<div class="all_rents_page_item_desc">Банкомат</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_StaffBar.php">
									<div class="all_rents_page_item_img">
										<img src="img1/StaffBar_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">STAFF BAR</div>
									<div class="all_rents_page_item_desc">Бар</div>
									</a>
								</div>
							</li>
							<li class="mix radio3">
								<div class="all_rents_page_item">
									<a href="rent_Storya.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Storya_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">STORYA</div>
									<div class="all_rents_page_item_desc">Детям</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_Subway.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Subway_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">SUBWAY</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_SweetMeet.php">
									<div class="all_rents_page_item_img">
										<img src="img1/SweetMeet_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">SWEET MEATS</div>
									<div class="all_rents_page_item_desc">Продукты</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_Talga.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Talga_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Talga Organica</div>
									<div class="all_rents_page_item_desc">Продукты</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_Tanuki.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Tanuki_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Тануки Китчен</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_uviland.php">
									<div class="all_rents_page_item_img">
										<img src="img1/uviland_logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Ювелэнд</div>
									<div class="all_rents_page_item_desc">Ювелирный изделия</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_VinoFriday.php">
									<div class="all_rents_page_item_img">
										<img src="img1/VinoFriday_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Пятница</div>
									<div class="all_rents_page_item_desc">Алкоголь</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_WakeUpCoffe.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Wuc_Logo.png" >
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Wake Up! Coffee</div>
									<div class="all_rents_page_item_desc">Кофейня</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent_XOne.php">
									<div class="all_rents_page_item_img">
										<img src="img1/XOne_Logo.png" >
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">X-ONE</div>
									<div class="all_rents_page_item_desc">Товары для гаджетов</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent_YumiBar.php">
									<div class="all_rents_page_item_img">
										<img src="img1/YumiBar_Logo.png" width="100%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">YUMI BAR</div>
									<div class="all_rents_page_item_desc">Мороженое</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item alizarin">
									<a href="rent-apteka.php">
									<div class="all_rents_page_item_img">
										<img src="img1/LogoApteka.png" >
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Аптека</div>
									<div class="all_rents_page_item_desc">Аптека</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent-azia_city.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Logo_azia_city.png" width="98%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Азия Сити</div>
									<div class="all_rents_page_item_desc">Бытовые товары</div>
									</a>
								</div>
							</li>
							<li class="mix radio4">
								<div class="all_rents_page_item">
									<a href="rent-gazprombank.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Logo_gazprom.png" width="98%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Газпромбанк Банкомат</div>
									<div class="all_rents_page_item_desc">Банкомат</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent-glam.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Logo_Glam_Queen.png" width="98%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Glam Queen</div>
									<div class="all_rents_page_item_desc">Косметика</div>
									</a>
								</div>
							</li>
							<li class="mix radio1">
								<div class="all_rents_page_item">
									<a href="rent-goldandart.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Logo_Gold_and_art.png" width="98%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Gold and Art</div>
									<div class="all_rents_page_item_desc">Ювелирные изделия</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent-Mirene.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Mirene_Logo.png">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">Миринэ</div>
									<div class="all_rents_page_item_desc">Кафе</div>
									</a>
								</div>
							</li>
							<li class="mix radio2">
								<div class="all_rents_page_item">
									<a href="rent-simost.php">
									<div class="all_rents_page_item_img">
										<img src="img1/Logo_Simost.png" width="98%">
									</div>
									<div class="all_rents_page_item_icons">
										<ul>
											<li><img src="img/icons/rent_icon1.png"></li>
											<li><img src="img/icons/rent_icon2.png"></li>
											<li><img src="img/icons/rent_icon3.png"></li>
											<li><img src="img/icons/rent_icon4.png"></li>
											<li><img src="img/icons/rent_icon5.png"></li>
										</ul>
									</div>
									<div class="all_rents_page_item_title">СИМОСТ</div>
									<div class="all_rents_page_item_desc">Строительные материалы</div>
									</a>
								</div>
							</li>
							
							
						</ul>
				</div>
			</div>
		</div>
	</section>

	<?php include 'blocks/footer.php' ?>
<?php include 'blocks/popup.php' ?>


</body>
</html>