<?php

add_action( 'after_switch_theme', 'create_page_on_theme_activation' );

function create_page_on_theme_activation(){
    if (!empty(get_option('register_page_id')))return;

    $new_page_title     = __('register','hamyar'); // Page's title
    $new_page_content   = '[hamyar_register_page]';                           // Content goes here
//    $new_page_template  = 'page-custom-page.php';       // The template to use for the page
    $new_page = array(
        'post_type'     => 'page',
        'post_title'    => $new_page_title,
        'post_content'  => $new_page_content,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_name'     => 'register'
    );
    $new_page_id = wp_insert_post($new_page);
    if(!empty($new_page_id)){
        update_option('register_page_id',$new_page_id);
    }
}

add_shortcode('hamyar_register_page',function (){
    ob_start();
    get_template_part('template-parts/other/register');
    return  ob_get_clean();
});