import $ from 'jquery';
import 'slick-carousel';
import Rellax from 'rellax';
require('jquery-inview');

(function() {

    if (typeof EventTarget !== 'undefined') {
        let supportsPassive = false;
        try {
          // Test via a getter in the options object to see if the passive property is accessed
          const opts = Object.defineProperty({}, 'passive', {
            get: () => {
              supportsPassive = true;
            },
          });
          window.addEventListener('testPassive', null, opts);
          window.removeEventListener('testPassive', null, opts);
        } catch (e) {}
        const func = EventTarget.prototype.addEventListener;
        EventTarget.prototype.addEventListener = function (type, fn) {
          this.func = func;
          this.func(type, fn, supportsPassive ? { passive: false } : false);
        };
    }
    
    function disableScroll(event) {
        event.preventDefault();
    }
    $('#nav_btn').on('click', function() {
        $('.header-nav').show().removeClass('close').addClass('active');
        $('.overlay').show();
        document.addEventListener('touchmove', disableScroll, { passive: false });
        document.addEventListener('mousewheel', disableScroll, { passive: false });
    });
    $('.close-btn, .overlay').on('click', function() {
        $('.header-nav').hide().removeClass('active').addClass('close');
        $('.overlay').hide();
        document.removeEventListener('touchmove', disableScroll, { passive: false });
        document.removeEventListener('mousewheel', disableScroll, { passive: false });
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