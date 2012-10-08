<?php

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'herman_grid_loop_helper' );
/** Add support for Genesis Grid Loop */
function herman_grid_loop_helper() {

	if ( function_exists( 'genesis_grid_loop' ) ) {
		genesis_grid_loop( array(
			'features' => 2,
			'feature_image_size' => 0,
			'feature_content_limit' => 400,
			'grid_image_size'		=> 'grid-thumbnail',
			'grid_image_class'		=> 'alignnone',
			'grid_content_limit' => 250,
			'more' => __( '[Continue reading]', 'herman' ),
			'posts_per_page' => 6,
		) );
	} else {
		genesis_standard_loop();
	}

}

genesis();