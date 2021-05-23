<?php
add_action('wp_login',function ($userdata,$user){
    update_user_meta($user->ID,'last_login_time',time());
},10,2);

add_action('woocommerce_save_account_details',function ($user_id){
    $sex=$_POST['sex'];
    add_user_meta($user_id,'sex',$sex);
});