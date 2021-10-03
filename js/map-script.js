//@chalma скрипты для карты

$(document).ready(function(){
    $('.map-element').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $(this).removeClass("dark");
    });
    $('.map-element').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });

    /*$('.closemodal').click(function (e) {
        e.preventDefault();
        $('#mapModal').removeClass('opened');
    });*/

    //@chalma наведение на фильтр слева
    //Мвидео
    $('.filter_value_mvideo').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.mvideo-block').removeClass("dark");
    });
    $('.filter_value_mvideo').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Симост
    $('.filter_value_simost').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.simost-block').removeClass("dark");
    });
    $('.filter_value_simost').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Панда
    $('.filter_value_panda').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.panda-block').removeClass("dark");
    });
    $('.filter_value_panda').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //BIG BEN
    $('.filter_value_big-ben').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.big-ben-block').removeClass("dark");
    });
    $('.filter_value_big-ben').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Gold and Art
    $('.filter_value_goldart').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.goldart-block').removeClass("dark");
    });
    $('.filter_value_goldart').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //МТС
    $('.filter_value_mts').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.mts-block').removeClass("dark");
    });
    $('.filter_value_mts').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Связной
    $('.filter_value_svyaznoy').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.svyaznoy-block').removeClass("dark");
    });
    $('.filter_value_svyaznoy').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Аптека
    $('.filter_value_apteka').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.apteka-block').removeClass("dark");
    });
    $('.filter_value_apteka').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Детский мир
    $('.filter_value_det-mir').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.det-mir-block').removeClass("dark");
    });
    $('.filter_value_det-mir').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Авокадо
    $('.filter_value_avocado').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.avocado-block').removeClass("dark");
    });
    $('.filter_value_avocado').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Золотая Русь
    $('.filter_value_golden-rus').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.golden-rus-block').removeClass("dark");
    });
    $('.filter_value_golden-rus').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Азия Сити
    $('.filter_value_asia-block').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.asia-block').removeClass("dark");
    });
    $('.filter_value_asia-block').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Дизайн удачи
    $('.filter_value_design').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.design-block').removeClass("dark");
    });
    $('.filter_value_design').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Ювилэнд
    $('.filter_value_yuvelend').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.yuvelend-block').removeClass("dark");
    });
    $('.filter_value_yuvelend').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });
    //Детали
    $('.filter_value_detali').on('mouseover', function() {
        $('.map-block').addClass("dark");
        $('.map-element').addClass("dark");
        $('.detali-block').removeClass("dark");
    });
    $('.filter_value_detali').on('mouseout', function() {
        $('.map-block').removeClass("dark");
        $('.map-element').removeClass("dark");
    });








    //@chalma закрыть модальное окно при клике вне области
    /*$('.modal').click(function(){
        $('#mapModal').removeClass('opened');
    });
    

    
    $("#mapModalForm").submit(function(e){
        $('.price-request').prop('disabled',true);
        var form_data = $(this).serialize(); 
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "map_send_form.php",
			data: form_data,
            success: function(data) {
				$(".mapModalResult").html("Ваши данные успешно отправлены");
                $('.price-request').prop('disabled',false);
			},
            error: function() {
                $(".mapModalResult").addClass("error");
                $(".mapModalResult").html("Произошла ошибка");
                $('.price-request').prop('disabled',false);
            }
		});
	});*/
    
})