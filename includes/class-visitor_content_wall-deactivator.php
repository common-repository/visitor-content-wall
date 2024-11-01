<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://creativepatriot.org
 * @since      1.0.0
 *
 * @package    Visitor_content_wall
 * @subpackage Visitor_content_wall/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Visitor_content_wall
 * @subpackage Visitor_content_wall/includes
 * @author     Joshua Almasin <joshuaalmasin22@gmail.com>
 */
class Visitor_content_wall_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		delete_option( 'vcw-bgc');
		delete_option( 'vcw-txtcolor');
		delete_option( 'vcw-msg');
		delete_option( 'vcw-animation-type' );
	}

}
