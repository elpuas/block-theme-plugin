<?php
/**
* Registers the block using the metadata loaded from the `block.json` file.
*
* @package theme-test
*/

/**
 * Initializes the theme test custom blocks.
 */
function theme_test_theme_test_block_init() {
	register_block_type( plugin_dir_path( __DIR__ ) . '/build/block-example' );
	register_block_type( plugin_dir_path( __DIR__ ) . '/build/block-example-copy' );
}

add_action( 'init', 'theme_test_theme_test_block_init' );
