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
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  	<script>tinymce.init({selector:'.redactor textarea'});</script>

	<title>Личный кабинет | Добавить афишу - ТРЦ Аллея</title>
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
					<a href="personal-all_rents-list.php">
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 18H12V9H9V18Z" fill="#E02749"/>
<path d="M9 4H12V7H9V4Z" fill="#E02749"/>
<circle cx="11" cy="11" r="10" stroke="#E02749" stroke-width="2"/>
</svg>

						Арендаторы
					</a>
				</li>
				<li>
					<a href="personal-posters_list.php" class="active">
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
			<h1 class="title_inner" style="margin-bottom: 32px;">
				новое событие 
			</h1>
		</div>
	</section>

	<section class="personal_form event_type">
		<div class="container">
			<form>
				<div class="personal_form_wrapper flex form_rent">
					<div class="side_three ">
						<div class="side_one_wrapper">

								<div class="form_rent_title">Главное</div>
								<div class="input_wrapper flex">
									<div class="input_wrapper_name">Название</div>
									<div class="input_wrapper_input">
										<input type="text" name="" placeholder="Введите название события">
									</div>
								</div>
								<div class="form_rent_props flex">
									<div class="form_rent_props_img">
										<input type="file" name="" id="l_file">
										<label for="l_file">Загрузите<br>обложку</label>
									</div>
									<div class="form_rent_props_items">
										<div class="download_logo">
											<input type="file" name="" id="lo_file">
											<label for="lo_file">Лого</label>
										</div>
										<div class="form_rent_props_items_rent">
											<select>
												<option>Выбрать арендатора</option>
												<option>Выбрать арендатора</option>
											</select>
										</div>
										<div class="form_rent_props_items_cat2">
											<select>
												<option>Выбрать категорию</option>
												<option>ДОМ,САД,ЖИВОТНЫЕ</option>
												<option>ЕДА</option>
												<option>ОДЕЖДА И АКСЕССУАРЫ</option>
												<option>ЭЛЕКТРОННИКА И СВЯЗЬ</option>
												<option>КРАСОТА И ЗДОРОВЬЕ</option>
												<option>ДЕТЯМ</option>
											</select>
										</div>
										<div class="form_rent_props_items_status">
											<select>
												<option>Выбрать статус</option>
												<option>Актуальный</option>
												<option>Завершенный</option>
												<option>Новый</option>
											</select>
										</div>
										<div class="form_rent_props_items_date">
											<input type="text" name="date_start">
										</div>
										<div class="form_rent_props_items_site">
											<input type="text" name="" placeholder="Ссылка на внешний ресурс">
										</div>
									</div>
								</div>

						</div>
						
						
						<div class="form_rent_images">
							<div class="form_rent_title">Слайдер</div>
							<div class="form_rent_images_wrapper flex">
								<div class="form_rent_images_item">
									<img src="" style="display: none;" data-id="1">
									<input type="file" name="" id="i_file1" data-id="1">
									<label for="i_file1" data-id="1">Загрузите<br>изображение</label>
								</div>
								<div class="form_rent_images_item">
									<img src="" style="display: none;" data-id="2">
									<input type="file" name="" id="i_file2" data-id="2">
									<label for="i_file2" data-id="2">Загрузите<br>изображение</label>
								</div>
								<div class="form_rent_images_item">
									<img src="" style="display: none;" data-id="3">
									<input type="file" name="" id="i_file3" data-id="3">
									<label for="i_file3" data-id="3">Загрузите<br>изображение</label>
								</div>
								<div class="form_rent_images_item">
									<img src="" style="display: none;" data-id="4">
									<input type="file" name="" id="i_file4" data-id="4">
									<label for="i_file4" data-id="4">Загрузите<br>изображение</label>
								</div>
								<div class="form_rent_images_item">
									<img src="" style="display: none;" data-id="5">
									<input type="file" name="" id="i_file5" data-id="5">
									<label for="i_file5" data-id="5">Загрузите<br>изображение</label>
								</div>
								<div class="form_rent_images_item">
									<img src="" style="display: none;" data-id="6">
									<input type="file" name="" id="i_file6" data-id="6">
									<label for="i_file6" data-id="6">Загрузите<br>изображение</label>
								</div>
								<div class="form_rent_images_item">
									<img src="" style="display: none;" data-id="7">
									<input type="file" name="" id="i_file7" data-id="7">
									<label for="i_file7" data-id="7">Загрузите<br>изображение</label>
								</div>
								<div class="form_rent_images_item">
									<img src="" style="display: none;" data-id="8">
									<input type="file" name="" id="i_file8" data-id="8">
									<label for="i_file8" data-id="8">Загрузите<br>изображение</label>
								</div>
							</div>
						</div>
						<input type="submit" name="" value="Сохранить">
					</div>
					<div class="side_four">
						<div class="form_rent_title">Описание</div>

						<div class="form_rent_descrition">
							<div class="redactor">
								<textarea>Введите описание торговой точки. </textarea>
							</div>
						</div>

						<div class="form_rent_descrition">
							<div class="redactor">
								<textarea>Введите описание торговой точки. </textarea>
							</div>
						</div>
						
						<div class="seos">
							<div class="form_rent_title">SEO</div>
							<div class="flex">
								<div class="seo_side">
									<div class="input_wrapper">
										<p>Title</p>
										<input type="text" name="" placeholder="Введите краткое (до 6 слов) описание ">
									</div>
									<div class="input_wrapper">
										<p>Keywords</p>
										<input type="text" name="" placeholder="Введите несколько слов для поиска">
									</div>
									
									<div class="input_wrapper">
										<p>Page name</p>
										<input type="text" name="" placeholder="Введите название страницы (латиница)">
										<span>Название вашей торговой точки латинскими буквами. Например, arendator. </span>
									</div>
								</div>
								<div class="seo_side">
									<div class="input_wrapper">
										<p>Description</p>
										<textarea name="" placeholder="Введите описание подлиннее (2-3 предложения) "></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

	
	<?php include 'blocks/footer.php' ?>
	<?php include 'blocks/popup.php' ?>
</body>
</html>