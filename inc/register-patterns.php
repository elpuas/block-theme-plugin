<?php
/**
 * Register Patterns and Pattern Category
 *
 * @package theme-test
 */

/**
 * Class PatternRegistrar
 *
 * This class is responsible for registering custom block patterns in the WordPress theme test plugin.
 */
class PatternRegistrar {

	/**
	 * Constructor method.
	 *
	 * Initializes the class and hooks the register_custom_pattern_category() and register_pattern_example() methods to the 'init' action.
	 */
	public function __construct() {
		add_action( 'init', [$this, 'register_custom_pattern_category'] );
		add_action( 'init', [$this, 'register_pattern_example'] );
	}

	/**
	 * Register custom block pattern category.
	 *
	 * Registers a custom block pattern category with the label 'Theme Test Category'.
	 */
	public function register_custom_pattern_category() {
		register_block_pattern_category(
			'theme-test-category',
			array('label' => 'Theme Test Category')
		);
	}

	/**
	 * Register pattern example.
	 *
	 * Registers a custom block pattern with the title 'Pattern Example', description 'Description of your custom pattern',
	 * category 'theme-test-category', and content from the 'patterns/pattern-example.php' file.
	 */
	public function register_pattern_example() {
		register_block_pattern(
			'theme-test/pattern-example',
			array(
				'title'       => 'Pattern Example',
				'description' => 'Description of your custom pattern',
				'categories'  => ['theme-test-category'],
				'content'     => include plugin_dir_path( __DIR__ ) . 'patterns/pattern-example.php',
			)
		);
	}
}

$pattern_registrar = new PatternRegistrar();
