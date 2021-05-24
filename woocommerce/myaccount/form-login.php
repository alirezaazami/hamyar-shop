<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>
<div class="row justify-content-center width-100">
    <div class="col-12 col-lg-5">
        <div class="card border-0 login">
            <div class="card-body px-5">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/Group 1.png" class="img-fluid d-block" alt="hamyarmarket">
                <small class="text-muted d-block text-center"> <?php esc_html_e( 'Login', 'woocommerce' ); ?></small>

                <form class="shadow-none mt-5 link-dl"  method="post">
                    <?php do_action( 'woocommerce_login_form_start' ); ?>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-white">
                                <small class="text-muted" style="font-weight:600;font-size: 14px;"> ایمیل </small>
                            </div>
                        </div>
                        <input type="text" class="form-control" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                    </div>
                    <div class="input-group my-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-white">
                                <small class="text-muted" style="font-weight:600;font-size: 14px;"> رمز عبور </small>
                            </div>
                        </div>
                        <input class="form-control" type="password" name="password" id="password" autocomplete="current-password" />
                    </div>
                    <?php do_action( 'woocommerce_login_form' ); ?>
                    <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"> رمز عبور خود را فراموش کرده اید ؟! </a>
                    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit btn btn-block mt-4 py-3 hvr-pulse-shrink" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>

                    <div class="text-center mt-3">
                        <div class="custom-control custom-checkbox pr-0">
                            <input class="woocommerce-form__input woocommerce-form__input-checkbox custom-control-input" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
                            <label class="custom-control-label p-1" for="rememberme">
                                <small class="mr-3 text-muted" style="font-size: 15px;font-weight: 500;"> مرا به خاطر داشته باش </small>
                            </label>
                        </div>
                    </div>
                    <?php do_action( 'woocommerce_login_form_end' ); ?>

                </form>
            </div>
            <div class="card-footer border-0 d-flex justify-content-center align-items-center py-4">
                <p class="mb-0 text-center ml-2" style="font-size: 16px;font-weight: 500;"> تاکنون ثبت نام نکرده اید ؟!   </p>
                <a href="<?php echo get_permalink(get_option('register_page_id')) ?>" class="text-danger" style="font-size: 16px;font-weight: 600;"> ثبت نام در همیارمارکت </a>
            </div>
        </div>
    </div>
</div>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
