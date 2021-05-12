<?php
//template name:contact us
?>
<?php   get_header(); ?>
<!-- Start Main -->
<main>
    <div class="container">
        <?php get_template_part('template-parts/header/breadcrumb') ?>
        <div class="row">
            <div class="col-12">
                <iframe src="<?php echo hamyar_shop_acf_get_field('google_map') ?>"  height="400" style="border:0; width: 100%" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="col-12 col-lg-7">
                <div class="card border-0 contact-us contact-us-first">
                    <div class="card-body  p-contactus">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0" style="font-weight: 500;"> <i class="fas fa-dot-circle text-muted"></i> تماس با مدیریت  </p>
                        </div>
                            <?php echo hamyar_shop_acf_get_field('contact_with_manager') ?>
                    </div>
                </div>
                <div class="card border-0 contact-us mt-3">
                    <div class="card-body p-contactus">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <p class="mb-0" style="font-weight: 500;"> <i class="fas fa-dot-circle text-muted"></i>تماس با بخش مشتریان </p>
                        </div>
                        <?php echo hamyar_shop_acf_get_field('contact_with_customer_section') ?>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="card border-0 contact-us2 mt-3 mt-lg-0">
                    <div class="card-body" id="contact-us-form">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0"> فرم تماس با ما </h5>
                            <small class="text-muted small-contact"> Contact Us </small>
                        </div>
                        <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
    <!-- End Main -->

<?php get_footer();