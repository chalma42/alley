
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

	<!--@chalma скрипты для графики
	<script type="text/javascript" src="js/graph-script.js"></script>
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
	<script src="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
	<script src="js/chartist-plugin-tooltip.min.js"></script>-->

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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript" src="js/script.js"></script>

	<title>Аренда - ТРЦ Аллея</title>
</head>
<body class="rent_pade_body">
	<?php include 'blocks/header.php'; ?>

	<section class="arent_page">
		<div class="arent_page_main _anim-items _anim-no-hide">
			<div class="container">
				<section class="bread">
					<ul>
						<li><a href="index.php">Главная</a></li>
						<li><a href="#">Аренда</a></li>
					</ul>
				</section>
				<div class="title">Аренда</div>
				<div class="subtitle">Выгодные условия для аренда</div>
				<div class="numbers">
					<div class="numbers_item">
						<div class="numbers_item_number">37 186,5 м<sup>2</sup> - 58 300 м<sup>2</sup></div>
						<div class="numbers_item_desc">Площадь ТРЦ</div>
					</div>
				</div>
				<div class="buttons">
					<a href="" class="but">Стать арендатором</a>
					<div class="buttons_item">
						<a href="#schema"><img src="img/mark_trc.png"> Схема ТРЦ</a>
					</div>
					<!--<div class="buttons_item">
						<a href="#grafik"><img src="img/grafik_icon.png"> График посещаемости</a>
					</div>-->
				</div>
			</div>
		</div>
		<div class="links _anim-items _anim-no-hide">
			<div class="container">
				<a href="#schema"><img src="img/link_icons/schema.png"> Схема ТРЦ</a>
				<!--<a href="#grafik"><img src="img/link_icons/grafik.png"> График посещаемости</a>-->
				<a href="#gastro"><img src="img/link_icons/gastro.png"> Гастромаркет</a>
				<a href="#foodcort"><img src="img/link_icons/foodcort.png"> фудкорт</a>
				<a href="#saling"><img src="img/link_icons/vesh.png"> торговля и услуги</a>
				<a href="#bank"><img src="img/link_icons/bankomat.png"> вендинг и банкоматы</a>
				<a href="#islands"><img src="img/link_icons/islands.png"> островки</a>
			</div>
		</div>
		<div class="scheme _anim-items" id="schema">
			<div class="container">
				<h2>схема торгово-развлекательного центра</h2>
				<div class="subtitle">Свободные площади трц</div>
				<div id="map">
					<span></span>
				</div>
				<!--
				<div class="flex">
					<div class="side_two">
						<img src="img/scheme-new.jpg" width="100%">
					</div>
				</div>
				-->
			</div>
		</div>
		<div class="grafik _anim-items" id="grafik">
			<div class="container">
				<!--
				<h2>ГРАФИК ПОСЕЩАЕМОСТИ</h2>
				<div class="flex" style="flex-direction: column;">
					 @chalma ниже старый код графика
					<div class="side_one">
						<div class="subtitle">апрель 2021 
							<span class="dates_filter">
								<img src="img/cubes2.png">
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
						</div>
						<div class="tabs">
							<ul class="">
								<li data-id="1"><a href="" class="active" data-id="1">Посетители</a></li>
								<li data-id="2"><a href="" data-id="2">Количество покупок</a></li>
								<li data-id="3"><a href="" data-id="3">Средний чек</a></li>
								<li data-id="4"><a href="" data-id="4">Общий объем продаж</a></li>
								<li data-id="5"><a href="" data-id="5">Трафик он-лайн</a></li>
							</ul>
							<div class="tabs_content">
								<div class="tabs_content_item" data-id="1" style="display: block;">
									<img src="img/grafik2.png">
								</div>
								<div class="tabs_content_item" data-id="2">
									<img src="img/grafik2.png">
								</div>
								<div class="tabs_content_item" data-id="3">
									<img src="img/grafik2.png">
								</div>
								<div class="tabs_content_item" data-id="4">
									<img src="img/grafik2.png">
								</div>
								<div class="tabs_content_item" data-id="5">
									<img src="img/grafik2.png">
								</div>
							</div>
						</div>
					</div> @chalma выше старый код графика
					
				</div>-->

				<!-- @chalma График -->
				<!--
				<div>
					<input type="month" id="month" name="month" value="2021-07" class="subtitle" style="border: 0px;background-color: transparent;width: 175px;">
				</div>		
				<div class="graph" >
					<div class="graph_labels">
						<input type="checkbox" name="people" id="people" value="yes" checked>
						<label for="people" class="graph-value people">Посетители</label> 

						<input type="checkbox" name="buy-count" id="buy-count" value="yes" checked>
						<label for="buy-count" class="graph-value buy-count">Количество покупок</label> 

						<input type="checkbox" name="average-check" id="average-check" value="yes" checked>
						<label for="average-check" class="graph-value average-check">Средний чек</label> 

						<input type="checkbox" name="total-sales" id="total-sales" value="yes" checked>
						<label for="total-sales" class="graph-value total-sales">Общий объем продаж</label>

						<input type="checkbox" name="online-trafic" id="online-trafic" value="yes" checked>
						<label for="online-trafic" class="graph-value online-trafic">Трафик он-лайн</label>
					</div>
					<div class="chart ct-chart ct-golden-section">
						<span class="manRub">чел/руб</span>
						<span class="manRubMob">тыс. чел/<br>млн. руб</span>
					</div>
				</div>
				-->
				<!-- @chalma График конец -->
			</div>
		</div>
		<section class="gastromarket _anim-items" id="foodcort">
			<div class="container">
				<div class="title">фудкорт</div>
				<div class="flex">
					<div class="side">
						<div class="video_poster">
							<img src="img/gastromarket.png">
							<img src="img/play.png" class="play">
							<div class="video_poster_part"></div>
							<video width="536" height="365" controls="controls">
							   <source src="b24_intro.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
							</video>
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_title">Ресторанный дворик</div>
						<p>По другую сторону от центральной аллеи расположен ресторанный дворик. Китайская, Итальянская и Грузинская кухня, разнообразие и стильный интерьер делают зону фудкортов привлекательной для посетителей</p>
						<div class="gastromarket_title">Зоны фудкорта</div>
						<div class="items flex">
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
						</div>
						<p>Формат точки — от полноценного ресторана до кофеточки и лотка с мороженным. Гибкие условия аренды: арендные каникулы, бесплатные мероприятия раз в неделю, привлекающие посетителей, дополнительные рекламные акции.</p>
						<div class="buttons">
							<a href="#" class="but">Отправить заявку</a>
							<a href="advertising.php" class="no_border">Реклама в ТРЦ</a>
						</div>
					</div>
				</div>
				<div class="flex gastromarket_list">
					<div class="side">
						<div class="gastromarket_list_title">Помещения полностью готовы под торговлю продуктами</div>
						<div class="gastromarket_list_content">
							- Плитка<br>
							- Холодная и горячая вода<br>
							- Канализация<br>
							- Подведена вентиляция<br>
							- Электрическая мощность по запросу
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Плюсы аренды в гастромаркете: ТРЦ предоставит Вам</div>
						<div class="gastromarket_list_content">
							- Дезинфекцию<br>
							- Бесперебойную работу коммуникаций<br>
							- Рекламную поддержку
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Требования к арендаторам</div>
						<div class="gastromarket_list_content">
							- Медкнижки сотрудников<br>
							- Юрлицо (ИП или ООО)<br>
							- Обеспечительный платеж (депозит) 3000 ₽
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Условия работы</div>
						<div class="gastromarket_list_content">
							- с 10 до 22:00 каждый день<br>
							- Договор на 6 мес.<br>
							- Маркетинговые мероприятия 1 раз в неделю без дополнительных платежей<br>
							- Рекламные акции за доп. плату по желанию
						</div>
					</div>
				</div>
				<div class="flex pink_block">
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Ура!</div>
							<div class="pink_block_item_desc">Арендные каникулы —<br> 2 недели</div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Поможем с документами</div>
							<div class="pink_block_item_desc"></div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Poster POS</div>
							<div class="pink_block_item_desc">Система учета<br> по выгодной цене</div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Наружная реклама</div>
							<div class="pink_block_item_desc">Помощь с установкой</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="gastromarket _anim-items" id="saling">
			<div class="container">
				<div class="title">торговля и услуги</div>
				<div class="flex">
					<div class="side">
						<div class="video_poster">
							<img src="img/gastromarket2.png">
							<img src="img/play.png" class="play">
							<div class="video_poster_part"></div>
							<video width="536" height="365" controls="controls">
							   <source src="b24_intro.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
							</video>
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_title">Продажа непродовольственных товаров</div>
						<p>Часть помещений нашего ТРЦ предназначена для торговли непродовольственными товарами и сферу услуг. От одежды и обуви до офиса банка или салона красоты</p>
						<div class="gastromarket_title">Виды помещений</div>
						<div class="items flex">
							<div class="item">
								<img src="img/gastro_icons/town.png"><br>
								Торговля<br> и офисы
							</div>
							<div class="item">
								<img src="img/gastro_icons/mirror.png"><br>
								Cалоны красоты
							</div>
						</div>
						<p>Формат точки — от магазина самообслуживания до точки ногтевого сервиса. Гибкие условия, адаптированные под Ваши задачи.</p>
						<div class="buttons">
							<a href="#" class="but">Отправить заявку</a>
							<a href="advertising.php" class="no_border">Реклама в ТРЦ</a>
						</div>
					</div>
				</div>
				<div class="flex gastromarket_list">
					<div class="side">
						<div class="gastromarket_list_title">Помещения полностью готовы под торговлю продуктами</div>
						<div class="gastromarket_list_content">
							- Плитка<br>
							- Холодная и горячая вода<br>
							- Канализация<br>
							- Подведена вентиляция<br>
							- Электрическая мощность по запросу
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Плюсы аренды в гастромаркете: ТРЦ предоставит Вам</div>
						<div class="gastromarket_list_content">
							- Дезинфекцию<br>
							- Бесперебойную работу коммуникаций<br>
							- Рекламную поддержку
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Требования к арендаторам</div>
						<div class="gastromarket_list_content">
							- Медкнижки сотрудников<br>
							- Юрлицо (ИП или ООО)<br>
							- Обеспечительный платеж (депозит) 3000 ₽
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Условия работы</div>
						<div class="gastromarket_list_content">
							- с 10 до 22:00 каждый день<br>
							- Договор на 6 мес.<br>
							- Маркетинговые мероприятия 1 раз в неделю без дополнительных платежей<br>
							- Рекламные акции за доп. плату по желанию
						</div>
					</div>
				</div>
				<div class="flex pink_block">
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Ура!</div>
							<div class="pink_block_item_desc">Арендные каникулы — 2 недели</div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Поможем с документами</div>
							<div class="pink_block_item_desc"></div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Poster POS</div>
							<div class="pink_block_item_desc">Система учета по выгодной цене</div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Наружная реклама</div>
							<div class="pink_block_item_desc">Помощь с установкой</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="gastromarket _anim-items" id="bank">
			<div class="container">
				<div class="title">Вендинговые аппараты и банкоматы</div>
				<div class="flex">
					<div class="side">
						<div class="video_poster">
							<img src="img/gastromarket3.png">
							<img src="img/play.png" class="play">
							<div class="video_poster_part"></div>
							<video width="536" height="365" controls="controls">
							   <source src="b24_intro.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
							</video>
						</div>
					</div>
					<div class="side">
						<p>Автоматы и банкоматы могут быть установленны на центральной аллее, при входных группах, в зоне Антресоль, в зоне развлечений</p>
						<div class="gastromarket_title">Виды аппаратов</div>
						<div class="items flex">
							<div class="item">
								<img src="img/gastro_icons/apparat.png"><br>
								Вендинговые<br> аппараты
							</div>
							<div class="item">
								<img src="img/gastro_icons/bank.png"><br>
								Банкоматы
							</div>
							<div class="item">
								<img src="img/gastro_icons/robot.png"><br>
								Робокафе
							</div>
						</div>
						<div class="buttons">
							<a href="#" class="but">Отправить заявку</a>
							<a href="advertising.php" class="no_border">Реклама в ТРЦ</a>
						</div>
					</div>
				</div>
				<div class="flex gastromarket_list">
					<div class="side">
						<div class="gastromarket_list_title">Помещения полностью готовы под торговлю продуктами</div>
						<div class="gastromarket_list_content">
							- Плитка<br>
							- Холодная и горячая вода<br>
							- Канализация<br>
							- Подведена вентиляция<br>
							- Электрическая мощность по запросу
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Плюсы аренды в гастромаркете: ТРЦ предоставит Вам</div>
						<div class="gastromarket_list_content">
							- Дезинфекцию<br>
							- Бесперебойную работу коммуникаций<br>
							- Рекламную поддержку
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Требования к арендаторам</div>
						<div class="gastromarket_list_content">
							- Медкнижки сотрудников<br>
							- Юрлицо (ИП или ООО)<br>
							- Обеспечительный платеж (депозит) 3000 ₽
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Условия работы</div>
						<div class="gastromarket_list_content">
							- с 10 до 22:00 каждый день<br>
							- Договор на 6 мес.<br>
							- Маркетинговые мероприятия 1 раз в неделю без дополнительных платежей<br>
							- Рекламные акции за доп. плату по желанию
						</div>
					</div>
				</div>
				<div class="flex pink_block">
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Ура!</div>
							<div class="pink_block_item_desc">Арендные каникулы — 2 недели</div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Поможем с документами</div>
							<div class="pink_block_item_desc"></div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Poster POS</div>
							<div class="pink_block_item_desc">Система учета по выгодной цене</div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Наружная реклама</div>
							<div class="pink_block_item_desc">Помощь с установкой</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="gastromarket _anim-items" id="islands">
			<div class="container">
				<div class="title">торговый островок</div>
				<div class="flex">
					<div class="side">
						<div class="video_poster">
							<img src="img/gastromarket4.png">
							<img src="img/play.png" class="play">
							<div class="video_poster_part"></div>
							<video width="536" height="365" controls="controls">
							   <source src="b24_intro.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
							</video>
						</div>
					</div>
					<div class="side">
						<p>Торговые островки могут быть установленны на центральной аллее, при входных группах, в зоне Антресоль, в зоне развлечений</p>
						<div class="gastromarket_title">Виды точек</div>
						<div class="items flex">
							<div class="item">
								<img src="img/gastro_icons/ice.png"><br>
								Мороженое,<br> закуски
							</div>
							<div class="item">
								<img src="img/gastro_icons/hat.png"><br>
								Непродовольственные<br> товары
							</div>
							<div class="item">
								<img src="img/gastro_icons/mirror.png"><br>
								Услуги
							</div>
						</div>
						<div class="buttons">
							<a href="#" class="but">Отправить заявку</a>
							<a href="advertising.php" class="no_border">Реклама в ТРЦ</a>
						</div>
					</div>
				</div>
				<div class="flex gastromarket_list">
					<div class="side">
						<div class="gastromarket_list_title">Помещения полностью готовы под торговлю продуктами</div>
						<div class="gastromarket_list_content">
							- Плитка<br>
							- Холодная и горячая вода<br>
							- Канализация<br>
							- Подведена вентиляция<br>
							- Электрическая мощность по запросу
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Плюсы аренды в гастромаркете: ТРЦ предоставит Вам</div>
						<div class="gastromarket_list_content">
							- Дезинфекцию<br>
							- Бесперебойную работу коммуникаций<br>
							- Рекламную поддержку
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Требования к арендаторам</div>
						<div class="gastromarket_list_content">
							- Медкнижки сотрудников<br>
							- Юрлицо (ИП или ООО)<br>
							- Обеспечительный платеж (депозит) 3000 ₽
						</div>
					</div>
					<div class="side">
						<div class="gastromarket_list_title">Условия работы</div>
						<div class="gastromarket_list_content">
							- с 10 до 22:00 каждый день<br>
							- Договор на 6 мес.<br>
							- Маркетинговые мероприятия 1 раз в неделю без дополнительных платежей<br>
							- Рекламные акции за доп. плату по желанию
						</div>
					</div>
				</div>
				<div class="flex pink_block">
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Ура!</div>
							<div class="pink_block_item_desc">Арендные каникулы — 2 недели</div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Поможем с документами</div>
							<div class="pink_block_item_desc"></div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Poster POS</div>
							<div class="pink_block_item_desc">Система учета по выгодной цене</div>
						</div>
					</div>
					<div class="side">
						<div class="pink_block_item">
							<div class="pink_block_item_title">Наружная реклама</div>
							<div class="pink_block_item_desc">Помощь с установкой</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<?php include 'blocks/footer.php' ?>
	<?php include 'blocks/popup.php' ?>
</body>
</html>