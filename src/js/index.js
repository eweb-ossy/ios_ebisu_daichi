import $ from 'jquery';

(function() {
    $('#nav_btn').on('click', function() {
        $('.header-nav').removeClass('close').addClass('active');
        $('.overlay').show();
    });
    $('.close-btn, .overlay').on('click', function() {
        $('.header-nav').removeClass('active').addClass('close');
        $('.overlay').hide();
    });
})();