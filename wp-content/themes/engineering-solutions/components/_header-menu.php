<?php if (have_rows('header_menu_items', 'options')) { ?>
    <div class='header-menu'>
        <div class="overlay"></div>
        <nav class='menu-list'>
            <?php while (have_rows('header_menu_items', 'options')) : the_row();
                if (get_row_layout() == 'header_menu_item'):
                    $headerMenuName = get_sub_field('header_menu_name');
                    $headerMenuLink = get_sub_field('header_menu_link');
                    ?>
                    <?php if ($headerMenuLink && !have_rows('header_menu_sub_menu', 'options')) { ?>
                    <a href='<?php echo $headerMenuLink["url"]; ?>' class='menu-item'><?php echo $headerMenuName; ?></a>
                <?php } else { ?>
                    <div class='menu-item menu-item-services'>
                        <a href="#" class="menu-item">
                            <?php echo $headerMenuName; ?>
                        </a>
                        <ul class='drop-down-list'>
                            <?php while (have_rows('header_menu_sub_menu', 'options')) : the_row();
                                $headerMenuSubMenuName = get_sub_field('header_menu_sub_menu_name');
                                $headerMenuSubMenuLink = get_sub_field('header_menu_sub_menu_link');
                                ?>
                                <li>
                                    <a href='<?php echo $headerMenuSubMenuLink["url"]; ?>'>
                                        <?php echo $headerMenuSubMenuName; ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php } ?>
                <?php endif; endwhile; ?>
        </nav>
    </div>
<?php } ?>
