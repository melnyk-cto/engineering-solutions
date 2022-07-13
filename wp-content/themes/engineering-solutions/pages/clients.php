<?php /* Template Name: Page - Clients */ ?>
<?php get_header(); ?>
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
                            <?php echo get_field('marker_country') ?>
                        </a>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
                <script>
                  markers.push({
                    id: "<?php the_ID(); ?>",
                    country: "<?php echo get_field('marker_country'); ?>"
                  })
                </script>
            <?php endwhile;
            wp_reset_postdata(); ?>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgnavw0NZtQQNgaRLuuByinqjs5x81OIo" defer></script>
<?php get_footer(); ?>
