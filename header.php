<?php
/**
 * Header.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hm-university
 * @since 1.0.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="container">

	<div class="menu-wrap">

		<nav class="menu">
			<div class="icon-list">
				<a href="#"><i class="fa fa-fw fa-home"></i><span><?php esc_html_e( 'Home', 'hm-university' ); ?></span></a>
				<a href="#"><i class="fa fa-fw fa-calendar"></i><span><?php esc_html_e( 'Events', 'hm-university' ); ?></span></a>
				<a href="#"><i class="fa fa-fw fa-envelope-o"></i><span><?php esc_html_e( 'Contact', 'hm-university' ); ?></span></a>
			</div><!-- /icon-list -->
		</nav><!-- /menu -->

		<button class="close-button" id="close-button"><?php esc_html_e( 'Close Menu', 'hm-university' ); ?></button>

	</div><!-- /menu-wrap -->

	<div class="header clearfix">
		<a class="logo" href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a>
		<button id="open-button" class="hamburger hamburger--collapse menu-button" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
			<span class="label"><?php esc_html_e( 'Menu', 'hm-university' ); ?></span>
		</button>
	</div>


	<div class="content-wrap">
		<div class="content">
