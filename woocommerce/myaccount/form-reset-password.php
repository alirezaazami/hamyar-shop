<?php
/**
 * Lost password reset form.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.5
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_reset_password_form' );
?>
    <div class="row justify-content-center width-100">
    <div class="col-12 col-lg-5">
    <div class="card border-0 login">
    <div class="card-body px-5">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/Group 1.png" class="img-fluid d-block" alt="hamyarmarket">

<form method="post" class="woocommerce-ResetPassword lost_reset_password">

	<p><?php echo apply_filters( 'woocommerce_reset_password_message', esc_html__( 'Enter a new password below.', 'woocommerce' ) ); ?></p><?php // @codingStandardsIgnoreLine ?>

    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text bg-white">
                <small class="text-muted" style="font-weight:600;font-size: 14px;"> <?php esc_html_e( 'New password', 'woocommerce' ); ?> </small>
            </div>
        </div>
        <input type="password" class="form-control" name="password_1" id="password_1" autocomplete="new-password" />
    </div>
    <br>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text bg-white">
                <small class="text-muted" style="font-weight:600;font-size: 14px;"> <?php esc_html_e( 'Re-enter new password', 'woocommerce' ); ?> </small>
            </div>
        </div>
        <input type="password" class="form-control" name="password_2" id="password_2" autocomplete="new-password" />
    </div>

	<input type="hidden" name="reset_key" value="<?php echo esc_attr( $args['key'] ); ?>" />
	<input type="hidden" name="reset_login" value="<?php echo esc_attr( $args['login'] ); ?>" />

	<div class="clear"></div>

	<?php do_action( 'woocommerce_resetpassword_form' ); ?>

	<p class="woocommerce-form-row form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" class=" btn btn-block mt-4 py-3 hvr-pulse-shrink" value="<?php esc_attr_e( 'Save', 'woocommerce' ); ?>"><?php esc_html_e( 'Save', 'woocommerce' ); ?></button>
	</p>

	<?php wp_nonce_field( 'reset_password', 'woocommerce-reset-password-nonce' ); ?>

</form>
    </div></div></div></div>
<?php
do_action( 'woocommerce_after_reset_password_form' );

