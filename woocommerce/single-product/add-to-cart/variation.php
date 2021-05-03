<?php
/**
 * Single variation display
 *
 * This is a javascript-based template for single variations (see https://codex.wordpress.org/Javascript_Reference/wp.template).
 * The values will be dynamically replaced after selecting attributes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.5.0
 */

defined( 'ABSPATH' ) || exit;

?>
<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>

    <div class="d-flex align-items-center justify-content-between mb-1">
        <small> <?php esc_html_e('send from','hamyar'); ?>: </small>
        <small> <?php echo hamyar_shop_acf_get_field('send_from') ?> </small>
    </div>
    <div class="woocommerce-variation-availability d-flex align-items-center justify-content-between mb-1">
        <small> <?php esc_html_e('status','hamyar'); ?>: </small>
        <small>{{{ data.variation.availability_html }}}</small>
    </div>
    <hr>
    <div class="woocommerce-variation-price d-flex align-items-center justify-content-between mb-1">
        <small> <?php esc_html_e('product price','hamyar'); ?>: </small>
        <small>{{{ data.variation.price_html }}}</small>
    </div>
    <hr>

</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p><?php esc_html_e( 'Sorry, this product is unavailable. Please choose a different combination.', 'woocommerce' ); ?></p>
</script>
