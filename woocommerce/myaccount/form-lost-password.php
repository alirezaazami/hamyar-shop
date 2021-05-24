<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>
    <div class="row justify-content-center width-100">
    <div class="col-12 col-lg-5">
    <div class="card border-0 login">
    <div class="card-body px-5">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/Group 1.png" class="img-fluid d-block" alt="hamyarmarket">
    <small class="text-muted d-block text-center"> <?php esc_html_e( 'Reset password', 'woocommerce' ); ?></small>

<form method="post" class="woocommerce-ResetPassword lost_reset_password">

	<p><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text bg-white">
                <small class="text-muted" style="font-weight:600;font-size: 14px;"> <?php esc_html_e( 'Username or email', 'woocommerce' ); ?> </small>
            </div>
        </div>
        <input class="form-control" type="text" name="user_login" id="user_login" autocomplete="username" />
    </div>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_lostpassword_form' ); ?>

	<p class="woocommerce-form-row form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" class="btn btn-block mt-4 py-3 hvr-pulse-shrink" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
	</p>

	<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

</form>


    </div>
        <div class="card-footer border-0 d-flex justify-content-center align-items-center py-4">
            <a href="<?php echo wc_get_account_endpoint_url('dashboard') ?>" class="text-danger" style="font-size: 16px;font-weight: 600;">بازگشت به صفحه ورود  </a>
        </div>
    </div></div></div>
<?php
do_action( 'woocommerce_after_lost_password_form' );
