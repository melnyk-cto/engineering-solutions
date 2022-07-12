<?php if (have_rows('gallery_items')):
    $title = get_field('gallery-title'); ?>
    <section id="our-services-section" class='services'>
        <div class='container'>
            <h2><?php echo $title; ?></h2>
            <div class='services-inner'>
                <?php while (have_rows('gallery_items')) : the_row(); ?>
                    <?php if (get_row_layout() == 'gallery_item'):
                        $galleryItemTitle = get_sub_field('gallery_item_title');
                        $galleryItemLink = get_sub_field('gallery_item_link');
                        $galleryItemImage = get_sub_field('gallery_item_image');
                        $galleryItemWidth = get_sub_field('gallery_item_width');
                        ?>
                        <div style='width: <?php echo $galleryItemWidth; ?>;' class='services-item'>
                            <a href='<?php echo $galleryItemLink['url']; ?>'>
                                <img src='<?php echo $galleryItemImage['url'] ?>' alt=''>
                                <div class='item-title'><h5><?php echo $galleryItemTitle; ?></h5></div>
                            </a>
                        </div>
                    <?php endif; endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>