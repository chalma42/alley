<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="/favicon.ico" /> 
	<link rel="icon" type="image/png" sizes="16x16" href="img/icons/icon16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/icons/icon32.png">
	<link rel="icon" type="image/png" sizes="48x48" href="img/icons/icon48.png">
	<link rel="icon" type="image/png" sizes="64x64" href="img/icons/icon64.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/icons/icon96.png">
	<link rel="icon" type="image/png" sizes="120x120" href="img/icons/icon120.png"> 

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

	<title>Главная - ТРЦ Аллея</title>
</head>
<body class="main_body">

<?php include 'blocks/header.php'; ?>	
	
	<section class="main ">
		<div class="container ">
			<div class="flex">
				<div class="side events _anim-items _anim-no-hide">
					<!--<div class="side_title">События, скидки</div>-->
					<div class="swiper-container">
					  <!-- Additional required wrapper -->
					  <div class="swiper-wrapper">
					    <!-- Slides -->
					    <div class="swiper-slide">
					    	<div class="poster_main_item">
								<div class="poster_main_item_img">
									<img src="img/slider/posters/1.jpg">
								</div>
								<!--<div class="poster_main_item_bottom">
									<div class="poster_main_item_name">Мастер-класс "Готовим пиццу"</div>
									<div class="poster_main_item_time">16.04.2021 16:00</div>
								</div>-->
							</div>
						</div>
						
						<div class="swiper-slide">
					    	<div class="poster_main_item">
								<div class="poster_main_item_img">
								<img src="img/slider/posters/2.jpg">
								</div>
								<!--<div class="poster_main_item_bottom">
									<div class="poster_main_item_name">Мастер-класс "Готовим пиццу"</div>
									<div class="poster_main_item_time">16.04.2021 16:00</div>
								</div>-->
							</div>
						</div>

						<div class="swiper-slide">
					    	<div class="poster_main_item">
								<div class="poster_main_item_img">
								<img src="img/slider/posters/3.jpg">
								</div>
								<!--<div class="poster_main_item_bottom">
									<div class="poster_main_item_name">Мастер-класс "Готовим пиццу"</div>
									<div class="poster_main_item_time">16.04.2021 16:00</div>
								</div>-->
							</div>
						</div>

						<div class="swiper-slide">
					    	<div class="poster_main_item">
								<div class="poster_main_item_img">
								<img src="img/slider/posters/4.jpg">
								</div>
								<!--<div class="poster_main_item_bottom">
									<div class="poster_main_item_name">Мастер-класс "Готовим пиццу"</div>
									<div class="poster_main_item_time">16.04.2021 16:00</div>
								</div>-->
							</div>
						</div>

						<div class="swiper-slide">
					    	<div class="poster_main_item">
								<div class="poster_main_item_img">
								<img src="img/slider/posters/5.jpg">
								</div>
								<!--<div class="poster_main_item_bottom">
									<div class="poster_main_item_name">Мастер-класс "Готовим пиццу"</div>
									<div class="poster_main_item_time">16.04.2021 16:00</div>
								</div>-->
							</div>
						</div>
						

					  </div>
					  <!-- If we need navigation buttons -->
					  <div class="swiper-pagination"></div>
					  
					</div>
				</div>
				<!--@chalma ниже старый блок Live и схема ТРЦ-->
				<!--
				<div class="side">
					<div class="side_title">Live</div>
					<div class="main_videos flex">
						<div class="main_videos_live">
							<div class="main_videos_live_content">
								<div class="main_video" data-id="1" style="display: block">
									<div class="main_video_poster">
										<img src="img/main_video_poster.png">
										<img src="img/play3.png" class="play">
										<video width="353" height="218" controls="controls">
										   <source src="b24_intro.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
										</video>
									</div>
									<div class="main_video_poster_title">Live: Главная сцена </div>
								</div>
								<div class="main_video" data-id="2">
									<div class="main_video_poster">
										<img src="img/mini_video_poster2.png" style="max-height: 300px;">
										<img src="img/play3.png" class="play">
										<video width="353" height="218" controls="controls">
										   <source src="b24_intro.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
										</video>
									</div>
									<div class="main_video_poster_title">Live: Бол. антресоль </div>
								</div>
								<div class="main_video" data-id="3">
									<div class="main_video_poster">
										<img src="img/mini_video_poster3.png" style="max-height: 300px;">
										<img src="img/play3.png" class="play">
										<video width="353" height="218" controls="controls">
										   <source src="b24_intro.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
										</video>
									</div>
									<div class="main_video_poster_title">Live: Кулин. студия </div>
								</div>
								<div class="main_video" data-id="4">
									<div class="main_video_poster">
										<img src="img/mini_video_poster4.png" style="max-height: 300px;">
										<img src="img/play3.png" class="play">
										<video width="353" height="218" controls="controls">
										   <source src="b24_intro.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
										</video>
									</div>
									<div class="main_video_poster_title">Live: 1-й этаж </div>
								</div>
							</div>
							<div class="main_videos_live_list flex">
								<div class="main_videos_live_item" data-id="1">
									<img src="img/mini_video_poster1.png">
									<div class="main_videos_live_item_title">Главная сцена </div>
								</div>
								<div class="main_videos_live_item" data-id="2">
									<img src="img/mini_video_poster2.png">
									<div class="main_videos_live_item_title">Бол. антресоль</div>
								</div>
								<div class="main_videos_live_item" data-id="3">
									<img src="img/mini_video_poster3.png">
									<div class="main_videos_live_item_title">Кулин. студия</div>
								</div>
								<div class="main_videos_live_item" data-id="4">
									<img src="img/mini_video_poster4.png">
									<div class="main_videos_live_item_title">1-й этаж</div>
								</div>
							</div>
						</div>
						<div class="main_videos_rent">
							<div class="main_videos_rent_title">Стать<br> арендатором</div>
							<p>ТРЦ Аллея приглашает арендаторов: высокая посещаемость, приятная атмосфера и стабильные продажи гарантированы. Ждем вас в гастромакете, бутиках на фудкорте.</p>
							<a href="" class="get_rent">Получить  КП “Аренда”</a>
							<div class="main_videos_rent_scheme">
								<div class="main_videos_rent_scheme_title"><a href="scheme.php">Схема ТРЦ</a></div>
								<a href="scheme.php" style="padding: 0;border: 0;"><img src="img/mini_scheme.png"></a>
							</div>
						</div>

					</div>
				</div>-->
			</div>
		</div>
	</section>

	<section class="poster_line _anim-items _anim-no-hide">
		<div class="container ">
			<div class="poster_line_wrapper">
				<a href="#alley"><img src="img/link_icons/a.png"> ТРЦ Аллея</a>
				<a href="#gastromarket"><img src="img/link_icons/gastro.png"> Гастромаркет</a>
				<a href="#scheme"><img src="img/link_icons/schema.png"> Схема ТРЦ</a>
			</div>
		</div>
	</section>

	<section class="poster_main index_page _anim-items">
		<div class="container ">
			<div class="rent_page_poster ">
				<div class="rent_page_poster_title">
					Афиша торгово-развлекательного центра
					<span class="dates_filter">
						<img src="img/cubes2.png" class="trig">
						<div class="dates">
							<div class="dates_title">Выбрать дату</div>
							<form>
								<input type="text" name="date_start">
								<img src="img/dates_arr.png">
								<input type="text" name="date_finish">
								<div>
									<input type="submit" value="Найти">
								</div>
							</form>
						</div>
					</span> 
					<a href="poster.php" class="all_events">Все события</a>
					<div class="navigation">
						<div class="swiper-button-rent-next"></div>
						<div class="swiper-button-rent-prev"></div>
						<div class="border"></div>
					</div>
				</div>

				<!--Афиша-->
				<?php include 'blocks/afisha.php'; ?>	

			</div>
		</div>
	</section>

	<section class="alley _anim-items" id="alley">
		<div class="container ">
			<div class="title">торгово-Развлекательный центр аллея</div>
			<div class="flex">
				<div class="side">
					<div class="allye_wrapper_slider">
						<div class="swiper-container">
						  <!-- Additional required wrapper -->
						  <div class="swiper-wrapper">
						    <!-- Slides -->
							<div class="swiper-slide">
								<img src="img/slider/1/1.jpg">
							</div>
							<div class="swiper-slide">
								<img src="img/slider/1/2.jpg">
							</div>
							<div class="swiper-slide">
								<img src="img/slider/1/3.jpg">
							</div>
							<div class="swiper-slide">
								<img src="img/slider/1/4.jpg">
							</div>
						    
						  </div>

						  <div class="swiper-pagination"></div>
						  <!-- If we need navigation buttons -->
						  
						</div>
						<div class="navigation">
							<div class="swiper-button-alley-next"></div>
				      		<div class="swiper-button-alley-prev"></div>
				      		<div class="border"></div>
				      	</div>
				      	<div class="alley_part"></div>
				    </div>
				</div>
				<div class="side">
					<p>В 2019 году в Южно-Сахалинске был открыт торгово-развлекательный центр Аллея.  Особенность комплекса в том, что он одноэтажный. Это отвечает самым актуальным мировым трендам в архитектуре и строительстве. Высота потолков до 8 метров обеспечивает для посетителей необходимый простор и удовольствие от прогулок. Широкие аллеи создадут необходимый обзор каждому месту продаж. </p>
					<ul>
						<li><span>Приходите за покупками и хорошим настроением</span></li>
						<li><span>Крупный гастромаркет на Сахалине</span></li>
						<li><span>Приглашаем арендаторов</span></li>
					</ul>
					<div class="flex">
						<div class="flex_side">
							<p><b>Часы работы</b><br>10.00-21.00<br>Ежедневно</p>
						</div>
						<div class="flex_side" style="width: 50%;">
							<p><b>Общая площадь</b><br>37 186,5 м<sup>2</sup></p>
						</div>
					</div>

					<div class="links flex">
						<a href="alley.php">ТРЦ Аллея</a>
						<a href="poster.php">Афиша</a>
						<a href="rent_page.php">Аренда</a>
						<a href="advertising.php">Реклама в ТРЦ</a>
						<a href="scheme.php">Схема ТРЦ</a>
						<a href="contacts.php">Контакты</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container trc_links" >
			<div class="flex">
				<a class="trc_link" href="#">
					<img src="img/icons/trc-icon.png" >
					<span>ТРЦ Аллея</span>
				</a>
				<a class="trc_link" href="#">
					<img src="img/icons/trc-icon2.png" >
					<span>Афиша</span>
				</a>
				<a class="trc_link" href="#">
					<img src="img/icons/trc-icon3.png" >
					<span>Аренда</span>
				</a>
				<a class="trc_link" href="#">
					<img src="img/icons/trc-icon4.png" >
					<span>Реклама в ТРЦ</span>
				</a>
				<a class="trc_link" href="#">
					<img src="img/icons/trc-icon5.png" >
					<span>Схема ТРЦ</span>
				</a>
				<a class="trc_link" href="#">
					<img src="img/icons/trc-icon6.png" >
					<span>Контакты</span>
				</a>
			</div>
		</div>
	</section>

	<section class="gastromarket  index_page _anim-items" id="gastromarket">
		<div class="container">
			<div class="title">гастромаркет</div>
			<div class="flex">
				<div class="side">
						<div class="gastromarket_wrapper_slider">
							<div class="swiper-container">
								<!-- Additional required wrapper -->
								<div class="swiper-wrapper">
									<!-- Slides -->
									<div class="swiper-slide">
										<img src="img/slider/4/1.jpg">
									</div>
									<div class="swiper-slide">
										<img src="img/slider/4/2.jpg">
									</div>	
									<div class="swiper-slide">
										<img src="img/slider/4/3.jpg">
									</div>
									<div class="swiper-slide">
										<img src="img/slider/4/4.jpg">
									</div>
									<div class="swiper-slide">
										<img src="img/slider/4/5.jpg">
									</div>
									<div class="swiper-slide">
										<img src="img/slider/4/6.jpg">
									</div>
									<div class="swiper-slide">
										<img src="img/slider/4/7.jpg">
									</div>
									<div class="swiper-slide">
										<img src="img/slider/4/8.jpg">
									</div>
								</div>

								<div class="swiper-pagination"></div>
								<!-- If we need navigation buttons -->
							
							</div>
							<div class="navigation">
								<div class="swiper-button-gastromarket-next"></div>
								<div class="swiper-button-gastromarket-prev"></div>
								<div class="border"></div>
							</div>
							<div class="gastromarket_part"></div>
						</div>
				</div>
				<div class="side">
					<div class="gastromarket_title">Наш гастромаркет — это единение рыночной торговли и открытой кухни разных стран Мира</div>
					<p>Гастромаркет Арбат — это современный рынок, где вы можете купить свежие и вкусные продукты, а также перекусить блюдами разных стран и культур мира в уютном ресторанном дворике вьетнамской, гавайской, китайской, корейской, японской, индийской, армянской, киргизской, итальянской, русской, турецкой, европейской и итальянской кухни.</p>
					<div class="flex">
						<div class="flex_side">
							<p><b>Часы работы рынка</b><br>10.00-21.00<br><b>Ежедневно</b></p>
						</div>
						<div class="flex_side" style="width: 50%;">
							<p><b>Часы работы ресторанного дворика</b><br><b>Вс-Чт</b> 10.00-21.00<br><b>Пт-Сб</b> 10.00-23.00</p>
						</div>
					</div>
					<div class="flex">
						<div class="flex_side" style="width: 100%">
							<table width="100%">
								<tr>
									<td><p><b>Площадь пространства гастромаркета</b></p></td>
									<td><p>4 500 м<sup>2</sup></p></td>
								</tr>
								<tr>
									<td><p><b>Количество посадочных мест</b></p></td>
									<td><p>более 700</p></td>
								</tr>
								<tr>
									<td><p><b>Количество корнеров</b></p></td>
									<td><p>27 с учетом кофеточек</p></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="flex">
						<p>Здесь же располагаются различные зоны отдыха и сцена для проведения мероприятий</p>
					</div>
				</div>
				
			</div>
			<div class="items flex kitchens">
						<div class="item">
							<img src="img/gastro_icons/pizza.png"><br>
							Итальянская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/barbecue.png"><br>
							Грузинская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/noodles.png"><br>
							Китайская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/viet.png"><br>
							Вьетнамская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/havaii.png"><br>
							Гавайская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/korea.png"><br>
							Корейская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/india.png"><br>
							Индийская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/armenian.png"><br>
							Армянская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/kirgiz.png"><br>
							Киргизская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/japan.png"><br>
							Японская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/russia.png"><br>
							Русская<br> кухня
						</div>
						<div class="item">
							<img src="img/gastro_icons/turkie.png"><br>
							Турецкая<br> кухня
						</div>
			</div>
			<div class="buttons_after_list">
						<a href="rent_page.php#foodcort">Условия аренды</a>
						<a href="rent.php" class="active">Узнать подробнее</a>
			</div>
		</div>
	</section>

	<section class="alley _anim-items" id="storya">
		<div class="container">
			<div class="title">развлекательный комплекс</div>
			<div class="flex">
				<div class="side">
					<div class="allye_wrapper_slider">
						<div class="swiper-container">
						  <!-- Additional required wrapper -->
						  <div class="swiper-wrapper">
						    <!-- Slides -->
							<div class="swiper-slide">
								<img src="img/slider/3/1.jpg">
							</div>
							<div class="swiper-slide">
								<img src="img/slider/3/1.jpg">
							</div>
							
						    
						  </div>

						  <div class="swiper-pagination"></div>
						  <!-- If we need navigation buttons -->
						  
						</div>
						<div class="navigation">
							<div class="swiper-button-alley-next"></div>
				      		<div class="swiper-button-alley-prev"></div>
				      		<div class="border"></div>
				      	</div>
				      	<div class="alley_part"></div>
				    </div>
				</div>
				<div class="side">
				<div class="kompleks_title">STORYA — история ярких впечатлений</div>

					<p>Однажды мы решили создать историю о том, как превратить обычное пространство в чудесный парк, где всегда будет тепло и уютно. Но не тут то было, дожди и бури стали нам мешать!
					</p>
					<p>
					И тогда на помощь пришёл добрый человечек по имени ЯРИ.
					Он объединил всю семью, а потом каждому дал возможность написать свою историю, где всем будет интересно и комфортно:
					</p>
					
					<p><b>Event-менеджер</b></p>
					<p>Наш event-менеджер покажет Вам пространство, предложит удобную рассадку для гостей, ознакомит с меню вкусных блюд и подберет все необходимые услуги для Вашего события.</p>
				</div>
			</div>
			<div class="items flex">
						<div class="item">
							<img src="img/storya_icons/garden.png"><br>
							<p><b>Garden</b></p>
							<p>Пространство Garden – это раздолье для движения и творчества маленьких садоводов.</p>
						</div>
						<div class="item">
							<img src="img/storya_icons/gym.png"><br>
							<p><b>Gym</b></p>
							<p>Самое время размяться, стать бодрее и здоровее! Батуты, роллердром и, конечно, огромный трехъярусный лабиринт с горками, сетками и полосой препятствий.</p>
						</div>
						<div class="item">
							<img src="img/storya_icons/vr.png"><br>
							<p><b>VR</b></p>
							<p>Виртуальные развлечения для всей семьи и друзей. Mоpe эмoций, впeчaтлeний, драйв. Рaзвлeкaтeльныe программы: амepиканcкиe гoрки, ужacы, подводный мир — более 100 игр на любой вкус и возраст.</p>
						</div>
						<div class="item">
							<img src="img/storya_icons/garden.png"><br>
							<p><b>Party</b></p>
							<p>Комнаты «До», «Ре», «Ми», «Фа» идеально подходят для детских праздников, юбилеев, встречи выпускников и друзей, празднования годовщины свадьбы, а также проведения конференций, семинаров, мастер-классов и фотосессий.</p>
						</div>
			</div>
		</div>
	</section>
	
	<section class="index_page scheme _anim-items" id="scheme">
		<div class="container">
			<div class="title">схема трц</div>
			<div id="map">
				<span></span>
			</div>
			<!--
			<div class="scheme_page_wrapper flex">
				<img src="img/scheme-new.jpg" width="100%" >
			</div>
			-->
		</div>
	</section>


<?php include 'blocks/footer.php' ?>
<?php include 'blocks/popup.php' ?>

	
</body>
</html>