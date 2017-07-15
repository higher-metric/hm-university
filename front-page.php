<?php
/**
 * Front Page.
 *
 * Displays the Front Page template or the home page.
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
