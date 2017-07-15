<?php
/**
 * Builder Partial.
 *
 * @package hm-university
 * @since 1.0.0
 */

while ( have_rows( 'builder' ) ) { the_row();
	get_template_part( 'templates/sections/' . get_row_layout() );
}
