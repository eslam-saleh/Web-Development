/*global $, jQuery, console,alert ,document ,top*/


$(function () {

    'use strict';

    $(".navbar li").click(function () {

        $(this).addClass('active').siblings().removeClass('active');

    });
    
    
    
    
    // Auto Slider

    (function autoSlider() {

        $('.slide .active').each(function () {

            if (!$(this).is(':last-child')) {

                $(this).delay(3000).fadeOut(3000, function () {
                    $(this).removeClass('active').next().addClass('active').fadeIn(3000);

                    autoSlider();
                });

            } else {

                $(this).delay(3000).fadeOut(3000, function () {

                    $(this).removeClass('active');

                    $('.slide div').eq(0).addClass('active').fadeIn(3000);

                    autoSlider();

                });
            }
        });
    }());

    // MixItUp



    // Adjust Shuffle Links

    $(".shuffle li").click(function () {

        $(this).addClass('active').siblings().removeClass('active');

    });
    
    // Nice Scroll
    
    $("body").niceScroll({
        cursorcolor: "#33BAED",
        cursorwidth: "10px"
    });
});
