<?php
/**
 * Index Template File.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package hm-university
 * @since 1.0.0
 */

get_header(); ?>

<?php if ( have_posts() ) { the_post(); ?>

	<?php if ( have_rows( 'builder' ) ) { ?>

		<?php get_template_part( 'templates/builder' ); ?>

	<?php } else { ?>

		<?php get_template_part( 'templates/content' ); ?>

	<?php } ?>

<?php } ?>

<?php
get_footer();
