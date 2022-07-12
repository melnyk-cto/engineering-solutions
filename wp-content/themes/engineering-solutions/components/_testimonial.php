<?php if (get_field('testimonial_filter')): ?>
    <section style='order: <?php echo get_field('testimonial_order'); ?>;' class='testimonial'>
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
                            'meta_value' => get_field('testimonial_filter'),
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
<?php endif; ?>