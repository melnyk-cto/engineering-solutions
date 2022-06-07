<div class="swiper-wrapper">
    <?php
        global $args;
        $namesArray = [];
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $name = get_the_title();
            if (!in_array($name, $namesArray)) {
                array_push($namesArray, $name); ?>
                <div class="swiper-slide">
                    <?php if (get_field('avatar_reviews')) { ?>
                        <div class='work-item-image'>
                            <img src='<?php echo get_field('avatar_reviews')['url'] ?>' alt=''>
                        </div>
                    <?php } ?>
                    <div class='work-item'>
                        <div class='item-title'>
                            <?php if (get_field('country_reviews')) { ?>
                                <div class='item-title-image'>
                                    <span class="flag-icon flag-icon-<?php echo strtolower(get_field('country_reviews')) ?>"></span>
                                </div>
                            <?php } ?>
                            <h4><?php the_title(); ?></h4>
                            <?php if (get_field('position_reviews')) { ?>
                                <p><?php echo get_field('position_reviews') ?></p>
                            <?php } ?>
                        </div>
                        <div class='item-description'><p><?php the_content(); ?></p></div>
                    </div>
                </div>
            <?php } endwhile;
        wp_reset_postdata(); ?>
</div>