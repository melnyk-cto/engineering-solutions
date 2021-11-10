<?php /* Template Name: Page - Project Study */ ?>
<?php get_header(); ?>
<main class='project-study'>
    <section class='banner'>
        <a href='#requirements' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-study-banner.png' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>Power System Study for a wash bay </h1>
                    <a href='<?php echo home_url('/'); ?>contact' class='btn'>Contact us</a>
                </div>
            </div>
        </div>
    </section>
    <section id="requirements" class='requirements'>
        <div class='container'>
            <div class='requirements-inner'>
                <div class='requirements-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/requirements-image.png' alt=''>
                </div>
                <div class='requirements-description'>
                    <h2>Project <span>requirements</span></h2>
                    <p>
                        <span>Cobra Structures</span>, our customer and a North American fabric provider, requested an
                        Arc Flash
                        Power System Study to be developed for a wash bay installation at a mining site in the Canadian
                        Prairies. The purpose of the study was to ensure both in Utility-fed and in generator-fed
                        scenarios, the incident energy will not exceed the required level and the protective device
                        settings will be selected properly to allow for an immediate trip on fault to minimize the risk
                        for the site personnel.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class='solutions'>
        <div class='container'>
            <div class='solutions-description'>
                <h2><span>Solutions</span></h2>
                <p>
                    <span>Engineering Solutions</span> developed a complex Power System Study which consisted of the
                    following
                    parts:
                </p>
                <ul class='description-list'>
                    <li>Power Flow Study;</li>
                    <li>Short Circuit Study;</li>
                    <li>Protective Device Coordination Study;</li>
                    <li>Arc Flash Analysis & labels.</li>
                </ul>
            </div>
            <div class='solutions-images'>
                <div class='solutions-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/solution-image.jpg' alt=''>
                </div>
                <div class='solutions-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/warning-image.jpg' alt=''>
                </div>
            </div>
        </div>
    </section>
    <section class='outcome'>
        <div class='container'>
            <div class='outcome-description'>
                <h2>Project <span>outcome</span></h2>
                <p>
                    Based on the Power System Study produced it became obvious one of the circuit breakers would not
                    trip on an Arc fault at the distribution panel bus. Therefore, the replacement circuit breaker
                    has been proposed and procured. As a result, the new breaker installed would effectively trip on
                    Arc fault, FCT (fault clearing time) has been limited to levels allowed by the Canadian safety
                    standards. Arc Flash labels have been created for equipment to indicate the Arc Flash hazard and
                    level of PPE required.
                </p>
                <p>
                    The Power System Study has been well accepted by the customer and the site team, which accepted
                    the breaker change proposed and the wash bay installation has been successfully powered up.
                </p>
            </div>
        </div>
    </section>
    <section class='testimonial'>
        <div class='container'>
            <h2><span>Testimonial</span></h2>
            <div class='testimonial-slider'>
                <div class='swiper-container testimonial-swiper'>
                    <div class='swiper-wrapper'>
                        <div class='swiper-slide'>
                            <div class='testimonial-item'>
                                <div class='country'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/canada.svg' alt=''>
                                </div>
                                <div class='item-title'>
                                    <h4>Curtis Kuczera</h4>
                                    <p>General Manager at Cobra Structures</p>
                                </div>
                                <p>
                                    With not much guidance and a hands-on approach, this friendly freelancer promptly
                                    created incredible renders of my unique system. Sold more product with the BEST
                                    resulting promotional materials!!!
                                </p>
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
<script>
    localStorage.setItem('interest_services', '4');
</script>
<?php get_footer(); ?>
