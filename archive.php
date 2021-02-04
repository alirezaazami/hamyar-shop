<?php  get_header();    ?>
<!-- Start Main -->
<main>
    <div class="container my-5">
        <?php get_template_part('template-parts/archive/filter') ?>
        <div class="row">
            <?php get_sidebar() ?>
            <div class="col-12 col-lg-8 mb-4">
                <div class="row">
                    <?php get_template_part('template-parts/archive/loop') ?>
                </div>
            </div>
        </div>
    </div>

</main>
    <!-- End Main -->

<?php   get_footer();