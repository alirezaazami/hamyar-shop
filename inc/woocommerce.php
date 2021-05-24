<?php
function hamyar_shop_get_product_category($id,$taxonomy){
    $category_list = wp_get_post_terms($id,$taxonomy);

    if (empty($category_list))
        return 'no category';

    $category_name=$category_list[0]->name;
    $category_link=get_term_link($category_list[0]->term_id, $taxonomy);
    return '<a href="'.$category_link.'" target="_bland">'.$category_name.'</a>';
}

add_filter('woocommerce_product_description_tab_title',function ($title){
    return '<i class="fas fa-list-alt align-middle ml-2"></i>'.$title;
});

add_filter('woocommerce_product_additional_information_tab_title',function ($title){
    return '<i class="fas fa-receipt align-middle ml-2"></i>'.$title;
});
add_filter('woocommerce_product_reviews_tab_title',function ($title){
    return '<i class="fas fa-comment align-middle ml-2"></i>'.$title;
});

add_filter('woocommerce_product_tabs',function ($tabs){
    $tabs['other_review']=['title'=>'<i class="fas fa-question align-middle ml-2"></i>'.esc_html__('reviews','hamyar') ,'callback'=>'hamyar_shop_other_product_review'];
    return $tabs;
});

function hamyar_shop_other_product_review(){
    get_template_part('template-parts/woocommerce/single-product','review');
}

remove_action('woocommerce_before_shop_loop','woocommerce_output_all_notices',10);
add_action('hamyar_shop_header_notice','woocommerce_output_all_notices',10);

add_action('woocommerce_before_add_to_cart_quantity',function (){
    echo '<div id="quantity_changer"> <i class="fas fa-plus-circle"></i>';
});
add_action('woocommerce_after_add_to_cart_quantity',function (){
    echo '<i class="fas fa-minus-circle"></i></div>';
});

add_filter('woocommerce_registration_error_email_exists',function (){
    return sprintf(__('this email address is exist. please use login form. <a href="%s">login page</a>'),wc_get_account_endpoint_url('dashboard'));
});