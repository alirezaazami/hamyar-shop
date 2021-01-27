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