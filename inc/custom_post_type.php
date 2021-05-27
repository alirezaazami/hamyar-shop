<?php
function cptui_register_my_cpts_my_customer() {

    /**
     * Post Type: my cusotmer.
     */

    $labels = [
        "name" => __( "my cusotmer", "hamyar" ),
        "singular_name" => __( "customer", "hamyar" ),
        "all_items" => __( "all customers", "hamyar" ),
        "add_new" => __( "add customer", "hamyar" ),
        "add_new_item" => __( "add new customer", "hamyar" ),
        "edit_item" => __( "edit customer", "hamyar" ),
        "new_item" => __( "new customer", "hamyar" ),
    ];

    $args = [
        "label" => __( "my cusotmer", "hamyar" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => false,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "my_customer", "with_front" => false ],
        "query_var" => true,
        "menu_position" => 100,
        "menu_icon" => "dashicons-universal-access-alt",
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "comments", "author" ],
    ];

    register_post_type( "my_customer", $args );
}

add_action( 'init', 'cptui_register_my_cpts_my_customer' );

function cptui_register_my_taxes() {

    /**
     * Taxonomy: برند محصول.
     */

    $labels = [
        "name" => __( "برند محصول", "hamyar" ),
        "singular_name" => __( "برند محصول", "hamyar" ),
    ];


    $args = [
        "label" => __( "برند محصول", "hamyar" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'product_brand', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "product_brand",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "product_brand", [ "product" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
