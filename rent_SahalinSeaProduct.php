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

    <title></title>
</head>

<body>
    <!-- Header -->
    <?php include 'blocks/header.php'; ?>

    <!-- /Header -->

    <!-- Bread -->
    <section class="bread" style="padding-top: 26px;">
        <div class="container">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="all_rents.php">Все арендаторы</a></li>
                <li><a href="#">Остров Сахалин</a></li>
            </ul>
        </div>
    </section>
    <!-- /Bread -->

    <!-- Content -->

    <section class="rent_page">
        <div class="rent_page_main">
            <div class="container _anim-items _anim-no-hide">
                <img src="img1/landSahalin_Back.png">
                <!--Главная фотка-->
                <div class="rent_page_logo">
                    <img src="img1/LandSahalin_Logo.png">
                    <!--Логотип-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="rent_page_wrapper _anim-items flex">
                <div class="rent_page_desc">
                    <h1 class="rent_page_title">Остров Сахалин</h1>
                    <p>Наш магазин работает напрямую с компаниями добычи: ООО «Промфлот», ООО «Flot Marine»,ООО «ДВ Флот», ООО» Алаид», ООО «Рыбновский лосось», ООО «Оха», ООО Владимирово» и т.д., что дает нам возможность получать сертифицированные морепродукты
                        высокого качества без посредников, минуя лишние затраты. Вылов производится на Дальнем Востоке у берегов Сахалина, Курильских островов и полуострова Камчатка. Вся продукция дикого происхождения: креветки, гребешки, крабы, белорыбица,
                        лососевые.
                    </p>





                </div>
                <div class="rent_page_contacts">
                    <div class="rent_page_title">Контакты</div>
                    <p class="address">ТЦ “Аллея” г. Южно-Сахалинск, ул. Фархутдинова 3</p>
                    <p class="phone">8(4242)76-77-77</p>
                    <p class="time">с 10:00 до 21:00</p>
                </div>
            </div>
            <!--Ниже галерея картинок-->
            <section class="rent_page_gallery _anim-items">


            </section>
            <br>
            <br>
            <div class="rent_page_poster _anim-items">
                <div class="rent_page_poster_title">
                    акции, новости, события
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

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="poster_page.php">
                                <div class="poster_item">
                                    <div class="poster_item_img">
                                        <img src="img/poster_item1.png">
                                    </div>
                                    <div class="poster_properties flex">
                                        <div class="label_logo">
                                            <div class="label_logo_wrapper">
                                                <img src="img/arbat_logo.png">
                                            </div>
                                        </div>
                                        <div class="prop">
                                            <span>Мастер-класс</span>
                                            <div class="date">22 марта</div>
                                        </div>
                                    </div>
                                    <div class="poster_title">Готовим паэлью в гастромаркете</div>
                                    <div class="poster_anons">Запись на мастер-класс открыта. Звоните и записывайтесь: 8 952 858 25 52</div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="poster_page.php">
                                <div class="poster_item">
                                    <div class="poster_item_img">
                                        <img src="img/poster_item2.png">
                                    </div>
                                    <div class="poster_properties flex">
                                        <div class="label_logo">
                                            <div class="label_logo_wrapper">
                                                <img src="img/glam_logo.png">
                                            </div>
                                        </div>
                                        <div class="prop">
                                            <span>Новинка</span>
                                            <div class="date">22 августа</div>
                                        </div>
                                    </div>
                                    <div class="poster_title">Скорая помощь Вашим волосам</div>
                                    <div class="poster_anons">Весной наши волосы требуют особого ухода. В Glam Queen новинка — маска для волос...</div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="poster_page.php">
                                <div class="poster_item">
                                    <div class="poster_item_img">
                                        <img src="img/poster_item3.png">
                                    </div>
                                    <div class="poster_properties flex">
                                        <div class="label_logo">
                                            <div class="label_logo_wrapper">
                                                <img src="img/arbat_logo.png">
                                            </div>
                                        </div>
                                        <div class="prop">
                                            <span>Программа</span>
                                            <div class="date">22 августа</div>
                                        </div>
                                    </div>
                                    <div class="poster_title">Держи 5 фотоотчет</div>
                                    <div class="poster_anons">Интеллектуальные игры для детей квиз «Держи 5» прошли весело! Вдоволь.... </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="poster_page.php">
                                <div class="poster_item">
                                    <div class="poster_item_img">
                                        <img src="img/poster_item4.png">
                                    </div>
                                    <div class="poster_properties flex">
                                        <div class="label_logo">
                                            <div class="label_logo_wrapper">
                                                <img src="img/burbon_logo.png">
                                            </div>
                                        </div>
                                        <div class="prop">
                                            <span>Новинка</span>
                                            <div class="date">11 апреля</div>
                                        </div>
                                    </div>
                                    <div class="poster_title">Кофе в турке на песке</div>
                                    <div class="poster_anons">Вы когда-нибудь пробовали кофе, сваренный в турке на песке? Этот изумительный напиток... </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="poster_page.php">
                                <div class="poster_item">
                                    <div class="poster_item_img">
                                        <img src="img/poster_item1.png">
                                    </div>
                                    <div class="poster_properties flex">
                                        <div class="label_logo">
                                            <div class="label_logo_wrapper">
                                                <img src="img/arbat_logo.png">
                                            </div>
                                        </div>
                                        <div class="prop">
                                            <span>Мастер-класс</span>
                                            <div class="date">22 марта</div>
                                        </div>
                                    </div>
                                    <div class="poster_title">Готовим паэлью в гастромаркете</div>
                                    <div class="poster_anons">Запись на мастер-класс открыта. Звоните и записывайтесь: 8 952 858 25 52</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- /Content -->

 <!-- Footer -->
 <?php include 'blocks/footer.php' ?>
 <!-- /Footer -->
 <!-- Modals -->
 <?php include 'blocks/popup.php' ?>
</body>

</html>