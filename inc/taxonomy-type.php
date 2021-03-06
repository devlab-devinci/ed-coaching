<?php
/**
 * Additional features to edit taxonomy types
 *
 * @package WordPress
 * @since 1.0
 */

function motivation_tags_taxononmy() {

	$labels = array(
		'name'                       => 'Motivation Tag',
		'singular_name'              => 'Motivation Tag',
		'menu_name'                  => 'Tags',
		'all_items'                  => 'All Motivation Tags',
		'parent_item'                => 'Parent Motivation Tag',
		'parent_item_colon'          => 'Parent Motivation Tag:',
		'new_item_name'              => 'New Motivation Tag',
		'add_new_item'               => 'Add New Motivation Tag',
		'edit_item'                  => 'Edit Motivation Tag',
		'update_item'                => 'Update Motivation Tag',
		'separate_items_with_commas' => 'Separate Motivation Tags with commas',
		'search_items'               => 'Search Motivation Tags',
		'add_or_remove_items'        => 'Add or remove Motivation Tags',
		'choose_from_most_used'      => 'Choose from the most used Motivation Tags',
		'not_found'                  => 'Not Found',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'motivation_tags', array( 'motivation' ), $args );

}
add_action( 'init', 'motivation_tags_taxononmy', 0 );

function partenaire_tags_taxononmy() {

	$labels = array(
		'name'                       => 'Partenaire Tag',
		'singular_name'              => 'Partenaire Tag',
		'menu_name'                  => 'Tags',
		'all_items'                  => 'All Partenaire Tags',
		'parent_item'                => 'Parent Partenaire Tag',
		'parent_item_colon'          => 'Parent Partenaire Tag:',
		'new_item_name'              => 'New Motivation Tag',
		'add_new_item'               => 'Add New Partenaire Tag',
		'edit_item'                  => 'Edit Partenaire Tag',
		'update_item'                => 'Update Partenaire Tag',
		'separate_items_with_commas' => 'Separate Partenaire Tags with commas',
		'search_items'               => 'Search Partenaire Tags',
		'add_or_remove_items'        => 'Add or remove Motivation Tags',
		'choose_from_most_used'      => 'Choose from the most used Motivation Tags',
		'not_found'                  => 'Not Found',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'partenaire_tags', array( 'partenaire' ), $args );

}
add_action( 'init', 'partenaire_tags_taxononmy', 0 );