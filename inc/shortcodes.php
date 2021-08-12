<?php

add_shortcode('user_name','shortcode_for_shor_user_info');

function shortcode_for_shor_user_info($atts=[]){
    $type=isset($atts['type'])?$atts['type']:'first_name';
    return wp_get_current_user()->$type;
}


add_shortcode('check_login', 'check_login_shortcode');
function check_login_shortcode($atts=[],$content=''){
    if(is_user_logged_in()){
            return $content;
    }
    return 'شما باید لاگین کرده باشین که این محتوی برای شما نمایش داده شود.';
}