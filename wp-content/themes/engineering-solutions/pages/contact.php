<?php /* Template Name: Page - Contacts */ ?>
<?php
    wp_enqueue_script('contact-us-js', get_stylesheet_directory_uri() . '/assets/js/contact-us.js');
?>
<?php get_header(); ?>
<main class='contacts'>
    <section class='contact'>
        <div class='contact-title'>
            <div class='container'>
                <h1>Сontact us</h1>
                <h3>Select services of interest</h3>
            </div>
        </div>
        <div class='contact-inner'>
            <div class='container'>
                <div class='contact-form'>
                    <?php echo do_shortcode('[contact-form-7 id="46" title="Contact form"]') ?>
                </div>
            </div>
            <div class='contact-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/contact-image.png' alt=''>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
