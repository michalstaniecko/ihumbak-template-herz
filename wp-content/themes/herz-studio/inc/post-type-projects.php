<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 24.10.18
 * Time: 10:22
 */

// Register Custom Post Type
function project_post_type() {

  $labels = array(
    'name'                  => _x( 'Projects', 'Post Type General Name', 'herz-studio' ),
    'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'herz-studio' ),
    'menu_name'             => __( 'Projects', 'herz-studio' ),
    'name_admin_bar'        => __( 'Projects', 'herz-studio' ),
    'archives'              => __( 'Item Archives', 'herz-studio' ),
    'attributes'            => __( 'Item Attributes', 'herz-studio' ),
    'parent_item_colon'     => __( 'Parent Item:', 'herz-studio' ),
    'all_items'             => __( 'All Items', 'herz-studio' ),
    'add_new_item'          => __( 'Add New Item', 'herz-studio' ),
    'add_new'               => __( 'Add New', 'herz-studio' ),
    'new_item'              => __( 'New Item', 'herz-studio' ),
    'edit_item'             => __( 'Edit Item', 'herz-studio' ),
    'update_item'           => __( 'Update Item', 'herz-studio' ),
    'view_item'             => __( 'View Item', 'herz-studio' ),
    'view_items'            => __( 'View Items', 'herz-studio' ),
    'search_items'          => __( 'Search Item', 'herz-studio' ),
    'not_found'             => __( 'Not found', 'herz-studio' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'herz-studio' ),
    'featured_image'        => __( 'Featured Image', 'herz-studio' ),
    'set_featured_image'    => __( 'Set featured image', 'herz-studio' ),
    'remove_featured_image' => __( 'Remove featured image', 'herz-studio' ),
    'use_featured_image'    => __( 'Use as featured image', 'herz-studio' ),
    'insert_into_item'      => __( 'Insert into item', 'herz-studio' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'herz-studio' ),
    'items_list'            => __( 'Items list', 'herz-studio' ),
    'items_list_navigation' => __( 'Items list navigation', 'herz-studio' ),
    'filter_items_list'     => __( 'Filter items list', 'herz-studio' ),
  );
  $args = array(
    'label'                 => __( 'Project', 'herz-studio' ),
    'description'           => __( 'Post Type Description', 'herz-studio' ),
    'labels'                => $labels,
    'supports'              => array( 'title' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    'rewrite'               => false,
    'capability_type'       => 'page',
  );
  register_post_type( 'project', $args );

}
add_action( 'init', 'project_post_type', 0 );