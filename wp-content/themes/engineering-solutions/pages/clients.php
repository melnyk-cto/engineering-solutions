<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <!-- <link rel="shortcut icons" href="assets/images/favicon.ico" type="image/x-icons">-->
    <meta name="theme-color" content="#e4a11b">
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>OUR CLIENTS</title>
    <!-- Start Of Social Graph Protocol Meta Data -->
    <meta property="og:locale" content="en_US" />
    <!-- <meta property="og:url" content="http://example.com/"/>-->
    <meta property="og:type" content="website" />
    <!-- <meta property="og:title" content="Name Website"/>-->
    <!-- End Of Social Graph Protocol Meta Data -->
    <link rel='stylesheet' href='../assets/css/main.css'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>
<header class='header'>
    <div class='container'>
        <div class='header-inner'>
            <a href='<?php echo home_url( '/' ); ?>' class='logo'>
                Logo
<!--                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/logo.svg ' alt=''>-->
            </a>
            <div class='header-menu'>
                <nav class='menu-list'>
                    <a href='<?php echo home_url( '/' ); ?>/team' class='menu-item'>OUR TEAM</a>
                    <a href='javascript: void(0)' class='menu-item menu-item-services'>
                        OUR SERVICES
                        <ul class='drop-down-list'>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>/services-rendering'>Lighting Design & Rendering Services</a>
                            </li>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>/services-electrical'>Electrical Design & CAD/BIM Services</a>
                            </li>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>/services-studies'>Power System Studies</a>
                            </li>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>/services-software'>Unity 3D/C# software development</a>
                            </li>
                        </ul>
                    </a>
                    <a href='<?php echo home_url( '/' ); ?>/clients' class='menu-item'>OUR CLIENTS</a>
                    <a href='<?php echo home_url( '/' ); ?>/projects' class='menu-item'>PROJECTS</a>
                    <a href='<?php echo home_url( '/' ); ?>/blog' class='menu-item'>BLOG</a>
                    <a href='<?php echo home_url( '/' ); ?>/contact' class='menu-item'>CONTACT US</a>
                </nav>
            </div>
            <div class='search'>
                <form action="/search/" target="_blank" class="form-search">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/loupe.svg' alt=''>
                    <input type="hidden" name="searchid" value="808327">
                    <input type="search" name="text" placeholder="Search...">
                </form>
            </div>
            <div class='burger'>
                <span></span>
            </div>
        </div>
    </div>
</header>
<main class='clients'>
    <div class='socials'>
        <a href='#' class='socials-linkedin'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/contact-linkedIn.svg' alt=''>
        </a>
        <a href='#' class='socials-email'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/contact-email.svg' alt=''>
        </a>
    </div>
    <section class='banner'>
        <a href='#' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images<?php echo home_url( '/' ); ?>/clients-banner.jpg' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>OUR CLIENTS</h1>
                    <a href='#' class='btn'>Get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <section class='map'>
        <div class='map-description'>
            <div class='description-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/map-description-image.jpg' alt=''>
            </div>
            <div class='description-content'>
                <a href='#' class='street'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/geolocation.svg' alt=''>
                    street
                </a>
                <h3>Lighting Design for a mine</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                <a href='#' class='more'>
                    more
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow-down.svg' alt=''>
                </a>
            </div>
        </div>
        <div class='map-image'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/map.png' alt=''>
        </div>
    </section>
    <section class='work'>
        <div class='container'>
            <h2><span>They say</span> about our work</h2>
            <div class='work-slider'>
                <div class="swiper-container work-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class='work-item'>
                                <div class='work-item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/work-item-image-1.png' alt=''>
                                </div>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/australia.svg' alt=''>
                                    </div>
                                    <h4>Ben Morton </h4>
                                    <p>Technical director at Leitech-Australia</p>
                                </div>
                                <div class='item-description'>
                                    <p>
                                        Great job, done promptly & well presented. I have no hesitation whatsoever in
                                        recommending Roman to the community!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='work-item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/work-item-image-2.png' alt=''>
                            </div>
                            <div class='work-item'>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/australia.svg' alt=''>
                                    </div>
                                    <h4>Ken Hornsey </h4>
                                    <p>Operations manager at Leitech-Australia</p>
                                </div>
                                <div class='item-description'>
                                    <p>
                                        Very professional work. The use of initiative to provide the outcome where my
                                        own knowledge/instructions were lacking was great.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='work-item'>
                                <div class='work-item-image'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/work-item-image-1.png' alt=''>
                                </div>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/australia.svg' alt=''>
                                    </div>
                                    <h4>Ben Morton </h4>
                                    <p>Technical director at Leitech-Australia</p>
                                </div>
                                <div class='item-description'>
                                    <p>
                                        Great job, done promptly & well presented. I have no hesitation whatsoever in
                                        recommending Roman to the community!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='work-item-image'>
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/work-item-image-2.png' alt=''>
                            </div>
                            <div class='work-item'>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/australia.svg' alt=''>
                                    </div>
                                    <h4>Ken Hornsey </h4>
                                    <p>Operations manager at Leitech-Australia</p>
                                </div>
                                <div class='item-description'>
                                    <p>
                                        Very professional work. The use of initiative to provide the outcome where my
                                        own knowledge/instructions were lacking was great.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
</main>
<footer class='footer'>
    <div class='footer-center'>
        <div class='container'>
            <div class='footer-center-inner'>
                <div class='footer-center-logo'>
                    <a href='<?php echo home_url( '/' ); ?>' class='footer-logo'>
                        Logo
<!--                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/logo.svg' alt=''>-->
                    </a>
                    <a href='mailto:info@engineering-solutions.org' class='footer-email'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/email.svg' alt=''>
                        info@engineering-solutions.org
                    </a>
                </div>
                <div class='footer-center-service'>
                    <h4>Services</h4>
                    <a href='<?php echo home_url( '/' ); ?>/services-rendering'>Lighting design & rendering services</a>
                    <a href='<?php echo home_url( '/' ); ?>/services-electrical'>Electrical design & CAD/BIM services</a>
                    <a href='<?php echo home_url( '/' ); ?>/services-studies'>Power System Studies</a>
                    <a href='<?php echo home_url( '/' ); ?>/services-software'>Unity 3D/C# software development</a>
                </div>
                <div class='footer-center-about'>
                    <h4>About</h4>
                    <a href='#'>Our team</a>
                    <a href='#'>Our projects</a>
                    <a href='#'>Our clients</a>
                </div>
                <div class='footer-center-contact'>
                    <h4>Contact</h4>
                    <a href='#'>Leave us a message</a>
                    <a href='#'>Request a quote</a>
                    <div class='footer-socials'>
                        <a href='#'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/linkedIn.svg' alt=''>
                        </a>
                        <a href='#'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/messages.svg' alt=''>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='footer-bottom'>
        <div class='container'>
            <p>Copyright© 2021 Engineering Solutions | All Rights Reserved</p>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src='../assets/js/main.js'></script>
</body>
</html>