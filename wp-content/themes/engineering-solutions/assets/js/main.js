document.addEventListener('DOMContentLoaded', function () {

  const burger = document.getElementsByClassName("burger")[0];
  const menu = document.getElementsByClassName("header-menu")[0];
  const overlay = document.getElementsByClassName("overlay")[0];

  // Burger menu
  burger.addEventListener("click", function () {
    this.classList.toggle("active");
    menu.classList.toggle("mobile-menu")
  });

  // outside click mobile menu
  overlay.addEventListener('click', function () {
    burger.classList.remove("active");
    menu.classList.remove("mobile-menu");
  });

  // go-to-down
  const goToDown = document.getElementsByClassName('go-to-down');

  if (goToDown) {
    for (let i = 0; i < goToDown.length; i++) {
      goToDown[i].addEventListener('click', function () {
        window.scrollTo({
          top: this.closest('.banner').offsetHeight - 100,
          behavior: "smooth"
        })
      });
    }
  }

  //Swiper
  const testimonialSwiperSelector = document.getElementsByClassName('testimonial-swiper')[0];
  if (testimonialSwiperSelector) {
    const slides = testimonialSwiperSelector.querySelectorAll('.swiper-slide');
    const testimonialSwiper = new Swiper('.testimonial-swiper', {
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

  }
  //Swiper
  const workSwiperSelector = document.getElementsByClassName('work-swiper')[0];
  if (workSwiperSelector) {
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
  }

  // click link more
  const more = document.getElementsByClassName('link-more');
  for (let i = 0; i < more.length; i++) {
    more[i].addEventListener('click', function (e) {
      e.preventDefault();
      this.parentElement.classList.toggle('show');
      if (this.querySelector('.text-more').innerHTML === 'Less') {
        this.querySelector('.text-more').innerHTML = 'More'
      } else {
        this.querySelector('.text-more').innerHTML = 'Less'
      }
    });
  }

  // zoom effect on click image
  const zoom = document.getElementsByClassName('zoom');
  for (let i = 0; i < zoom.length; i++) {
    zoom[i].addEventListener('click', function (e) {
      if (this.classList.contains('open')) {
        if (e.target !== this) return;
        this.classList.toggle('open');
      } else {
        this.classList.toggle('open');
      }
    });
  }
});