<?php
    wp_enqueue_script('ajax-form', get_theme_file_uri('/assets/js/testimonial.js'), array('jquery'), 1.0, true);
    wp_localize_script('ajax-form', 'ajax_form_object', array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax-form-nonce'),
    ));
?>
    <script>
      const testimonial = "<?php echo get_field('testimonial_filter') ?>";
    </script>

<?php if (get_field('testimonial_filter')): ?>
    <section style='order: <?php echo get_field('testimonial_order'); ?>;' class='testimonial'>
        <div class='container'>
            <h2><span>Testimonial</span></h2>
            <div class='work-slider'>
                <h4>Reviews is loading...</h4>
            </div>
        </div>
    </section>
<?php endif; ?>