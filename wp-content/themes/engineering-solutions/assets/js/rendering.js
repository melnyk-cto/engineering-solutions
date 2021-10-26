document.addEventListener('DOMContentLoaded', function () {

    //Swiper
    const swiper = new Swiper('.commercial-lighting-swiper', {
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
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const swiperIndustrial = new Swiper('.industrial-lighting-swiper', {
        slidesPerView: 1.5,
        spaceBetween: 0,
        loop: true,
        clickable:true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const swiperSports = new Swiper('.sports-lighting-swiper', {
        slidesPerView: 1.5,
        spaceBetween: 0,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});

