<?php /* Template Name: Page - Projects */ ?>
<?php get_header(); ?>
<main class='projects'>
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
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/projects-banner.jpg' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>PROJECTS</h1>
                    <a href='#' class='btn'>Get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <section class='services'>
        <div class='container'>
            <div class='services-inner'>
                <div class='services-item'>
                    <a href='#'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-image-1.jpg' alt=''>
                        <div class='item-title'>
                            <h5>Power System Studies</h5>
                        </div>
                    </a>
                </div>
                <div class='services-item'>
                    <a href='#'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-image-2.jpg' alt=''>
                        <div class='item-title'>
                            <h5>Electrical design & CAD/BIM services</h5>
                        </div>
                    </a>
                </div>
                <div class='services-item'>
                    <a href='#'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-image-3.jpg' alt=''>
                        <div class='item-title'>
                            <h5>Lighting design & rendering services</h5>
                        </div>
                    </a>
                </div>
                <div class='services-item'>
                    <a href='#'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-image-4.jpg' alt=''>
                        <div class='item-title'>
                            <h5>Unity 3D/C# software development</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
