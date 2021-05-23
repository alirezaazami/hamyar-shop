<?php
/**
 * My Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-address.php.
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

defined( 'ABSPATH' ) || exit;

$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing'  => __( 'Billing address', 'woocommerce' ),
			'shipping' => __( 'Shipping address', 'woocommerce' ),
		),
		$customer_id
	);
} else {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing' => __( 'Billing address', 'woocommerce' ),
		),
		$customer_id
	);
}

$oldcol = 1;
$col    = 1;
?>

<p>
	<?php echo apply_filters( 'woocommerce_my_account_my_address_description', esc_html__( 'The following addresses will be used on the checkout page by default.', 'woocommerce' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</p>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	<div class="u-columns woocommerce-Addresses col2-set addresses">
<?php endif; ?>

<?php
$address = wc_get_account_formatted_address();
$customer = new WC_Customer( get_current_user_id() );
$customer_address=$customer->get_billing();
?>
    <div class="card border-0 address">
        <div class="card-header bg-transparent border-0 pt-0">
            <p class="mb-0 px-2 py-1"> آدرس  </p>
        </div>
        <div class="card-body">
            <p class="mb-0 text-center"> <strong> نمایش کامل آدرس : </strong>
                <?php echo str_replace('<br/>',',' ,$address); ?>
            </p><table class="table table-borderless table-striped text-center table-responsive-md">
                <thead>
                <tr>
                    <th> استان : </th>
                    <th> آدرس : </th>
                    <th> کد پستی : </th>
                    <th> عملیات : </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> <?php echo $customer_address['city'] ?> </td>
                    <td> <?php echo $customer_address['address_1'] ?> </td>
                    <td> <?php echo $customer_address['postcode'] ?> </td>
                    <td><a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', 'billing' ) ); ?>" class="edit"><?php echo $address ? esc_html__( 'Edit', 'woocommerce' ) : esc_html__( 'Add', 'woocommerce' ); ?></a>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	</div>
	<?php
endif;
