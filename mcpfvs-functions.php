<?php

function virtuel_sushi_custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Menu', 'Post Type General Name', 'virtuel-sushi' ),
		'singular_name'       => _x( 'Menu', 'Post Type Singular Name', 'virtuel-sushi' ),
		'menu_name'           => __( 'Menu', 'virtuel-sushi' ),
		'parent_item_colon'   => __( 'Parent Menu', 'virtuel-sushi' ),
		'all_items'           => __( 'All Menu', 'virtuel-sushi' ),
		'view_item'           => __( 'View Menu', 'virtuel-sushi' ),
		'add_new_item'        => __( 'Add New Menu', 'virtuel-sushi' ),
		'add_new'             => __( 'Add New', 'virtuel-sushi' ),
		'edit_item'           => __( 'Edit Menu', 'virtuel-sushi' ),
		'update_item'         => __( 'Update Menu', 'virtuel-sushi' ),
		'search_items'        => __( 'Search Menu', 'virtuel-sushi' ),
		'not_found'           => __( 'Not Found', 'virtuel-sushi' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'virtuel-sushi' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Menu', 'virtuel-sushi' ),
		'description'         => __( 'Menu news and reviews', 'virtuel-sushi' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		
		// This is where we add taxonomies to our CPT
		'taxonomies'          => array( 'category' ),
	);
	
	// Registering your Custom Post Type
	register_post_type( 'Menu', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'virtuel_sushi_custom_post_type', 0 );