<?php
/**
 * Additional features to edit post types
 *
 * @package WordPress
 * @since 1.0
 */


// Register Custom Post Type
function motivation_post_type() {

	$labels = array(
		'name'                  => _x( 'Motivations', 'Post Type General Name', 'motivation' ),
		'singular_name'         => _x( 'Motivation', 'Post Type Singular Name', 'motivation' ),
		'menu_name'             => __( 'Motivations', 'motivation' ),
		'name_admin_bar'        => __( 'Motivation', 'motivation' ),
		'archives'              => __( 'Item Archives', 'motivation' ),
		'attributes'            => __( 'Item Attributes', 'motivation' ),
		'parent_item_colon'     => __( 'Parent Item:', 'motivation' ),
		'all_items'             => __( 'All Items', 'motivation' ),
		'add_new_item'          => __( 'Add New Item', 'motivation' ),
		'add_new'               => __( 'Add New', 'motivation' ),
		'new_item'              => __( 'New Item', 'motivation' ),
		'edit_item'             => __( 'Edit Item', 'motivation' ),
		'update_item'           => __( 'Update Item', 'motivation' ),
		'view_item'             => __( 'View Item', 'motivation' ),
		'view_items'            => __( 'View Items', 'motivation' ),
		'search_items'          => __( 'Search Item', 'motivation' ),
		'not_found'             => __( 'Not found', 'motivation' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'motivation' ),
		'featured_image'        => __( 'Featured Image', 'motivation' ),
		'set_featured_image'    => __( 'Set featured image', 'motivation' ),
		'remove_featured_image' => __( 'Remove featured image', 'motivation' ),
		'use_featured_image'    => __( 'Use as featured image', 'motivation' ),
		'insert_into_item'      => __( 'Insert into item', 'motivation' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'motivation' ),
		'items_list'            => __( 'Items list', 'motivation' ),
		'items_list_navigation' => __( 'Items list navigation', 'motivation' ),
		'filter_items_list'     => __( 'Filter items list', 'motivation' ),
	);
	$rewrite = array(
		'slug'                  => 'motivation',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Motivation', 'motivation' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'motivation_tags' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'motivation', $args );

}
add_action( 'init', 'motivation_post_type', 0 );

function temoignage_post_type() {

	$labels = array(
		'name'                  => _x( 'Temoignages', 'Post Type General Name', 'temoignage' ),
		'singular_name'         => _x( 'Temoignage', 'Post Type Singular Name', 'temoignage' ),
		'menu_name'             => __( 'Temoignages', 'temoignage' ),
		'name_admin_bar'        => __( 'Temoignages', 'temoignage' ),
		'archives'              => __( 'Item Archives', 'temoignage' ),
		'attributes'            => __( 'Item Attributes', 'temoignage' ),
		'parent_item_colon'     => __( 'Parent Item:', 'temoignage' ),
		'all_items'             => __( 'All Items', 'temoignage' ),
		'add_new_item'          => __( 'Add New Item', 'temoignage' ),
		'add_new'               => __( 'Add New', 'temoignage' ),
		'new_item'              => __( 'New Item', 'temoignage' ),
		'edit_item'             => __( 'Edit Item', 'temoignage' ),
		'update_item'           => __( 'Update Item', 'temoignage' ),
		'view_item'             => __( 'View Item', 'temoignage' ),
		'view_items'            => __( 'View Items', 'temoignage' ),
		'search_items'          => __( 'Search Item', 'temoignage' ),
		'not_found'             => __( 'Not found', 'temoignage' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'temoignage' ),
		'featured_image'        => __( 'Featured Image', 'temoignage' ),
		'set_featured_image'    => __( 'Set featured image', 'temoignage' ),
		'remove_featured_image' => __( 'Remove featured image', 'temoignage' ),
		'use_featured_image'    => __( 'Use as featured image', 'temoignage' ),
		'insert_into_item'      => __( 'Insert into item', 'temoignage' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'temoignage' ),
		'items_list'            => __( 'Items list', 'temoignage' ),
		'items_list_navigation' => __( 'Items list navigation', 'temoignage' ),
		'filter_items_list'     => __( 'Filter items list', 'temoignage' ),
	);
	$rewrite = array(
		'slug'                  => 'temoignage',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Temoignage', 'temoignage' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'temoignage', $args );

}
add_action( 'init', 'temoignage_post_type', 0 );

function coach_post_type() {

	$labels = array(
		'name'                  => _x( 'Coachs', 'Post Type General Name', 'coach' ),
		'singular_name'         => _x( 'Coach', 'Post Type Singular Name', 'coach' ),
		'menu_name'             => __( 'Coachs', 'coach' ),
		'name_admin_bar'        => __( 'Coach', 'coach' ),
		'archives'              => __( 'Item Archives', 'coach' ),
		'attributes'            => __( 'Item Attributes', 'coach' ),
		'parent_item_colon'     => __( 'Parent Item:', 'coach' ),
		'all_items'             => __( 'All Items', 'coach' ),
		'add_new_item'          => __( 'Add New Item', 'coach' ),
		'add_new'               => __( 'Add New', 'coach' ),
		'new_item'              => __( 'New Item', 'coach' ),
		'edit_item'             => __( 'Edit Item', 'coach' ),
		'update_item'           => __( 'Update Item', 'coach' ),
		'view_item'             => __( 'View Item', 'coach' ),
		'view_items'            => __( 'View Items', 'coach' ),
		'search_items'          => __( 'Search Item', 'coach' ),
		'not_found'             => __( 'Not found', 'coach' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'coach' ),
		'featured_image'        => __( 'Featured Image', 'coach' ),
		'set_featured_image'    => __( 'Set featured image', 'coach' ),
		'remove_featured_image' => __( 'Remove featured image', 'coach' ),
		'use_featured_image'    => __( 'Use as featured image', 'coach' ),
		'insert_into_item'      => __( 'Insert into item', 'coach' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'coach' ),
		'items_list'            => __( 'Items list', 'coach' ),
		'items_list_navigation' => __( 'Items list navigation', 'coach' ),
		'filter_items_list'     => __( 'Filter items list', 'coach' ),
	);
	$rewrite = array(
		'slug'                  => 'coach',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Coach', 'coach' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'taxonomies'            => array( 'coach_tags' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'coach', $args );

}
add_action( 'init', 'coach_post_type', 0 );

// Hide default post types
function edcoaching_remove_menu_items() {
	remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'edcoaching_remove_menu_items' );