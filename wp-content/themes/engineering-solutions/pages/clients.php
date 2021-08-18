<?php /* Template Name: Page - Clients */ ?>
<?php get_header(); ?>
<main class='clients'>
    <div class='socials'>
        <a href='#' class='socials-linkedin'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/contact-linkedIn.svg' alt=''>
        </a>
        <a href='#' class='socials-email'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/contact-email.svg' alt=''>
        </a>
    </div>
    <section class='banner'>
        <a href='#' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images<?php echo home_url( '/' ); ?>/clients-banner.jpg' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>OUR CLIENTS</h1>
                    <a href='#' class='btn'>Get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <section class='map'>
        <div class='map-description'>
            <div class='description-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/map-description-image.jpg' alt=''>
            </div>
            <div class='description-content'>
                <a href='#' class='street'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/geolocation.svg' alt=''>
                    street
                </a>
                <h3>Lighting Design for a mine</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                <a href='#' class='more'>
                    more
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow-down.svg' alt=''>
                </a>
            </div>
        </div>
        <div class='map-image'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/map.png' alt=''>
        </div>
    </section>
    <section class='work'>
        <div class='container'>
            <h2><span>They say</span> about our work</h2>
            <div class='work-slider'>
                <div class="swiper-container work-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class='work-item'>
                                <div class='work-item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/work-item-image-1.png' alt=''>
                                </div>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/australia.svg' alt=''>
                                    </div>
                                    <h4>Ben Morton </h4>
                                    <p>Technical director at Leitech-Australia</p>
                                </div>
                                <div class='item-description'>
                                    <p>
                                        Great job, done promptly & well presented. I have no hesitation whatsoever in
                                        recommending Roman to the community!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='work-item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/work-item-image-2.png' alt=''>
                            </div>
                            <div class='work-item'>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/australia.svg' alt=''>
                                    </div>
                                    <h4>Ken Hornsey </h4>
                                    <p>Operations manager at Leitech-Australia</p>
                                </div>
                                <div class='item-description'>
                                    <p>
                                        Very professional work. The use of initiative to provide the outcome where my
                                        own knowledge/instructions were lacking was great.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='work-item'>
                                <div class='work-item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/work-item-image-1.png' alt=''>
                                </div>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/australia.svg' alt=''>
                                    </div>
                                    <h4>Ben Morton </h4>
                                    <p>Technical director at Leitech-Australia</p>
                                </div>
                                <div class='item-description'>
                                    <p>
                                        Great job, done promptly & well presented. I have no hesitation whatsoever in
                                        recommending Roman to the community!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='work-item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/work-item-image-2.png' alt=''>
                            </div>
                            <div class='work-item'>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/australia.svg' alt=''>
                                    </div>
                                    <h4>Ken Hornsey </h4>
                                    <p>Operations manager at Leitech-Australia</p>
                                </div>
                                <div class='item-description'>
                                    <p>
                                        Very professional work. The use of initiative to provide the outcome where my
                                        own knowledge/instructions were lacking was great.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
