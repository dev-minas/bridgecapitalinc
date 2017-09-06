<?php

if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

function bridge_scripts() {

	wp_enqueue_script( 'mortage', get_template_directory_uri() . '/js/jquery.mortgagecalc.js', array(), '1', true );

}
add_action( 'wp_enqueue_scripts', 'bridge_scripts' );
