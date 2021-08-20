<!-- Start Header Top -->
<header>
    <div class="header-top bg-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 text-center text-lg-right">
                    <h3 class="mb-0">
                        <a href="#"> <img src="<?php echo hamyar_shop_get_option('logo')['url'] ?>" class="img-fluid" alt="logo"> </a>
                    </h3>
                </div>
                <div class="col-12 col-lg-6">
                   <?php  get_template_part('template-parts/header/search-form') ?>
                </div>
                <div class="col-12 col-lg-3 d-flex justify-content-center justify-content-lg-end register mt-md-2">
                    <a href="<?php echo (function_exists('wc_get_account_endpoint_url'))?wc_get_account_endpoint_url('dashboard'):admin_url('wp-login.php') ?>" class="ml-3 py-1 px-2"> <i class="fas fa-sign-in-alt align-middle ml-1"></i>
                        <?php if (is_user_logged_in()): ?>
                            پنل کاربری
                        <?php else: ?>
                            ورود / ثبت نام
                        <?php endif; ?>
                    </a>
                    <?php if (function_exists('woocommerce_mini_cart')): ?>
                        <span  class="py-1 px-2 minicart_menu"> <i class="fas fa-shopping-cart align-middle ml-1"></i>
                            سبد خرید
                            <div id="hamyar-shop-minicart">
                                <div class="widget_shopping_cart_content">
                                    <?php woocommerce_mini_cart(); ?>
                                </div>
                                <div class="clearfix"></div>
                                <!-- /.clearfix -->
                            </div>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

<?php get_template_part('template-parts/header/top-navigation') ?>
</header>

    <!-- End Header -->