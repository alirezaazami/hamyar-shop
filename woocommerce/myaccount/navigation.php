<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
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
?>
<div class="col-12 col-lg-3">
    <div class="card border-0 mb-4 profile">
        <div class="card-body text-center">
            <img src="img/Group 1143.png" class="img-fluid mx-auto d-block">
            <small class="d-block mt-3" style="font-size: 15px;font-weight: 700;">  امیر دینی </small>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center border-0 shadow-none py-2">
            <a href="<?php echo esc_url( wc_get_account_endpoint_url( get_option( 'woocommerce_myaccount_edit_address_endpoint', 'edit-address' ) ) ); ?>" class="border-left pl-4" style="margin-right: 30px;"> تغییر رمز </a>
            <a href="<?php echo esc_url( wc_get_account_endpoint_url(  get_option( 'woocommerce_logout_endpoint', 'customer-logout' ) ) ); ?>" style="margin-left: 20px;"> خروج از حساب </a>
        </div>
    </div>
    <div class="card border-0 profile-side">
        <div class="card-header bg-transparent border-0 pt-0">
            <p class="mb-0 px-2 py-1"> دسترسی های کاربری </p>
        </div>
        <div class="card-body px-0">
            <ul class="nav flex-column pr-0">
                <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
                    <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?> nav-item mb-2">
                        <a class="nav-link"  href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo $label; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>

<?php

