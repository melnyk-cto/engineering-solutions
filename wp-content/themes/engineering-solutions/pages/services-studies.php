<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <!-- <link rel="shortcut icons" href="assets/images/favicon.ico" type="image/x-icons">-->
    <meta name="theme-color" content="#e4a11b">
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Power System Studies</title>
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
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/loupe.svg' alt=''>
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
<main class='studies'>
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
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/studies-banner.jpg' alt=''>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1>Power System Studies</h1>
                    <a href='#' class='btn'>Get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <section class='studies-description'>
        <div class='container'>
            <div class='studies-description-content'>
                <p>
                    Power system studies are essential tools in understanding the expected performance of an electrical
                    system and determining the severity of a fault or other unexpected event.
                </p>
                <p>
                    There are many different types of power system studies, each with their own special purpose and
                    calculation method. Each analysis is unique to a particular power system, any changes within the
                    system can affect the results of the analysis and requires recalculation.
                </p>
                <p>
                    The following types of power system study are the most common studies Engineering Solutions produce:
                </p>
                <ul class='description-list'>
                    <li>Load flow study</li>
                    <li>Short circuit calculation</li>
                    <li>Protective device coordination study</li>
                    <li>Arc-flash hazard analysis</li>
                </ul>
            </div>
        </div>
    </section>
    <section class='study'>
        <div class='container'>
            <div class='study-inner'>
                <h2>Load <span>Flow Study</span></h2>
                <div class='study-description'>
                    <p>
                        A load flow study determines the active and reactive power, voltage, current, and power factor
                        throughout an electrical system. Load flow studies provide an analysis of all possible operating
                        scenarios and identifies overloaded equipment.
                    </p>
                    <p>
                        Included within the load flow study is a tabulation of the data used to model the system
                        components and a corresponding one-line diagram. Descriptions of the scenarios evaluated and the
                        basis for each are also found within the study, along with:
                    </p>
                    <ul>
                        <li>
                            <span>1.</span>
                            Tabulations of power and current flow versus equipment ratings – Identifies the percentage
                            of rated load and the scenario for which the percentage is based, noting any overloaded
                            quipment within the system.
                        </li>
                        <li>
                            <span>2.</span>
                            Tabulations of system voltages versus equipment ratings – Identifies the percentage of rated
                            voltage and the scenario for which the percentage is based, noting voltage levels that fall
                            outside the ranges recommended by equipment manufacturers.
                        </li>
                        <li>
                            <span>3.</span>
                            Tabulations of system real and reactive power losses, noting areas of concern along with
                            conclusions and recommendations from the engineer performing the study.
                        </li>
                    </ul>
                </div>
                <div class='study-images'>
                    <div class='study-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/study-image.jpg' alt=''>
                    </div>
                    <div class='study-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/study-image.jpg' alt=''>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='calculation'>
        <div class='container'>
            <h2>Short <span>Circuit Calculation</span></h2>
            <div class='calculation-inner'>
                <div class='calculation-description'>
                    <p>
                        The purpose of the short circuit study is to determine the ability of each component within an
                        electrical system to withstand and/or interrupt the system current. Short circuit studies
                        provide an analysis of all possible operating scenarios, which will be influenced by the proposed
                        additions or changes to the power distribution system.
                    </p>
                    <p>
                        Information contained within the study include tabulations of the data used to model the system
                        components and a corresponding one-line diagram. Descriptions of the scenarios evaluated, and
                        identification of the scenario used to evaluate equipment short-circuit current ratings are also
                        included in the study.
                    </p>
                    <p>
                        Tabulations of equipment short-circuit current ratings versus available fault duties can be
                        found in short circuit studies. The study report should clearly identify which equipment have
                        insufficient ratings.
                    </p>
                </div>
                <div class='calculation-images'>
                    <div class='calculation-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/calculation-image-1.jpg' alt=''>
                    </div>
                    <div class='calculation-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/calculation-image-2.jpg' alt=''>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='coordination-study'>
        <div class='container'>
            <div class='coordination-study-inner'>
                <div class='coordination-study-description'>
                    <h2>Protective <span>Device Coordination Study</span></h2>
                    <p>
                        The coordination study determines the extent of overcurrent protective device coordination
                        within an electrical system and provides an analysis of all possible operating scenarios which
                        will be or have been influenced by the proposed additions or changes to the power distribution
                        system. Good selectivity provides optimum protection of electrical distribution systems when
                        fault conditions such as overloads, short circuits, arc flash, earth faults etc. occur.
                    </p>
                </div>
                <div class='coordination-study-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/coordination-study-image.png' alt=''>
                </div>
            </div>
        </div>
    </section>
    <section class='analysis'>
        <div class='container'>
            <div class='analysis-inner'>
                <div class='analysis-image'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/analysis-image.jpg' alt=''>
                </div>
                <div class='analysis-description'>
                    <h2>Arc-Flash <span>Hazard Analysis</span></h2>
                    <p>
                        The purpose of the arc-flash analysis is to determine the arc-flash incident energy levels and
                        flash-protection boundary distances of electrical equipment based on results found in
                        short-circuit and coordination studies. The analysis is performed under worst-case arc-flash
                        conditions for all modes of operation and provides an analysis of all possible operating
                        scenarios which will be, or have been influenced by, the proposed or completed additions to the
                        subject system.
                    </p>
                    <p>
                        Short circuit and coordination studies are performed to determine the available energy of an
                        electrical system and the expected clearing time of protective devices, whereas the arc-flash
                        hazard analysis determines the arc flash boundary and calculates the incident energy at each
                        fault location at the prescribed working distance. Based on this information, the arc-flash
                        hazard PPE category for the calculated incident energy level can be specified along with the arc
                        flash boundary at each fault location.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class='warning'>
        <div class='container'>
            <div class='warning-inner'>
                <div class='warning-description'>
                    <p>
                        Descriptions of the scenarios evaluated and identification of the scenario used to develop
                        incident-energy levels are included in the study report. Any potential system operating modes
                        including tie-breaker positions, and parallel generation are also identified within the
                        arc-flash hazard analysis as these conditions will have an effect on the available incident
                        energy.
                    </p>
                    <p>
                        Arc Flash Labels identify potential hazards with energized switch boards, panel boards, control
                        panels and much more. Standard arc flash labels are available with either "Warning" or "Danger"
                        headers. Write-on labels are also available. Arc Flash labels indicate the equipment-specific
                        hazard information. These labels meet all current OSHA, NFPA, NEC and NFPA 70E requirements.
                    </p>
                </div>
                <div class='warning-images'>
                    <div class='warning-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/warning-image.jpg' alt=''>
                    </div>
                    <div class='warning-image'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/warning-image.jpg' alt=''>
                    </div>
                </div>
            </div>
            <a href='#' class='btn'>Request a quote </a>
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