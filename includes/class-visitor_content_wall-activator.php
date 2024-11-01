<?php

/**
 * Fired during plugin activation
 *
 * @link       https://creativepatriot.org
 * @since      1.0.0
 *
 * @package    Visitor_content_wall
 * @subpackage Visitor_content_wall/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Visitor_content_wall
 * @subpackage Visitor_content_wall/includes
 * @author     Joshua Almasin <joshuaalmasin22@gmail.com>
 */
class Visitor_content_wall_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		if ( ! get_option( 'vcw-bgcolor' ) ||  ! get_option( 'vcw-txtcolor' ) ||  ! get_option( 'vcw-msg' )) {
			update_option( 'vcw-bgc', 'white' );
			update_option( 'vcw-txtcolor', 'black' );
			update_option( 'vcw-msg', 'Sorry you must be logged in to see this content' );
			update_option( 'vcw-animation-type', 'scale-up-center');
		}
	}

}
