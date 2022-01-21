document.addEventListener('DOMContentLoaded', function () {

    //Swiper
    const swiperIndustrial = new Swiper('.industrial-lighting-swiper', {
        loop: true,
        slidesPerView: 1.5,
        spaceBetween: 8,
        clickable:true,
        navigation: {
            nextEl: '.swiper-button-next-industrial',
            prevEl: '.swiper-button-prev-industrial',
            clickable: true,
        },
        pagination: {
            el: '.swiper-pagination-industrial',
            clickable: true,
        },
    });

    const swiper = new Swiper('.commercial-lighting-swiper', {
        loop: true,
        slidesPerView: 2,
        spaceBetween: 15,
        breakpoints: {
            767: {
                spaceBetween: 20,
                slidesPerView: 3,
            },
            991: {
                spaceBetween: 46,
                slidesPerView: 3,
            }
        },
        navigation: {
            nextEl: '.swiper-button-next-commercial',
            prevEl: '.swiper-button-prev-commercial',
        },
        pagination: {
            el: '.swiper-pagination-commercial',
            clickable: true,
        },
    });


    const swiperSports = new Swiper('.sports-lighting-swiper', {
        loop: true,
        slidesPerView: 1.5,
        spaceBetween: 8,
        navigation: {
            nextEl: '.swiper-button-next-sports',
            prevEl: '.swiper-button-prev-sports',
            clickable: true,
        },
        pagination: {
            el: '.swiper-pagination-sports',
            clickable: true,
        },
    });
});

