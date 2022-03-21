<?php
add_action( 'wp_enqueue_scripts', 'zsyl_enqueue_assets' );

function zsyl_enqueue_assets() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}

add_action( 'admin_init', 'lacj_editor_styles' );

function lacj_editor_styles() {
	add_editor_style( [
		get_stylesheet_uri()
	] );
}
/* https://wordpress.org/support/topic/twenty-twenty-two-ignores-child-theme-css/ */
?>