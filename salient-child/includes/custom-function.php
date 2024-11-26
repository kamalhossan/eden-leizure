<?php

// register custom post type for Redorange
add_action( 'init', 'redorange_register_custom_post_type' );
function redorange_register_custom_post_type() {
    $activity_labels = array(
        'name'               => 'Activities',
        'singular_name'      => 'Activity',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Activity',
        'edit_item'          => 'Edit Activity',
        'new_item'           => 'New Activity',
        'all_items'          => 'All Activities',
        'view_item'          => 'View Activity',
        'search_items'       => 'Search Activities',
        'not_found'          => 'No Activities found',
        'not_found_in_trash' => 'No Activities found in Trash',
        'menu_name'          => 'Activities',
    );
    $activity_args = array(
        'labels'             => $activity_labels,
        'public'             => true,
        'has_archive'        => false,
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
        'rewrite'            => array( 'slug' => 'Activities' ),
        'hierarchical'       => false,
        'taxonomies'         => array( 'activity_category' ),
        'query_var'          => true,
        'capability_type'    => 'post',
        'publicly_queryable' => true,
    );
    register_post_type( "activities", $activity_args );

    // Register Events Post Type
    $event_labels = array(
        'name'               => 'Events',
        'singular_name'      => 'Event',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Event',
        'edit_item'          => 'Edit Event',
        'new_item'           => 'New Event',
        'all_items'          => 'All Events',
        'view_item'          => 'View Event',
        'search_items'       => 'Search Events',
        'not_found'          => 'No Events found',
        'not_found_in_trash' => 'No Events found in Trash',
        'menu_name'          => 'Events',
    );
    $event_args = array(
        'labels'             => $event_labels,
        'public'             => true,
        'has_archive'        => false,
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
        'rewrite'            => array( 'slug' => 'events' ),
        'hierarchical'       => false,
        'taxonomies'         => array( 'event_category' ),
        'query_var'          => true,
        'capability_type'    => 'post',
        'publicly_queryable' => true,
    );
    register_post_type( 'events', $event_args );

    // Register Food & Drinks Post Type
    $food_drinks_labels = array(
        'name'               => 'Food & Drinks',
        'singular_name'      => 'Food & Drink',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Food & Drink',
        'edit_item'          => 'Edit Food & Drink',
        'new_item'           => 'New Food & Drink',
        'all_items'          => 'All Food & Drinks',
        'view_item'          => 'View Food & Drink',
        'search_items'       => 'Search Food & Drinks',
        'not_found'          => 'No Food & Drinks found',
        'not_found_in_trash' => 'No Food & Drinks found in Trash',
        'menu_name'          => 'Food & Drinks',
    );
    $food_drinks_args = array(
        'labels'             => $food_drinks_labels,
        'public'             => true,
        'has_archive'        => false,
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
        'rewrite'            => array( 'slug' => 'food-drinks' ),
        'hierarchical'       => false,
        'taxonomies'         => array( 'food_drinks_category' ),
        'query_var'          => true,
        'capability_type'    => 'post',
        'publicly_queryable' => true,
    );
    register_post_type( 'food-drinks', $food_drinks_args );

    // Register Promotions Post Type
    $promotion_labels = array(
        'name'               => 'Promotions',
        'singular_name'      => 'Promotion',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Promotion',
        'edit_item'          => 'Edit Promotion',
        'new_item'           => 'New Promotion',
        'all_items'          => 'All Promotions',
        'view_item'          => 'View Promotion',
        'search_items'       => 'Search Promotions',
        'not_found'          => 'No Promotions found',
        'not_found_in_trash' => 'No Promotions found in Trash',
        'menu_name'          => 'Promotions',
    );
    $promotion_args = array(
        'labels'             => $promotion_labels,
        'public'             => true,
        'has_archive'        => false,
        'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
        'rewrite'            => array( 'slug' => 'promotions' ),
        'hierarchical'       => false,
        'taxonomies'         => array( 'promotion_category' ),
        'query_var'          => true,
        'capability_type'    => 'post',
        'publicly_queryable' => true,
    );
    register_post_type( 'promotions', $promotion_args );

    // Register Taxonomies
    register_taxonomy( 'activity_category', array( 'activities' ),
        array(
            'hierarchical'      => true,
            'label'             => 'Activity Categories',
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'activity_category' ),
            'show_ui'           => true,
            'show_admin_column' => true,
            'public'            => true,
        )
    );

    register_taxonomy( 'event_category', array( 'events' ),
        array(
            'hierarchical'      => true,
            'label'             => 'Event Categories',
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'event-category' ),
            'show_ui'           => true,
            'show_admin_column' => true,
            'public'            => true,
        )
    );

    register_taxonomy( 'food_drinks_category', array( 'food-drinks' ),
        array(
            'hierarchical'      => true,
            'label'             => 'Food & Drinks Categories',
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'food-drinks-category' ),
            'show_ui'           => true,
            'show_admin_column' => true,
            'public'            => true,
        )
    );

    register_taxonomy( 'promotion_category', array( 'promotions' ),
        array(
            'hierarchical'      => true,
            'label'             => 'Promotion Categories',
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'promotion-category' ),
            'show_ui'           => true,
            'show_admin_column' => true,
            'public'            => true,
        )
    );

}

