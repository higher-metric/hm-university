<?php
/**
 * Builder - Events Section.
 *
 * @package hm-university
 * @since 1.0.0
 */

// Variables.
$title           = get_sub_field( 'title' );
$events_number   = get_sub_field( 'events_number' );
$events_category = get_sub_field( 'events_category' );
$events_location = get_sub_field( 'events_location' );

// Query Args.
$events_query_args = array(
	'post_type'      => 'event',
	'post_status'    => 'publish',
	'posts_per_page' => ( $events_number ) ? $events_number : 6,
	'no_found_rows'  => false,
);

// Events Category
if ( $events_category ) {
	$events_query_args['tax_query'] = array(
		array(
			'taxonomy' => 'event-category',
			'field'    => 'term_id',
			'terms'    => $events_category,
		),
	);
}

// Events Location
if ( $events_location ) {
	$events_query_args['tax_query'] = array(
		array(
			'taxonomy' => 'event-location',
			'field'    => 'term_id',
			'terms'    => $events_category,
		),
	);
}

// Query Events.
$events_query = new WP_Query( $events_query_args );

// Check for Events.
if ( ! $events_query->have_posts() ) {
	wp_reset_query(); wp_reset_postdata(); return;
}
?>
<div class="events-section section">
	<?php if ( $title ) { ?>
		<h2 class="section-title"><?php echo esc_attr( $title ); ?></h2>
	<?php } ?>

	<div class="events clearfix">
		<?php while ( $events_query->have_posts() ) { $events_query->the_post();
			$event_start_date = get_field( 'event_start_date' );
			$event_start_date_formatted = date( 'F j', strtotime( $event_start_date ) );
			?>
			<a class="event" href="<?php the_permalink(); ?>">
				<h3 class="event-title"><span class="event-title-inner"><?php the_title(); ?></span></h3>
				<span class="event-date">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<span class="event-date-text"><?php echo esc_attr( $event_start_date_formatted ); ?></span>
				</span>
			</a>
		<?php } wp_reset_query(); wp_reset_postdata(); ?>
	</div>
</div>
