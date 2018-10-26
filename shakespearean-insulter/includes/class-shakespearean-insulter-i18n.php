<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/jose-suria-jr
 * @since      1.0.0
 *
 * @package    Shakespearean_Insulter
 * @subpackage Shakespearean_Insulter/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Shakespearean_Insulter
 * @subpackage Shakespearean_Insulter/includes
 * @author     Mike S. <miko.suria@gmail.com>
 */
class Shakespearean_Insulter_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'shakespearean-insulter',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
