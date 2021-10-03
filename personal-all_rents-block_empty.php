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

	<title>Личный кабинет | Арендаторы - ТРЦ Аллея</title>
</head>
<body>
	<?php include 'blocks/header.php'; ?>	

	<section class="bread" style="padding-top: 26px;">
		<div class="container">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="#">Кабинет администратора</a></li>
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
			<h1>
				Арендаторы 
				<div class="types_list">
					<a href="personal-all_rents-list.php" class="list_type">
						<svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect y="15" width="19" height="2" fill="#888888"/>
<rect y="10" width="19" height="2" fill="#888888"/>
<rect y="5" width="19" height="2" fill="#888888"/>
<rect width="19" height="2" fill="#888888"/>
</svg>
					</a> 
					<a href="personal-all_rents-block.php" class="block_type" class="active">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="6.18176" y="10" width="4.63636" height="7" fill="black"/>
<rect x="12.3636" y="10" width="4.63636" height="7" fill="black"/>
<rect x="6.18176" width="4.63636" height="7" fill="black"/>
<rect x="12.3636" width="4.63636" height="7" fill="black"/>
<rect y="10" width="4.63636" height="7" fill="black"/>
<rect width="4.63636" height="7" fill="black"/>
</svg>

					</a>
				</div>
				<div class="add_new">
					<a href="personal-add_new.php">
						Добавить нового арендатора <img src="img/personal/add.png">
					</a>
				</div>
			</h1>
		</div>
	</section>

	<section class="all_rents_page personal">
		<div class="container">
			
			<div class="all_rents_page_wrapper flex">
				<div class="filter">
					<form>
						<!-- <input type="text" name="search_filter" class="search_filter" placeholder="Поиск арендатора"> -->
						<a href="" class="search_filter">Поиск арендатора</a>
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
						<a href="scheme.php" class="show_to_scheme">Показать на схеме ТЦ</a>
					</form>
				</div>
				<div class="all_rents_page_items flex">
					<div class="all_rents_page_items_empty_request">
						К сожалению, по Вашему запросу арендаторов не найдено <br>
						<a href="personal-all_rents-block.php">Вернуться ко всем арендаторам</a>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>

	<?php include 'blocks/footer.php' ?>
	<?php include 'blocks/popup.php' ?>
</body>
</html>