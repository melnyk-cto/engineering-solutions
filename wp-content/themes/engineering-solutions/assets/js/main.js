document.addEventListener('DOMContentLoaded', function () {

    const burger = document.getElementsByClassName("burger")[0];
    const menu = document.getElementsByClassName("header-menu")[0];

    // Burger menu
    burger.addEventListener("click", function () {
        this.classList.toggle("active");
        menu.classList.toggle("mobile-menu")
    });

    // Outside click
    window.addEventListener('click', function (e) {
        if (!document.getElementsByClassName('menu-list')[0].contains(e.target) && !burger.contains(e.target)) {
            burger.classList.remove("active");
            menu.classList.remove("mobile-menu");
        }
    });

    //Swiper
    const swiper = new Swiper('.testimonial-swiper', {
        slidesPerView: 1,
        spaceBetween: 15,
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
        slidesPerView: 1,
        spaceBetween: 15,
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


    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
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


    // "Select services of interest" set in localStorage for contact page
    const interestServices = localStorage.getItem('interest_services');
    const radioServicesInput = document.querySelectorAll('[name="radio-services"]');
    if (interestServices) {
        radioServicesInput[interestServices].checked = true
    } else {
        radioServicesInput[4].checked = true
    }
});