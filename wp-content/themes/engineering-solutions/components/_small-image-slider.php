<?php if (have_rows('small_image_sliders')): ?>
    <?php while (have_rows('small_image_sliders')) : the_row();
        if (get_row_layout() == 'small_image_slider_item'):
            $smallImageSliderOrder = get_sub_field('small_image_slider_order');
            $smallImageSliderDescription = get_sub_field('small_image_slider_description');
            $smallImageSliderImage = get_sub_field('small_image_slider_image');
            ?>
            <section style='order: <?php echo $smallImageSliderOrder; ?>' class='commercial-lighting'>
                <div class='container'>
                    <div class='commercial-lighting-inner'>
                        <div class='commercial-lighting-description description-inner'>
                            <p><?php echo $smallImageSliderDescription; ?></p>
                        </div>
                        <?php if ($smallImageSliderImage): ?>
                            <div class='commercial-lighting-slider'>
                                <div class='container'>
                                    <!-- Swiper -->
                                    <div class="swiper-container commercial-lighting-swiper">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($smallImageSliderImage as $image_id): ?>
                                                <div class="swiper-slide">
                                                    <div class='commercial-lighting-slider-image'>
                                                        <img src='<?php echo $image_id['url']; ?>' alt=''>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class='swiper-pagination swiper-pagination-commercial'></div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next swiper-button-next-commercial"></div>
                                    <div class="swiper-button-prev swiper-button-prev-commercial"></div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; endwhile; ?>
<?php endif;
