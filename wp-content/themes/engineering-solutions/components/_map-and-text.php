<?php if (get_field('map_and_text_image')): ?>
    <section id='renderings-content' class='renderings-content'>
        <div class='container'>
            <div class='renderings-content-inner'>
                <div class='renderings-content-image'>
                    <img src='<?php echo get_field('map_and_text_image')['url'] ?>'
                         alt=''>
                    <div class='renderings-content-quote'>
                        <p><?php echo get_field('map_and_text_quote') ?></p>
                    </div>
                </div>
                <div class='renderings-content-description'>
                    <?php echo get_field('map_and_text_description') ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>