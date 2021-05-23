<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

        <div class="card border-0 profile-side">
            <div class="card-header bg-transparent border-0 pt-0">
                <p class="mb-0 px-2 py-1"> اطلاعات شخصی </p>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 info-user">
                    <div>
                        <p class="mb-1"> نام و نام خانوادگی : </p>
                        <p class="mb-0"> <?php echo $current_user->display_name ?></p>
                    </div>
                    <div>
                        <p class="mb-1"> پست الکترونیکی : </p>
                        <p class="mb-0"> <?php echo $current_user->user_email ?> </p>
                    </div>
                    <div>
                        <p class="mb-1"> شماره تلفن : </p>
                        <p class="mb-0"> <?php echo get_user_meta(get_current_user_id(),'billing_phone',true) ?> </p>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center info-user">
                    <div>
                        <p class="mb-1"> جنسیت :  </p>
                        <p class="mb-0">  <?php echo get_user_meta(get_current_user_id(),'sex',true) ?>  </p>
                    </div>
                    <div>
                        <p class="mb-1">  تاریخ عضویت :</p>
                        <?php $user_register=strtotime($current_user->user_registered); ?>
                        <p class="mb-0"> <?php echo date('Y/m/d',$user_register); ?> </p>
                    </div>
                    <div>
                        <p class="mb-1"> تاریخ تولد : </p>
                        <p class="mb-0"><?php echo get_user_meta(get_current_user_id(),'birthday',true); ?> </p>
                    </div>
                </div>
            </div>
            <div class="card-footer border-0 py-3 text-center info-user-footer">
                <a href="<?php echo wc_customer_edit_account_url() ?>">  <i class="fas fa-pencil-alt align-middle ml-1"></i>  ویرایش اطلاعات شخصی </a>
            </div>
        </div>
<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
