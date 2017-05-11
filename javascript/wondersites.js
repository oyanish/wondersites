$(document).ready(function(){
    $('.mobile-menu-toggle').on('click', function() {
        $('.primary-menu ul li:not(.button-quote)').slideToggle(200);
        $('.icon-chevron-thin-down').toggleClass('rotated');
    });
});