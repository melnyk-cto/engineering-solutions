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


    // add custom type "Reviews"
    add_action('init', 'register_post_types_reviews');
    function register_post_types_reviews() {
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


    // add custom type "Markers"
    add_action('init', 'register_post_types_markers');
    function register_post_types_markers() {
        register_post_type('markers', [
            'label' => null,
            'labels' => [
                'name' => 'Markers', // основное название для типа записи
                'singular_name' => 'Marker', // название для одной записи этого типа
                'add_new' => 'Add marker', // для добавления новой записи
                'add_new_item' => 'Add marker', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item' => 'Edit marker', // для редактирования типа записи
                'new_item' => 'New marker', // текст новой записи
                'view_item' => 'Look marker', // для просмотра записи этого типа.
                'search_items' => 'Search marker', // для поиска по этим типам записи
                'not_found' => 'Not found', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Not found in basket', // если не было найдено в корзине
                'parent_item_colon' => '', // для родителей (у древовидных типов)
                'menu_name' => 'Markers', // название меню
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

    // ACF
    if (function_exists('acf_add_options_page')) {
        // Register options page.
        $parent = acf_add_options_page(array('page_title' => __('Global information on the site'), 'menu_title' => __('General Sections'),));
    }

    // Google map API for ACF
    // Method 1: Filter.
    function my_acf_google_map_api($api) {
        $api['key'] = 'AIzaSyAjGHA3axQLM-5mQpy8INAto_fmdhyDeUc';
        return $api;
    }
    add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

    // Method 2: Setting.
    function my_acf_init() {
        acf_update_setting('google_api_key', 'AIzaSyAjGHA3axQLM-5mQpy8INAto_fmdhyDeUc');
    }
    add_action('acf/init', 'my_acf_init');


    // "Contact Us" form
    require_once get_stylesheet_directory() . '/includes/contact-us.php';


