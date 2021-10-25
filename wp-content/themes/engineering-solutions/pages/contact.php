<?php /* Template Name: Page - Contacts */ ?>
<?php get_header(); ?>
<main class='contacts'>
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
                        <label>
                            <input type="radio" name="services" checked>
                            <span>Lighting design & rendering services</span>
                        </label>
                        <label>
                            <input type="radio" name="services">
                            <span>Electrical design & CAD/BIM services</span>
                        </label>
                        <label>
                            <input type="radio" name="services">
                            <span>Power System Studies</span>
                        </label>
                        <label>
                            <input type="radio" name="services">
                            <span>Unity 3D/C# software development</span>
                        </label>
                        <label>
                            <input type="radio" name="services">
                            <span>Other</span>
                        </label>
                    </div>
                    <form action=''>
                        <label>
                            <span>First name*</span>
                            <input type='text'>
                        </label>
                        <label>
                            <span>Last name*</span>
                            <input type='text'>
                        </label>
                        <label>
                            <span>Company*</span>
                            <input type='text'>
                        </label>
                        <label>
                            <span>Email*</span>
                            <input type='text'>
                        </label>
                        <label class='label-message'>
                            <span>Message*</span>
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
<?php get_footer(); ?>
