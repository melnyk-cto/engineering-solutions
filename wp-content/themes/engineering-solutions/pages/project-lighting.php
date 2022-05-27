<?php /* Template Name: Page - Project Lighting */ ?>
<?php get_header(); ?>
<main class='project-lighting'>
    <section class='banner'>
        <a href='#requirements' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-lighting-banner.jpg' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>Lighting design for multiple retail stores</h1>
                    <a href='<?php echo home_url('/'); ?>contact' class='btn'>Contact us</a>
                </div>
            </div>
        </div>
    </section>
    <section id="requirements" class='requirements'>
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
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-lighting-requirements-image.jpg'
                         alt=''>
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
                <div class='solutions-image cover'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/commercial-lighting-slider-image-1.2.jpg'
                         alt=''>
                </div>
                <div class='solutions-image cover'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/commercial-lighting-slider-image-1.jpg'
                         alt=''>
                </div>
                <div class='solutions-image cover'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-lighting-solution-image-1.jpg'
                         alt=''>
                </div>
                <div class='solutions-image cover'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-lighting-solution-image-2.jpg'
                         alt=''>
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
                    <?php
                        $args = [
                            'post_type' => 'reviews',
                            'post_status' => 'publish',
                            'posts_per_page' => 10,
                            'order' => 'DESC',
                            'orderby' => 'meta_value',
                            'meta_key' => 'category_reviews',
                            'meta_value' => 'Lighting design for multiple retail stores',
                            'meta_compare' => '=',
                        ];
                        include get_template_directory() . '/components/_reviews-item.php'; ?>
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
<script>
  localStorage.setItem('interest_services', '4');
</script>
<?php get_footer(); ?>
