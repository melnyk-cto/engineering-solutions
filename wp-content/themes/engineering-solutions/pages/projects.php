<?php /* Template Name: Page - Projects */ ?>
<?php get_header(); ?>
<main class='projects'>
    <section class='banner'>
        <a href='#services' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/projects-banner.jpg' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>PROJECTS</h1>
                    <a href='<?php echo home_url('/'); ?>contact' class='btn'>Get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class='services'>
        <div class='container'>
            <div class='services-inner'>
                <div class='services-item'>
                    <a href='<?php echo home_url('/'); ?>project-electrical'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-4.png' alt=''>
                        <div class='item-title'>
                            <h5>Electrical design for a steel making company</h5>
                        </div>
                    </a>
                </div>
                <div class='services-item'>
                    <a href='<?php echo home_url('/'); ?>project-rendering'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-2.png' alt=''>
                        <div class='item-title'>
                            <h5>Photorealistic renderings for busSTRUT</h5>
                        </div>
                    </a>
                </div>
                <div class='services-item'>
                    <a href='<?php echo home_url('/'); ?>project-lighting'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-3.png' alt=''>
                        <div class='item-title'>
                            <h5>Lighting design for multiple retail stores</h5>
                        </div>
                    </a>
                </div>
                <div class='services-item'>
                    <a href='<?php echo home_url('/'); ?>project-study'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-1.png' alt=''>
                        <div class='item-title'>
                            <h5>Power System Study for a washbay</h5>
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
