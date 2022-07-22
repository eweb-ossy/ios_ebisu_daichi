import $ from 'jquery';

(function() {
    $('#nav_btn').on('click', function() {
        $('.header-nav').show().removeClass('close').addClass('active');
        $('.overlay').show();
    });
    $('.close-btn, .overlay').on('click', function() {
        $('.header-nav').hide().removeClass('active').addClass('close');
        $('.overlay').hide();
    });
})();