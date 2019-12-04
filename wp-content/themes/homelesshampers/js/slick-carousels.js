(function () {
    $('.photo-gallery__carousel').slick({
        dots: false,
        infinite: true,
        arrows: false,
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

    $('.supporters-showcase__carousel').slick({
        dots: false,
        infinite: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 700,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 740,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 570,
                settings: {
                    slidesToShow: 2,
                }
            },
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