<?php
/**
 * template name: about us
 */

?>
<?php   get_header() ?>
<!-- Start Main -->
<main>
    <div class="container">
        <?php get_template_part('template-parts/header/breadcrumb') ?>
        <div class="row">
            <div class="col-12">
                <div class="card border-0 aboutus">
                    <div class="card-body py-lg-0 pr-lg-0 flex-lg-row flex-column d-flex align-items-center">
                        <?php if (have_posts()): while(have_posts()): the_post(); ?>
                        <?php the_post_thumbnail('full',['class'=>'img-fluid']); ?>
                        <div class="mr-lg-3 mt-3 mt-lg-0">
                            <?php the_content(); ?>
                        </div>
<?php endwhile;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
    <!-- End Main -->

<?php get_template_part('template-parts/other/customer-slider') ?>
<?php get_footer();