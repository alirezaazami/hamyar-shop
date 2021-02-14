<?php
if ( ! class_exists( 'Redux' ) ) {
    return;
}

$opt_name = 'hamyar_shop';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'display_name'         => $theme->get( 'Name' ),
    'display_version'      => $theme->get( 'Version' ),
    'menu_title'           => esc_html__( 'theme Options', 'hamyar' ),
    'customizer'           => true,
);

Redux::setArgs( $opt_name, $args );

Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Basic Field', 'redux-framework-demo' ),
    'id'     => 'basic',
    'desc'   => esc_html__( 'Basic field with no subsections.', 'redux-framework-demo' ),
    'icon'   => 'el el-home',
    'fields' => array(
        array(
            'id'       => 'opt-text',
            'type'     => 'text',
            'title'    => esc_html__( 'Example Text', 'redux-framework-demo' ),
            'desc'     => esc_html__( 'Example description.', 'redux-framework-demo' ),
            'subtitle' => esc_html__( 'Example subtitle.', 'redux-framework-demo' ),
            'hint'     => array(
                'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
            )
        )
    )
) );