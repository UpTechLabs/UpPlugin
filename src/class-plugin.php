<?php
/**
 * Plugin Handler
 *
 * @package     UpTechLabs\UpPlugin
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://UpTechLabs.io
 * @license     GNU-2.0+
 */
namespace UpTechLabs\UpPlugin;

class Plugin {

	const VERSION = '1.0.0';

	public function __construct() {
		$this->autoload();
		$this->init_events();
	}

	/**
	 * Autoload the plugin modules/files.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function autoload() {
		$files = array(
			// hello, populate the files to be loaded here.
		);

		if ( ! $files ) {
			return;
		}

		foreach( $files as $file ) {
			include( __DIR__ . '/' . $file );
		}
	}

	/**
	 * Initialize the events.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	protected function init_events() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ) );
	}

	/**
	 * Enqueue the assets.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function enqueue_assets() {
		if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
			$url = 'assets/dist/js/jquery.plugin.min.js';
		} else {
			$url = 'assets/js/jquery.plugin.js';
		}

		wp_enqueue_script(
			'upplugin-script',
			UPPLUGIN_URL . $url,
			array( 'jquery' ),
			self::VERSION,
			true
		);
	}

}
