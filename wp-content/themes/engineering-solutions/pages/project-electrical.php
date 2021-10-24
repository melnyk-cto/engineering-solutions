<?php /* Template Name: Page - Project Electrical */ ?>
<?php get_header(); ?>
<main class='project-electrical'>
    <section class='banner'>
        <a href='#requirements' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-electrical-banner.jpg' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>Electrical design for a steel making company</h1>
                    <a href='<?php echo home_url('/'); ?>contact' class='btn'>Contact us</a>
                </div>
            </div>
        </div>
    </section>
    <section id="requirements" class='requirements'>
        <div class='container'>
            <div class='requirements-inner'>
                <div class='requirements-description'>
                    <h2>Project <span>requirements</span></h2>
                    <p>
                        Our client (Anmar), an international installation company, requested electrical design services
                        for a new pig iron caster at a steel processing facility in Ontario, Canada. The scope was to
                        deliver design support services for the new addition of the plant, which included an electrical
                        room, warehouse, and new conveyor equipment. As multidisciplinary cooperation was involved, it
                        became critical to coordinate the electrical part of the design with other disciplines in a 3D
                        modelling environment.
                    </p>
                </div>
                <div class='requirements-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-electrical-requirements-image.jpg'
                         alt=''>
                </div>
            </div>
        </div>
    </section>
    <section class='solutions'>
        <div class='container'>
            <div class='solutions-inner'>
                <div class='solutions-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-electrical-solution-image.jpg'
                         alt=''>
                </div>
                <div class='solutions-description'>
                    <h2><span>Solutions</span></h2>
                    <p>
                        From the very start of the project until its completion in more than a year, Engineering
                        Solutions
                        provided the following services for the project:
                    </p>
                    <ul class='description-list'>
                        <li>Complex ­power system study for normal power & emergency power scenarios;</li>
                        <li>Electrical room layout;</li>
                        <li>Lighting design and simulations;</li>
                        <li>Electrical drafting and BIM modelling services.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class='outcome'>
        <div class='container'>
            <div class='outcome-description'>
                <h2>Project <span>outcome</span></h2>
                <p>
                    The pig iron caster was successfully commissioned and has the capability of casting up to one
                    million tons of pig iron per year. The addition of the pig iron caster will allow the steel facility
                    to fully capitalize on increased capacity resulting from the recently completed blast furnace
                    upgrade project.
                </p>
                <p>
                    Accurate design produced by Engineering Solutions helped the customer to avoid issues by helping
                    coordinate all disciplines, deliver accurate calculations and electrical designs for the steel
                    facility.
                </p>
            </div>
            <div class='outcome-images'>
                <div class='outcome-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-electrical-outcome-image-1.jpg'
                         alt=''>
                </div>
                <div class='outcome-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/project-electrical-outcome-image-2.jpg'
                         alt=''>
                </div>
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
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/canada.svg'
                                         alt=''>
                                </div>
                                <div class='item-title'>
                                    <h4>Chaitanya Karathia</h4>
                                    <p>Electrical specialist at ANMAR</p>
                                </div>
                                <p>
                                    I worked with Roman for a pig caster project. I must say he and his team are working
                                    very hard and have a good understanding of electrical engineering drawings /
                                    documents. Most of the time his responses for the drawings/documents are prompt,
                                    fast & innovative. Also, he collects all the required inputs for documents
                                    preparation in advance and clarifies the doubts related to local codes/regulations,
                                    which helps him to deliver the documents in a timely manner. He and his team follow
                                    good work ethics, believe in customer satisfaction, and always put extra efforts to
                                    achieve that. Overall, I would say hardworking and very supportive.
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
<?php get_footer(); ?>
