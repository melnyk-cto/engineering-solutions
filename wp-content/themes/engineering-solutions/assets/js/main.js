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

  //Swiper
  const swiper = new Swiper('.testimonial-swiper', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 15,
    speed: 1000,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
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

  //Swiper
  const Myswiper = new Swiper('.work-swiper', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 15,
    autoHeight: true,
    speed: 1000,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
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


  // Smooth scroll on click arrow down
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      if (anchor.getAttribute('class') === 'go-to-down') {
        let offsetTop;
        if (window.innerWidth > 1400) {
          offsetTop = 116;
        } else if (window.innerWidth > 768) {
          offsetTop = 62;
        } else {
          offsetTop = 46;
        }
        window.scrollTo(0, document.querySelector(this.getAttribute('href')).offsetTop - offsetTop);
      }
    });
  });

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