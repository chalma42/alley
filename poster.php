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

	<title>Афиша - ТРЦ Аллея</title>
</head>
<body style="background-color: #f3f3f3;">
	<?php include 'blocks/header.php'; ?>

	<section class="bread" style="background: #F3F3F3;padding-top: 26px;">
		<div class="container">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="#">Афиша</a></li>
			</ul>
		</div>
	</section>

	<section class="poster poster_page _anim-items _anim-no-hide">
		<div class="poster_main">
			<div class="container">
				<h1>Афиша торгово-развлекательный центр</h1>
				<div class="flex">
					<div class="side">

						
						<div class="poster_main_item">
								<div class="poster_main_item_img">
									<img src="img/poster1.png">
								</div>
								<div class="poster_main_item_bottom">
									<div class="poster_main_item_time">29.12.2021 16:00</div>
								</div>
							</div>
						
					</div>
					<div class="side events">
						

							<div class="swiper-container">

							  <div class="swiper-wrapper">

							    <div class="swiper-slide">
							    	<div class="poster_main_item">
										<div class="poster_main_item_img">
											<img src="img/poster1_1.png">
										</div>
									</div>
								</div>
								<div class="swiper-slide">
							    	<div class="poster_main_item">
										<div class="poster_main_item_img">
											<img src="img/poster2.png">
										</div>
									</div>
								</div>
								<!--
								<div class="swiper-slide">
							    	<div class="poster_main_item">
										<div class="poster_main_item_img">
											<img src="img/poster1.png">
										</div>
									</div>
								</div>
								<div class="swiper-slide">
							    	<div class="poster_main_item">
										<div class="poster_main_item_img">
											<img src="img/poster2.png">
										</div>
									</div>
								</div>
								<div class="swiper-slide">
							    	<div class="poster_main_item">
										<div class="poster_main_item_img">
											<img src="img/poster2.png">
										</div>
									</div>
								</div>-->

							    
							  </div>

							  <div class="swiper-pagination"></div>
							  
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="poster_list">
			<div class="container _anim-items">
				<div class="rent_page_poster ">
					<div class="rent_page_poster_title">
						Предстоящие события
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
		</div>
	</section>

	<?php include 'blocks/footer.php' ?>
	<?php include 'blocks/popup.php' ?>
</body>
</html>