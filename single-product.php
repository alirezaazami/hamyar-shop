<?php    get_header() ?>
    <!-- Start Main -->
    <main>
        <div class="container my-5">

            <?php get_template_part('template-parts/header/breadcrumb') ?>

            <div class="row">
                <?php get_template_part('template-parts/product/main-body') ?>
            </div>
        </div>

    </main>
    <!-- End Main -->

<?php   get_footer();