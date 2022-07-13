<?php /* Template Name: Page - Team */ ?>
<?php get_header(); ?>
<main class='team'>
    <?php include get_template_directory() . '/components/_banner.php'; ?>

    <div id="team-content" class='team-content'>
        <div class='container'>
            <div class='team-content-description'>
                <?php the_content(); ?>
            </div>
        </div>
    </div>

    <?php if (have_rows('benefit_items', 'options')):
        $title = get_field('benefits-title', 'options');
        $benefitItemLink = get_field('benefits_link', 'options'); ?>
        <section id="benefits" class='benefits'>
            <div class='container'>
                <h2><?php echo $title; ?></h2>
                <div class='benefits-list'>
                    <?php while (have_rows('benefit_items', 'options')) : the_row();
                        if (get_row_layout() == 'benefit_item'):
                            $benefitItemTitle = get_sub_field('benefit-item_title', 'options');
                            $benefitItemDescription = get_sub_field('benefit-item_description', 'options');
                            $benefitItemImage = get_sub_field('benefit-item_image', 'options');
                            ?>
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
                <a href='<?php echo $benefitItemLink['url']; ?>'
                   class='btn'><?php echo $benefitItemLink['title']; ?></a>
            </div>
        </section>
    <?php endif; ?>

</main>
<?php get_footer(); ?>
