document.addEventListener('DOMContentLoaded', function () {

  //Swiper
  const swiperIndustrialSelector = document.getElementsByClassName('industrial-lighting-swiper')[0];
  if (swiperIndustrialSelector) {
    const swiperIndustrial = new Swiper('.industrial-lighting-swiper', {
      loop: true,
      slidesPerView: 1.5,
      spaceBetween: 8,
      clickable: true,
      speed: 1000,
      autoplay: {
        delay: 4000,
      },
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
    swiperIndustrialSelector.addEventListener('mouseenter', () => swiperIndustrial.autoplay.stop());
    swiperIndustrialSelector.addEventListener('mouseleave', () => swiperIndustrial.autoplay.start());
  }

  const commercialLightingSelector = document.getElementsByClassName('commercial-lighting-swiper')[0];
  if (commercialLightingSelector) {
    const commercialLightingSwiper = new Swiper('.commercial-lighting-swiper', {
      loop: true,
      slidesPerView: 2,
      spaceBetween: 15,
      speed: 1000,
      autoplay: {
        delay: 4000,
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
      navigation: {
        nextEl: '.swiper-button-next-commercial',
        prevEl: '.swiper-button-prev-commercial',
      },
      pagination: {
        el: '.swiper-pagination-commercial',
        clickable: true,
      },
    });
    commercialLightingSelector.addEventListener('mouseenter', () => commercialLightingSwiper.autoplay.stop());
    commercialLightingSelector.addEventListener('mouseleave', () => commercialLightingSwiper.autoplay.start());
  }

  //Swiper
  const swiperElectricalSelector = document.getElementsByClassName('electrical-swiper')[0];
  if (swiperElectricalSelector) {
    const slides = swiperElectricalSelector.querySelectorAll('.swiper-slide');
    const swiperElectrical = new Swiper('.electrical-swiper', {
      loop: slides.length > 1,
      spaceBetween: 10,
      speed: 1000,
      autoplay: {
        delay: 4000,
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
    swiperElectricalSelector.addEventListener('mouseenter', () => swiperElectrical.autoplay.stop());
    swiperElectricalSelector.addEventListener('mouseleave', () => swiperElectrical.autoplay.start());
  }
});

