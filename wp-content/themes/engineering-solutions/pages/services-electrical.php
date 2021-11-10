<?php /* Template Name: Page - Services Electrical */ ?>
<?php
    wp_enqueue_script('electrical-js', get_stylesheet_directory_uri() . '/assets/lib/electrical.js');
?>
<?php get_header(); ?>
    <main class='electrical'>
        <section class='banner'>
            <a href='#electrical-content' class='go-to-down'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
            </a>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/electrical-banner.jpg' alt=''>
            <div class='overlay'></div>
            <div class='container'>
                <div class='banner-inner'>
                    <div class='banner-description'>
                        <h1>Electrical Design & CAD/BIM Services</h1>
                        <a href='<?php echo home_url('/'); ?>contact' class='btn'>Get in touch</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="electrical-content" class='electrical-content'>
            <div class='container'>
                <div class='electrical-content-inner'>
                    <div class='electrical-content-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/electrical-content-image.jpg'
                             alt=''>
                    </div>
                    <div class='electrical-content-description'>
                        <p>
                            Whether it is a complex industrial project that requires the 3D modeling and the multi
                            disciplinary coordination or a commercial project with the need of electrical design, our
                            trusted team is ready to deliver consulting and engineering services. Engineering Solutions
                            supports a wide variety of commercial and industrial clients and offer electrical &
                            instrumentation design services including:
                        </p>
                        <ul class='description-list'>
                            <li>Power distribution system design</li>
                            <li>Electrical single-line diagram & load list preparation</li>
                            <li>Electrical equipment and electrical room layouts</li>
                            <li>Cable tray design, cable sizing and schedules</li>
                            <li>Electrical panel schedules and Bill of materials (BOM)</li>
                            <li>Lighting design</li>
                            <li>Grounding & lighting protection system (LPS) design</li>
                            <li>AutoCAD Electrical design & symbol development</li>
                        </ul>
                        <p>
                            Our team works in AutoCAD and AutoCAD Electrical for 2D designs and Revit for 3D design &
                            BIM.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class='electrical-slider'>
            <div class='container'>
                <!-- Swiper -->
                <div class="swiper-container electrical-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class='electrical-slider-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/electrical-slider-image.jpg'
                                     alt=''>
                            </div>
                        </div>
                    </div>
                    <div class='swiper-pagination'></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
    </main>
    <script>
        localStorage.setItem('interest_services', '1');
    </script>
<?php get_footer(); ?>