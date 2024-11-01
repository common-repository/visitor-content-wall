<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://creativepatriot.org
 * @since      1.0.0
 *
 * @package    Visitor_content_wall
 * @subpackage Visitor_content_wall/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Visitor_content_wall
 * @subpackage Visitor_content_wall/admin
 * @author     Joshua Almasin <joshuaalmasin22@gmail.com>
 */
class Visitor_content_wall_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Visitor_content_wall_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Visitor_content_wall_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/visitor_content_wall-admin.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Visitor_content_wall_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Visitor_content_wall_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/visitor_content_wall-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function vcw_admin_page() {
		add_menu_page( 'Visitor Content Wall', 'Visitor Content Wall', 'manage_options', 'visitor-content-wall', array($this, 'vcw_settings'));
	}

	public function vcw_settings() {
		require 'partials/visitor_content_wall-admin-display.php';
	}

	public function vcw_save_options() {
		if ( isset( $_POST['bg-color']) && isset( $_POST['txt-color']) && isset( $_POST['msg']) && isset( $_POST['animation_type'])){
			$msg = sanitize_text_field( $_POST['msg'] );
			$bgColor = sanitize_text_field( $_POST['bg-color'] );
			$txtColor = sanitize_text_field( $_POST['txt-color'] );
			$animationType = sanitize_text_field( $_POST['animation_type'] );

			update_option( 'vcw-bgcolor', $bgColor );
			update_option( 'vcw-txtcolor', $txtColor);
			update_option( 'vcw-msg', $msg );
			update_option( 'vcw-animation-type', $animationType );

			set_transient( 'vcw_success', 'Options have been updated', 60 );
			$location = esc_url_raw($_SERVER['HTTP_REFERER']);
			wp_safe_redirect( $location );
			exit();
		}
	}

}
