<?php if (have_rows('single_slider_sliders')):
    while (have_rows('single_slider_sliders')) : the_row();
        if (get_row_layout() == 'single_slider_item'):
            $singleSliderOrder = get_sub_field('single_slider_order');
            $singleSliderImage = get_sub_field('single_slider_image'); ?>
            <section style='order: <?php echo $singleSliderOrder; ?>;' class='electrical-slider'>
                <div class='container'>
                    <!-- Swiper -->
                    <div class="swiper-container electrical-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($singleSliderImage as $image_id): ?>
                                <div class="swiper-slide">
                                    <div class='electrical-slider-image'>
                                        <img src='<?php echo $image_id['url']; ?>' alt=''>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class='swiper-pagination'></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>
        <?php endif; endwhile; endif;
