<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://creativepatriot.org
 * @since      1.0.0
 *
 * @package    Visitor_content_wall
 * @subpackage Visitor_content_wall/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Visitor_content_wall
 * @subpackage Visitor_content_wall/includes
 * @author     Joshua Almasin <joshuaalmasin22@gmail.com>
 */
class Visitor_content_wall_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'visitor_content_wall',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
