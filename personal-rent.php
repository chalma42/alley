<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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

	<title>Личный кабинет | Арендатор - ТРЦ Аллея</title>
</head>
<body>
	<?php include 'blocks/header.php'; ?>	

	<section class="bread" style="padding-top: 26px;">
		<div class="container">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="personal.php">Кабинет администратора</a></li>
				<li><a href="#">Карточка арендатора</a></li>
			</ul>
		</div>
	</section>

	<section class="menu_admin" style="background: #F3F3F3;">
		<div class="container">
			<ul>
				<li>
					<a href="personal-all_rents-list.php" class="active">
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 18H12V9H9V18Z" fill="#E02749"/>
<path d="M9 4H12V7H9V4Z" fill="#E02749"/>
<circle cx="11" cy="11" r="10" stroke="#E02749" stroke-width="2"/>
</svg>

						Арендаторы
					</a>
				</li>
				<li>
					<a href="personal-posters_list.php">
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.10519 11.602C8.67223 11.602 9.76301 10.4652 9.76301 8.63696C9.76301 6.80875 8.67223 5.67188 7.10519 5.67188C5.53815 5.67188 4.43201 6.82411 4.43201 8.63696C4.43201 10.4498 5.53815 11.602 7.10519 11.602ZM6.16804 16.549H7.99625L15.3398 5.79478H13.5116L6.16804 16.549ZM7.10519 10.3423C6.44458 10.3423 5.98368 9.77383 5.98368 8.63696C5.98368 7.50009 6.44458 6.93165 7.10519 6.93165C7.78117 6.93165 8.2267 7.48472 8.2267 8.63696C8.2267 9.78919 7.78117 10.3423 7.10519 10.3423ZM14.4027 16.6719C15.9697 16.6719 17.0759 15.5196 17.0759 13.7068C17.0759 11.8939 15.9697 10.7417 14.4027 10.7417C12.851 10.7417 11.7449 11.8939 11.7449 13.7068C11.7449 15.5196 12.851 16.6719 14.4027 16.6719ZM14.4027 15.4121C13.7421 15.4121 13.2812 14.859 13.2812 13.7068C13.2812 12.5546 13.7421 12.0015 14.4027 12.0015C15.0787 12.0015 15.5242 12.5699 15.5242 13.7068C15.5242 14.8437 15.0787 15.4121 14.4027 15.4121Z" fill="black"/>
<circle cx="11" cy="11" r="10" stroke="black" stroke-width="2"/>
</svg>

						Афиша
					</a>
				</li>
				<li>
					<a href="personal-orders_list.php">
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="11" cy="11" r="10" stroke="black" stroke-width="2"/>
<path d="M9.63937 16C9.39385 16 9.15756 15.9027 8.98314 15.7283L5.27178 12.0169C4.90941 11.6543 4.90941 11.0671 5.27178 10.7047C5.63437 10.3423 6.22164 10.3423 6.58401 10.7047L9.58502 13.7057L15.8768 6.32571C16.2093 5.93627 16.7947 5.88923 17.185 6.22153C17.5748 6.55404 17.6214 7.13981 17.2891 7.52968L10.3454 15.6739C10.1774 15.8709 9.93494 15.9888 9.6761 15.9991C9.66385 15.9996 9.65161 16 9.63937 16Z" fill="black"/>
</svg>

						Заявки
					</a>
				</li>
			</ul>
			<div class="user_wellcome">
				Добрый день, Юлия Савельева <span><img src="img/user.png"></span>
			</div>
		</div>
	</section>

	<section class="personal_title">
		<div class="container">
			<h1 class="title_inner">
				Дизайн удачи 
				<div class="types_list" style="left: 20%;top: 30px;">
					<a href="personal-add_new.php" class="list_type">
						<img src="img/personal/edit_big.png">
					</a> 
				</div>
			</h1>
		</div>
	</section>

	<section class="personal_form">
		<div class="container">
			<div class="personal_form_wrapper flex personal_rent_side_one">
				<div class="side">
					<div class="side_logo">
						<p><span>ID</span> К0001</p>
						<div class="side_logo_img">
							<img src="img/personal/rent_logo.png">
						</div>
						<p><span>Логин</span> AAgritsuk@mail.ru</p>
						<p><span>Пароль</span> 12345</p>
					</div>
				</div>
				<div class="side">
					<div class="personal_cat_info"><img src="img/personal/cat_info.png"> Дом, сад, животные</div>
					<div class="personal_property_info site">dizud.ru</div>
					<div class="personal_property_info phone">75-85-95</div>
					<div class="personal_property_info subcat">Торговля и услуги</div>
					<div style="text-align: center;">
						<a href="scheme.php" class="side_link">На схеме ТЦ</a>
					</div>
				</div>
				<div class="side">
					<div class="side_title">Данные договора</div>
					<div class="doc_info">
						<p><span>№ договора</span>123566866</p>
						<p><span>№ участка</span>12</p>
						<div class="personal_property_info date trig">
							12.05.2021
							<div class="dates" style="width: 172px;">
								<div class="dates_title">Выбрать дату</div>
								<form>
									<input type="text" name="date_start">
								</form>
							</div>
						</div>
						<div class="personal_property_info warning">Активный договор</div>
					</div>
				</div>
				<div class="side">
					<div class="side_title">Контактное лицо</div>
					<div class="contact_face">
						<p>Грицук Алексей</p>
						<div class="personal_property_info phone2">8 914 755-28-31</div>
						<div class="personal_property_info mail">AAgritsuk@mail.ru</div>
					</div>
				</div>
				<div class="side">
					<div class="side_title">Режим работы</div>
					<div class="time_work">
						пн 10:00-21:00<br> 
						вт 10:00-21:00 <br>
						ср 10:00-21:00 <br>
						чт 10:00-21:00 <br>
						пт 10:00-21:00 <br>
						сб 10:00-21:00 <br>
						вс 10:00-21:00
					</div>
				</div>
			</div>
			<div class="personal_form_wrapper flex">
				<div class="description_side">
					<div class="personal_form_description_side_title">Магазин декора для дома «Дизайн удачи»</div>
					<p>На полках вы найдёте милые стильные предметы интерьера от известных брендов:</p>
					<ul>
						<li>этажерки</li>
						<li>консоли</li>
						<li>столики</li>
						<li>зеркала</li>
						<li>люстры</li>
						<li>настольные лампы</li>
						<li>многое другое</li>
					</ul>
					<p>Заходите за покупками и порцией вдохновения.</p>
					<div class="personal_form_description_side_subtitle">Слайдер</div>
					<div class="personal_form_description_side_slider_wrapper flex">
						<div>
							<img src="img/personal/slider_preview.png">
						</div>
					</div>
					<div class="personal_form_description_side_subtitle">Изображения</div>
					<div class="personal_form_description_side_images_wrapper flex">
						<div>
							<img src="img/personal/img_preview1.png">
						</div>
						<div>
							<img src="img/personal/img_preview2.png">
						</div>
					</div>
				</div>
				<div class="sidebar_side">
					<div class="sidebar_side_item open">
						<div class="sidebar_side_item_title">Реквизиты</div>
						<table>
							<tbody>
								<tr>
									<td>Наименование организации</td>
									<td>ООО Дизайн удачи</td>
								</tr>
								<tr>
									<td>Должность</td>
									<td>Директор</td>
								</tr>
								<tr>
									<td>ФИО </td>
									<td>Грицук Алексей</td>
								</tr>
								<tr>
									<td>Основание (УСТАВ)</td>
									<td></td>
								</tr>
								<tr>
									<td>Телефон</td>
									<td>7 924 286 73 85</td>
								</tr>
								<tr>
									<td>Электронная почта</td>
									<td>AAgritsuk@mail.ru</td>
								</tr>
								<tr>
									<td>ИНН</td>
									<td>650118252970</td>
								</tr>
								<tr>
									<td>КПП</td>
									<td>—</td>
								</tr>
								<tr>
									<td>ОГРН</td>
									<td>318650100007656</td>
								</tr>
								<tr>
									<td>Юридический адрес</td>
									<td>693000, Сахалинская область, г. Южно-Сахалинск, пер. Танковый, д. 2</td>
								</tr>
								<tr>
									<td>Почтовый адрес</td>
									<td>693000, Сахалинская область, г. Южно-Сахалинск, пер. Танковый, д. 2</td>
								</tr>
								<tr>
									<td>Наименование банка</td>
									<td>ПАО «Сбербанк»</td>
								</tr>
								<tr>
									<td>Расчетный счет</td>
									<td>40802810350340006125</td>
								</tr>
								<tr>
									<td>Корреспондентский счет</td>
									<td>30101810400000000225</td>
								</tr>
								<tr>
									<td>БИК</td>
									<td>44525225</td>
								</tr>
							</tbody>
						</table>
						<div class="download_req">
							<a href="">Скачать реквизиты</a>
						</div>
					</div>
					<div class="sidebar_side_item open">
						<div class="sidebar_side_item_title">SEO</div>
						<table>
							<tbody>
								<tr>
									<td>Title</td>
									<td>Магазин предметов интерьера и подарков</td>
								</tr>
								<tr>
									<td>Keywords</td>
									<td>Светотехника, Мягкая мебель, Магазин посуды, Посуда оптом, Магазин подарков и сувениров</td>
								</tr>
								<tr>
									<td>Description</td>
									<td>Дизайн удачи, интерьер-салон. Светотехника, Мягкая мебель, Магазин посуды, Посуда оптом, Магазин подарков и сувениров, (+1). ... улица имени И.П. Фархутдинова, дом 3, город Южно-Сахалинск, Сахалинская область, Россия. </td>
								</tr>
								<tr>
									<td>Page name</td>
									<td>alley.com/design_ydachi</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	
	<?php include 'blocks/footer.php' ?>
	<?php include 'blocks/popup.php' ?>
</body>
</html>