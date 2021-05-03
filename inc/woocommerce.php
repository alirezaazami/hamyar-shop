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
    echo hamyar_shop_acf_get_field('review');
}