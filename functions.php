<?php

function register_main_menu() {
    register_nav_menu('main-menu', __('Main Menu'));
}
add_action('init', 'register_main_menu');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// Registering location post type
function location_post_type()
{
    register_post_type('locations',
        array(
            'labels'      => array(
                'name'          => __('Locations'),
                'singular_name' => __('Location'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports' => array('title','thumbnail' ),
            'menu_icon'   => 'dashicons-admin-multisite',
            'menu_position' => 5,
            'rewrite'     => array('slug' => 'locations'),
            'taxonomies'  => array('category'),
        )
    );
}
add_action('init', 'location_post_type');

// Registering Event post type
function event_post_type()
{
    register_post_type('events',
        array(
            'labels'      => array(
                'name'          => __('Events'),
                'singular_name' => __('Event'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports' => array('title','thumbnail' ),
            'menu_icon'   => 'dashicons-tickets-alt',
            'menu_position' => 6,
            'rewrite'     => array('slug' => 'events'),
            'taxonomies'  => array('category'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'event_post_type');

function create_ACF_meta_in_REST() {
    $postypes_to_exclude = ['acf-field-group','acf-field'];
    $extra_postypes_to_include = ["page"];
    $post_types = array_diff(get_post_types(["_builtin" => false], 'names'),$postypes_to_exclude);

    array_push($post_types, $extra_postypes_to_include);

    foreach ($post_types as $post_type) {
        register_rest_field( $post_type, 'ACF', [
                'get_callback'    => 'expose_ACF_fields',
                'schema'          => null,
            ]
        );
    }

}

function expose_ACF_fields( $object ) {
    $ID = $object['id'];
    return get_fields($ID);
}

add_action( 'rest_api_init', 'create_ACF_meta_in_REST' );