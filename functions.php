<?php	
/**
 * Mikado's functions and definitions
 *
 * @package Mikado
 * @since MikadoTheme 0.7
 */
 
function load_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendors/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css', array(), '1.3.0', 'all');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendors/css/swiper-bundle.min.css', array(), '1.0', 'all');
    wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');    

    // wp_enqueue_style( 'nunito-light', get_template_directory_uri() . '/assets/fonts/Nunito-Light.ttf', false );
    // wp_enqueue_style( 'nunito-m', get_template_directory_uri() . '/assets/fonts/Nunito-Medium.ttf', false );
    // wp_enqueue_style( 'nunito-xb', get_template_directory_uri() . '/assets/fonts/Nunito-ExtraBold.ttf', false );

    wp_enqueue_script('navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0', 'all');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendors/js/bootstrap.bundle.min.js', array(), '5.0.2', 'all');
    wp_enqueue_script('vanilla-tilt', get_template_directory_uri() . '/assets/vendors/js/vanilla-tilt.min.js', array(), '1.0', 'all');
    wp_enqueue_script('pure-counter', get_template_directory_uri() . '/assets/vendors/js/purecounter.js', array(), '1.0', 'all');
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/vendors/js/swiper-bundle.min.js', array(), '8.0.7', 'all');
    wp_enqueue_script('swiper-control', get_template_directory_uri() . '/assets/js/swiper-control.js', array(), '1.0', 'all');
    wp_enqueue_script('back-to-top', get_template_directory_uri() . '/assets/js/back-to-top.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('isotope-loading-img-first', get_template_directory_uri() . '/assets/vendors/js/images-Loaded.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendors/js/isotope.min.js', array('jquery'), '1.0', 'all');  
    wp_enqueue_script('isotope-control', get_template_directory_uri() . '/assets/js/isotope-control.js', array('jquery'), '1.0', 'all');
    wp_enqueue_script('scrollbar-animation', get_template_directory_uri() . '/assets/js/start-scrollbar-animation.js', array(), '1.0', 'all');
    
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Logo
function mikado_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
    add_theme_support( 'title-tag' );
}
 
add_action( 'after_setup_theme', 'mikado_custom_logo_setup' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),          
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

/**
 * Hide ACF menu if not local
 */
//  add_filter('acf/settings/show_admin', '__return_false');