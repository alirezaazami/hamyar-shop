<?php
function hamyar_shop_get_product_category($id,$taxonomy){
    $category_list = wp_get_post_terms($id,$taxonomy);

    if (empty($category_list))
        return 'no category';

    $category_name=$category_list[0]->name;
    $category_link=get_term_link($category_list[0]->term_id, $taxonomy);
    return '<a href="'.$category_link.'" target="_bland">'.$category_name.'</a>';
}