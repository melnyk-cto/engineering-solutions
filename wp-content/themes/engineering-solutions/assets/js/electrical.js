document.addEventListener('DOMContentLoaded', function (){
    //Swiper
    const swiper = new Swiper('.electrical-swiper', {
        loop: true,
        spaceBetween: 10,
        speed: 1000,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
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

});