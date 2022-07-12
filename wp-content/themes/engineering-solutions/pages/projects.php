<?php /* Template Name: Page - Projects */ ?>
<?php get_header(); ?>
<main class='projects'>
    <?php include get_template_directory() . '/components/_banner.php'; ?>

    <?php include get_template_directory() . '/components/_gallery-items.php'; ?>
</main>
<script>
  localStorage.setItem('interest_services', '4');
</script>
<?php get_footer(); ?>
