<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://creativepatriot.org
 * @since             1.0.0
 * @package           Visitor_content_wall
 *
 * @wordpress-plugin
 * Plugin Name:       Visitor Content Wall
 * Plugin URI:        https:://creativepatriot.org/portfolio/visitor-content-wall
 * Description:       This plugin will give you the option to hide your posts from users that are not logged in. You can decide which posts to hide by using the shortcode provided.
 * Version:           1.0.0
 * Author:            Joshua Almasin
 * Author URI:        https://creativepatriot.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       visitor_content_wall
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'VISITOR_CONTENT_WALL_VERSION', '1.0.0' );

define( 'VCW_ROOT_PATH', plugin_dir_path( __FILE__ ));
define( 'VCW_ROOT_URL', plugin_dir_url( __FILE__ ));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-visitor_content_wall-activator.php
 */
function activate_visitor_content_wall() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-visitor_content_wall-activator.php';
	Visitor_content_wall_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-visitor_content_wall-deactivator.php
 */
function deactivate_visitor_content_wall() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-visitor_content_wall-deactivator.php';
	Visitor_content_wall_Deactivator::deactivate();
}

function uninstall_visitor_content_wall() {
	require_once plugin_dir_path( __FILE__ ) . 'uninstall.php';
	Visitor_content_wall_Uninstall::uninstall();
}

register_activation_hook( __FILE__, 'activate_visitor_content_wall' );
register_deactivation_hook( __FILE__, 'deactivate_visitor_content_wall' );
register_uninstall_hook( __FILE__, 'uninstall_visitor_content_wall' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-visitor_content_wall.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_visitor_content_wall() {

	$plugin = new Visitor_content_wall();
	$plugin->run();

}
run_visitor_content_wall();
