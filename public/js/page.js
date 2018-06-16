$(function() {
    $(window).on('scroll', function () {

        if($(this).scrollTop()) {
            $('nav').addClass('black');
        }
        else {
            $('nav').removeClass('black');
        }
    });
});