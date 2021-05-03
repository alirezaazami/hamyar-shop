<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<div class="border-bottom d-flex flex-column flex-lg-row">
    <h1>
        <?php the_title(); ?>
    </h1>
</div>

<div class="my-4 border-bottom pb-4">
    <div class="line1">
        <strong> برند : <?php echo hamyar_shop_get_product_category(get_the_ID(),'product_brand') ?></strong>
        <strong class="mx-lg-5"> دسته بندی : <?php echo hamyar_shop_get_product_category(get_the_ID(),'product_cat') ?></strong>
        <?php if (!empty(hamyar_shop_acf_get_field('created_for'))): ?>
             <strong> مناسب : <?php echo hamyar_shop_acf_get_field('created_for') ?></strong>
        <?php endif; ?>
    </div>
    <?php 
    $hs_product_specifications=hamyar_shop_acf_get_field('product_specifications');
    if (!empty($hs_product_specifications)):
    ?>
    <div class="line2 mt-4">
        <strong class="ml-lg-5"> ویژگی های محصول : </strong>
        <?php foreach ($hs_product_specifications as $hs_specification): if (empty($hs_specification)) continue; ?>
        <small class="ml-lg-5">
             <i class="fas fa-dot-circle align-middle text-muted"></i> <?php echo $hs_specification ?>
        </small>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>