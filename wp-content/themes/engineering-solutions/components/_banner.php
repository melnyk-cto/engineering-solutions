<?php if (get_field('banner-title')): ?>
    <section class='banner <?php if (get_field('banner-black') === 'yes') echo 'black' ?>'>
        <?php
            if (get_field('banner-type') === 'Video') { ?>
                <video class='image' autoplay muted playsinline loop src='<?php echo get_field('banner-video')['url'] ?>'></video>
            <?php } else { ?>
                <img class='image' src='<?php echo get_field('banner-background')['url'] ?>' alt=''>
            <?php } ?>
        <div class='overlay'></div>
        <div class='container'>
            <div class='banner-inner'>
                <div class='banner-description'>
                    <h1><?php echo get_field('banner-title') ?></h1>
                    <?php if (get_field('banner-description')) { ?>
                        <h3><?php echo get_field('banner-description') ?></h3>
                    <?php } ?>
                    <a href='<?php echo get_field('banner-button')['url'] ?>'
                       class='btn'><?php echo get_field('banner-button')['title'] ?></a>
                </div>
            </div>
        </div>
        <div class='go-to-down'>
            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/go-to-down.svg' alt=''>
        </div>
    </section>
<?php endif; ?>