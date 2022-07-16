jQuery(document).ready(function ($) {
  const loadReviews = (country) => {
    $.ajax({
      type: "POST",
      url: ajax_form_object.url,
      data: {
        action: 'ajax_form_action_reviews',
        nonce: ajax_form_object.nonce,
        key: 'country_reviews',
        value: country
      },
      dataType: 'html',
      success: function (response) {
        $(".work-slider").html(response);

        //Swiper
        const workSwiperSelector = document.getElementsByClassName('work-swiper')[0];
        const workSwiper = new Swiper('.work-swiper', {
          loop: true,
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
              slidesPerView: 2,
            },
            991: {
              spaceBetween: 0,
              slidesPerView: 2,
            }
          }
        });
        workSwiperSelector.addEventListener('mouseenter', () => workSwiper.autoplay.stop());
        workSwiperSelector.addEventListener('mouseleave', () => workSwiper.autoplay.start());
      },
      error: function (error) {
        console.log(error, 'error');
      },
    })
  }

  const error = (err) => {
    loadReviews();
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
          loadReviews(country);
        }
      }
    });
  }

  navigator.geolocation.getCurrentPosition(success, error);
});