/*global $, jQuery, console,alert ,document ,top*/


$(function () {

    'use strict';

    $(".navbar li").click(function () {

        $(this).addClass('active').siblings().removeClass('active');

    });
    
    
    var myHeader = $('.header'),
        mySlider = $('.slider');
 
    myHeader.height($(window).height());

    $(window).resize(function () {
        myHeader.height($(window).height());

        mySlider.each(function () {
            $(this).css('padding-top', ($(window).height() - $('.slider li').height()) / 2);
        });
    });

    $('.links li a').click(function () {
        $(this).parent().addClass('active').siblings().removeClass('active');
    });
    mySlider.each(function () {
        $(this).css('padding-top', ($(window).height() - $('.slider li').height()) / 2);
    });

    mySlider.bxSlider({
        pager: false
    });

    $('.links li a').on("click", function () {
        $('html,body').animate({
            scrollTop: $('#' + $(this).data('value')).offset().top

        }, 1000);

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


    // Trigger MixItUp

    $('#Container').mixItUp();

    // Adjust Shuffle Links

    $(".shuffle li").click(function () {

        $(this).addClass('active').siblings().removeClass('active');

    });
    
    // Nice Scroll
    
    $("body").niceScroll({
        cursorcolor: "#1ABC9A",
        cursorwidth: "10px"
    });
});
