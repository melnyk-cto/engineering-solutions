jQuery(document).ready(function ($) {
  $.ajax({
    type: "POST",
    url: ajax_form_object.url,
    data: {
      action: 'ajax_form_action_reviews',
      nonce: ajax_form_object.nonce,
      key: 'category_reviews',
      value: testimonial,
    },
    dataType: 'html',
    success: function (response) {
      $(".work-slider").html(response);

      //Swiper
      const testimonialSwiperSelector = document.getElementsByClassName('work-swiper')[0];
      const slides = testimonialSwiperSelector.querySelectorAll('.swiper-slide');
      const testimonialSwiper = new Swiper('.work-swiper', {
        loop: slides.length > 1,
        slidesPerView: 1,
        spaceBetween: 15,
        speed: 1000,
        autoplay: {
          delay: 4000,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          767: {
            spaceBetween: 0,
          },
          991: {
            spaceBetween: 0,
          }
        }
      });
      testimonialSwiperSelector.addEventListener('mouseenter', () => testimonialSwiper.autoplay.stop());
      testimonialSwiperSelector.addEventListener('mouseleave', () => testimonialSwiper.autoplay.start())
    },
    error: function (error) {
      console.log(error, 'error');
    },
  })

});