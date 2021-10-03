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

	<!--@chalma стили для карты-->
	<script type="text/javascript" src="js/map-script.js"></script>
	<!--<link rel="stylesheet" type="text/css" href="css/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css">-->

	<!--@chalma Leaflet-->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
	charset="utf-8"></script>
	
	<script type="text/javascript">
	jQuery(function () {
		// инициализация движка карты
		var map = L.map('map', {
		   crs: L.CRS.Simple,
		});
		// наложение каринки
		var w = 1000;
		var h = 1000;
		var ibounds = [[0,0], [h, w]];

		var image = L.imageOverlay('img/map.svg', ibounds).addTo(map);
		map.fitBounds(ibounds);
			});
	</script>
	<script type="text/javascript" src="js/script.js"></script>



	<title>Схема ТРЦ - ТРЦ Аллея</title>

</head>
<body>
	<?php include 'blocks/header.php'; ?>	

	<section class="bread" style="padding-top: 26px;background-color: #f3f3f3;">
		<div class="container">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="#">Схема ТРЦ</a></li>
			</ul>
		</div>
	</section>

	<section class="scheme_page ">
		<div class="container">
			<h1>Схема ТРЦ</h1>
			<div id="map">
				<span></span>
			</div>
			<!--
			<div class="scheme_page_wrapper flex">
			
				<div class="filter">
					<form>
						<div class="categories">
							<div class="category open">
								<div class="category_name"><img src="img/menu1.png"> ДОМ, САД, животные </div>
								<ul>
									<li>
										<a class="filter_parrent" href="">Строительные товары </a>
										<div class="category_content">
											<a href="rent-simost.php" class="filter_value_simost">СИМОСТ</a>
										</div>
									</li>
									<li>
										<a class="filter_parrent" href="">Животные </a>
										<div class="category_content">
											<a href="rent_Panda.php" class="filter_value_panda">Панда</a>
										</div>
									</li>
									<li>
										<a class="filter_parrent" href="">Интерьер </a>
										<div class="category_content">
											<a href="rent-azia_city.php" class="filter_value_asia-block">Азия Сити</a>
											<a href="rent.php" class="filter_value_design">Дизайн удачи</a>
										</div>
									</li>
									<li>
										<a href="">Хобби </a>
										<div class="category_content">Что-то</div>
									</li>
								</ul>
							</div>
							<div class="category open">
								<div class="category_name"><img src="img/menu2.png"> ЕДА </div>
								<ul>
									<li>
										<a href="">Продукты </a>
										<div class="category_content">Что-то</div>
									</li>
									<li>
										<a href="">Кафе </a>
										<div class="category_content">Что-то</div>
									</li>
								</ul>
							</div>
							<div class="category open">
								<div class="category_name"><img src="img/menu3.png"> ОДЕЖДА И АКСЕССУАРЫ</div>
								<ul>
									<li>
										<a class="filter_parrent" href="">Одежда </a>
										<div class="category_content">
											<a href="rent_BigBen.php" class="filter_value_big-ben">BIG BEN</a>
											<a href="rent_avakado.php" class="filter_value_avocado">Avocado</a>
										</div>
									</li>
									<li>
										<a class="filter_parrent" href="">Аксессуары </a>
										<div class="category_content">
											<a href="rent-goldandart.php" class="filter_value_goldart">Gold and Art</a>
											<a href="rent_GoldRussia.php" class="filter_value_golden-rus">Золотая Русь</a>
											<a href="rent_uviland.php" class="filter_value_yuvelend">Ювилэнд</a>
											<a href="rent_detaly.php" class="filter_value_detali">Детали</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="category open">
								<div class="category_name"><img src="img/menu4.png"> ЭЛЕКТРОНИКА И СВЯЗЬ</div>
								<ul>
									<li>
										<a class="filter_parrent" href="">Цифровая и бытовая техника </a>
										<div class="category_content">
											<a href="rent_mVideo.php" class="filter_value_mvideo">М-Видео</a>
										</div>
									</li>
									<li>
										<a class="filter_parrent" href="">Салоны связи </a>
										<div class="category_content">
											<a href="rent-mts.php" class="filter_value_mts">МТС</a>
											<a href="rent-svyaznoi.php" class="filter_value_svyaznoy">Связной</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="category open">
								<div class="category_name"><img src="img/menu5.png"> КРАСОТА И ЗДОРОВЬЕ </div>
								<ul>
									<li>
										<a class="filter_parrent" href="">Аптека </a>
										<div class="category_content">
											<a href="rent-apteka.php" class="filter_value_apteka">Аптека</a>
										</div>
									</li>
									<li>
										<a href="">Косметика </a>
										<div class="category_content">Что-то</div>
									</li>
								</ul>
							</div>
							<div class="category open">
								<div class="category_name"><img src="img/menu6.png"> ДЕТЯМ</div>
								<ul>
									<li>
										<a class="filter_parrent" href="">Товары для детей </a>
										<div class="category_content">
											<a href="rent_children_land.php" class="filter_value_det-mir">Детский мир</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<div class="scheme_page_canvas full-width">
					<div class="map-block" >
						<a class="map-element mvideo-block" href="rent_mVideo.php">
							<img src="img/map/mvideo.png" class="mvideo" alt="Мвидео" title="Мвидео" >
						</a>
						<a href="rent_children_land.php" class="map-element det-mir-block">
							<img src="img/map/det-mir.png" class="det-mir" alt="Детский мир" title="Детский мир" width="100%">
						</a>
						<a class="map-element arbat-block">
							<span class="arbat">гастромаркет<br>арбат</span>
						</a>
						<a class="map-element det-komnata-block">
							<span class="det-komnata">детская<br>игровая<br>комната</span>
						</a>
						<a href="rent-simost.php" class="map-element simost-block">
							<img src="img/map/simost.png" class="simost" alt="СИМОСТ" title="СИМОСТ" >
						</a>
						<a href="rent-azia_city.php" class="map-element asia-block">
							<span class="asia">азия<br>сити</span>
						</a>
						<a href="rent.php" class="map-element design-block">
							<span class="design">дизайн<br>удачи</span>
						</a>
						<a class="map-element green-block1">
							
						</a>
						<a class="map-element green-block2">
							
						</a>
						<a class="map-element green-block3">
							
						</a>
						<a href="rent_Panda.php" class="map-element panda-block">
							<span class="panda">панда</span>
						</a>
						<a class="map-element blue-phoenix-block">
							<span class="blue-phoenix">синий<br>феникс</span>
						</a>
						<a href="rent-svyaznoi.php" class="map-element svyaznoy-block">
							<img src="img/map/svyaznoy.png" class="svyaznoy" alt="Связной" title="Связной" >
						</a>
						<a class="map-element kor-kosm-block">
							<span class="kor-kosm">кор.<br>косм</span>
						</a>
						<a href="rent-apteka.php" class="map-element apteka-block">
							<img src="img/map/apteka.png" class="apteka" alt="Аптека" title="Аптека" >
						</a>
						<a href="rent-mts.php" class="map-element mts-block">
							<img src="img/map/mts.png" class="mts" alt="МТС" title="МТС" >
						</a>
						<a href="rent_uviland.php" class="map-element yuvelend-block">
							<img src="img/map/yuvelend.png" class="yuvelend" alt="Ювелэнд" title="Ювелэнд" >
						</a>
						<a href="rent_BigBen.php" class="map-element big-ben-block">
							<img src="img/map/big-ben.png" class="big-ben" alt="Big Ben" title="Big Ben" >
						</a>
						<a href="rent_detaly.php" class="map-element detali-block">
							<img src="img/map/detali.png" class="detali" alt="Детали" title="Детали" >
						</a>
						<a class="map-element green-block4">
							
						</a>
						<a href="rent_avakado.php" class="map-element avocado-block">
							<img src="img/map/avocado.png" class="avocado" alt="avocado" title="avocado" >
						</a>
						<a class="map-element kuchenland-block">
							<img src="img/map/kuchenland.png" class="kuchenland" alt="kuchenland" title="kuchenland" >
						</a>
						<a class="map-element green-block5">
							
						</a>
						<a class="map-element hm-block">
							<img src="img/map/hm.png" class="hm" alt="H&M" title="H&M" >
						</a>
						<a class="map-element white-block">
							<span>wb1</span>
						</a>
						<a class="map-element malavitsa-block">
							<img src="img/map/malavitsa.png" class="malavitsa" alt="Malavitsa" title="Malavitsa" >
						</a>
						<a class="map-element mavi-block">
							<img src="img/map/mavi.png" class="mavi" alt="Mavi" title="Mavi" >
						</a>
						<a class="map-element terranova-block">
							<img src="img/map/terranova.png" class="terranova" alt="Terranova" title="Terranova" >
						</a>
						<a class="map-element bershka-block">
							<img src="img/map/bershka.png" class="bershka" alt="Bershka" title="Bershka" >
						</a>
						<a href="rent-goldandart.php" class="map-element goldart-block">
							<img src="img/map/goldart.png" class="goldart" alt="Goldart" title="Goldart" >
						</a>
						<a href="rent_GoldRussia.php" class="map-element golden-rus-block">
							<img src="img/map/golden-rus.png" class="golden-rus" alt="Золотая Русь" title="Золотая Русь" >
						</a>
						<a class="map-element skechers-block">
							<img src="img/map/skechers.png" class="skechers" alt="Skechers" title="Skechers" >
						</a>
						<a class="map-element levis-block">
							<img src="img/map/levis.png" class="levis" alt="Levi's" title="Levi's" >
						</a>
						<a class="map-element palmetta-block">
							<img src="img/map/palmetta.png" class="palmetta" alt="palmetta" title="palmetta" >
						</a>
						<a class="map-element zarina-block">
							<img src="img/map/zarina.png" class="zarina" alt="Zarina" title="zarina" >
						</a>
						<a class="map-element befree-block">
							<img src="img/map/befree.png" class="befree" alt="befree" title="befree" >
						</a>
	
						
						<a class="map-element square white-block2">
							<span >2</span>
						</a>
						<a class="map-element square white-block3">
							<span >3</span>
						</a>
						<a class="map-element square white-block4">
							<span >4</span>
						</a>
						<a class="map-element square white-block5">
							<span >5</span>
						</a>
						<a class="map-element square white-block6">
							<span >6</span>
						</a>
						<a class="map-element square white-block7">
							<span >7</span>
						</a>
						<a class="map-element square white-block8">
							<span >8</span>
						</a>
						<a class="map-element square white-block9">
							<span >9</span>
						</a>
						<a class="map-element square white-block10">
							<span >10</span>
						</a>
						<a class="map-element square white-block11">
							<span >11</span>
						</a>
						<a class="map-element square white-block12">
							<span >12</span>
						</a>
						<a class="map-element square white-block13">
							<span >13</span>
						</a>
						<a class="map-element square white-block14">
							<span >14</span>
						</a>
						<a class="map-element square white-block15">
							<span >15</span>
						</a>
						<a class="map-element square white-block16">
							<span >16</span>
						</a>
						<a class="map-element square white-block17">
							<span >17</span>
						</a>
						<a class="map-element square white-block18">
							<span >18</span>
						</a>
						<a class="map-element square white-block19">
							<span >19</span>
						</a>
						<a class="map-element square white-block20">
							<span >20</span>
						</a>
						<a class="map-element square white-block21">
							<span >21</span>
						</a>
						<a class="map-element square white-block22">
							<span >22</span>
						</a>
						<a class="map-element square white-block23">
							<span >23</span>
						</a>
						<a class="map-element square white-block24">
							<span >24</span>
						</a>
						<a class="map-element square white-block25">
							<span >25</span>
						</a>
						<a class="map-element square white-block26">
							<span >26</span>
						</a>
						<a class="map-element square white-block27">
							<span >27</span>
						</a>
						<a class="map-element square white-block28">
							<span >28</span>
						</a>
					</div>
				</div>
				<img src="img/scheme-new.jpg" width="100%" >
				
			</div>-->
		</div>
	</section>

	<?php include 'blocks/footer.php' ?>
	<?php include 'blocks/popup.php' ?>
</body>
</html>