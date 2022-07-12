<?php if (have_rows('simple_content_sections')):
    while (have_rows('simple_content_sections')) : the_row();
        if (get_row_layout() == 'simple_content_content_item'):
            $simpleContentContentImage = get_sub_field('simple_content_images'); ?>
            <section style='order: <?php echo get_sub_field('simple_content_order'); ?>;' class='studies-description'>
                <div class='container'>
                    <div class='studies-description-content'>
                        <?php echo get_sub_field('simple_content_description'); ?>
                    </div>
                    <?php if ($simpleContentContentImage): ?>
                        <div class='study-images'>
                            <?php foreach ($simpleContentContentImage as $image_id): ?>
                                <div class='study-image'>
                                    <img data-caption='<?php echo $image_id['caption']; ?>' src='<?php echo $image_id['url']; ?>' alt=''>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; endwhile; endif;