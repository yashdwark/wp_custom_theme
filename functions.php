<?php 

function my_files() {
    // Enqueue stylesheet
    wp_enqueue_style('style', get_theme_file_uri('style.css'));

    // Enqueue JavaScript
    wp_enqueue_script('custom-script', get_theme_file_uri('script.js'), array(), false, true);
}

add_action('wp_enqueue_scripts', 'my_files');




/* Custom Post Type Start */

/*Custom Post type start*/
function cw_post_type_product() {
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images (added here)
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );
    $labels = array(
        'name' => _x('products', 'plural'),
        'singular_name' => _x('products', 'singular'),
        'menu_name' => _x('product', 'admin menu'),
        'name_admin_bar' => _x('product', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New product'),
        'new_item' => __('New product'),
        'edit_item' => __('Edit product'),
        'view_item' => __('View product'),
        'all_items' => __('All product'),
        'search_items' => __('Search product'),
        'not_found' => __('No product found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'product'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('product', $args);
}
add_action('init', 'cw_post_type_product');


function register_custom_menus() {
    register_nav_menus( array(
        'primary_menu' => esc_html__( 'Primary Menu', 'your-theme-textdomain' ),
        'footer_menu'  => esc_html__( 'Footer Menu', 'your-theme-textdomain' ),
    ) );
}
add_action( 'after_setup_theme', 'register_custom_menus' );

?>

