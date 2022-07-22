import $ from 'jquery';

(function() {
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
    });s
})();