<?php
/** Start the engine */
require_once( get_template_directory() . '/lib/init.php' );

/** Localization */
load_child_theme_textdomain( 'herman', get_stylesheet_directory() . '/lib/languages' );

/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', 'Herman Theme' );
define( 'CHILD_THEME_URL', 'http://wpcanada.ca/our-themes/herman/' );

/** Load Google fonts */
add_action( 'wp_enqueue_scripts', 'herman_load_google_fonts' );
function herman_load_google_fonts() {
    wp_enqueue_style( 
    	'google-fonts', 
    	'http://fonts.googleapis.com/css?family=Lato', 
    	array(), 
    	PARENT_THEME_VERSION 
    );
}

/** Add Viewport meta tag for mobile browsers */
add_action( 'genesis_meta', 'herman_add_viewport_meta_tag' );
function herman_add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

$content_width = apply_filters( 'content_width', 610, 460, 910 );

/** Add support for structural wraps */
add_theme_support( 'genesis-structural-wraps', array(
	'header',
	'nav',
	'subnav',
	'inner',
	'footer-widgets',
	'footer'
) );

/** Add new image sizes */
add_image_size( 'grid-thumbnail', 285, 120, TRUE );
add_image_size( 'home-bottom', 280, 150, TRUE );
add_image_size( 'slider', 950, 300, TRUE );
add_image_size( 'portfolio', 202, 140, TRUE );

/** Add support for custom header */
add_theme_support( 'genesis-custom-header', array(
	'width' => 960,
	'height' => 150
) );

/** Add support for custom background */
add_theme_support( 'custom-background' );

/** Reposition the primary navigation */
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before', 'genesis_do_nav' );

/** Reposition the breadcrumbs */
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_after_header', 'genesis_do_breadcrumbs' );

/** Add wrapper to breadcrumbs */
add_filter('genesis_breadcrumb_args', 'herman_breadcrumb_args');
function herman_breadcrumb_args( $args ) {
	$args['prefix'] = '<div id="breadcrumbwrapper"><div class="breadcrumb">';
	$args['suffix'] = '</div></div>';
	$args['sep'] = ' &raquo; ';
    return $args;
}

/** Add support for 3-column footer widgets */
add_theme_support( 'genesis-footer-widgets', 3 );

/** Set Genesis Responsive Slider defaults */
add_filter( 'genesis_responsive_slider_settings_defaults', 'herman_responsive_slider_defaults' );
function herman_responsive_slider_defaults( $defaults ) {
	$defaults['slideshow_height'] = '300';
	$defaults['slideshow_width'] = '960';
	return $defaults;
}

/** Add custom body class to the head */
add_filter( 'body_class', 'add_body_class' );
function add_body_class( $classes ) {
   $classes[] = 'herman';
   return $classes;
}

/** Add Genesis Box on Single Posts */
//add_action( 'genesis_after_post_content', 'include_genesis_box', 11 );
//function include_genesis_box() {
    //if ( is_single() )
    //require( CHILD_DIR.'/genesis-box.php' );
//}

/** Add post nav to single post pages */
add_action('genesis_before_comments', 'custom_post_nav');
function custom_post_nav(){
 if (is_single()) {
    echo '<div class="post-nav">';
    echo '<div class="next-post-nav">';
    echo '<span class="next">';
    echo 'Next Article';
    echo '</span>';
    echo next_post_link('%link', '%title');
    echo '</div>';
    echo '<div class="prev-post-nav">';
    echo '<span class="prev">';
    echo 'Previous Article';
    echo '</span>';
    echo previous_post_link('%link', '%title');
    echo '</div>';
    echo '</div>';
  }}

/** Add support for post formats **/
add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
add_theme_support( 'genesis-post-format-images' );

/** Remove elements for post formats */
add_action( 'genesis_before_post', 'herman_remove_elements' );
function herman_remove_elements() {
	
	if ( ! current_theme_supports( 'post-formats' ) )
		return;

	// Remove if post has format
	if ( get_post_format() ) {
		remove_action( 'genesis_post_title', 'genesis_do_post_title' );
		remove_action( 'genesis_before_post_content', 'genesis_post_info' );
		remove_action( 'genesis_after_post_content', 'genesis_post_meta' );
	}

	// Add back, as post has no format
	else {
		add_action( 'genesis_post_title', 'genesis_do_post_title' );
		add_action( 'genesis_before_post_content', 'genesis_post_info' );
		add_action( 'genesis_after_post_content', 'genesis_post_meta' );
	}

}

/** Register widget areas */
genesis_register_sidebar( array(
	'id'			=> 'home-slider',
	'name'			=> __( 'Home Slider', 'herman' ),
	'description'	=> __( 'This is the homepage slider section.', 'herman' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-welcome',
	'name'			=> __( 'Home Welcome', 'herman' ),
	'description'	=> __( 'This is the homepage welcome section.', 'herman' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-left',
	'name'			=> __( 'Home Left', 'herman' ),
	'description'	=> __( 'This is the homepage left section.', 'herman' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-middle',
	'name'			=> __( 'Home Middle', 'herman' ),
	'description'	=> __( 'This is the homepage middle section.', 'herman' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-right',
	'name'			=> __( 'Home Right', 'herman' ),
	'description'	=> __( 'This is the homepage right section.', 'herman' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-message',
	'name'			=> __( 'Home Message', 'herman' ),
	'description'	=> __( 'This is the homepage message section.', 'herman' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'portfolio',
	'name'			=> __( 'Portfolio Page', 'herman' ),
	'description'	=> __( 'This is the portfolio page template.', 'herman' ),
) );
genesis_register_sidebar( array(
	'id'		=> '404-page',
	'name'		=> __( '404 Page', 'herman' ),
	'description'	=> __( 'This is the widget area of the 404 Not Found Page Template.', 'herman' ),
) );