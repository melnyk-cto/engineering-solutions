<?php
    /** The template for displaying 404 pages (not found)*/
    get_header(); ?>
    <main class='not-found'>
        <div class='container'>
            <div class='content'>
                <div class='left'>
                    <h1>404</h1>
                    <p>
                        This page isn't available. Sorry about that. <br />
                        Try searching for something else.
                    </p>
                    <label>
                        <input type='text' placeholder='Search...'>
                        <button type='button'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/loupe.svg' alt=''>
                        </button>
                    </label>
                    <ul>
                        <li><a href=''>Lighting design</a></li>
                        <li><a href=''>Power system studies</a></li>
                        <li><a href=''>BIM modelling</a></li>
                    </ul>
                    <div class='buttons'>
                        <a href='<?php echo home_url('/'); ?>' class='btn'>
                            go home
                        </a>
                        <a href='<?php echo home_url('/'); ?>contacts' class='btn'>
                            Сontact us
                        </a>
                    </div>
                </div>
                <div class='right'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/es.png' alt=''>
                </div>
            </div>
        </div>
    </main>
<?php get_footer();
