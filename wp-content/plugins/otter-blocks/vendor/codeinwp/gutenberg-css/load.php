<?php
/**
 * Loader for the ThemeIsle\GutenbergCSS
 *
 * @package     ThemeIsle\GutenbergCSS
 * @copyright   Copyright (c) 2019, Hardeep Asrani
 * @license     http://opensource.org/licenses/gpl-3.0.php GNU Public License
 * @since       1.0.0
 */

define( 'THEMEISLE_GUTENBERG_CSS_VERSION', '1.0.1' );
define( 'THEMEISLE_GUTENBERG_CSS_DEV', false );

add_action(
	'plugins_loaded',
	function () {
		// call this only if Gutenberg is active
		if ( function_exists( 'register_block_type' ) ) {
			require_once( dirname( __FILE__ ) . '/class-gutenberg-css.php' );
		}
	}
);
