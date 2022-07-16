<?php /* Template Name: Page - Clients */ ?>
<?php get_header(); ?>

<?php
    wp_enqueue_script('geolocation-js', get_stylesheet_directory_uri() . '/assets/js/geolocation.js', array('jquery'), 1.0, true);
    wp_enqueue_script('clients-js', get_stylesheet_directory_uri() . '/assets/js/clients.js', array('jquery'), 1.0, true);
?>
<script>
  const markers = [];
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjGHA3axQLM-5mQpy8INAto_fmdhyDeUc" defer></script>
<?php get_footer(); ?>
