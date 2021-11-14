<?php /* Template Name: Page - Clients */ ?>
<?php get_header(); ?>
<main class='clients'>
    <section class='banner'>
        <a href='#' class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </a>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/clients-banner.png' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>OUR CLIENTS</h1>
                    <a href='<?php echo home_url('/'); ?>contact' class='btn'>Get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <section class='map'>
        <div class='map-description'>
            <div class='description-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/blog-image.png' alt=''>
            </div>
            <div class='description-content'>
                <a href='#' class='street'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/geolocation.svg' alt=''>
                    street
                </a>
                <h3>Lighting Design for a mine</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            </div>
        </div>
        <div class='map-image'>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162758.47733364918!2d30.39260931920561!3d50.40195139720131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1635166231534!5m2!1sru!2sua"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/work-item-image-1.png'
                                         alt=''>
                                </div>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/australia.svg'
                                             alt=''>
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
                                <img src='<?php echo get_template_directory_uri() ?>/assets/images/work-item-image-2.png'
                                     alt=''>
                            </div>
                            <div class='work-item'>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/australia.svg'
                                             alt=''>
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
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/canada.svg'
                                             alt=''>
                                    </div>
                                    <h4>Chaitanya Karathia</h4>
                                    <p>Electrical specialist at ANMAR</p>
                                </div>
                                <div class='item-description'>
                                    <p>
                                        I worked with Roman for a pig caster project. I must say he and his team are
                                        working very hard and have a good understanding of electrical engineering
                                        drawings / documents. Most of the time his responses for the drawings/documents
                                        are prompt, fast & innovative. Also, he collects all the required inputs for
                                        documents preparation in advance and clarifies the doubts related to local
                                        codes/regulations, which helps him to deliver the documents in a timely manner.
                                        He and his team follow good work ethics, believe in customer satisfaction, and
                                        always put extra efforts to achieve that. Overall, I would say hardworking and
                                        very supportive.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='work-item'>
                                <div class='item-title'>
                                    <div class='item-title-image'>
                                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/canada.svg'
                                             alt=''>
                                    </div>
                                    <h4>Michael Gellert</h4>
                                    <p>President at busSTRUT</p>
                                </div>
                                <div class='item-description'>
                                    <p>
                                        With not much guidance and a hands-on approach, this friendly freelancer
                                        promptly created incredible renders of my unique system. Sold more product with
                                        the BEST resulting promotional materials!!!
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
<script>
    localStorage.setItem('interest_services', '4');
</script>
<?php get_footer(); ?>
