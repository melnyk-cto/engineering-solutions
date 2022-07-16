<?php /* Template Name: Page - Clients */ ?>
<?php get_header(); ?>

<?php
    wp_enqueue_script('geolocation-js', get_stylesheet_directory_uri() . '/assets/js/geolocation.js', array('jquery'), 1.0, true);

    wp_enqueue_script('ajax-form', get_theme_file_uri('/assets/js/reviews.js'), array('jquery'), 1.0, true);
    wp_localize_script('ajax-form', 'ajax_form_object', array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax-form-nonce'),
    ));
?>
<script>
  const markers = [];
  const testimonial = "";
</script>
<main class='clients'>
    <?php include get_template_directory() . '/components/_banner.php'; ?>
    <section id='map' class='map'>
        <?php
            $args = [
                'post_type' => 'markers',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'order' => 'DESC',
            ];
            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post(); ?>
                <div data-id='<?php the_ID(); ?>' class='map-description'>
                    <div class='swiper-container map-slider'>
                        <div class='swiper-wrapper'>
                            <?php foreach (get_field('marker_image') as $image_id): ?>
                                <div class='swiper-slide'>
                                    <div class='description-image'>
                                        <img src='<?php echo $image_id['url'] ?>' alt=''>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-next-map"></div>
                        <div class="swiper-button-prev swiper-button-prev-map"></div>
                    </div>
                    <div class='description-content'>
                        <a href='#' class='street'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/geolocation.svg'
                                 alt=''>
                            <?php echo get_field('marker_google_map')["address"] ?>
                        </a>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
                <script>
                  markers.push({
                    id: "<?php the_ID(); ?>",
                    lat: "<?php echo get_field('marker_google_map')["lat"]; ?>",
                    lng: "<?php echo get_field('marker_google_map')["lng"]; ?>",
                    address: "<?php echo get_field('marker_google_map')["address"]; ?>"
                  })
                </script>
            <?php endwhile;
            wp_reset_postdata(); ?>
        <div class='map-loading'>Map is loading...</div>
        <div id='google-map' class='google-map'></div>
    </section>
    <section class='testimonial'>
        <div class='container'>
            <h2><span>They say</span> about our work</h2>
            <div class='testimonial-slider'>
                <h4>Reviews is loading...</h4>
            </div>
        </div>
    </section>
</main>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaNSmSZJ_lYPqY7BJin9xjfMNppBXxu8s" defer></script>
<?php get_footer(); ?>
