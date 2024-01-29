<?php
/**
 * Plugin Name:       Test
 * Plugin URI:        https://github.com/elpuas
 * Description:       Later
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            elpuas
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       theme-test
 *
 * @package           elpuasdigitalcrafts
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once __DIR__ . '/theme-config/theme-json-default.php';
require_once __DIR__ . '/inc/register-blocks.php';
require_once __DIR__ . '/inc/register-patterns.php';
