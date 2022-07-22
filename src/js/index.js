import $ from 'jquery';
import 'slick-carousel';
import Rellax from 'rellax';
require('jquery-inview');

(function() {
    $('#nav_btn').on('click', function() {
        $('.header-nav').show().removeClass('close').addClass('active');
        $('.overlay').show();
    });
    $('.close-btn, .overlay').on('click', function() {
        $('.header-nav').hide().removeClass('active').addClass('close');
        $('.overlay').hide();
    });

    $('.slider').slick({
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 15000,
        cssEase: 'linear',
        speed: 600,
        pauseOnFocus: false,
        pauseOnHover: false,
        dots: false,
    });
    $('.slider').on('beforeChange', function() {
        $('.fadein-mv').fadeOut();
    });
    $('.slider').on('afterChange', function() {
        $('.fadein-mv').fadeIn();
    });

 
    function getWindowWidth() {
        return $(window).width();
    }
    let windowWidth = getWindowWidth();
    if (windowWidth > 1440) {
        let rellax = new Rellax('.parallax', {
            center: true,
        });
    }

    // 
    $('.fadein').on('inview', function(event, isInView) {
        if (isInView) {
            $(this).addClass('is-animated');
        }
    });

})();