<?php
/**
 * Single Template.
 *
 * @package hm-university
 * @since 1.0.0
 */

get_header(); ?>

<?php if ( have_posts() ) { the_post(); ?>

	<?php get_template_part( 'templates/title' ); ?>
	<?php get_template_part( 'templates/content' ); ?>

<?php } ?>

<?php
get_footer();
