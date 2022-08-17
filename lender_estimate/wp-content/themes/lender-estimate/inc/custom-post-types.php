<?php    

    /*Custom Post type start*/
    function cw_post_type_banner() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Banner', 'plural'),
    'singular_name' => _x('Banner', 'singular'),
    'menu_name' => _x('Banner', 'admin menu'),
    'name_admin_bar' => _x('Banner', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Banner'),
    'new_item' => __('New Banner'),
    'edit_item' => __('Edit Banner'),
    'view_item' => __('View Banner'),
    'all_items' => __('All Banner'),
    'search_items' => __('Search banner'),
    'not_found' => __('No Banner found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'banner'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-share-alt2',
    );
    register_post_type('cpt_banner', $args);
    }
    add_action('init', 'cw_post_type_banner');




    function cw_post_type_services() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Services', 'plural'),
    'singular_name' => _x('Services', 'singular'),
    'menu_name' => _x('Services', 'admin menu'),
    'name_admin_bar' => _x('Services', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Services'),
    'new_item' => __('New Services'),
    'edit_item' => __('Edit Services'),
    'view_item' => __('View Services'),
    'all_items' => __('All Services'),
    'search_items' => __('Search Services'),
    'not_found' => __('No Services found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'services'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-admin-tools',
    );
    register_post_type('cpt_services', $args);
    }
    add_action('init', 'cw_post_type_services');




    function cw_post_type_programs() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Programs', 'plural'),
    'singular_name' => _x('Programs', 'singular'),
    'menu_name' => _x('Programs', 'admin menu'),
    'name_admin_bar' => _x('Programs', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Programs'),
    'new_item' => __('New Programs'),
    'edit_item' => __('Edit Programs'),
    'view_item' => __('View Programs'),
    'all_items' => __('All Programs'),
    'search_items' => __('Search Programs'),
    'not_found' => __('No Programs found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-share-alt',
    );
    register_post_type('cpt_programs', $args);
    }
    add_action('init', 'cw_post_type_programs');




    function cw_post_type_reviews() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Reviews', 'plural'),
    'singular_name' => _x('Reviews', 'singular'),
    'menu_name' => _x('Reviews', 'admin menu'),
    'name_admin_bar' => _x('Reviews', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Reviews'),
    'new_item' => __('New Reviews'),
    'edit_item' => __('Edit Reviews'),
    'view_item' => __('View Reviews'),
    'all_items' => __('All Reviews'),
    'search_items' => __('Search Reviews'),
    'not_found' => __('No Reviews found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'reviews'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-editor-quote',
    );
    register_post_type('cpt_reviews', $args);
    }
    add_action('init', 'cw_post_type_reviews');