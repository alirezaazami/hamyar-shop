<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php hamyar_shop_html_class_list() ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-light'); ?> >
<?php wp_body_open(); ?>
<!-- Start Header -->

<?php get_template_part('template-parts/header/site-header');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
//           @hooked woocommerce_output_all_notices - 10
            do_action('hamyar_shop_header_notice');
            ?>
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
