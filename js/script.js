$(document).ready(function(){
	//@chalma анимация выплывания
	const animItems = document.querySelectorAll('._anim-items');
	if (animItems.length > 0) {
		window.addEventListener('scroll', animOnScroll);
		function animOnScroll() {
			for (let index=0; index < animItems.length; index++) {
				const animItem = animItems[index];
				const animItemHeight = animItem.offsetHeight;
				const animItemOffset = offset(animItem).top;
				const animStart = 5;

				let animItemPoint = window.innerHeight - animItemHeight / animStart;
				if(animItemHeight > window.innerHeight) {
					animItemPoint = window.innerHeight - window.innerHeight / animStart;
				}

				if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
					animItem.classList.add('_active');
				} else {

					
				}
			}
		}
		function offset(el) {
			const rect = el.getBoundingClientRect(),
				scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
				scrollTop = window.pageYOffset || document.documentElement.scrollTop;
			return {top: rect.top + scrollTop, left: rect.left + screenLeft}
		}	
		animOnScroll();
	}

	

	$('#popup-search form').attr('action','all_rents.html');

	//$('.arent_page .alley .bread').hide();
	$('.arent_page .alley .play').hide();
	$('.arent_page .alley video').show();
	$('.arent_page .alley .opacity').show();

	if(typeof($('#alley_video').html()) !='undefined'){
		$('#alley_video').get(0).play();
	}

	const menuBtn = $('.trig'), menu = $('.dates');

	menuBtn.on('click', function() {
	    $('.dates').toggleClass('active');
	});

	$('.links a').on( 'click', function(){ 
	    var el = $(this);
	    var dest = el.attr('href'); // получаем направление
	    if(dest !== undefined && dest !== '') { // проверяем существование
	        $('html').animate({ 
	    	    scrollTop: $(dest).offset().top // прокручиваем страницу к требуемому элементу
	        }, 500 // скорость прокрутки
	        );
	    }
	    return false;
	});

	$('.poster_line a').on( 'click', function(){ 
	    var el = $(this);
	    var dest = el.attr('href'); // получаем направление
	    if(dest !== undefined && dest !== '') { // проверяем существование
	        $('html').animate({ 
	    	    scrollTop: $(dest).offset().top // прокручиваем страницу к требуемому элементу
	        }, 500 // скорость прокрутки
	        );
	    }
	    return false;
	});

	$(document).click(function (e) {
	    if ( !menuBtn.is(e.target) && !menu.is(e.target) && menu.has(e.target).length === 0) {
	        $('.dates').removeClass('active');
	    };
	});

	if(screen.width > 768){
		$(".header").sticky({topSpacing:0});
	}

	$('input[name="phone"]').inputmask({"mask": "+7 (999) 999-99-99"});
	$('input[name="E-mail"]').inputmask({
	    mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
	    greedy: false,
	    onBeforePaste: function (pastedValue, opts) {
	      pastedValue = pastedValue.toLowerCase();
	      return pastedValue.replace("mailto:", "");
	    },
	    definitions: {
	      '*': {
	        validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
	        cardinality: 1,
	        casing: "lower"
	      }
	    }
	  });

	

	$.datepicker.setDefaults(
                {
                closeText: 'Закрыть',
                prevText: '',
                currentText: 'Сегодня',
                monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
                    'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
                    'Июл','Авг','Сен','Окт','Ноя','Дек'],
                dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
                dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
                dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
                weekHeader: 'Не',
                dateFormat: 'dd.mm.yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
            });

	$( "input[name='date_start']" ).datepicker();
	$( "input[name='date_finish']" ).datepicker();

	function formatDate(date) {

	  var dd = date.getDate();
	  if (dd < 10) dd = '0' + dd;

	  var mm = date.getMonth() + 1;
	  if (mm < 10) mm = '0' + mm;

	  //var yy = date.getFullYear() % 100;
	  var yy = date.getFullYear();
	  //if (yy < 10) yy = '0' + yy;

	  //console.log(date.getFullYear());

	  return dd + '.' + mm + '.' + yy;
	}

	var d = new Date();
	$( "input[name='date_start']" ).val(formatDate(d));

	$('.q_a_item_title').click(function(){

		$('.q_a_item_content').hide();
		$(this).closest('.q_a_item').find('.q_a_item_content').show();

	})

	const swiper = new Swiper('.inside .swiper-container', {
		  loop: false,
		  breakpoints: {
		    // when window width is >= 480px
		    768: {
		      slidesPerView: 1,
		    },
		    1025: {
		      slidesPerView: 1,
		    },
		  },

		  // Navigation arrows
		  navigation: {
		    nextEl: '.swiper-button-inside-next',
		    prevEl: '.swiper-button-inside-prev',
		  },
		  autoplay: {
			   delay: 3000,
			 },
			 pagination: {
	          el: ".swiper-pagination",
	          clickable: true,
	        },

		});

	const swiper99 = new Swiper('.promo .swiper-container', {
		  loop: false,
		  breakpoints: {
		    // when window width is >= 480px
		    768: {
		      slidesPerView: 1,
		    },
		    1025: {
		      slidesPerView: 1,
		    },
		  },

		  // Navigation arrows
		  navigation: {
		    nextEl: '.swiper-button-promo-next',
		    prevEl: '.swiper-button-promo-prev',
		  },
		  autoplay: {
			   delay: 3000,
			 },
			 pagination: {
	          el: ".swiper-pagination",
	          clickable: true,
	        },

		});

	const swiper2 = new Swiper('.rent_page_poster .swiper-container', {
		  loop: false,
		  breakpoints: {
		    // when window width is >= 480px
		    768: {
		      slidesPerView: 2,
		      spaceBetween: 15,
		    },
		    992: {
		      slidesPerView: 3,
		      spaceBetween: 15,
		    },
		    1025: {
		      slidesPerView: 4,
		      spaceBetween: 15,
		    },
		  },

		  // Navigation arrows
		  navigation: {
		    nextEl: '.swiper-button-rent-next',
		    prevEl: '.swiper-button-rent-prev',
		  },

		});

	const swiperThumbs = new Swiper('.poster_page_photos_thumbs .swiper-container', {
		  loop: true,
		  breakpoints: {
		    // when window width is >= 480px
		    768: {
		      slidesPerView: 2,
		      spaceBetween: 15,
		    },
		    1025: {
		      slidesPerView: 4,
		      spaceBetween: 15,
		    },
		  },

		  // Navigation arrows
		  navigation: {
		    nextEl: '.swiper-button-thumb-next',
		    prevEl: '.swiper-button-thumb-prev',
		  },

		});

	const swiper3 = new Swiper('.poster_page_photos_wrapper .swiper-container', {
		  loop: true,
		  breakpoints: {
		    // when window width is >= 480px
		    768: {
		      slidesPerView: 1,
		    },
		    1025: {
		      slidesPerView: 1,
		    },
		  },

		  // Navigation arrows
		  thumbs: {
	          swiper: swiperThumbs,
	        },

		});


	const swiper4 = new Swiper('.gallery_slider_item .swiper-container', {
		  loop: false,
		  breakpoints: {
		    // when window width is >= 480px
		    768: {
		      slidesPerView: 1,
		    },
		    1025: {
		      slidesPerView: 1,
		    },
		  },

		  navigation: {
		    nextEl: '.swiper-button-gal-next',
		    prevEl: '.swiper-button-gal-prev',
		  },
		  autoplay: {
			   delay: 3000,
			 },

		});

	const swiper5 = new Swiper('.side_transport_slider .swiper-container', {
		  loop: false,
		  breakpoints: {
		    // when window width is >= 480px
		    768: {
		      slidesPerView: 1,
		    },
		    1025: {
		      slidesPerView: 1,
		    },
		  },

		  navigation: {
		    nextEl: '.swiper-button-transport-next',
		    prevEl: '.swiper-button-transport-prev',
		  },

		});

	const swiper6 = new Swiper('.events .swiper-container', {
		  loop: false,
		  autoHeiht: true,
		  breakpoints: {
		    // when window width is >= 480px
		    768: {
		      slidesPerView: 1,
		    },
		    1025: {
		      slidesPerView: 1,
		    },
		  },

		  /*pagination: {
	          el: ".swiper-pagination",
	          clickable: true,
	        },*/
	        autoplay: {
			   delay: 5000,
			 },

		});

	/*const swiper666 = new Swiper('.events2 .swiper-container', {
		  loop: false,
		  breakpoints: {

		    768: {
		      slidesPerView: 1,
		    },
		    1025: {
		      slidesPerView: 1,
		    },
		  },

		  
	        autoplay: {
			   delay: 3000,
			 },

		});*/

	/*swiper6.on('slideChangeTransitionStart', function (index) {
		var ind = index.activeIndex;
		swiper666.slideTo(ind);
	});

	swiper666.on('slideChangeTransitionStart', function (index) {
		var ind = index.activeIndex;
		swiper6.slideTo(ind);
	});*/

	const swiper7 = new Swiper('.alley .swiper-container', {
		  loop: false,
		  breakpoints: {
		    // when window width is >= 480px
		    768: {
		      slidesPerView: 1,
		    },
		    1025: {
		      slidesPerView: 1,
		    },
		  },

		  navigation: {
		    nextEl: '.swiper-button-alley-next',
		    prevEl: '.swiper-button-alley-prev',
		  },
		  autoplay: {
			   delay: 3000,
			 },
			 pagination: {
	          el: ".swiper-pagination",
	          clickable: true,
	        },

		});


	const swiper8 = new Swiper('#popup-price .swiper-container', {
		  loop: false,
		   init: false,
		  breakpoints: {
		    // when window width is >= 480px
		    768: {
		      slidesPerView: 1,
		    },
		    1025: {
		      slidesPerView: 1,
		    },
		  },

		  pagination: {
	          el: ".swiper-pagination",
	          clickable: true,
	        },

		});

		const swiper9 = new Swiper('.gastromarket .swiper-container', {
			loop: false,
			breakpoints: {
			  // when window width is >= 480px
			  768: {
				slidesPerView: 1,
			  },
			  1025: {
				slidesPerView: 1,
			  },
			},
  
			navigation: {
			  nextEl: '.swiper-button-gastromarket-next',
			  prevEl: '.swiper-button-gastromarket-prev',
			},
			autoplay: {
				 delay: 3000,
			   },
			   pagination: {
				el: ".swiper-pagination",
				clickable: true,
			  },
  
		  });
	
	$('#popup-masterclass').dialog({
	    autoOpen: false,
	    modal: true,
	    resizable: false,
	    draggable: false,
	    width: 484,
	    show: { effect: "fade", duration: 400 },
	    hide: { effect: "fade", duration: 400 },
	    dialogClass: '',
	    title: '',
	    open: function(event, ui) {
	        $('.ui-widget-overlay').on('click', function() {
	          $('#popup-masterclass').dialog('close');
	        });
	    }
	})

	$('#popup-guestCard').dialog({
	    autoOpen: false,
	    modal: true,
	    resizable: false,
	    draggable: false,
	    width: 484,
	    show: { effect: "fade", duration: 400 },
	    hide: { effect: "fade", duration: 400 },
	    dialogClass: '',
	    title: '',
	    open: function(event, ui) {
	        $('.ui-widget-overlay').on('click', function() {
	          $('#popup-guestCard').dialog('close');
	        });
	    }
	})

	$('#popup-lk').dialog({
	    autoOpen: false,
	    modal: true,
	    resizable: false,
	    draggable: false,
	    width: 352,
	    show: { effect: "fade", duration: 400 },
	    hide: { effect: "fade", duration: 400 },
	    dialogClass: '',
	    title: '',
	    open: function(event, ui) {
	        $('.ui-widget-overlay').on('click', function() {
	          $('#popup-lk').dialog('close');
	        });
	    }
	})

	$('#popup-cropper').dialog({
	    autoOpen: false,
	    modal: true,
	    resizable: false,
	    draggable: false,
	    width: 352,
	    show: { effect: "fade", duration: 400 },
	    hide: { effect: "fade", duration: 400 },
	    dialogClass: '',
	    title: '',
	    open: function(event, ui) {
	        $('.ui-widget-overlay').on('click', function() {
	          $('#popup-cropper').dialog('close');
	        });
	    }
	})

	$('#popup-lk2').dialog({
	    autoOpen: false,
	    modal: true,
	    resizable: false,
	    draggable: false,
	    width: 352,
	    show: { effect: "fade", duration: 400 },
	    hide: { effect: "fade", duration: 400 },
	    dialogClass: '',
	    title: '',
	    open: function(event, ui) {
	        $('.ui-widget-overlay').on('click', function() {
	          $('#popup-lk2').dialog('close');
	        });
	    }
	})

	$('#popup-search').dialog({
	    autoOpen: false,
	    modal: true,
	    resizable: false,
	    draggable: false,
	    width: 608,
	    show: { effect: "fade", duration: 400 },
	    hide: { effect: "fade", duration: 400 },
	    dialogClass: '',
	    title: '',
	    open: function(event, ui) {
	        $('.ui-widget-overlay').on('click', function() {
	          $('#popup-search').dialog('close');
	        });
	    }
	})

	$('#popup-price').dialog({
	    autoOpen: false,
	    modal: true,
	    resizable: false,
	    draggable: false,
	    width: 880,
	    show: { effect: "fade", duration: 400 },
	    hide: { effect: "fade", duration: 400 },
	    dialogClass: '',
	    title: '',
	    open: function(event, ui) {
	        $('.ui-widget-overlay').on('click', function() {
	          $('#popup-price').dialog('close');
	        });
	    }
	})

	$('#popup-callback').dialog({
	    autoOpen: false,
	    modal: true,
	    resizable: false,
	    draggable: false,
	    width: 484,
	    show: { effect: "fade", duration: 400 },
	    hide: { effect: "fade", duration: 400 },
	    dialogClass: '',
	    title: '',
	    open: function(event, ui) {
	        $('.ui-widget-overlay').on('click', function() {
	          $('#popup-callback').dialog('close');
	        });
	    }
	})

	$('#popup-card').dialog({
	    autoOpen: false,
	    modal: true,
	    resizable: false,
	    draggable: false,
	    width: 484,
	    show: { effect: "fade", duration: 400 },
	    hide: { effect: "fade", duration: 400 },
	    dialogClass: '',
	    title: '',
	    open: function(event, ui) {
	        $('.ui-widget-overlay').on('click', function() {
	          $('#popup-card').dialog('close');
	        });
	    }
	})

	$('#popup-article').dialog({
	    autoOpen: false,
	    modal: true,
	    resizable: false,
	    draggable: false,
	    width: 880,
	    show: { effect: "fade", duration: 400 },
	    hide: { effect: "fade", duration: 400 },
	    dialogClass: '',
	    title: '',
	    open: function(event, ui) {
	        $('.ui-widget-overlay').on('click', function() {
	          $('#popup-article').dialog('close');
	        });
	    }
	})

	$('.avtar_info_img').click(function(){
		$('#popup-cropper').dialog('open');
	})

	$('.ava').click(function(){
		$('#popup-cropper').dialog('open');
	})

	

	$('.poster_page_content .buttons a').on('click', function(e) {
		e.preventDefault();
        $('#popup-masterclass').dialog('open');
    })

    $('.press_item_link a').on('click', function(e) {
		e.preventDefault();
        $('#popup-article').dialog('open');
    })
	$('.get_card').on('click', function(e) {
		e.preventDefault();
        $('#popup-guestCard').dialog('open');
    })


    $('.search_filter').on('click', function(e) {
		e.preventDefault();
        $('#popup-search').dialog('open');
    })

    $('.menu_show_all').on('click', function(e) {
		e.preventDefault();
        $('#popup-search').dialog('open');
    })

    $('.get_card').on('click', function(e) {
		e.preventDefault();
        $('#popup-card').dialog('open');
    })
    

    $('.user').on('click', function(e) {
		e.preventDefault();
        $('#popup-lk').dialog('open');
        
    })

    $('.ui-dialog[aria-describedby="popup-lk"] .ui-button').on('click', function(e) {
    	$('#popup-lk').dialog('close');
    	//$('#popup-lk2').dialog('open');
    })

    $('.popup-tabs a').click(function(e){
    	e.preventDefault();

    	var id = $(this).attr('data-id');

    	$('.popup-tabs a').removeClass('active');
    	$(this).addClass('active');

    	$('#popup-lk form').hide();

    	$('#popup-lk form[data-id="'+id+'"]').show();

    	if(id == '1'){
    		$(this).closest('.ui-dialog').attr('aria-describedby','popup-lk');
    	}else{
    		$(this).closest('.ui-dialog').attr('aria-describedby','popup-lk2');
    	}

    })

	$('.vacancies_page .button a').on('click', function(e) {
		e.preventDefault();
        $('#popup-callback').dialog('open');
    })
    
    $('.arent_page_main .buttons .but').on('click', function(e) {
		e.preventDefault();
        $('#popup-price').dialog('open');
        swiper8.init();
    })

    $('.scheme img').on('click', function(e) {
		e.preventDefault();
        $('#popup-price').dialog('open');
        swiper8.init();
    })

	/*$('.map-element').on('click', function(e) {
		e.preventDefault();
        $('#popup-price').dialog('open');
        swiper8.init();
    })*/

    $('.buttons .but').on('click', function(e) {
		e.preventDefault();
        $('#popup-callback').dialog('open');
        swiper8.init();
    })

    $('.masterclass input[type="submit"]').click(function(e){
    	e.preventDefault();
    	$('#popup-masterclass .title').text('Заявка принята');
    	$('#popup-masterclass form').hide();
    	$('#popup-masterclass .thanks').show();
    })

    $('.vacan input[type="submit"]').click(function(e){
    	e.preventDefault();

    	var name = $('.vacan input[name="name"]').val();
    	var phone = $('.vacan input[name="phone"]').val();
    	var valid = true;

    	

    	if(name == '' || name == ' '){
    		valid = false;
    		$('.vacan input[name="name"]').addClass('err');
    	}

    	if(phone == '' || phone == ' '){
    		valid = false;
    		$('.vacan input[name="phone"]').addClass('err');
    	}

    	if(valid){
    		$('#popup-masterclass .title').html('Ваша заявка отправлена.<br>Спасибо.<br>Мы свяжемся с вами<br> в ближайшее время.');
    		$('#popup-masterclass form').hide();

			$('#popup-guestCard .title').html('Ваша заявка отправлена.<br>Спасибо.<br>Мы свяжемся с вами<br> в ближайшее время.');
    		$('#popup-guestCard form').hide();

    		$('#popup-price .title').html('Ваша заявка отправлена.<br>Спасибо.<br>Мы свяжемся с вами<br> в ближайшее время.');
    		$('#popup-price form').hide();
    		$('#popup-price .subtitle').hide();
    	}
    	
    })

    $('.price input[type="submit"]').click(function(e){
    	e.preventDefault();

    	var name = $('.price input[name="login"]').val();
    	var pass = $('.price input[name="pass"]').val();
    	var valid = true;

    	

    	if(name == '' || name == ' '){
    		valid = false;
    		$('.price input[name="login"]').addClass('err');
    	}

    	if(pass == '' || pass == ' '){
    		valid = false;
    		$('.price input[name="pass"]').addClass('err');
    	} 	
    	
    })

    $('#popup-lk form[data-id="1"] p').html('<a href="" class="frgt">Забыли пароль?</a>');

    $(document).on('click','.frgt',function(e){
    	e.preventDefault();
    	$('#popup-lk .title').text('Забыли пароль');
    	$('#popup-lk form').html('<div class="input_wrapper"><input type="text" name="forg" placeholder="название арендатора"><span class="label_err">Введите название арендатора</span></div><div style="text-align: center;"><a href="" class="recover_access">Восстановить доступ</a></div>');
    })

    $(document).on('click','.recover_access',function(e){
    	e.preventDefault();
    	var recover = $('input[name="forg"]').val();

    	if(recover == '' || recover == ' '){
    		$('input[name="forg"]').addClass('err');
    	}else{
    		$('#popup-lk form').html('<p>Письмо о смене пароля от личного кабинета Дизайн удачи отправлено на  Dizainudachy@bk.ru</p><p style="text-decoration: underline;">Нет доступа к почтовому ящику, указанному в договоре?</p>');
    	}
    })
    

    $('input').click(function(){
    	$(this).removeClass('err');
    })

    $('.price input[type="submit"]').click(function(e){
    	e.preventDefault();
    	$('#popup-price .title').text('Заявка принята');
    	$('#popup-price form').hide();
    	$('#popup-price .subtitle').html('Наш менеджер свяжется <br>с Вами в течение рабочего дня');
    })

    $('.burger').click(function(){
    	$('.mobile_header').show();
	})
    $('.mobile_header .close').click(function(){

    	$('.mobile_header').hide();

    })

    $('.main_videos_live_item').click(function(){
    	var id = $(this).data('id');
    	$('.main .main_video').hide();
    	$('.main .main_video[data-id="'+id+'"]').show();
    })

    $('.about .tabs a').click(function(e){
    	e.preventDefault();
    	var id = $(this).data('id');
    	$('.about .tabs_content_item').hide();
    	$('.about .tabs_content_item[data-id="'+id+'"]').show();

    	$('.about .tabs a').removeClass('active');
    	$(this).addClass('active');
    })

    $('.advantage .side').click(function(e){
    	e.preventDefault();
    	var id = $(this).data('id');
    	$('.advantage .tabs_content_item').hide();
    	$('.advantage .tabs_content_item[data-id="'+id+'"]').show();

    	$('.advantage .side').removeClass('active');
    	$(this).addClass('active');
    })

    $('.outdoor .tabs a').click(function(e){
    	e.preventDefault();
    	var id = $(this).data('id');
    	$('.outdoor .tabs_content_item').hide();
    	$('.outdoor .tabs_content_item[data-id="'+id+'"]').show();

    	$('.outdoor .tabs a').removeClass('active');
    	$(this).addClass('active');
    })


    $('.play').click(function(){
    	$(this).closest('div').find('img').hide();
    	$(this).closest('div').find('video').show();
    	$(this).closest('div').find('.video_poster_part').hide();

    	if($(this).closest('div').hasClass('about_videos')){
    		$(this).closest('div').find('video').get(0).play();
    	}

    	
    })

    /*$('.trig').click(function(){
    	$('.dates').toggleClass('active');
    })*/

    $('.one_part_item').click(function(){
    	$(this).toggleClass('open');
    })

    $('.show_contacts').click(function(e){
    	e.preventDefault();
    	$('.for_hide').hide();
    	$('.show_contacts').show();
    	$('.send_msg').hide();
    	$(this).closest('.managers_item_side').find('p').show();
    	$(this).closest('.managers_item_side').find('.send_msg').show();
    	$(this).hide();
    })

    $('.send_msg').click(function(e){
    	e.preventDefault();
    	$('#popup-callback').dialog('open');
    })

    $('.get_rent').click(function(e){
    	e.preventDefault();
    	$('#popup-callback').dialog('open');
    })

    $('.filter .category_name').click(function(){

    	$(this).closest('.category').addClass('open');

    })

    $('.filter .category ul li a.filter_parrent').click(function(e){
    	e.preventDefault();
    	$(this).closest('li').find('.category_content').toggleClass('active');
    	$(this).toggleClass('open');
    })

    $('.audio_list_item').click(function(){

    	var id = $(this).attr('data-id');

    	$(this).find('div').hide();
    	$(this).find('img').hide();
    	$('audio[data-id="'+id+'"]').addClass('active');

    })

    var $image = $('#image');

	$image.cropper({
	  aspectRatio: 4 / 3,
	  viewMode: 3,
	  minCanvasHeight: 250,
	  minCanvasWidth: 250,
	  minContainerWidth: 250,
	  minContainerHeight: 250,
	  crop: function(event) {
	    console.log(event.detail.x);
	    console.log(event.detail.y);
	    console.log(event.detail.width);
	    console.log(event.detail.height);
	    console.log(event.detail.rotate);
	    console.log(event.detail.scaleX);
	    console.log(event.detail.scaleY);
	  }
	});

	// Get the Cropper.js instance after initialized
	var cropper = $image.data('cropper');

    var imagesList = $('.form_rent_slider_item');
    var imagesList2 = $('.form_rent_images_item');

    $('.form_rent_slider_item input[type="file"]').on('change', function () {
         var files = this.files;
         var id = $(this).data('id');
 
         for (var i = 0; i < files.length; i++) {
             var file = files[i];
 
             preview(files[i],id);
         }
 
         this.value = '';
     });

    function preview(file,idq) {
         var reader = new FileReader();
         var queue = '';
         reader.addEventListener('load', function(event) {
 
             imagesList.find('img[data-id="'+idq+'"]').attr('src', event.target.result);
             imagesList.find('img[data-id="'+idq+'"]').show();
             imagesList.find('label[data-id="'+idq+'"]').hide();
 
         });
         reader.readAsDataURL(file);

     }

     $('.form_rent_images_item input[type="file"]').on('change', function () {
         var files = this.files;
         var id = $(this).data('id');
 
         for (var i = 0; i < files.length; i++) {
             var file = files[i];
 
             preview2(files[i],id);
         }
 
         this.value = '';
     });

    function preview2(file,idq) {
         var reader = new FileReader();
         var queue = '';
         reader.addEventListener('load', function(event) {
 
             imagesList2.find('img[data-id="'+idq+'"]').attr('src', event.target.result);
             imagesList2.find('img[data-id="'+idq+'"]').show();
             imagesList2.find('label[data-id="'+idq+'"]').hide();
 
         });
         reader.readAsDataURL(file);

     }

    var dropZone = $('label[for="file"]'),
        maxFileSize = 1000000; // максимальный размер файла - 1 мб.

        dropZone[0].ondragover = function() {
		    dropZone.addClass('hover');
		    return false;
		};
		    
		dropZone[0].ondragleave = function() {
		    dropZone.removeClass('hover');
		    return false;
		};

		dropZone[0].ondrop = function(event) {
		    event.preventDefault();
		    dropZone.removeClass('hover');
		    

		    var file = event.dataTransfer.files[0];
        
			if (file.size > maxFileSize) {
			    dropZone.text('Файл слишком большой!');
			    dropZone.addClass('err');
			    return false;
			}else{
				dropZone.text('Файл загружен!');
				dropZone.addClass('drop');
			}
		};

	//@chalma фильтр арендаторов
	const filterBox = document.querySelectorAll('.all_rents_page_item');

	document.querySelector('.categories').addEventListener('click', (event) => {

		if (event.target.tagName !== 'LI') return false;
		let filterClass = event.target.dataset['f'];

		filterBox.forEach(elem => {
			elem.classList.remove('hide');
			if (!elem.classList.contains(filterClass) && filterClass !== 'all') {
				elem.classList.add('hide');
			}
		});

	});	

})