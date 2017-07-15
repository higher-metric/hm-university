<?php
/**
 * HM University Functionality.
 *
 * @package hm-university
 * @since 1.0.0
 */

/**
 * Version Constant.
 *
 * @since 1.0.0
 */
define( 'HMU_VERSION', '1.0.0' );

/**
 * Path Constants.
 *
 * @since 1.0.0
 */
define( 'HMU_PATH', trailingslashit( get_template_directory() ) );
define( 'HMU_INC', trailingslashit( HMU_PATH . 'inc' ) );

/**
 * Url Constants.
 *
 * @since 1.0.0
 */
define( 'HMU_URL', trailingslashit( get_template_directory_uri() ) );
define( 'HMU_ASSETS', trailingslashit( HMU_URL . 'assets' ) );
define( 'HMU_CSS', trailingslashit( HMU_ASSETS . 'css' ) );
define( 'HMU_JS', trailingslashit( HMU_ASSETS . 'js' ) );

/**
 * Google Maps API Key.
 *
 * @since 1.0.0
 */
define( 'HMU_GOOGLE_MAPS_API_KEY', 'AIzaSyCFaUFGpgkEVkD4OEMyoIjRrb6sZOIHavo' );

/**
 * Includes.
 *
 * @since 1.0.0
 */
require_once HMU_INC . 'setup.php';
require_once HMU_INC . 'scripts.php';
require_once HMU_INC . 'events.php';
