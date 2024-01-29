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
class ThemeJSONHandler {

	public function __construct() {
		add_action( 'after_setup_theme', [$this, 'apply_theme_json_theme_filters'] );
	}

	public function apply_theme_json_theme_filters() {
		if ( wp_theme_has_theme_json() ) {
			add_filter( 'wp_theme_json_data_theme', [$this, 'filter_theme_json_theme'] );
		}
	}

	public function filter_theme_json_theme($theme_json) {
		$new_data = [
            'version' => 2,
            'settings' => [
                'color' => [
                    'text' => false,
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
		return $theme_json->update_with($new_data);
	}
}

$theme_json_handler = new ThemeJSONHandler();

