<?php
/**
 * Builder - Content Section.
 *
 * @package hm-university
 * @since 1.0.0
 */

// Get Content.
if ( ! $content = get_sub_field( 'content' ) ) {
	return;
}
?>
<div class="section-content section">
	<?php echo wp_kses_post( $content ); ?>
</div>
