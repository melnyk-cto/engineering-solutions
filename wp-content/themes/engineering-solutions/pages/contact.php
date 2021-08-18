<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <!-- <link rel="shortcut icons" href="assets/images/favicon.ico" type="image/x-icons">-->
    <meta name="theme-color" content="#e4a11b">
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Сontact us</title>
    <!-- Start Of Social Graph Protocol Meta Data -->
    <meta property="og:locale" content="en_US" />
    <!-- <meta property="og:url" content="http://example.com/"/>-->
    <meta property="og:type" content="website" />
    <!-- <meta property="og:title" content="Name Website"/>-->
    <!-- End Of Social Graph Protocol Meta Data -->
    <link rel='stylesheet' href='../assets/css/main.css'>
</head>
<body>
<header class='header'>
    <div class='container'>
        <div class='header-inner'>
            <a href='<?php echo home_url( '/' ); ?>' class='logo'>
                Logo
                <!--                <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/logo.svg ' alt=''>-->
            </a>
            <div class='header-menu'>
                <nav class='menu-list'>
                    <a href='<?php echo home_url( '/' ); ?>/team' class='menu-item'>OUR TEAM</a>
                    <a href='javascript: void(0)' class='menu-item menu-item-services'>
                        OUR SERVICES
                        <ul class='drop-down-list'>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>/services-rendering'>Lighting Design & Rendering Services</a>
                            </li>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>/services-electrical'>Electrical Design & CAD/BIM Services</a>
                            </li>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>/services-studies'>Power System Studies</a>
                            </li>
                            <li>
                                <a href='<?php echo home_url( '/' ); ?>/services-software'>Unity 3D/C# software development</a>
                            </li>
                        </ul>
                    </a>
                    <a href='<?php echo home_url( '/' ); ?>/clients' class='menu-item'>OUR CLIENTS</a>
                    <a href='<?php echo home_url( '/' ); ?>/projects' class='menu-item'>PROJECTS</a>
                    <a href='<?php echo home_url( '/' ); ?>/blog' class='menu-item'>BLOG</a>
                    <a href='<?php echo home_url( '/' ); ?>/contact' class='menu-item'>CONTACT US</a>
                </nav>
            </div>
            <div class='search'>
                <form action="/search/" target="_blank" class="form-search">
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/loupe-dark.svg' alt=''>
                    <input type="hidden" name="searchid" value="808327">
                    <input type="search" name="text" placeholder="Search...">
                </form>
            </div>
            <div class='burger'>
                <span></span>
            </div>
        </div>
    </div>
</header>
<main class='contacts'>
    <div class='socials'>
        <a href='#' class='socials-linkedin'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/contact-linkedIn.svg' alt=''>
        </a>
        <a href='#' class='socials-email'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/contact-email.svg' alt=''>
        </a>
    </div>
    <section class='contact'>
        <div class='contact-title'>
            <div class='container'>
                <h1>Сontact us</h1>
                <h3>Select services of interest</h3>
            </div>
        </div>
        <div class='contact-inner'>
            <div class='container'>
                <div class='contact-form'>
                    <div class='contact-buttons'>
                        <a href='#'>Lighting design & rendering services</a>
                        <a href='#'>Electrical design & CAD/BIM services</a>
                        <a href='#'>Power System Studies</a>
                        <a href='#'>Unity 3D/C# software development</a>
                        <a href='#'>Other</a>
                    </div>
                    <form action=''>
                        <label>
                            <span>First name</span>
                            <input type='text'>
                        </label>
                        <label>
                            <span>Last name</span>
                            <input type='text'>
                        </label>
                        <label>
                            <span>Company</span>
                            <input type='text'>
                        </label>
                        <label>
                            <span>Email</span>
                            <input type='text'>
                        </label>
                        <label class='label-message'>
                            <span>Message</span>
                            <textarea rows='5'></textarea>
                        </label>
                        <div class='form-buttons'>
                            <button type='submit' class='btn btn-second'>upload files</button>
                            <button type='submit' class='btn'>submit</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class='contact-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/contact-image.png' alt=''>
            </div>
        </div>
    </section>
</main>
<footer class='footer'>
    <div class='footer-center'>
        <div class='container'>
            <div class='footer-center-inner'>
                <div class='footer-center-logo'>
                    <a href='<?php echo home_url( '/' ); ?>' class='footer-logo'>
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
<script src='../assets/js/main.js'></script>
</body>
</html>