<?php
/**
 * Theme.json modifications
 *
 * @package theme-test
 */

/**
 * Updates the theme JSON data by adding a new version and settings.
 *
 * @param object $theme_json The original theme JSON data.
 * @return object The updated theme JSON data.
 */
function elpuas_filter_theme_json_theme( $theme_json ){
	$new_data = [
		'version'  => 2,
		'settings' => [
			'color' => [
				'text'    => false,
				'palette' => [
					[
						'slug'  => 'base',
						'color' => 'white',
						'name'  => esc_html_x( 'Base', 'theme-test' ),
					],
					[
						'slug'  => 'contrast',
						'color' => 'black',
						'name'  => esc_html_x( 'Contrast', 'theme-test' ),
					],
				],
			],
		],
	];

	return $theme_json->update_with( $new_data );
}

/**
 * Checks if the theme has a theme.json file and adds a filter to modify the theme JSON data.
 *
 * @return void
 */
function elpuas_apply_theme_json_theme_filters() {
	if ( wp_theme_has_theme_json() ) {
		add_filter( 'wp_theme_json_data_theme', 'elpuas_filter_theme_json_theme' );
	}
}

add_action( 'after_setup_theme', 'elpuas_apply_theme_json_theme_filters' );
