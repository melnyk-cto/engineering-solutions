<?php /* Template Name: Page - Contacts */ ?>
<?php
    wp_enqueue_script('contact-us-js', get_stylesheet_directory_uri() . '/assets/js/contact-us.js');
?>
<?php get_header(); ?>
<main class='contacts'>
    <section class='contact'>
        <div class='contact-title'>
            <div class='container'>
                <h1>Contact us</h1>
                <h3>Select service of interest</h3>
            </div>
        </div>
        <div class='contact-inner'>
            <div class='container'>
                <form class='contact-form'>
                    <?php if (have_rows('services_content')): ?>

                        <div class='contact-buttons'>
                            <?php while (have_rows('services_content')) : the_row();
                                if (get_row_layout() == 'services_items'):
                                    $servicesContent = get_sub_field('services_name');
                                    $servicesId = get_sub_field('services_id');
                                    ?>
                                    <label>
                                        <input type='radio'
                                               name='radio-services'
                                               data-id='<?php echo $servicesId; ?>'
                                               value='<?php echo $servicesContent; ?>'>
                                        <span><?php echo $servicesContent; ?></span>
                                    </label>
                                <?php endif; endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <label class="input">
                        <span class="label">First name*</span>
                        <input type='text' required name='first-name'>
                    </label>
                    <label class="input">
                        <span class="label">Last name*</span>
                        <input type='text' required name='last-name'>
                    </label>
                    <label class="input">
                        <span class="label">Company*</span>
                        <input type='text' required name='your-company'>
                    </label>
                    <label class="input">
                        <span class="label">Email*</span>
                        <input type='email' required name='your-email'>
                    </label>
                    <label class='label-message input'>
                        <span class="label">Message*</span>
                        <textarea name='your-message'></textarea>
                    </label>
                    <div class="wrapper-buttons">
                        <label>
                            <input name='your-file' type='file' class='file' />
                            <span class="btn btn-second upload-js">Upload Files</span>
                        </label>
                        <button type='submit' class='btn submit'>Submit</button>
                    </div>
                </form>
            </div>
            <div class='contact-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/contact-image.png' alt=''>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
