<?php get_header(); ?>
<main class='single-blog-page'>
    <section class='blog'>
        <div class='container'>
            <div class='blog-inner'>
                <div class='blog-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_field('image_post')['url'] ?>' alt=''>
                    </div>
                    <div class='item-description'>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
  localStorage.setItem('interest_services', '4');
</script>
<?php get_footer(); ?>
