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
    register_sidebar(
        array(
            'id'            => 'single-sidebar',
            'name'          => __( 'single sidebar','hamyar' ),
            'description'   => __( 'this side bar is show in single page','hamyar' ),
            'before_widget' => '<div class="card-body"><div class="d-flex flex-column">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h6 class="sidebar-title">',
            'after_title'   => '</h6>',
        )
    );

}