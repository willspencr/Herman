<?php
/**
 * 404 Not found page example
 * 
 * This helps create a custom and widgetized 404 error page template for Genesis child themes.
 *
 * @author David Decker, http://genesisthemes.de/en/
 * @link http://genesisthemes.de/en/2011-08/tutorial-widgetized-404-error-page-in-genesis/
 *
 * Note by Len, added class 'entry-content' so that styling for 404 page is inherited by theme.
 */


remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'herman_404_loop_helper' );
/**
 * Add widget support for the 404 page. If no widgets active, display the default loop/message.
 *
 */
function herman_404_loop_helper() {

	if ( is_active_sidebar( '404-page' ) ) {
			echo '<div class="entry-content">';
		dynamic_sidebar( '404-page' );
			echo '</div><!-- end .entry-content -->';		
	}
	else {
		genesis_standard_loop();
	}
	
}

genesis();