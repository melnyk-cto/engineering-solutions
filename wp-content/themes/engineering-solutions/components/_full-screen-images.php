<?php if (have_rows('full_screen_images_content')):
    while (have_rows('full_screen_images_content')) : the_row();
        if (get_row_layout() == 'small_image_slider_item'):
            $fullScreenImagesOrder = get_sub_field('full_screen_images_order');
            $fullScreenImagesDescription = get_sub_field('full_screen_images_description');
            $fullScreenImages = get_sub_field('full_screen_images_images');
            $fullScreenImages = get_sub_field('full_screen_images_images');
            $fullScreenLink = get_sub_field('full_screen_images_link');
            ?>
            <section style='order: <?php echo $fullScreenImagesOrder; ?>;' class='photorealistic-renderings'>
                <div class='container'>
                    <div class='photorealistic-renderings-inner'>
                        <div class='photorealistic-renderings-description description-inner'>
                            <p><?php echo $fullScreenImagesDescription; ?></p>
                        </div>
                        <?php if ($fullScreenImages): ?>
                            <div class='photorealistic-renderings-images'>
                                <?php foreach ($fullScreenImages as $image_id): ?>
                                    <div class='photorealistic-renderings-image zoom'>
                                        <img src='<?php echo $image_id['url']; ?>' alt=''>
                                    </div>
                                <?php endforeach; ?>
                                <a href='/' class='link-more'>
                                    <span class="text-more">More</span>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow.svg'
                                         alt=''>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if ($fullScreenLink) { ?>
                        <a href='<?php echo $fullScreenLink['url'] ?>' class='btn'>
                            <?php echo $fullScreenLink['title'] ?>
                        </a>
                    <?php } ?>
                </div>
            </section>
        <?php endif; endwhile; endif;
