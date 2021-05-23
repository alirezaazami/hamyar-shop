<?php
add_action('wp_login',function ($userdata,$user){
    update_user_meta($user->ID,'last_login_time',time());
},10,2);

add_action('woocommerce_save_account_details',function ($user_id){
    $sex=$_POST['sex'];
    add_user_meta($user_id,'sex',$sex);
});
add_action('woocommerce_save_account_details',function ($user_id){
    $birthday=$_POST['birthday'];
    add_user_meta($user_id,'birthday',$birthday);
});

add_action( 'init', 'hamyar_shop_add_menu_to_dashboard' );
function hamyar_shop_add_menu_to_dashboard() {
    add_rewrite_endpoint( 'favourite', EP_PAGES );
}

add_action( 'woocommerce_account_favourite_endpoint', function (){
    echo do_shortcode('[yith_wcwl_wishlist]');
} );
