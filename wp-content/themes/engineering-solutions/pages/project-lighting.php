<?php /* Template Name: Page - Project Lighting */ ?>
<?php get_header(); ?>
<main class='project-lighting'>
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
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-lighting-banner.jpg' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>Lighting design for multiple retail stores</h1>
                    <a href='#' class='btn'>Сontact us</a>
                </div>
            </div>
        </div>
    </section>
    <section class='requirements'>
        <div class='container'>
            <div class='requirements-inner'>
                <div class='requirements-description'>
                    <h2>Project <span>requirements</span></h2>
                    <p>
                        <span>busSTRUT</span>, our customer, and U.S. electrical distribution system supplier, requested
                        a
                        set of photorealistic renders to be developed in order to demonstrate the solution for workplace
                        to
                        be used in marketing materials.
                    </p>
                </div>
                <div class='requirements-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-lighting-requirements-image.jpg' alt=''>
                </div>
            </div>
        </div>
    </section>
    <section class='solutions'>
        <div class='container'>
            <div class='solutions-description'>
                <h2><span>Solutions</span></h2>
                <p>
                    <span>Engineering Solutions</span> developed detailed electrical design for the office that
                    consisted of a busway grid, power drops to working stations, lighting and UV system and after it was
                    approved on the customer end, developed a set of photorealistic renders using 3DsMAX software.
                </p>
            </div>
            <div class='solutions-images'>
                <div class='solutions-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/commercial-lighting-slider-image-2.jpg' alt=''>
                </div>
                <div class='solutions-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/commercial-lighting-slider-image-1.jpg' alt=''>
                </div>
                <div class='solutions-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-lighting-solution-image-1.jpg' alt=''>
                </div>
                <div class='solutions-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-lighting-solution-image-2.jpg' alt=''>
                </div>
            </div>
        </div>
    </section>
    <section class='outcome'>
        <div class='container'>
            <div class='outcome-description'>
                <h2>Project <span>outcome</span></h2>
                <p>
                    Our customer team was impressed not only by the accuracy of the simulation results, but also by the
                    professional look of the reports that Engineering Solutions delivered. As this was our first project
                    for busSTRUT, we were able to demonstrate the high standard of work we are committed to. As a
                    result, this success led to new projects together.
                </p>
            </div>
        </div>
    </section>
    <section class='testimonial'>
        <div class='container'>
            <h2><span>Testimonial</span></h2>
            <div class='testimonial-slider'>
                <div class='swiper-container testimonial-swiper'>
                    <div class='swiper-wrapper'>
                        <div class='swiper-slide'>
                            <div class='testimonial-item'>
                                <div class='country'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/canada.svg' alt=''>
                                </div>
                                <div class='item-title'>
                                    <h4>Curtis Kuczera</h4>
                                    <p>General Manager at Cobra Structures</p>
                                </div>
                                <p>
                                    With not much guidance and a hands-on approach, this friendly freelancer promptly
                                    created incredible renders of my unique system. Sold more product with the BEST
                                    resulting promotional materials!!!
                                </p>
                            </div>
                        </div>
                        <div class='swiper-slide'>
                            <div class='testimonial-item'>
                                <div class='country'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/canada.svg' alt=''>
                                </div>
                                <div class='item-title'>
                                    <h4>Curtis Kuczera</h4>
                                    <p>General Manager at Cobra Structures</p>
                                </div>
                                <p>
                                    With not much guidance and a hands-on approach, this friendly freelancer promptly
                                    created incredible renders of my unique system. Sold more product with the BEST
                                    resulting promotional materials!!!
                                </p>
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
