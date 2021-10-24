<?php /* Template Name: Page - Services Software */ ?>
<?php get_header(); ?>
<main class='software'>
    <section class='banner'>
        <a href='#software-description' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/software-banner.jpg' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>Unity 3D/C# software development</h1>
                    <a href='<?php echo home_url('/'); ?>contact' class='btn'>Get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <section id="software-description" class='software-description'>
        <div class='container'>
            <div class='software-description-content'>
                <p>
                    In addition to our engineering services, our team can provide Unity 3D/C# software development
                    services with a primary focus on Windows and web platforms.
                </p>
                <p>
                    Whether it is a proof of concept development, web-scraping app, or database management software,
                    Engineering Solutions has great experience in delivering customized software solutions that can
                    streamline and enhance your business in the following scenarios:
                </p>
                <ul class='description-list'>
                    <li>
                        Minimize routine work of operators
                    </li>
                    <li>
                        Automate internet searches
                    </li>
                    <li>
                        Minimize human error while working with tabulations, databases, files, etc.
                    </li>
                    <li>
                        Creation of a social network messenger chat bot that will interact with potential customers
                    </li>
                    <li>
                        Creation of applications for helping personnel in factory environments efficiently retrieve
                        relevant data for plant assets
                    </li>
                    <li>
                        Creation of augmented reality solutions for staff training, operating instructions and
                        remote support
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class='software-video'>
        <div class='container'>
            <div class='software-video-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/software-image.png' alt=''>
            </div>
            <a href='<?php echo home_url('/'); ?>contact' class='btn'>Request a quote</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
