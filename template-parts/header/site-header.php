<!-- Start Header Top -->
<header>
    <div class="header-top bg-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 text-center text-lg-right">
                    <h3 class="mb-0">
                        <a href="#"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/Group 1.png" class="img-fluid" alt="logo"> </a>
                    </h3>
                </div>
                <div class="col-12 col-lg-6">
                   <?php  get_template_part('template-parts/header/search-form') ?>
                </div>
                <div class="col-12 col-lg-3 d-flex justify-content-center justify-content-lg-end register mt-md-2">
                    <a href="#" class="ml-3 py-1 px-2"> <i class="fas fa-sign-in-alt align-middle ml-1"></i> ورود / ثبت نام </a>
                    <span  class="py-1 px-2 minicart_menu"> <i class="fas fa-shopping-cart align-middle ml-1"></i>
                        سبد خرید
                        <div id="hamyar-shop-minicart">
                            <?php woocommerce_mini_cart(); ?>
                            <div class="clearfix"></div>
                            <!-- /.clearfix -->
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

<?php get_template_part('template-parts/header/top-navigation') ?>
</header>

    <!-- End Header -->