<?php /* Template Name: Page - Services Renderings */ ?>
<?php
    wp_enqueue_script('rendering-js', get_stylesheet_directory_uri() . '/assets/js/rendering.js');
?>
<?php get_header(); ?>
    <main class='renderings'>
        <section class='banner'>
            <a href='#renderings-content' class='go-to-down'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
            </a>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/rendering-banner.png' alt=''>
            <div class='overlay'></div>
            <div class='container'>
                <div class='banner-inner'>
                    <div class='banner-description'>
                        <h1>Lighting Design & Rendering Services</h1>
                        <a href='<?php echo home_url('/'); ?>contact' class='btn'>Get in touch</a>
                    </div>
                </div>
            </div>
        </section>
        <section id='renderings-content' class='renderings-content'>
            <div class='container'>
                <div class='renderings-content-inner'>
                    <div class='renderings-content-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/rendering-content-image.png'
                             alt=''>
                        <div class='renderings-content-quote'>
                            <p>
                                And God said, “Let there be light,” and there was light. God saw that the light was
                                good,
                                and he separated the light from the darkness
                                (Bible, Gen.1:3-4)
                            </p>
                        </div>
                    </div>
                    <div class='renderings-content-description'>
                        <p>
                            Being inspired by the accomplished work of the Creator, Engineering Solutions delivers
                            lighting
                            designs that enrich people’s lives. From industrial plants to the football fields, from the
                            offices to homes we are willing to propose an optimal solution that will enhance task
                            performance at work, improve the appearance of an presentation area, or create a warm
                            atmosphere
                            at home.
                        </p>
                        <p>
                            Since 2018 we have successfully completed hundreds of designs for our customers based in the
                            United States of America, in Australia, in Canada or other countries.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class='industrial-lighting'>
            <div class='industrial-lighting-inner'>
                <div class='industrial-lighting-description'>
                    <div class='container'>
                        <div class='description-inner'>
                            <h2><span>Industrial</span> Lighting</h2>
                            <p>
                                There are many different types of industries that need industrial lighting.
                                Manufacturing
                                facilities require specific types of industrial lighting to illuminate the exterior
                                areas,
                                shipping and receiving bays, and the production areas. The workers need to have
                                appropriate
                                illuminance levels in order to safely operate machinery and assemble parts. Warehousing
                                and
                                distribution operations need reliable, efficient fixtures with large life span and easy
                                maintenance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class='industrial-lighting-slider'>
                    <div class=' swiper-container industrial-lighting-swiper'>
                        <div class='swiper-wrapper'>
                            <div class='swiper-slide'>
                                <div class='rendering-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/industrial-lighting-image-1.jpg'
                                         alt=''>
                                </div>
                            </div>
                            <div class='swiper-slide'>
                                <div class='rendering-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/industrial-lighting-image-2.png'
                                         alt=''>
                                </div>
                            </div>
                            <div class='swiper-slide'>
                                <div class='rendering-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/industrial-lighting-image-3.png'
                                         alt=''>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='swiper-pagination swiper-pagination-industrial'></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-next-industrial"></div>
                    <div class="swiper-button-prev swiper-button-prev-industrial"></div>
                </div>
            </div>
        </section>
        <section class='commercial-lighting'>
            <div class='container'>
                <div class='commercial-lighting-inner'>
                    <div class='commercial-lighting-description description-inner'>
                        <h2><span>Commercial</span> Lighting</h2>
                        <p>
                            Designing an office or a retail store lighting plan involves more than calculations and
                            luminaire selection. The lighting solution affects the ambiance of the office; interest, and
                            enthusiasm of its employees and visitors. It should enhance the feeling of well-being and
                            productivity, so consideration must be given to the design of the space interior to create a
                            stimulating work or shopping place. In an office environment, employees need to perform
                            tasks
                            comfortably and effectively in the environment where they spend one-third of their lives. In
                            retail, general retail lighting has to ensure sufficient brightness, accent lighting to
                            highlight individual areas. When used correctly, lighting guides the shopper’s eye and leads
                            it
                            to desired areas – the zoning within the shop can be experienced by means of the light.
                            Different retail areas can be differentiated from each other using various lighting. Display
                            windows, entrance, changing rooms or checkout area also require their own solutions,
                            tailored
                            to their individual functions.
                        </p>
                    </div>
                    <div class='commercial-lighting-slider'>
                        <div class='container'>
                            <!-- Swiper -->
                            <div class="swiper-container commercial-lighting-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class='commercial-lighting-slider-image'>
                                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/commercial-lighting-slider-image-1.jpg'
                                                 alt=''>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class='commercial-lighting-slider-image'>
                                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/commercial-lighting-slider-image-2.jpg'
                                                 alt=''>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class='commercial-lighting-slider-image'>
                                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/commercial-lighting-slider-image-3.jpg'
                                                 alt=''>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class='commercial-lighting-slider-image'>
                                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/commercial-lighting-slider-image-3.jpg'
                                                 alt=''>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='swiper-pagination swiper-pagination-commercial'></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='sports-lighting'>
            <div class='sports-lighting-inner'>
                <div class='sports-lighting-description'>
                    <div class='container'>
                        <div class='description-inner'>
                            <h2><span>Sports</span> Lighting</h2>
                            <p>
                                Getting sports lighting right makes all the difference, no matter the venue. Proper
                                lighting is crucial for athletes’ success and should be safe and comfortable for the
                                audience members. Whether it’s an arena, tennis court, golf course, driving range,
                                baseball or football field, swimming pool, all athletic facilities have specific aspects
                                to consider and needs to meet. For outdoor fields, it’s important to keep them brightly
                                lit and safe for both the teams and the audiences alike. In any case, the light fixtures
                                must not be too bright or obtrusive, particularly when residential areas are nearby.
                            </p>
                        </div>
                    </div>
                </div>
                <div class='sports-lighting-slider'>
                    <div class=' swiper-container sports-lighting-swiper'>
                        <div class='swiper-wrapper'>
                            <div class='swiper-slide'>
                                <div class='rendering-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/industrial-lighting-image-1.jpg'
                                         alt=''>
                                </div>
                            </div>
                            <div class='swiper-slide'>
                                <div class=' rendering-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/industrial-lighting-image-2.png'
                                         alt=''>
                                </div>
                            </div>
                            <div class='swiper-slide'>
                                <div class=' rendering-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/industrial-lighting-image-3.png'
                                         alt=''>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='swiper-pagination swiper-pagination-sports'></div>
                    <div class="swiper-button-next swiper-button-next-sports"></div>
                    <div class="swiper-button-prev swiper-button-prev-sports"></div>
                </div>
            </div>
        </section>
        <section class='photorealistic-renderings'>
            <div class='container'>
                <div class='photorealistic-renderings-inner'>
                    <div class='photorealistic-renderings-description description-inner'>
                        <h2><span>Photorealistic</span> Renderings</h2>
                        <p>
                            A photorealistic rendering is a type of a 3D rendering where the final result is very
                            difficult
                            to distinguish from reality, from a photograph. These types of images are particularly
                            useful
                            in the field of architecture and interior design in order to show how a project will look
                            like
                            before it is built, in marketing materials, product design and prototypes, as well as in
                            many
                            other areas.
                        </p>
                    </div>
                    <div class='photorealistic-renderings-images'>
                        <div class='photorealistic-renderings-image zoom'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-renderings/bs-render-01.jpg'
                                 alt=''>
                        </div>
                        <div class='photorealistic-renderings-image zoom'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-renderings/bs-render-03.jpg'
                                 alt=''>
                        </div>
                        <div class='photorealistic-renderings-image zoom'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-renderings/bs-render-04.jpg'
                                 alt=''>
                        </div>
                        <div class='photorealistic-renderings-image zoom'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-renderings/bs-render-05.jpg'
                                 alt=''>
                        </div>
                        <div class='photorealistic-renderings-image zoom'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-renderings/bs-render-06.jpg'
                                 alt=''>
                        </div>
                        <div class='photorealistic-renderings-image zoom'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-renderings/bs-render-08.jpg'
                                 alt=''>
                        </div>
                        <a href='/' class='link-more'>
                            <span class="text-more">More</span>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow.svg' alt=''>
                        </a>
                    </div>
                </div>
                <a href='<?php echo home_url('/'); ?>contact' class='btn'>Request a quote</a>
            </div>
        </section>
    </main>
    <script>
        localStorage.setItem('interest_services', '0');
    </script>
<?php get_footer(); ?>