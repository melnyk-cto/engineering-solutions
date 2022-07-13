<?php /* Template Name: Page - Home */ ?>
<?php get_header(); ?>
<main class='home'>
    <?php include get_template_directory() . '/components/_banner.php'; ?>

    <?php if (have_rows('benefit_items', 'options')):
        $title = get_field('benefits-title', 'options'); ?>
        <section id="benefits" class='benefits'>
            <div class='container'>
                <h2><?php echo $title; ?></h2>
                <div class='benefits-list'>
                    <?php while (have_rows('benefit_items', 'options')) : the_row();
                        if (get_row_layout() == 'benefit_item'):
                            $benefitItemTitle = get_sub_field('benefit-item_title', 'options');
                            $benefitItemDescription = get_sub_field('benefit-item_description', 'options');
                            $benefitItemImage = get_sub_field('benefit-item_image', 'options'); ?>
                            <div class='benefits-item'>
                                <div class='item-image'>
                                    <img src='<?php echo $benefitItemImage['url']; ?>' alt=''>
                                </div>
                                <div class='item-description'>
                                    <h5><?php echo $benefitItemTitle; ?></h5>
                                    <p><?php echo $benefitItemDescription; ?></p>
                                </div>
                            </div>
                        <?php endif; endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php include get_template_directory() . '/components/_gallery-items.php'; ?>
</main>
<?php get_footer(); ?>
