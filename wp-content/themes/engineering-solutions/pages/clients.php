<?php /* Template Name: Page - Clients */ ?>
<?php get_header(); ?>
<main class='clients'>
    <section class='banner'>
        <a href='#map' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/clients-banner.png' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>OUR CLIENTS</h1>
                    <a href='<?php echo home_url('/'); ?>contact' class='btn'>Get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <section id='map' class='map'>
        <div class='map-description'>
            <div class='description-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/blog-image.jpeg' alt=''>
            </div>
            <div class='description-content'>
                <a href='#' class='street'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/geolocation.svg' alt=''>
                    street
                </a>
                <h3>Lighting Design for a mine</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </div>
        </div>
        <div class='map-image'>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162758.47733364918!2d30.39260931920561!3d50.40195139720131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1635166231534!5m2!1sru!2sua"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <section class='work'>
        <div class='container'>
            <h2><span>They say</span> about our work</h2>
            <div class='work-slider'>
                <div class="swiper-container work-swiper">
                    <?php
                        $args = [
                            'post_type' => 'reviews',
                            'post_status' => 'publish',
                            'posts_per_page' => 10,
                            'orderby' => 'rand'
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
