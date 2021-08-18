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
            <h3>Just message us and let us discuss how we can help provide solutions for you! </h3>
            <a href='#' class='btn'>Get in touch</a>
        </div>
    </div>
    <div class='footer-center'>
        <div class='container'>
            <div class='footer-center-inner'>
                <div class='footer-center-logo'>
                    <a href='#' class='footer-logo'>
                        Logo
                        <!--                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/logo.svg' alt=''>-->
                    </a>
                    <a href='mailto:info@engineering-solutions.org' class='footer-email'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/email.svg' alt=''>
                        info@engineering-solutions.org
                    </a>
                </div>
                <div class='footer-center-service'>
                    <h4>Services</h4>
                    <a href='<?php echo home_url( '/' ); ?>/services-rendering'>Lighting design & rendering services</a>
                    <a href='<?php echo home_url( '/' ); ?>/services-electrical'>Electrical design & CAD/BIM services</a>
                    <a href='<?php echo home_url( '/' ); ?>/services-studies'>Power System Studies</a>
                    <a href='<?php echo home_url( '/' ); ?>/services-software'>Unity 3D/C# software development</a>
                </div>
                <div class='footer-center-about'>
                    <h4>About</h4>
                    <a href='#'>Our team</a>
                    <a href='#'>Our projects</a>
                    <a href='#'>Our clients</a>
                </div>
                <div class='footer-center-contact'>
                    <h4>Contact</h4>
                    <a href='#'>Leave us a message</a>
                    <a href='#'>Request a quote</a>
                    <div class='footer-socials'>
                        <a href='#'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/linkedIn.svg' alt=''>
                        </a>
                        <a href='#'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/messages.svg' alt=''>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='footer-bottom'>
        <div class='container'>
            <p>Copyright© 2021 Engineering Solutions | All Rights Reserved</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
