<?php

/**
 * Custom Post Types.
 */

// Register custom post types.
function rlmg_custom_post_types() {

  // Register the "Person" custom post type.
	$labels = array(
		'name' => __('People'),
		'singular_name' => __('Person'),
		'add_new' => __('Add New'),
		'add_new_item' => __('Add Person'),
		'edit_item' => __('Edit Person'),
		'new_item' => __('Add Person'),
		'view_item' => __('View Person'),
		'search_items' => __('Search People'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => false,
		'publicly_queryable' => true,
		'menu_icon' => 'dashicons-admin-post',
		'show_ui' => true,
		'query_var' => false,
		'rewrite' => array( 'slug' => 'person' ),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 4,
		'supports' => array('title','editor','revisions'),
		'has_archive' => false
	);

	register_post_type('person', $args);

  // Register the "Project" custom post type.
	$labels = array(
		'name' => __('Projects'),
		'singular_name' => __('Project'),
		'add_new' => __('Add New'),
		'add_new_item' => __('Add Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('Add Project'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Projects'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'menu_icon' => 'dashicons-admin-post',
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'project' ),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','revisions'),
		'has_archive' => false
	);

	register_post_type('project', $args);
}

add_action('init', 'rlmg_custom_post_types');
