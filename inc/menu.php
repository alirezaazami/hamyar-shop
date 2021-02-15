<?php
function hamyar_shop_register_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu','hamyar' ),
        )
    );
}
add_action( 'init', 'hamyar_shop_register_menu' );


function hamyar_shop_add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'hamyar_shop_add_additional_class_on_li', 1, 3);

function hamyar_shop_add_link_atts($atts) {
    $atts['class'] = "nav-link px-3";
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'hamyar_shop_add_link_atts');