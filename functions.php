<?php

include(get_theme_file_path('/includes/enqueue.php'));

function wpdocs_theme_name_scripts()
{
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/bootstrap.css', array(), '0.1.0', 'all');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/font-awesome.css', array(), '0.1.0', 'all');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '0.1.0', 'all');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
// funktion för att samla alla skripts på ett ställe till att fungera

function get_site_features()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'get_site_features');
add_theme_support('post-thumbnails');

// funktion för tema konfiguration





add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

add_action('wp_enqueue_scripts', 'inl_enqueue');

// koppling mellan enqueue och functions.php

// funktion för att få menyer dropdown på adminpanelen i WP

if (!function_exists('mytheme_register_nav_menu')) {

    function mytheme_register_nav_menu()
    {
        register_nav_menus(array(
            'main' => __('Primary Menu', 'text_domain'),
            'secondary'  => __('Footer Menu', 'text_domain'),
        ));
    }
    add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
}

function register_my_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'text_domain'),
            'mobile-menu' => __('Mobile Menu', 'text_domain'),
            'side-menu' => __('Side Menu', 'text_domain'),
            'side-bar' => __('Sidebar Menu', 'text_domain'),
            'side-bar2' => __('Sidebar Menu2', 'text_domain'),
            'side-bar3' => __('Sidebar Menu3', 'text_domain')

        )
    );
}
add_action('init', 'register_my_menus');

// funktion för att få menyer dropdown på adminpanelen i WP

// Vår custom post type funktion
function create_posttype()
{

    register_post_type(
        'footer',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Footers'),
                'singular_name' => __('Footer')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Footers'),
            'show_in_rest' => true,

        )
    );
}
// Hookar funktionen till temat 
add_action('init', 'create_posttype');

/*
   * Skapar en funktion till att skapa en CPT
   */

function custom_post_type()
{

    // Konfigurerar UI labels för CPT
    $labels = array(
        'name' => _x('Footers', 'Post Type General Name', 'inl_one'),
        'singular_name' => _x('Footer', 'Post Type Singular Name', 'inl_one'),
        'menu_name' => __('Footers', 'inl_one'),
        'parent_item_colon' => __('Parent Footer', 'inl_one'),
        'all_items' => __('All Footers', 'inl_one'),
        'view_item' => __('View Footer', 'inl_one'),
        'add_new_item' => __('Add New Footer', 'inl_one'),
        'add_new' => __('Add New', 'inl_one'),
        'edit_item' => __('Edit Footer', 'inl_one'),
        'update_item' => __('Update Footer', 'inl_one'),
        'search_items' => __('Search Footer', 'inl_one'),
        'not_found' => __('Not Found', 'inl_one'),
        'not_found_in_trash' => __('Not found in Trash', 'inl_one'),
    );

    // Sätter andra alternativ för CPT

    $args = array(
        'label' => __('Footers', 'inl_one'),
        'description' => __('Footer news and reviews', 'inl_one'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies' => array('genres'),
        /* En hierarki CPT är som pages
    */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,

    );

    // Registrerar CPT
    register_post_type('footer', $args);
}

/* Hook till 'init'
    */

add_action('init', 'custom_post_type', 0);

?>
