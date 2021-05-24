<?php
/**
 * template name: font page 1
 */

?>
<?php   get_header(); ?>
<?php
$top_section=hamyar_shop_acf_get_field('top_section');
$top_categories=hamyar_shop_acf_get_field('top_categories');
$my_website_offer=hamyar_shop_acf_get_field('my_website_offer');
?>
    <!-- Start Main -->
    <main>

        <?php if ($top_section['top-picture']==='image'): ?>
            <div class="container">
                <div class="row my-4">
                    <div class="col-12">
                        <img src="<?php echo $top_section['select_picture']['url'] ?>" class="img-fluid" alt="slide">
                    </div>
                </div>
            </div>
        <?php else:
            echo do_shortcode($top_section['slider_shortcode']);
        endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column flex-lg-row justify-content-between mt-4">
                    <?php foreach ($top_categories as $top_category):
                            if (empty( $top_category['link'])) continue;
                        ?>
                    <a href="<?php echo $top_category['link'] ?>" class="flex-grow-1 ml-lg-3">
                        <div class="card border-0 card-hover1 mb-4 mb-lg-0">
                            <div class="card-body text-center">
                                <img src="<?php echo wp_get_attachment_image_src($top_category['image'],'thumbnail')[0] ?>" class="img-fluid">
                                <strong class="d-block mt-2"><?php echo $top_category['text'] ?> </strong>
                            </div>
                        </div>
                    </a>
<?php endforeach; ?>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12 d-flex flex-column flex-lg-row justify-content-between">
                    <?php foreach ($my_website_offer as $offer):
                        if ( isset( $offer[ 'link' ] ) && !empty( $offer[ 'link' ] ) ) {
                            echo '<a href="#" class="flex-grow-1 ml-lg-3">';
                        }else{
                            echo '<span class="flex-grow-1 ml-lg-3">';
                        }
                        echo '<div class="card border-0 card-hover1 mb-4 mb-lg-0">';
                        echo '<div class="card-body d-flex justify-content-between align-items-center">';
                        echo '<div>';
                        echo '<strong class="d-block mb-2">'.$offer['text'].'</strong>';
                        echo '<small>'.$offer['btn_text'].'</small>';
                        echo '</div>';
                        echo '<img src="'.wp_get_attachment_image_src($offer['image']['id'],'thumbnail')[0].'" class="img-fluid">';
                        echo '</div>';
                        echo '</div>';
                        if ( isset( $offer[ 'link' ] ) && !empty( $offer[ 'link' ] ) ) {
                            echo '</a>';
                        }else{
                            echo '</span>';
                        }
                    endforeach; ?>
                </div>
            </div>
        </div>
        <div class="newest py-5 my-5">
            <div class="container">

                        <?php hamyar_shop_get_newest_woocommerce_product_loop(); ?>

                        <?php hamyar_shop_get_top_sales_woocommerce_product_loop(); ?>

                        <?php hamyar_shop_get_on_sales_woocommerce_product_loop(); ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="slide mx-lg-3 middle-div h-100 my-lg-0">
                        <div class="card border-0 h-100">
                            <div class="card-body pt-0 px-1">
                                <p class="px-3 py-1"> مطالب اخیر بلاگ </p>
                                <div class="slider3">
                                    <?php hamyar_shop_get_last_post_slider(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                    <div class="left-div mt-3 mt-lg-0 h-100">
                        <div class="card border-0 h-100">
                            <div class="card-body pt-0 px-1 pb-2">
                                <p class="px-3 py-1 mr-3"> نظر خریداران </p>
                                <?php hamyar_shop_get_approved_comment(); ?>

                                <div class="d-flex align-items-center card-hover-3 border-bottom py-2 mt-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/businessman.png" class="img-fluid ml-2" alt="nazar">
                                    <div>
                                        <a href="#" class="d-block"> امیر دینی </a>
                                        <small> لورم اپیسوم متنی کاملا ساختگی است و هیچ . . .  </small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center card-hover-3 border-bottom py-2 mt-2">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/businessman.png" class="img-fluid ml-2" alt="nazar">
                                    <div>
                                        <a href="#" class="d-block"> امیر دینی </a>
                                        <small> لورم اپیسوم متنی کاملا ساختگی است و هیچ . . .  </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/other/customer-slider') ?>

    </main>
    <!-- End Main -->

<?php   get_footer();