/*global $, jQuery, console,alert ,document ,top*/


$(function () {

    'use strict';

    // Nice Scroll

    $("body").niceScroll({
        cursorcolor: '#33BAED',
        cursorwidth: "10px"
    });

    var myHeader = $('.header');

    myHeader.height($(window).height());

    $(window).resize(function () {
        myHeader.height($(window).height());
    });

    $('.header .hire').click(function () {
        $('html , body').animate({
            scrollTop: $('.our-team').offset().top
        }, 1000);
    });
    $('.header .works').click(function () {
        $('html , body').animate({
            scrollTop: $('.ourWork').offset().top
        }, 1000);
    });


    $('.header .arrow i').click(function () {
        $('html , body').animate({
            scrollTop: $('.features').offset().top
        }, 1000);

    });

    /*
        $('.show').click(function () {
            $('.ourWork .hidden').fadeIn(1000);
        });
    */


    //this will execute on page load(to be more specific when document ready event occurs)
    if ($('.item').length > 5) {
        $('.item:gt(5)').hide();
        $('.show').show();
    }
    $('.show').on('click', function () {
        //toggle elements with class .ty-compact-list that their index is bigger than 5
        $('.item:gt(5)').slideToggle("fast");
        //change text of show more element just for demonstration purposes to this demo
        $(this).text() === 'Show More' ? $(this).text('Show Less') : $(this).text('Show More');
    });

    var leftArrow = $('.testim .fa-angle-left'),
        rightArrow = $('.testim .fa-angle-right');

    function checkClients() {
        if ($('.client:first').hasClass('active')) {
            leftArrow.fadeOut();
        } else {
            leftArrow.fadeIn();
        }
        if ($('.client:last').hasClass('active')) {
            rightArrow.fadeOut();
        } else {
            rightArrow.fadeIn();
        }

    }

    checkClients();


    $('.testim i').click(function () {
        if ($(this).hasClass('fa-angle-right')) {
            $('.testim .active').fadeOut(100, function () {
                $(this).removeClass('active').next('.client').addClass('active').fadeIn();
                checkClients();

            });
        } else {
            $('.testim .active').fadeOut(100, function () {
                $(this).removeClass('active').prev('.client').addClass('active').fadeIn();
                checkClients();

            });

        }



    });









});
