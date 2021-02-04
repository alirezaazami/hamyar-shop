<?php
add_action( 'widgets_init', 'hamyar_shop_register_sidebars' );

function hamyar_shop_register_sidebars() {
    register_sidebar(
        array(
            'id'            => 'navigation-footer-1',
            'name'          => __( 'footer navigation 1','hamyar' ),
            'description'   => __( 'A short description of the sidebar.','hamyar' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'navigation-footer-2',
            'name'          => __( 'footer navigation 2','hamyar' ),
            'description'   => __( 'A short description of the sidebar.','hamyar' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'navigation-footer-3',
            'name'          => __( 'footer navigation 3','hamyar' ),
            'description'   => __( 'A short description of the sidebar.','hamyar' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'navigation-footer-4',
            'name'          => __( 'footer navigation 4','hamyar' ),
            'description'   => __( 'A short description of the sidebar.','hamyar' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );

}