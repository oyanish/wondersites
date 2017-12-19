$(document).ready(function() {
    // Toggles the mobile menu and the chevron next to the button
    $('.mobile-menu-toggle').on('click', function() {
        $('.primary-menu ul li:not(.button-quote)').slideToggle(200);
        $('.icon-chevron-thin-down').toggleClass('rotated');
    });

    // Animates and repositions form labels
    $('.ginput_container input, .ginput_container textarea').on('focus', function() {
        $(this).parent().siblings('.gfield_label').addClass('focused-or-filled');
    }).on('blur', function() {
        if ($(this).val() === '') {
            $(this).parent().siblings('.gfield_label').removeClass('focused-or-filled');
        }
    });

    // Initializes slick carousel
    $('.slick-carousel').slick({
        prevArrow: '<i class="slick-prev icon-chevron-thin-left"></i>',
        nextArrow: '<i class="slick-next icon-chevron-thin-right"></i>',
    });

    $('.center').slick({
        centerMode: true,
        centerPadding: '15px',
        arrows: false,
        autoplay: true,
        autoplaySpeed: 1500
    });

    $('.slick-gallery').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });
});