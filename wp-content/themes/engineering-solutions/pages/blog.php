<?php /* Template Name: Page - Blog */ ?>
<?php get_header(); ?>
<main class='blog-page'>
    <section class='banner'>
        <a href='#blog' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/blog-banner.jpg' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>BLOG</h1>
                    <a href='<?php echo home_url('/'); ?>contact' class='btn'>Get in touch</a>
                </div>
            </div>
        </div>
    </section>
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
<script>
  localStorage.setItem('interest_services', '4');
</script>
<?php get_footer(); ?>
