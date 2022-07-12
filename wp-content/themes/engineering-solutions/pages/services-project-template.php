<?php /* Template Name: Page - Services, Project */ ?>
<?php


    wp_enqueue_script('rendering-js', get_stylesheet_directory_uri() . '/assets/js/rendering.js');
?>
<?php get_header(); ?>
    <main class='renderings'>
        <?php include get_template_directory() . '/components/_banner.php'; ?>

        <?php include get_template_directory() . '/components/_map-and-text.php'; ?>

        <?php include get_template_directory() . '/components/_big-image-slider.php'; ?>

        <?php include get_template_directory() . '/components/_small-image-slider.php'; ?>

        <?php include get_template_directory() . '/components/_full-screen-images.php'; ?>

        <?php include get_template_directory() . '/components/_image-by-left-right.php'; ?>

        <?php include get_template_directory() . '/components/_single-slider.php'; ?>

        <?php include get_template_directory() . '/components/_simple-content.php'; ?>

        <?php include get_template_directory() . '/components/_testimonial.php'; ?>
    </main>
    <script>
      localStorage.setItem('interest_services', '0');
    </script>
<?php get_footer(); ?>