
<style>
	#menu__toggle {
  opacity: 0;
}

#menu__toggle:checked ~ .menu__btn > span {
  transform: rotate(45deg);
}
#menu__toggle:checked ~ .menu__btn > span::before {
  top: 0;
  transform: rotate(0);
}
#menu__toggle:checked ~ .menu__btn > span::after {
  top: 0;
  transform: rotate(90deg);
}
#menu__toggle:checked ~ .menu__box {
  visibility: visible;
  top: -45px;
  z-index: 1;
}

.menu__btn {
	display: flex;
    align-items: center;
    position: absolute;
    top: -33px;
    right: 15px;
    width: 26px;
    height: 26px;
    cursor: pointer;
    z-index: 2;
}

.menu__btn > span,
.menu__btn > span::before,
.menu__btn > span::after {
  display: block;
  position: absolute;

  width: 100%;
  height: 2px;

  background-color: #616161;

  transition-duration: .25s;
}
.menu__btn > span::before {
  content: '';
  top: -8px;
}
.menu__btn > span::after {
  content: '';
  top: 8px;
}

.menu__box {
  display: block;
  position: absolute;
  visibility: hidden;
  top: -3000px;
  right: 0px;
  width: 300px;
  height: 250px;
  margin: 0;
  padding: 45px 0;
  list-style: none;
  background-color: #ECEFF1;
  box-shadow: 1px 0px 6px rgba(0, 0, 0, .2);
  transition-duration: .25s;
}

.menu__item {
	display: block;
  	padding: 12px 24px;
  	color: #333;
  	font-size: 16px;
  	text-decoration: none;
  	font-family: Montserrat;
	font-style: normal;
    font-weight: normal;
    line-height: 15px;

    position: relative;
  	transition-duration: .25s;
}
.menu__item:hover {
  background-color: #CFD8DC;
}
</style>
<header class="header">
	</div>
		<div class="header_top">
			<div class="container">
				<div class="flex">
					<div class="phone_icon_m">
						<a href="tel:84242777707">
							<img src="img/phone_mbl.png">
						</a>
					</div>
					<div class="mark_icon_m">
						<a href="route.php">
							<img src="img/mark_mbl.png">
						</a>
					</div>
					<a href="/" class="logo_link">
						<div class="logo">
							<img src="img/logo.png" class="logo_big">
							<img src="img/logo_small.png" class="logo_small">
						</div>
					</a>
					<div class="user_icon_m user">
							<img src="img/user_mbl.png">
					</div>
					<div class="burger_icon_m burger">
						
							<img src="img/burger_mbl.png">
							
					</div>
					<div class="header_wrapper flex">
						<div class="header_menu">
							<ul>
								<li><a href="alley.php">ТРЦ Аллея</a></li>
								<li><a href="poster.php">Афиша</a></li>
								<li><a href="rent_page.php">Аренда</a></li>
								<li><a href="advertising.php">Реклама в ТРЦ</a></li>
								<li><a href="scheme.php">Схема ТРЦ</a></li>
								<li><a href="contacts.php">Контакты</a></li>
								<li><a href="vacancies.php">Вакансии</a></li>
							</ul>
						</div>
						
						<div class="header_other">
							<a href="route.php" class="how">Как добраться</a>
							<span class="time">с 10:00 до 21:00</span>
							<div class="phone">
								<div class="social">
									<ul>
										<li><a href="https://vk.com/club174507343" target="_blank"><img src="img/vk.png"></a></li><li><a href="https://www.instagram.com/alleym.ru/" target="_blank"><img src="img/insta.png"></a></li>
									</ul>
								</div>
								<a href="tel:84242777707" class="phone_link"><span><img src="img/phone.png"> 8 (4242) 77 77 07</span></a>
								<a href="#" class="user"><img src="img/user.png"></a>
								<!--<a href="personal.php" style="text-decoration:none">ЛК</a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_bottom">
			<div class="container">
				<ul class="menu_list flex">
					<li>
						<a href="all_rents.php#shops"><img src="img/menu10.png"> Магазины</a>
					</li>
					<li>
						<a href="all_rents.php#cafe"><img src="img/menu11.png"> Кафе</a>
					</li>
					<li>
						<a href="all_rents.php#services"><img src="img/menu9.png" > Услуги</a>
					</li>
					<li>
						<a href="all_rents.php#entertainments"><img src="img/menu8.png" > Развлечения</a>
					</li>
					<li>
						<a href="all_rents.php#all" class="rents_count_block" ><!--<span class="rents_count">137</span>--> ВСЕ</a>
					</li>
					<li>
						<a href="#" class="menu_show_all"><img src="img/menu12.png"> поиск арендатора</a>
					</li>
				</ul>
				<div class="hamburger-menu">
					<input id="menu__toggle" type="checkbox" />
					<label class="menu__btn" for="menu__toggle">
					<span></span>
					</label>

					<ul class="menu__box">
							<li><a class="menu__item" href="alley.php">ТРЦ Аллея</a></li>
								<li><a class="menu__item" href="poster.php">Афиша</a></li>
								<li><a class="menu__item" href="rent_page.php">Аренда</a></li>
								<li><a class="menu__item" href="advertising.php">Реклама в ТРЦ</a></li>
								<li><a class="menu__item" href="scheme.php">Схема ТРЦ</a></li>
								<li><a class="menu__item" href="contacts.php">Контакты</a></li>
								<li><a class="menu__item" href="vacancies.php">Вакансии</a></li>
					</ul>
				</div>
			</div>
		</div>
		
	</header>
	<section class="mobile_header">
		<div class="close"></div>
		<div class="header_wrapper flex">
						<div class="header_menu">
							<ul>
								<li><a href="alley.php">ТРЦ Аллея</a></li>
								<li><a href="poster.php">Афиша</a></li>
								<li><a href="rent_page.php">Аренда</a></li>
								<li><a href="advertising.php">Реклама в ТРЦ</a></li>
								<li><a href="scheme.php">Схема ТРЦ</a></li>
								<li><a href="contacts.php">Контакты</a></li>
								<li><a href="vacancies.php">Вакансии</a></li>
							</ul>
						</div>

						<div class="header_second_menu">
							<ul class="menu_list flex">
								<li>
									<a href="all_rents.php#shops"><img src="img/menu10.png"> Магазины</a>
								</li>
								<li>
									<a href="all_rents.php#cafe"><img src="img/menu11.png"> Кафе</a>
								</li>
								<li>
									<a href="all_rents.php#services"><img src="img/menu9.png"> Услуги</a>
								</li>
								<li>
									<a href="all_rents.php#entertainments"><img src="img/menu8.png"> Развлечения</a>
								</li>
								<li>
									<a href="all_rents.php#all" class="rents_count_block"><!--<span class="rents_count">137</span>--> ВСЕ</a>
								</li>
								<li>
									<a href="#" class="menu_show_all"><img src="img/menu12.png"> поиск арендатора</a>
								</li>
							</ul>
						</div>

						<div class="header_other">
							
							<span class="time">с 10:00 до 21:00</span>
							<div class="phone">
								<div class="social">
								<a href="https://www.instagram.com/alleym.ru/" target="_blank"><img src="img/insta.png"></a>
								<a href="tel:84242777707" class="phone_link">8 (4242) 77 77 07</a>
								<!--<a href="#" class="user"><img src="img/user.png"></a>-->
								</div>
								
								
							</div>
							<a href="route.php" class="how">Как добраться</a>
						</div>
					</div>

					
	</section>
