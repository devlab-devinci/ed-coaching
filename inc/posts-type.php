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

function partenaire_post_type() {

	$labels = array(
		'name'                  => _x( 'Partenaires', 'Post Type General Name', 'partenaire' ),
		'singular_name'         => _x( 'Partenaire', 'Post Type Singular Name', 'partenaire' ),
		'menu_name'             => __( 'Partenaires', 'partenaire' ),
		'name_admin_bar'        => __( 'Partenaire', 'partenaire' ),
		'archives'              => __( 'Item Archives', 'partenaire' ),
		'attributes'            => __( 'Item Attributes', 'partenaire' ),
		'parent_item_colon'     => __( 'Parent Item:', 'partenaire' ),
		'all_items'             => __( 'All Items', 'partenaire' ),
		'add_new_item'          => __( 'Add New Item', 'partenaire' ),
		'add_new'               => __( 'Add New', 'partenaire' ),
		'new_item'              => __( 'New Item', 'partenaire' ),
		'edit_item'             => __( 'Edit Item', 'partenaire' ),
		'update_item'           => __( 'Update Item', 'partenaire' ),
		'view_item'             => __( 'View Item', 'partenaire' ),
		'view_items'            => __( 'View Items', 'partenaire' ),
		'search_items'          => __( 'Search Item', 'partenaire' ),
		'not_found'             => __( 'Not found', 'partenaire' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'partenaire' ),
		'featured_image'        => __( 'Featured Image', 'partenaire' ),
		'set_featured_image'    => __( 'Set featured image', 'partenaire' ),
		'remove_featured_image' => __( 'Remove featured image', 'partenaire' ),
		'use_featured_image'    => __( 'Use as featured image', 'partenaire' ),
		'insert_into_item'      => __( 'Insert into item', 'partenaire' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'partenaire' ),
		'items_list'            => __( 'Items list', 'partenaire' ),
		'items_list_navigation' => __( 'Items list navigation', 'partenaire' ),
		'filter_items_list'     => __( 'Filter items list', 'partenaire' ),
	);
	$rewrite = array(
		'slug'                  => 'partenaire',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Partenaire', 'partenaire' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'taxonomies'            => array( 'partenaire_tags' ),
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
	register_post_type( 'partenaire', $args );

}
add_action( 'init', 'partenaire_post_type', 0 );

// Hide default post types
function edpartenaireing_remove_menu_items() {
	remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'edpartenaireing_remove_menu_items' );