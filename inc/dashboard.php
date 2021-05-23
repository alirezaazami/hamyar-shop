<?php
add_action('wp_login',function ($userdata,$user){
    update_user_meta($user->ID,'last_login_time',time());
},10,2);