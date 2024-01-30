<?php
/**
 * Plugin Name:       BlockCraft
 * Plugin URI:        https://github.com/elpuas/block-theme-plugin
 * Description:       Enhance your WordPress block editing experience with BlockCraft – your ultimate toolkit for crafting block themes effortlessly. Whether you're a developer, designer, or content creator, BlockCraft empowers you to take full control of the WordPress block editor.
 * Requires at least: 6.1
 * Requires PHP:      8.0
 * Version:           0.1.0
 * Author:            ElPuas Digital Crafts
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       blockcraft
 *
 * @package           blockcraft
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class ThemeTestPlugin
 *
 * This class represents the main plugin file for the Theme Test plugin.
 * It handles the loading of dependencies and includes necessary files.
 */
class ThemeTestPlugin {

	public function __construct() {
		$this->load_dependencies();
	}

	/**
	 * Load the plugin dependencies.
	 * This method includes the required files for the plugin to function properly.
	 */
	private function load_dependencies() {
		require_once __DIR__ . '/theme-config/theme-json-default.php';
		require_once __DIR__ . '/inc/register-blocks.php';
		require_once __DIR__ . '/inc/register-patterns.php';
	}
}

$theme_test_plugin = new ThemeTestPlugin();
