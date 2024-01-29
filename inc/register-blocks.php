<?php
/**
* Registers the block using the metadata loaded from the `block.json` file.
* Behind the scenes, it registers also all assets so they can be enqueued
* through the block editor in the corresponding context.
*
* @see https://developer.wordpress.org/reference/functions/register_block_type/
*/
function theme_test_theme_test_block_init() {
	register_block_type( plugin_dir_path( __DIR__ ) . '/build/block-example' );
	register_block_type( plugin_dir_path( __DIR__ ) . '/build/block-example-copy' );
}
add_action( 'init', 'theme_test_theme_test_block_init' );
