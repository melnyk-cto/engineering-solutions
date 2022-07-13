<?php /* Template Name: Page - Blog */ ?>
<?php get_header(); ?>
<main class='blog-page'>
    <?php include get_template_directory() . '/components/_banner.php'; ?>
    <section class='blog'>
        <div class='container'>
            <div class='blog-inner'>
                <?php
                    $args = [
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 10,
                        'orderby' => 'date'
                    ];
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <a href='<?php the_permalink(); ?>' class='blog-item'>
                            <div class='item-image'>
                                <img src='<?php echo get_field('image_post')['url'] ?>' alt=''>
                            </div>
                            <div class='item-description'>
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
