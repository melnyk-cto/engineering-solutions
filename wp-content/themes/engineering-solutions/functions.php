<?php
    add_action('wp_enqueue_scripts', 'my_scripts');
    function my_scripts() {
        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
        wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/assets/lib/swiper.css');

        wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/assets/lib/swiper.js');
        wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script('geolocation-js', get_stylesheet_directory_uri() . '/assets/js/geolocation.js', array('jquery'), 1.0, true);
        wp_enqueue_script('animation-js', get_stylesheet_directory_uri() . '/assets/js/animations.js');
    }


    // Добавление типа записи "Отзывы"
    add_action('init', 'register_post_types');
    function register_post_types() {
        register_post_type('reviews', [
            'label' => null,
            'labels' => [
                'name' => 'Reviews', // основное название для типа записи
                'singular_name' => 'Review', // название для одной записи этого типа
                'add_new' => 'Add review', // для добавления новой записи
                'add_new_item' => 'Add review', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item' => 'Edit review', // для редактирования типа записи
                'new_item' => 'New review', // текст новой записи
                'view_item' => 'Look review', // для просмотра записи этого типа.
                'search_items' => 'Search review', // для поиска по этим типам записи
                'not_found' => 'Not found', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
                'parent_item_colon' => '', // для родителей (у древовидных типов)
                'menu_name' => 'Reviews', // название меню
            ],
            'description' => '',
            'public' => true,
            'show_in_menu' => null, // показывать ли в меню адмнки
            'show_in_rest' => null, // добавить в REST API. C WP 4.7
            'rest_base' => null, // $post_type. C WP 4.7
            'menu_position' => null,
            'menu_icon' => null,
            'hierarchical' => false,
            'supports' => ['title', 'editor'], // 'author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies' => [],
            'has_archive' => false,
            'rewrite' => true,
            'query_var' => true,
        ]);
    }



