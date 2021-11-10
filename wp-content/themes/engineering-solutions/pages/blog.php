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
    <section id="blog" class='blog'>
        <div class='container'>
            <div class='blog-inner'>
                <div class='blog-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/blog-image.png' alt=''>
                    </div>
                    <div class='item-description'>
                        <h4>Lighting design & rendering services</h4>
                        <p>
                            This method of adding the block and the icons will be available in the WordPress 5.6 release.
                        </p>
                    </div>
                </div>
                <div class='blog-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/blog-image.png' alt=''>
                    </div>
                    <div class='item-description'>
                        <h4>Lighting design & rendering services</h4>
                        <p>
                            This method of adding the block and the icons will be available in the WordPress 5.6 release.
                         </p>
                    </div>
                </div>
                <div class='blog-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/blog-image.png' alt=''>
                    </div>
                    <div class='item-description'>
                        <h4>Lighting design & rendering services</h4>
                        <p>
                            This method of adding the block and the icons will be available in the WordPress 5.6 release.
                        </p>
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
