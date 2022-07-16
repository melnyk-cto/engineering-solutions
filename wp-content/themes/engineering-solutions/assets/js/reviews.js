jQuery(document).ready(function ($) {
  const loadReviews = (key, value) => {
    $.ajax({
      type: "POST",
      url: ajax_form_object.url,
      data: {
        action: 'ajax_form_action_reviews',
        nonce: ajax_form_object.nonce,
        key: key,
        value: value
      },
      dataType: 'html',
      success: function (response) {
        $(".testimonial-slider").html(response);

        // Swiper
        const testimonialSwiperSelector = document.getElementsByClassName('testimonial-swiper')[0];
        const slides = testimonialSwiperSelector.querySelectorAll('.swiper-slide');
        if (slides.length <= 1) {
          testimonialSwiperSelector.classList.add('small');
        }
        const workSwiper = new Swiper('.testimonial-swiper', {
          loop: slides.length > 1,
          slidesPerView: 1,
          spaceBetween: 15,
          autoHeight: true,
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
              slidesPerView: slides.length > 1 ? 2 : 1,
            },
          }
        });
        testimonialSwiperSelector.addEventListener('mouseenter', () => workSwiper.autoplay.stop());
        testimonialSwiperSelector.addEventListener('mouseleave', () => workSwiper.autoplay.start());
      },
      error: function (error) {
        console.log(error, 'error');
      },
    })
  }

  const error = (err) => {
    loadReviews('country_reviews');
    const alert = $(".alert");
    alert.removeClass('d-none');
    setTimeout(() => alert.addClass('d-none'), 4000);
    alert.text(err.message);
  }

  const success = (position) => {
    const latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude); // New York, US
    new google.maps.Geocoder().geocode({'latLng': latlng}, function (results, status) {
      if (status === google.maps.GeocoderStatus.OK) {
        if (results[1]) {
          let country = null;
          for (let r = 0, rl = results.length; r < rl; r += 1) {
            const result = results[r];
            if (!country && result.types[0] === 'country') country = result.address_components[0].short_name;
            if (country) {
              break;
            }
          }
          loadReviews('country_reviews', country);
        }
      }
    });
  }

  if (testimonial) {
    loadReviews("category_reviews", testimonial);
  } else {
    navigator.geolocation.getCurrentPosition(success, error);
  }
});