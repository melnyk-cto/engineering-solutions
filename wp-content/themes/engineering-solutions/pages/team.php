<?php /* Template Name: Page - Team */ ?>
<?php get_header(); ?>
<main class='team'>
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
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/team-image-1.png' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>OUR TEAM</h1>
                    <a href='#' class='btn'>Сontact us</a>
                </div>
            </div>
        </div>
    </section>
    <div class='team-content'>
        <div class='container'>
            <div class='team-content-inner'>
                <div class='team-content-description'>
                    <p>
                        Our team of Engineering Solutions is a team of driven experts with each having their own
                        expertise and strengths.
                    </p>
                    <p>Our team consists of people proficient in</p>
                    <ul class='description-list'>
                        <li>project management</li>
                        <li>electrical design</li>
                        <li>lighting simulations and renderings</li>
                        <li>Power System analysis</li>
                        <li>software development.</li>
                    </ul>
                    <p>
                        Our combined skill set makes us a strong and effective team who will always collaborate to find
                        ways to bundle each other’s strengths to the benefit of the customer. What we all have in common
                        is that we are all passionate about providing our customers with excellent engineering services.
                    </p>
                </div>
                <div class='team-content-images'>
                    <div class='team-content-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/team-image-1.jpg' alt=''>
                    </div>
                    <div class='team-content-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/team-image-2.jpg' alt=''>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class='benefits'>
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
                            You’ll work with a honest and trusted team that believes that results matter for our clients
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
                            You’ll get the work done on time and on budget agreed
                        </p>
                    </div>
                </div>
            </div>
            <a href='#' class='btn'>Get in touch</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>
