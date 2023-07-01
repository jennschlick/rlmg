<?php

/**
 * Custom taxonomies.
 */

// Register custom taxonomies.
function rlmg_custom_taxonomies() {

  // Register the "Project Categories" taxonomy.
	$labels = array(
		'name'              => __('Project Categories'),
		'singular_name'     => __('Project Category'),
		'search_items'      => __('Search Project Categories'),
		'all_items'         => __('All Project Categories'),
		'parent_item'       => __('Parent Project Category'),
		'parent_item_colon' => __('Parent Project Category:'),
		'edit_item'         => __('Edit Project Category'),
		'update_item'       => __('Update Project Category'),
		'add_new_item'      => __('Add New Project Category'),
		'new_item_name'     => __('New Project Category'),
		'menu_name'         => __('Categories'),
	);

	$args = array(
		'hierarchical'      => false,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true
	);

	register_taxonomy('project-category', array('project'), $args);
}

add_action('init', 'rlmg_custom_taxonomies', 0);
