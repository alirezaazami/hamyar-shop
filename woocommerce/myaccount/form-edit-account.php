<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); ?>


<div class="card border-0 personal-info">
    <div class="card-header bg-transparent border-0 pt-0">
        <p class="mb-0 px-2 py-1"> اطلاعات شخصی : </p>
    </div>
    <div class="card-body">
        <div class="size">
            <form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php
            do_action( 'woocommerce_edit_account_form_tag' ); ?> >
                <?php
                do_action( 'woocommerce_edit_account_form_start' ); ?>
                <div class="row">
                    <div class="form-group col-12 col-lg-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-white">
                                    <small class="text-muted"> نام : </small>
                                </div>
                            </div>
                            <input type="text" name="account_first_name" class="form-control" value="<?php
                            echo esc_attr( $user->first_name ); ?>">
                        </div>
                    </div>
                    <div class="form-group col-12 col-lg-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-white">
                                    <small class="text-muted"> نام خانوادگی : </small>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="account_last_name" value="<?php
                            echo esc_attr( $user->last_name ); ?>">
                        </div>
                    </div>
                    <div class="form-group col-12 col-lg-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-white">
                                    <small class="text-muted"><?php
                                        esc_html_e( 'Display name', 'woocommerce' ); ?>&nbsp;<span
                                                class="required">*</span> </small>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="account_display_name"
                                   id="account_display_name" value="<?php
                            echo esc_attr( $user->display_name ); ?>"/>

                        </div>
                    </div>
                    <div class="form-group col-12 col-lg-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-white">
                                    <small class="text-muted"> تاریخ تولد : </small>
                                </div>
                            </div>
                            <input type="text" class="form-control show_date_picker" name="birthday" value="<?php
                            echo get_user_meta( get_current_user_id(), 'birthday', true ) ?>">
                        </div>
                    </div>
                    <div class="form-group col-12 col-lg-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-white">
                                    <small class="text-muted"> شماره همراه : </small>
                                </div>
                            </div>
                            <input type="text" class="form-control" value="<?php
                            echo get_user_meta( get_current_user_id(), 'billing_phone', true ) ?>" name="billing_phone">
                        </div>
                    </div>
                    <div class="form-group col-12 col-lg-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-white">
                                    <small class="text-muted"> پست الکترونیکی : </small>
                                </div>
                            </div>
                            <input type="email" class="form-control" name="account_email" value="<?php
                            echo esc_attr( $user->user_email ); ?>">
                        </div>
                    </div>


                </div>
                <?php
                do_action( 'woocommerce_edit_account_form' ); ?>
                <fieldset class="row">
                    <div class="col-12 col-lg-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-white">
                                    <small class="text-muted"> <?php
                                        esc_html_e( 'Current password', 'woocommerce' ); ?> </small>
                                </div>
                            </div>
                            <input type="password" class="form-control" name="password_current">
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-white">
                                    <small class="text-muted"><?php
                                        esc_html_e( 'New password', 'woocommerce' ); ?></small>
                                </div>
                            </div>
                            <input type="password" class="form-control" name="password_1">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-white">
                                    <small class="text-muted"> <?php
                                        esc_html_e( 'Confirm new password', 'woocommerce' ); ?></small>
                                </div>
                            </div>
                            <input type="password" class="form-control" name="password_2">
                        </div>
                    </div>

                </fieldset>
                <p>
                    <?php
                    wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
                <div class="col-12 text-left mt-4">
                    <button type="submit" class="woocommerce-Button button" name="save_account_details" value="<?php
                    esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php
                        esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
                </div>
                <input type="hidden" name="action" value="save_account_details"/>
                </p>

                <?php
                do_action( 'woocommerce_edit_account_form_end' ); ?>
            </form>
        </div>
    </div>
</div>
<?php
do_action( 'woocommerce_after_edit_account_form' ); ?>
