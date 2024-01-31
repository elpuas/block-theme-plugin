<?php
/**
* Registers the block using the metadata loaded from the `block.json` file.
*
* @package blockcraft
*/

class BlockRegistrar {

	public function __construct() {
		add_action( 'init', [ $this, 'register_blocks' ] );
	}

	public function register_blocks() {
		register_block_type( plugin_dir_path( __DIR__ ) . '/build/block-example' );
		register_block_type( plugin_dir_path( __DIR__ ) . '/build/block-example-copy' );
	}
}

$block_registrar = new BlockRegistrar();

