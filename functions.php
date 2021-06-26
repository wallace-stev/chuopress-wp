<?php

//Enqueuing styles
function custom_styles() {
    //Registering
    wp_register_style( 'Main', get_stylesheet_uri(), null, 'all' );
    wp_register_style( 'BootStrap-CSS', get_template_directory_uri().'/css/bootstrap.min.css', array(), null, 'all' );
    wp_register_style( 'LineIcons', get_template_directory_uri().'/fonts/LineIcons.min.css', array(), null, 'all' );
    wp_register_style( 'Themify', get_template_directory_uri().'/css/themify-icons/themify-icons.css', array(), null, 'all' );
    wp_register_style( 'Font-Awesome', get_template_directory_uri().'/css/fontawesome/css/font-awesome.min.css', array(), null, 'all' );
    wp_register_style( 'Navigation', get_template_directory_uri().'/css/navigation.css', array(), null, 'all' );

    //Using
    wp_enqueue_style( 'BootStrap-CSS' );
    wp_enqueue_style( 'LineIcons' );
    wp_enqueue_style( 'Themify' );
    wp_enqueue_style( 'Font-Awesome' );
    wp_enqueue_style( 'Main' );
    wp_enqueue_style( 'Navigation' );
}

add_action( 'wp_enqueue_scripts', 'custom_styles');

//Enqueuing scripts
function custom_scripts() {
    //Registering Javascript files
    wp_register_script( 'JQuery', get_template_directory_uri().'/js/jquery-3.2.1.min.js', array(), null, 'true' );
    wp_register_script( 'BootStrap-JS', get_template_directory_uri().'/js/bootstrap/bootstrap.min.js', array(), null, 'true' );
    wp_register_script( 'Custom-JS', get_template_directory_uri().'/js/main.js', array(), null, 'true' );

    //Using Javascript files
    wp_enqueue_script( 'JQuery' );
    wp_enqueue_script( 'BootStrap-JS' );
    wp_enqueue_script( 'Custom-JS' );

}

add_action( 'wp_enqueue_scripts', 'custom_scripts');

//Calling the BootStrap NavWalker file & Handling Errors, if any
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

//Defining Menus
register_nav_menus( array(
    'primary' =>    __( 'Primary Menu', 'STIMAT' ),
    'footer'    => __('Footer Quick Links', 'STIMAT'),
    'external'  =>  __('External Links', 'STIMAT'),
    'essentials' => __('Essentials Overlay', 'STIMAT')
) );

//Adding Theme Support For Components
function stimat_theme_setup() {
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'stimat_theme_setup' );

//Adding Widgets
function stimat_init_widgets() {
    //Right Sidebar Widget
    register_sidebar(array (
        'name'  => 'Right Sidebar',
        'id'  => 'sidebar',
        'before_widget'  => '<div class="sidebar-widget mb-3">',
        'after_widget'  => '</div>',
        'before_title' => '<h4
            class="mb-2" 
            style="
                font-size: 17px;
                font-weight: 700;
                line-height: 1.3;
                letter-spacing: 0.5px;"
        >',
        'after_title' => '</h4>',
    ) );
    
    //Map Widget Section
    register_sidebar(array (
        'name'  => 'Map Section',
        'id'  => 'map',
        'before_widget'  => '<div class="mt-2 mb-3">',
        'after_widget'  => '</div>',
        'before_title' => '<h4
            class="mb-2" 
            style="
                font-size: 17px;
                font-weight: 700;
                line-height: 1.3;
                letter-spacing: 0.5px;"
        >',
        'after_title' => '</h4>',
    ) );

    //Footer Quick Links Widget
    register_sidebar(array (
        'name'  => 'Footer Quick Links',
        'id'  => 'footer',
        'before_widget'  => '<div class="col-lg-3 col-md-6 col-sm-6">',
        'after_widget'  => '</div>',
        'before_title' => '<h4 class="mt-2 mb-3 text-primary footer-section-heading">',
        'after_title' => '</h4>',
    ) );

    //Footer Quick Links Widget
    register_sidebar(array (
        'name'  => 'Events Calendar',
        'id'  => 'calendar',
        'before_widget'  => '<div class="col-xl-3 col-md-4 col-12">',
        'after_widget'  => '</div>',
        'before_title' => '<h4 class="mt-2 mb-3 text-red footer-section-heading">',
        'after_title' => '</h4>',
    ) );
}

add_action( 'widgets_init', 'stimat_init_widgets' );

//Setting default excerpt Length
function set_excerpt_length () {
    return 20;
}

add_filter( 'excerpt_length', 'set_excerpt_length', 999 );

/*
//Filtering search results to display posts only
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');
*/

//Querying for maximum number of posts to display in a single search page
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('posts_per_page', '6');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');

//Security Measures To Prevent The Site From Being Hacked

//1. Custom Login Error Message
function stimat_custom_login_message () {
    return 'Invalid credentials, please try again or contact admin';
}

add_filter( 'login_errors', 'stimat_custom_login_message' );

//2. Removing WordPress Version Details
function stimat_remove_version() {
    return '';
}

add_filter('the_generator', 'stimat_remove_version');

//3. Removing Footer WordPress Attribution
function remove_footer_admin () {
    echo 'Thank you for creating with <a href="https://www.instagram.com/aspire.tz/" target="_blank">Aspire</a>';   
}
     
add_filter('admin_footer_text', 'remove_footer_admin');

?>