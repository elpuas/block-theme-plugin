<?php
/**
 * Register Patterns and Pattern Category
 *
 * @package theme-test
 */



/**
 * Registers a custom pattern category.
 *
 * This function is used to register a custom pattern category for the Theme Test plugin.
 *
 * @since 1.0.0
 */
function register_custom_pattern_category() {
	register_block_pattern_category(
		'theme-test-category',
		array(
			'label' => 'Theme Test Category',
		)
	);
}

add_action( 'init', 'register_custom_pattern_category' );


/**
 * Registers a custom block pattern.
 *
 * @return void
 */
function register_pattern_example() {
	register_block_pattern(
		'theme-test/pattern-example',
		array(
			'title'       => 'Pattern Example',
			'description' => 'Description of your custom pattern',
			'categories'  => [ 'theme-test-category' ],
			'content'     => include plugin_dir_path( __DIR__ ) . 'patterns/pattern-example.php',
		)
	);
}

add_action( 'init', 'register_pattern_example' );
