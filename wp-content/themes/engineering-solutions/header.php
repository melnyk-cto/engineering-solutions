<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <!-- <link rel="shortcut icons" href="assets/images/favicon.ico" type="image/x-icons">-->
    <meta name="theme-color" content="#e4a11b">
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title><?php the_title_attribute(); ?></title>
    <!-- Start Of Social Graph Protocol Meta Data -->
    <meta property="og:locale" content="en_US" />
    <!-- <meta property="og:url" content="http://example.com/"/>-->
    <meta property="og:type" content="website" />
    <!-- <meta property="og:title" content="Name Website"/>-->
    <!-- End Of Social Graph Protocol Meta Data -->
    <?php wp_head(); ?>
</head>
<body>
<header class='header'>
    <div class='container'>
        <div class='header-inner'>
            <a href='<?php echo home_url('/'); ?>' class='logo'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/logo.svg' alt=''>
            </a>
            <?php include get_template_directory() . '/components/_header-menu.php'; ?>
            <!--            <div class='search'>-->
            <!--                <form action="/search/" target="_blank" class="form-search">-->
            <!--                    <img src='-->
            <?php //echo get_template_directory_uri() ?><!--/assets/images/icons/loupe.svg' alt=''>-->
            <!--                    <input type="hidden" name="searchid" value="808327">-->
            <!--                    <input type="search" name="text" placeholder="Search...">-->
            <!--                </form>-->
            <!--            </div>-->
            <div class='burger'>
                <span></span>
            </div>
        </div>
    </div>
</header>
<div class='socials'>
    <a href='https://www.linkedin.com/in/roman-iegorov/' class='socials-linkedin' target="_blank">
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/contact-linkedIn.svg' alt=''>
    </a>
    <a href='mailto:info@engineering-solutions.org' class='socials-email' target="_blank">
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/contact-email.svg' alt=''>
    </a>
</div>
<div class='alert d-none'>Unable to retrieve your location</div>