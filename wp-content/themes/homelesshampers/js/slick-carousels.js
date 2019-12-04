(function () {
    $('.photo-gallery__carousel').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '10rem',
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    centerPadding: '3rem',
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1300,
                settings: {
                    centerPadding: '3rem',
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    centerPadding: '3rem',
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerPadding: '3rem',
                    slidesToShow: 1,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.slick--next').on('click', function () {
        var carousel = $(this).attr('data-carousel');
        $(carousel).slick('slickNext');
    });

    $('.slick--prev').on('click', function () {
        var carousel = $(this).attr('data-carousel');
        $(carousel).slick('slickPrev');
    });
})();