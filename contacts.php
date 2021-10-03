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

	<title>Контакты - ТРЦ Аллея</title>
	<style>
		body {
			background-color: #f3f3f3;
		}
	</style>
</head>
<body>
<?php include 'blocks/header.php'; ?>	

	<section class="bread" style="padding-top: 26px;">
		<div class="container">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</div>
	</section>

	<section class="contacts_page">
		<div class="container _anim-items _anim-no-hide">
			<h1>Контакты</h1>
			<div class="flex">
				<div class="left_side">
					<a href="tel:84242777707" class="phone">8 (4242) 77 77 07</a><br>
					<a href="mailto:info@alleym.ru" class="mail">info@alleym.ru</a>
					<div class="address">
						693000 Сахалинская обл., ул. Игоря Фархутдинова 3, Южно-Сахалинск
					</div>
					<!--
					<div class="managers">
						<div class="managers_item flex">
							<img src="img/contacts/man.png">
							<div class="managers_item_side">
								<div class="managers_item_title">Генеральный директор</div>
								<p>Алексей Бак</p>
								<a href="" class="show_contacts" style="display: none;">Показать контакты</a>
								<p class="for_hide">+7 (4242) 777 707 доб. 359</p>
								<p class="for_hide">abak@alleym.ru</p>
								<p class="for_hide">пн-пт с 9:00 до 18:00</p>
								<p class="for_hide">сб-вс выходной</p>
								<a href="" class="send_msg">Отправить сообщение</a>
							</div>
						</div>
						<div class="managers_item flex">
							<img src="img/contacts/man.png">
							<div class="managers_item_side">
								<div class="managers_item_title">Коммерческий директор</div>
								<p>Соболев Витор Андреевич</p>
								<a href="" class="show_contacts">Показать контакты</a>
								<p class="for_hide" style="display: none;">+7 (4242) 777 707 доб. 320</p>
								<p class="for_hide" style="display: none;">vsobolev@alleym.ru</p>
								<p class="for_hide" style="display: none;">пн-пт с 9:00 до 18:00</p>
								<p class="for_hide" style="display: none;">сб-вс выходной</p>
								<a href="" class="send_msg" style="display: none;">Отправить сообщение</a>
							</div>
						</div>
						<div class="managers_item flex">
							<img src="img/contacts/woman.png">
							<div class="managers_item_side">
								<div class="managers_item_title">Менеджер по аренде</div>
								<p>Тян Дарья Эриковна</p>
								<a href="" class="show_contacts">Показать контакты</a>
								<p class="for_hide" style="display: none;">+7 (4242) 777 707 доб. 345</p>
								<p class="for_hide" style="display: none;">dtyan@alleym.ru</p>
								<p class="for_hide" style="display: none;">пн-пт с 9:00 до 18:00</p>
								<p class="for_hide" style="display: none;">сб-вс выходной</p>
								<a href="" class="send_msg" style="display: none;">Отправить сообщение</a>
							</div>
						</div>
						<div class="managers_item flex">
							<img src="img/contacts/woman.png">
							<div class="managers_item_side">
								<div class="managers_item_title">Бухгалтерия</div>
								<p>Ре Ми Тен</p>
								<a href="" class="show_contacts">Показать контакты</a>
								<p class="for_hide" style="display: none;">+7 (4242) 777 707 доб. 312</p>
								<p class="for_hide" style="display: none;">mten@alsistroy.ru</p>
								<p class="for_hide" style="display: none;">пн-пт с 9:00 до 18:00</p>
								<p class="for_hide" style="display: none;">сб-вс выходной</p>
								<a href="" class="send_msg" style="display: none;">Отправить сообщение</a>
							</div>
						</div>
						<div class="managers_item flex">
							<img src="img/contacts/woman.png">
							<div class="managers_item_side">
								<div class="managers_item_title">Администратор</div>
								<p>Федосова Валерия Дмитриевна</p>
								<a href="" class="show_contacts">Показать контакты</a>
								<p class="for_hide" style="display: none;">+7 (914) 758 99 55</p>
								<p class="for_hide" style="display: none;">info@alleycity.ru</p>
								<p class="for_hide" style="display: none;">ср-вс с 12:00 до 21:00</p>
								<p class="for_hide" style="display: none;">пн-вт выходной</p>
								<a href="" class="send_msg" style="display: none;">Отправить сообщение</a>
							</div>
						</div>
					</div>
					-->
				</div>
				<div class="right_side">
					<!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A60f8793fd92c566b009675fb6e6bc9e3dea35690b01dddecaa03fb31b28ae86f&amp;width=100%&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
				-->
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afd8c9c17dd163f64a5e09f9a066b1c5773839087b4f749e318c04cfb382f6636&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			</div>
		</div>
	</section>

<?php include 'blocks/footer.php' ?>
<?php include 'blocks/popup.php' ?>
</body>
</html>