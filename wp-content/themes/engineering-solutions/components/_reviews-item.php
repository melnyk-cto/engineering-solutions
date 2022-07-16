<div class="swiper-wrapper">
    <?php
        global $args;
        $namesArray = [];
        $companiesArray = [];
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            $name = get_the_title();
            $company = get_field('company_reviews');
            // do not show review this same author name and one company
            if (!in_array($name, $namesArray) && !in_array($company, $companiesArray)) {
                array_push($namesArray, $name);
                array_push($companiesArray, $company);
                ?>
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
                                <p>
                                    <?php echo get_field('position_reviews'); ?>
                                    <?php if (get_field('company_reviews')) { ?>
                                        at <?php echo get_field('company_reviews');
                                    } ?>
                                </p>
                            <?php } ?>
                        </div>
                        <div class='item-description'><p><?php the_content(); ?></p></div>
                    </div>
                </div>
            <?php } endwhile;
        wp_reset_postdata(); ?>
</div>