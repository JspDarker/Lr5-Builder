$(function() {

    let $windows = $(window);

    $windows.on('scroll',function() {

        if ($(this).scrollTop()) {

            $('nav#menu').addClass('back-g');

        } else {
            $('nav#menu').removeClass('back-g');
        }

    });


    //Hover::drop-down

    $('.list-parent').on('mouseenter', function () {

        $(this).find('ul.level-1').addClass('display-drop-down')

    });

    $('.list-parent ul.level-1').on('mouseleave', function () {

        $(this).removeClass('display-drop-down')

    });








});

