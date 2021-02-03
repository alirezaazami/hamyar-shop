<?php    get_header() ?>
<!-- Start Main -->
<main>
    <div class="container my-5">
        
        <?php get_template_part('template-parts/single/breadcrumb') ?>

        <div class="row">
            <?php get_template_part('template-parts/single/main-body') ?>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php   get_footer();