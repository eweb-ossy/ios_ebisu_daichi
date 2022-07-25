import $ from 'jquery';

(function() {
    function disableScroll(event) {
        event.preventDefault();
    }
    $('#nav_btn').on('click', function() {
        $('.header-nav').show().removeClass('close').addClass('active');
        $('.overlay').show();
        $('.header').addClass('active');
        document.addEventListener('touchmove', disableScroll, { passive: false });
        document.addEventListener('mousewheel', disableScroll, { passive: false });
    });
    $('.close-btn, .overlay').on('click', function() {
        $('.header-nav').hide().removeClass('active').addClass('close');
        $('.overlay').hide();
        $('.header').removeClass('active');
        document.removeEventListener('touchmove', disableScroll, { passive: false });
        document.removeEventListener('mousewheel', disableScroll, { passive: false });
    });

    // scroll 
    let position;
    $(window).on('scroll', function() {
        position = $(this).scrollTop();
        if (position > 0) {
            $('.header').addClass('fixed');
        } else {
            $('.header').removeClass('fixed');
        }
    });
})();