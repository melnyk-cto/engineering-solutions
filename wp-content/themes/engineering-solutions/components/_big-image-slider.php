<?php if (have_rows('big_image_sliders')):
    while (have_rows('big_image_sliders')) : the_row();
        if (get_row_layout() == 'big_image_slider_item'):
            $bigImageSliderOrder = get_sub_field('big_image_slider_order');
            $bigImageSliderDescription = get_sub_field('big_image_slider_description');
            $bigImageSliderImage = get_sub_field('big_image_slider_image');
            $bigImageSliderBackground = get_sub_field('big_image_slider_background');
            ?>
            <section
                    style='order: <?php echo $bigImageSliderOrder; ?>;'
                    class='industrial-lighting <?php if ($bigImageSliderBackground === 'yes') echo 'black' ?>'>
                <div class='industrial-lighting-inner'>
                    <div class='industrial-lighting-description'>
                        <div class='container'>
                            <div class='description-inner'>
                                <p><?php echo $bigImageSliderDescription; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php if ($bigImageSliderImage): ?>
                        <div class='swiper-container industrial-lighting-swiper'>
                            <div class='swiper-wrapper'>
                                <?php foreach ($bigImageSliderImage as $image_id): ?>
                                    <div class='swiper-slide'>
                                        <div class='rendering-image'>
                                            <img src='<?php echo $image_id['url']; ?>' alt=''>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-next-industrial"></div>
                            <div class="swiper-button-prev swiper-button-prev-industrial"></div>
                        </div>
                        <div class='swiper-pagination swiper-pagination-industrial'></div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; endwhile; endif;
