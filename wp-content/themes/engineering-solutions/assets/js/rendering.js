document.addEventListener('DOMContentLoaded', function () {

    //Swiper
    const swiper = new Swiper('.commercial-lighting-swiper', {
        slidesPerView: 2,
        spaceBetween: 15,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
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
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const swiperIndustrial = new Swiper('.industrial-lighting-swiper', {
        slidesPerView: 1.5,
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const swiperSports = new Swiper('.sports-lighting-swiper', {
        slidesPerView: 1.5,
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

// const industrialLightingImage = document.getElementsByClassName('industrial-lighting-image');
// for (let i = 0; i < industrialLightingImage.length; i++) {
//     industrialLightingImage[i].addEventListener("click", function () {
//         this.classList.toggle('active')
//     });
// }

});

