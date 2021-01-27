<?php
define('IS_DEVELOPER',true);
if (IS_DEVELOPER){
    define('HAMYAR_SHOP_VERSION',time());
}else{
    define('HAMYAR_SHOP_VERSION','1.0.0');
}
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */

if ( ! function_exists( 'hamyar_shop_setup' ) ) :
    function hamyar_shop_setup() {
        load_theme_textdomain( 'hamyar', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
//        register_nav_menus( array(
//                                'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
//                                'secondary' => __('Secondary Menu', 'myfirsttheme' )
//                            ) );
    }
endif;

add_action( 'after_setup_theme', 'hamyar_shop_setup' );


function hamyar_shop_add_theme_style(){
    wp_enqueue_style('hover',get_theme_file_uri('/assets/css/hover-min.css'),[],'2.3.2');
    wp_enqueue_style('font-awesome',get_theme_file_uri('/assets/css/all.min.css'),[],'5.11.2');
    wp_enqueue_style('slick',get_theme_file_uri('/assets/css/slick.css'),[],HAMYAR_SHOP_VERSION);
    wp_enqueue_style('slick-theme',get_theme_file_uri('/assets/css/slick-theme.css'),['slick'],HAMYAR_SHOP_VERSION);
    wp_enqueue_style('bootstrap',get_theme_file_uri('/assets/css/bootstrap.min.css'),[],'4.3.1');
    if (is_rtl()){
        wp_enqueue_style('bootstrap-rtl',get_theme_file_uri('/assets/css/bootstrap-rtl.css'),['bootstrap'],'4.3.1');
    }
    wp_enqueue_style('style',get_theme_file_uri('/assets/css/style.css'),['bootstrap'],HAMYAR_SHOP_VERSION);
}

add_action( 'wp_enqueue_scripts', 'hamyar_shop_add_theme_style' );

function hamyar_shop_add_theme_scripts() {
    wp_enqueue_script('popper',get_theme_file_uri('/assets/js/popper.min.js'),['jquery'],'4.3.1',true);
    wp_enqueue_script('bootstrap',get_theme_file_uri('/assets/js/bootstrap.min.js'),['jquery','popper'],'4.3.1',true);
    wp_enqueue_script('slick',get_theme_file_uri('/assets/js/slick.min.js'),['jquery'],HAMYAR_SHOP_VERSION,true);
    wp_enqueue_script('font-awesome',get_theme_file_uri('/assets/js/all.min.js'),[],'5.11.2',true);
    wp_enqueue_script('main',get_theme_file_uri('/assets/js/main.js'),['jquery','slick','bootstrap'],HAMYAR_SHOP_VERSION,true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'hamyar_shop_add_theme_scripts' );

if (!function_exists('hamyar_shop_html_class_list')){
    function hamyar_shop_html_class_list(){
        $array_class_list=apply_filters('hamyar_shop_html_class_list',[]);
        $class_list=implode(' ',$array_class_list);
        echo sprintf(' class="%s" ',$class_list);
    }
}
