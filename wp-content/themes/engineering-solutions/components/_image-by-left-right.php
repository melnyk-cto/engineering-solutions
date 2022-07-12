<?php if (have_rows('image_by_left_content')):
    while (have_rows('image_by_left_content')) : the_row();
        if (get_row_layout() == 'image_by_left_item'):
            $imageByLeftRightImage = get_sub_field('image_by_left_image');
            $imageByLeftRightLink = get_sub_field('image_by_left_link'); ?>
            <section style='order: <?php echo get_sub_field('image_by_left_order'); ?>;' class='electrical-content'>
                <div class='container'>
                    <div class='electrical-content-inner <?php if (get_sub_field('image_by_left_position') === 'right') echo 'reverse'; ?>'>
                        <?php if ($imageByLeftRightImage): ?>
                            <div style='width: <?php echo get_sub_field('image_by_left_image_width') ?>'
                                 class='electrical-content-image'>
                                <?php foreach ($imageByLeftRightImage as $image_id): ?>
                                    <img src='<?php echo $image_id['url']; ?>' alt=''>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <div style='width: <?php echo get_sub_field('image_by_left_content_width') ?>'
                             class='electrical-content-description'>
                            <?php echo get_sub_field('image_by_left_description'); ?>
                        </div>
                    </div>
                    <?php if ($imageByLeftRightLink) { ?>
                        <div class='button'>
                            <a href='<?php echo $imageByLeftRightLink['url'] ?>' class='btn'>
                                <?php echo $imageByLeftRightLink['title'] ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </section>
        <?php endif; endwhile; endif;
