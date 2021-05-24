<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
<?php   if (is_user_logged_in()): ?>
<script>
    document.location.href='<?php echo wc_get_account_endpoint_url('dashboard') ?>';
</script>
<?php   endif; ?>

<div class="row justify-content-center width-100">
    <div class="col-12 col-lg-5">
    <div class="card border-0 login">
        <div class="card-body px-5">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/Group 1.png" class="img-fluid d-block" alt="hamyarmarket">
            <small class="text-muted d-block text-center"> ثبت نام در همیارمارکت </small>
            <form class="shadow-none mt-5 link-dl" method="post" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
                <?php do_action( 'woocommerce_register_form_start' ); ?>
                <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-white">
                                <small class="text-muted" style="font-weight:600;font-size: 14px;"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp; </small>
                            </div>
                        </div>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                    </div>
                <?php endif; ?>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-white">
                            <small class="text-muted" style="font-weight:600;font-size: 14px;">ایمیل </small>
                        </div>
                    </div>
                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control " name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                </div>
                <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
                    <div class="input-group my-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-white">
                                <small class="text-muted" style="font-weight:600;font-size: 14px;"> رمز عبور </small>
                            </div>
                        </div>
                        <input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control " name="password" id="reg_password" autocomplete="new-password" />
                    </div>
                <?php else : ?>

                    <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

                <?php endif; ?>
                <?php do_action( 'woocommerce_register_form' ); ?>
                <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                <button type="submit" class="btn btn-block mt-4 py-3 hvr-pulse-shrink" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
                <?php do_action( 'woocommerce_register_form_end' ); ?>
            </form>
        </div>
        <div class="card-footer border-0 d-flex justify-content-center align-items-center py-4">
            <p class="mb-0 text-center ml-2" style="font-size: 16px;font-weight: 500;"> قبلا ثبت نام کرده اید ؟!  </p>
            <a href="<?php echo wc_get_account_endpoint_url('dashboard') ?>" class="text-danger" style="font-size: 16px;font-weight: 600;">همین حالا وارد شوید . . .  </a>
        </div>
    </div>
    </div>
</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
