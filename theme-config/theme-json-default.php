<?php
/**
 * Theme.json modifications
 *
 * @package blockcraft
 *
 * @link https://developer.wordpress.org/news/2023/07/05/how-to-modify-theme-json-data-using-server-side-filters/
 * @link https://developer.wordpress.org/reference/hooks/wp_theme_json_data_theme/
 */

/**
 * Updates the theme JSON data by adding a new version and settings.
 *
 * @param object $theme_json The original theme JSON data.
 * @return object The updated theme JSON data.
 */
class ThemeJSONHandler {

	/**
	 * Constructor for the theme configuration class.
	 * Adds an action to apply theme JSON theme filters after the theme is set up.
	 */
	public function __construct() {
		add_action( 'after_setup_theme', [ $this, 'apply_theme_json_theme_filters' ] );
	}

	/**
	 * Applies theme filters based on the theme JSON data.
	 */
	public function apply_theme_json_theme_filters() {
		if ( wp_theme_has_theme_json() ) {
			add_filter( 'wp_theme_json_data_theme', [$this, 'filter_theme_json_theme'] );
		}
	}

	/**
	 * Filter the theme JSON data.
	 *
	 * This function is used to modify the theme JSON data by updating the color settings.
	 *
	 * @param object $theme_json The original theme JSON data.
	 * @return object The updated theme JSON data.
	 */
	public function filter_theme_json_theme( $theme_json ) {
		$new_data = [
			'version' => 2,
			'settings' => [
				'color' => [
					'text' => false,
					'palette' => [
						[
							'slug'  => 'base',
							'color' => 'white',
							'name'  => esc_html_x( 'Base', 'blockcraft' ),
						],
						[
							'slug'  => 'contrast',
							'color' => 'black',
							'name'  => esc_html_x( 'Contrast', 'blockcraft' ),
						],
						[
							'slug'  => 'primary',
							'color' => '#D8FF00',
							'name'  => esc_html_x( 'Primary', 'blockcraft' ),
						],
						[
							'slug'  => 'secondary',
							'color' => '#5E6F00',
							'name'  => esc_html_x( 'Secondary', 'blockcraft' ),
						],
						[
							'slug'  => 'tertirary',
							'color' => '#B6D600',
							'name'  => esc_html_x( 'Tertiary', 'blockcraft' ),
						],
					],
				],
			],
		];
		return $theme_json->update_with($new_data);
	}
}

$theme_json_handler = new ThemeJSONHandler();
