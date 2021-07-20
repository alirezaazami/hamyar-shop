<?php
add_action('wp_login',function ($userdata,$user){
    update_user_meta($user->ID,'last_login_time',time());
},10,2);

add_action('woocommerce_save_account_details',function ($user_id){
    $sex=$_POST['sex'];
    update_user_meta($user_id,'sex',$sex);
});
add_action('woocommerce_save_account_details',function ($user_id){
    $birthday=$_POST['birthday'];
    update_user_meta($user_id,'birthday',$birthday);
});

add_action( 'init', 'hamyar_shop_add_menu_to_dashboard' );
function hamyar_shop_add_menu_to_dashboard() {
    add_rewrite_endpoint( 'favourite', EP_PAGES );
}

add_action( 'woocommerce_account_favourite_endpoint', function (){
    echo do_shortcode('[yith_wcwl_wishlist]');
} );

// Add field
function action_woocommerce_edit_account_form_start() {
    ?>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="image"><?php esc_html_e( 'Image', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
        <input type="file" class="woocommerce-Input" name="image" accept="image/x-png,image/gif,image/jpeg">
    </p>
    <?php
}
add_action( 'woocommerce_edit_account_form', 'action_woocommerce_edit_account_form_start' );

// Validate
function action_woocommerce_save_account_details_errors( $args ){
    if ( isset($_POST['image']) && empty($_POST['image']) ) {
        $args->add( 'image_error', __( 'Please provide a valid image', 'woocommerce' ) );
    }
}
add_action( 'woocommerce_save_account_details_errors','action_woocommerce_save_account_details_errors', 10, 1 );

// Save
function action_woocommerce_save_account_details( $user_id ) {
    if ( isset( $_FILES['image'] ) ) {
        require_once( ABSPATH . 'wp-admin/includes/image.php' );
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
        require_once( ABSPATH . 'wp-admin/includes/media.php' );

        $attachment_id = media_handle_upload( 'image', 0 );

        if ( is_wp_error( $attachment_id ) ) {
            update_user_meta( $user_id, 'image', $_FILES['image'] . ": " . $attachment_id->get_error_message() );
        } else {
            update_user_meta( $user_id, 'image', $attachment_id );
        }
    }
}
add_action( 'woocommerce_save_account_details', 'action_woocommerce_save_account_details', 10, 1 );

// Add enctype to form to allow image upload
function action_woocommerce_edit_account_form_tag() {
    echo 'enctype="multipart/form-data"';
}
add_action( 'woocommerce_edit_account_form_tag', 'action_woocommerce_edit_account_form_tag' );

// Display
function action_woocommerce_edit_account_form() {
    // Get current user id
    $user_id = get_current_user_id();

    // Get attachment id
    $attachment_id = get_user_meta( $user_id, 'image', true );

    // True
    if ( $attachment_id ) {
        $original_image_url = wp_get_attachment_url( $attachment_id );

        // Display Image instead of URL
        echo wp_get_attachment_image( $attachment_id, 'full');
    }
}
add_action( 'woocommerce_edit_account_form', 'action_woocommerce_edit_account_form' );

add_filter('woocommerce_account_menu_items',function ($items, $endpoints ){
    $items['dashboard']='<i class="fas fa-user align-middle ml-2"></i>'. $items['dashboard'];
    $items['orders']='<i class="fas fa-shopping-cart align-middle ml-2"></i>'.$items['orders'];
    $items['edit-address']='<i class="fas fa-map-marked align-middle ml-2"></i>'.$items['edit-address'];
    $items['edit-account']='<i class="fas fa-info align-middle ml-2"></i>'.$items['edit-account'];
    $items['favourite']='<i class="fas fa-heart align-middle ml-2"></i>'.esc_html__('my favourite','hamyar');
//		$items['customer-logout']=''.$items['customer-logout'];
    unset($items['downloads']);
    unset($items['payment-methods']);
    unset($items['customer-logout']);
    return $items;
},10,2);
do_action( 'woocommerce_before_account_navigation' );