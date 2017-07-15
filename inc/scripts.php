<?php
/**
 * Scripts & Styles.
 *
 * @package hm-university
 * @since 1.0.0
 */

/**
 * Hooks.
 *
 * @since 1.0.0
 */
add_action( 'wp_enqueue_scripts', 'hm_university_enqueue_scripts_styles' );

/**
 * Enqueue Scripts & Styles.
 *
 * @since 1.0.0
 */
function hm_university_enqueue_scripts_styles() {
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_style( 'hm-university-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Oswald', array(), HMU_VERSION, 'all' );
	wp_enqueue_style( 'hm-university-css', HMU_CSS . "app{$min}.css", array( 'hm-university-fonts' ), HMU_VERSION, 'all' );
	wp_enqueue_script( 'hm-university-js', HMU_JS . "app{$min}.js", array( 'jquery' ), HMU_VERSION, true );
	wp_localize_script( 'hm-university-js', 'hmuJsVars', array(
		'ajaxurl' => esc_url_raw( admin_url( 'admin-ajax.php' ) ),
		'root'    => esc_url_raw( rest_url() ),
		'nonce'   => wp_create_nonce( 'wp_rest' ),
	) );
}
