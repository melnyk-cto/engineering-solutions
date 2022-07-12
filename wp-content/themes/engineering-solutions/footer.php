<?php
    /**
     * The template for displaying the footer
     *
     * Contains the opening of the #site-footer div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package WordPress
     * @subpackage Twenty_Twenty
     * @since 1.0.0
     */

?>
<footer class='footer'>
    <div class='footer-top'>
        <div class='container'>
            <h3><?php echo get_field('footer_cta_title', 'options') ?></h3>
            <a href='<?php echo get_field('footer_cta_link', 'options')['url'] ?>' class='btn'>
                <?php echo get_field('footer_cta_link', 'options')['title'] ?>
            </a>
        </div>
    </div>
    <div class='footer-center'>
        <div class='container'>
            <div class='footer-center-inner'>
                <div class='footer-center-logo'>
                    <a href='<?php echo home_url('/'); ?>' class='footer-logo'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/logo.svg' alt=''>
                    </a>
                    <a href='mailto:info@engineering-solutions.org' class='footer-email'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/email.svg' alt=''>
                        info@engineering-solutions.org
                    </a>
                </div>
                <div class='footer-center-service'>
                    <h4>Services</h4>
                    <a href='<?php echo home_url('/'); ?>services-lighting'>Lighting design & rendering services</a>
                    <a href='<?php echo home_url('/'); ?>services-electrical'>Electrical design & CAD/BIM services</a>
                    <a href='<?php echo home_url('/'); ?>services-studies'>Power System Studies</a>
                    <a href='<?php echo home_url('/'); ?>services-software'>Unity 3D/C# software development</a>
                </div>
                <div class='footer-center-about'>
                    <h4>About</h4>
                    <a href='<?php echo home_url('/'); ?>team'>Our team</a>
                    <a href='<?php echo home_url('/'); ?>projects'>Our projects</a>
                    <a href='<?php echo home_url('/'); ?>clients'>Our clients</a>
                </div>
                <div class='footer-center-contact'>
                    <h4>Contact</h4>
                    <a href='<?php echo home_url('/'); ?>contact'>Leave us a message</a>
                    <a href='<?php echo home_url('/'); ?>contact'>Request a quote</a>
                    <div class='footer-socials'>
                        <a href='https://www.linkedin.com/in/roman-iegorov/' target="_blank">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/linkedIn.svg'
                                 alt=''>
                        </a>
                        <a href='mailto:info@engineering-solutions.org' target="_blank">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/messages.svg'
                                 alt=''>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='footer-bottom'>
        <div class='container'>
            <p>© Copyright <?php echo date("Y"); ?> Engineering Solutions | All Rights Reserved</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
