<?php
/**
 * Events.
 *
 * @package hm-university
 * @since 1.0.0
 */

/**
 * Hooks.
 *
 * @since 1.0.0
 */
add_action( 'init', 'hm_university_register_event_post_type' );
add_action( 'init', 'hm_university_register_event_location_taxonomy' );
add_action( 'init', 'hm_university_register_event_category_taxonomy' );
add_filter( 'post_updated_messages', 'hm_university_event_post_type_messages' );

/**
 * Register Event Post Type.
 *
 * @since 1.0.0
 */
function hm_university_register_event_post_type() {
	register_post_type( 'event', array(
		'labels'                => array(
			'name'               => __( 'Events', 'hm-university' ),
			'singular_name'      => __( 'Event', 'hm-university' ),
			'all_items'          => __( 'All Events', 'hm-university' ),
			'new_item'           => __( 'New Event', 'hm-university' ),
			'add_new'            => __( 'Add New', 'hm-university' ),
			'add_new_item'       => __( 'Add New Event', 'hm-university' ),
			'edit_item'          => __( 'Edit Event', 'hm-university' ),
			'view_item'          => __( 'View Event', 'hm-university' ),
			'search_items'       => __( 'Search Events', 'hm-university' ),
			'not_found'          => __( 'No Events found', 'hm-university' ),
			'not_found_in_trash' => __( 'No Events found in trash', 'hm-university' ),
			'parent_item_colon'  => __( 'Parent Event', 'hm-university' ),
			'menu_name'          => __( 'Events', 'hm-university' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => false,
		'rewrite'               => array( 'slug' => 'events' ),
		'query_var'             => true,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_rest'          => true,
		'rest_base'             => 'events',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'menu_position'			=> 3,
	) );
}

/**
 * Event Location - Taxonomy
 *
 * @since 1.0.0
 */
function hm_university_register_event_location_taxonomy() {
	$labels = array(
		'name'              => _x( 'Location', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Locations', 'textdomain' ),
		'all_items'         => __( 'All Locations', 'textdomain' ),
		'parent_item'       => __( 'Parent Location', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Location:', 'textdomain' ),
		'edit_item'         => __( 'Edit Location', 'textdomain' ),
		'update_item'       => __( 'Update Location', 'textdomain' ),
		'add_new_item'      => __( 'Add New Location', 'textdomain' ),
		'new_item_name'     => __( 'New Location Name', 'textdomain' ),
		'menu_name'         => __( 'Location', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'event-location' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'event-location', array( 'event' ), $args );
}

/**
 * Event Category - Taxonomy
 *
 * @since 1.0.0
 */
function hm_university_register_event_category_taxonomy() {
	$labels = array(
		'name'              => _x( 'Category', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categories', 'textdomain' ),
		'all_items'         => __( 'All Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Category', 'textdomain' ),
		'update_item'       => __( 'Update Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Category', 'textdomain' ),
		'new_item_name'     => __( 'New Category Name', 'textdomain' ),
		'menu_name'         => __( 'Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'event-category' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'event-category', array( 'event' ), $args );
}

/**
 * Event Post Type Messages.
 *
 * @since 1.0.0
 *
 * @param array $messages
 *
 * @return array $messages
 */
function hm_university_event_post_type_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['event'] = array(
		0  => '', // Unused. Messages start at index 1.
		1  => sprintf( __( 'Event updated. <a target="_blank" href="%s">View Event</a>', 'hm-university' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'hm-university' ),
		3  => __( 'Custom field deleted.', 'hm-university' ),
		4  => __( 'Event updated.', 'hm-university' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Event restored to revision from %s', 'hm-university' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6  => sprintf( __( 'Event published. <a href="%s">View Event</a>', 'hm-university' ), esc_url( $permalink ) ),
		7  => __( 'Event saved.', 'hm-university' ),
		8  => sprintf( __( 'Event submitted. <a target="_blank" href="%s">Preview Event</a>', 'hm-university' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9  => sprintf( __( 'Event scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Event</a>', 'hm-university' ), // translators: Publish box date format, see http://php.net/date
			date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __( 'Event draft updated. <a target="_blank" href="%s">Preview Event</a>', 'hm-university' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
