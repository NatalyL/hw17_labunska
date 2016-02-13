$(function () {
    $('#menu a[href^="#"]').click(function(e){
        e.preventDefault();
        var destination = $($(this).attr('href')).offset().top;
        $('html, body').animate({scrollTop: destination}, 'slow');
    });
//burger

    $('.nav-btn').on('click', (function(e) {
        e.preventDefault();
        $('#menu').slideToggle('fast', function() {
            $('#menu').toggleClass('mobile-down').css('display', '');
        });
    }));

    //sub-menu

    $('.main-nav > ul > li > a').on('click', (function(e) {
        e.preventDefault();
        if ($(window).width() <= 979) {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                $(this).next().slideUp();
            } else {
                $('.main-nav > ul > li > a').removeClass('selected');
                $(this).addClass('selected');
                $('.main-nav .sub-menu').slideUp();
                $(this).next().slideDown();
            }
        }
    }));

});