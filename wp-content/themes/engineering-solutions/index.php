<?php /* Template Name: Page - Home */ ?>
<?php get_header(); ?>
<main class='home'>
    <section class='banner'>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/home-banner.png' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>Engineering Solutions</h1>
                    <h3>Results matter</h3>
                    <a href='<?php echo home_url('/'); ?>contact' class='btn'>Request a quote </a>
                </div>
            </div>
        </div>
        <a href='#benefits' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
    </section>
    <section id="benefits" class='benefits'>
        <div class='container'>
            <h2><span>Your benefits</span> of working with us</h2>
            <div class='benefits-list'>
                <div class='benefits-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/benefits-item-1.svg' alt=''>
                    </div>
                    <div class='item-description'>
                        <h5>Our values</h5>
                        <p>
                            You’ll work with a honest and trusted team that believes that great results matter for our
                            clients
                        </p>
                    </div>
                </div>
                <div class='benefits-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/benefits-item-2.svg' alt=''>
                    </div>
                    <div class='item-description'>
                        <h5>Our expertise</h5>
                        <p>
                            You’ll work with a professional design team who know what they’re doing and has proven
                            reviews from various businesses
                        </p>
                    </div>
                </div>
                <div class='benefits-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/benefits-item-3.svg' alt=''>
                    </div>
                    <div class='item-description'>
                        <h5>Our approach </h5>
                        <p>
                            You’ll benefit from working with a dedicated team with single point of contact for all
                            deliverables
                        </p>
                    </div>
                </div>
                <div class='benefits-item'>
                    <div class='item-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/benefits-item-4.svg' alt=''>
                    </div>
                    <div class='item-description'>
                        <h5>Our commitment</h5>
                        <p>
                            You’ll get the work done on time and with the agreed budget
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='services'>
        <div class='container'>
            <h2>Our <span>services</span></h2>
            <div class='services-inner'>
                <div class='services-item'>
                    <a href='<?php echo home_url('/'); ?>services-studies'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-image-1.jpg' alt=''>
                        <div class='item-title'>
                            <h5>Power System Studies</h5>
                        </div>
                    </a>
                </div>
                <div class='services-item'>
                    <a href='<?php echo home_url('/'); ?>services-electrical'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-image-2.jpg' alt=''>
                        <div class='item-title'>
                            <h5>Electrical design & CAD/BIM services</h5>
                        </div>
                    </a>
                </div>
                <div class='services-item'>
                    <a href='<?php echo home_url('/'); ?>services-rendering'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/services-image-3.jpg' alt=''>
                        <div class='item-title'>
                            <h5>Lighting design & rendering services</h5>
                        </div>
                    </a>
                </div>
                <div class='services-item'>
                    <a href='<?php echo home_url('/'); ?>services-software'>
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
<script>
    localStorage.setItem('interest_services', '4');
</script>
<?php get_footer(); ?>
