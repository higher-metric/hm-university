<?php
/**
 * Meta Data - Event - Partial.
 *
 * @package hm-university
 * @since 1.0.0
 */

// Dates.
$start_date = get_field( 'event_start_date' );
$start_time = get_field( 'event_start_time' );
$end_date   = get_field( 'event_end_date' );
$end_time   = get_field( 'event_end_time' );

// Presenter.
$presenter      = get_field( 'presenters_name' );
$presenter_link = get_field( 'presenters_link' );

// Taxonomies.
$categories = get_the_terms( get_the_ID(), 'event-category' );
$locations  = get_the_terms( get_the_ID(), 'event-location' );
?>
<div class="event-meta meta"></div>
