<?php    get_header() ?>
<!-- Start Main -->
<main>
    <div class="container">
        
        <?php get_template_part('template-parts/header/breadcrumb') ?>

        <div class="row">
            <?php get_template_part('template-parts/single/main-body') ?>
            <?php get_sidebar(); ?>
        </div>
    </div>

</main>
    <!-- End Main -->

<?php   get_footer();