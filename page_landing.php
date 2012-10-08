<?php

/*
Template Name: Landing
*/

// Add custom body class to the head
add_filter( 'body_class', 'herman_add_body_class' );
function herman_add_body_class( $classes ) {
   $classes[] = 'herman-landing';
   return $classes;
}

// Remove header, navigation, breadcrumbs, footer widgets, footer 
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
remove_action( 'genesis_before', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action( 'genesis_after_header', 'genesis_do_breadcrumbs');
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

genesis();