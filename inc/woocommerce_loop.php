<?php

function hamyar_shop_get_newest_woocommerce_product_loop(){
    if (!function_exists('wc_get_template_part')) return '';
    $args=array(
        'post_type'=>'product',
        'post_status'=>'publish',
        'posts_per_page'=>8
    );
    $the_posts=new WP_Query($args);
    if ($the_posts->have_posts() && $the_posts->found_posts >=4):
        ?>
        <div class="bold text-center">
            <h5 class="d-block text-center" style="font-weight: 900;"> جدیدترین محصولات </h5>
            <small class="text-muted" style="letter-spacing: 4px;"> Latest Products </small>
        </div>
        <div class="slider-2st">
        <span class="slickArrow next2"> <i class="fas fa-chevron-right"></i> </span>
        <span class="slickArrow prev2"> <i class="fas fa-chevron-left"></i> </span>
        <div class="slider5 product_slider">
    <?php
        while ($the_posts->have_posts()):
            $the_posts->the_post();
            wc_get_template_part('content','product-slider');
        endwhile;
        echo '</div></div>';
    endif;
    wp_reset_postdata();
}

function hamyar_shop_get_top_sales_woocommerce_product_loop(){
    if (!function_exists('wc_get_template_part')) return '';
    $args=array(
        'post_type'=>'product',
        'post_status'=>'publish',
        'meta_key'=>'total_sales',
        'orderby'=>'meta_value_num',
        'order'=>'DESC',
        'posts_per_page'=>8,
        'meta_query'    =>  array(
            'relation '     => 'AND',
            array(
                'key'       => 'total_sales',
                'value' => 0,
                'compare'       => '>',
            )
        ),
    );
    $the_posts=new WP_Query($args);
    if ( $the_posts->have_posts() && $the_posts->found_posts >=4):
        ?>
        <div class="bold text-center mt-4 pt-4">
            <h5 class="d-block text-center" style="font-weight: 900;"> پرفروش ترین محصولات </h5>
            <small class="text-muted" style="letter-spacing: 4px;"> Best selling products </small>
        </div>
        <div class="slider-2st">
        <span class="slickArrow next3"> <i class="fas fa-chevron-right"></i> </span>
        <span class="slickArrow prev3"> <i class="fas fa-chevron-left"></i> </span>
        <div class="slider2 product_slider">
    <?php
        while ($the_posts->have_posts()):
            $the_posts->the_post();
            wc_get_template_part('content','product-slider');
        endwhile;
        echo '</div></div>';
    endif;
    wp_reset_postdata();
}

function hamyar_shop_get_on_sales_woocommerce_product_loop(){
    if (!function_exists('wc_get_template_part')) return '';
    $ids=wc_get_product_ids_on_sale();

    $args=array(
        'post_type'=>'product',
        'post_status'=>'publish',
        'post__in'=>$ids,
        'posts_per_page'=>8
    );
    $the_posts=new WP_Query($args);
    if ($the_posts->have_posts() && $the_posts->found_posts >=4 ):
        ?>
        <div class="bold text-center mt-4 pt-4">
            <h5 class="d-block text-center" style="font-weight: 900;"> تخفیف خورده ها </h5>
            <small class="text-muted" style="letter-spacing: 4px;"> Discounts </small>
        </div>
        <div class="slider-2st">
            <span class="slickArrow next5"> <i class="fas fa-chevron-right"></i> </span>
            <span class="slickArrow prev5"> <i class="fas fa-chevron-left"></i> </span>
            <div class="slider4 product_slider">
        <?php
        while ($the_posts->have_posts()):
            $the_posts->the_post();
            wc_get_template_part('content','product-slider');
        endwhile;
        echo '</div></div>';
    endif;
    wp_reset_postdata();
}

function hamyar_shop_get_last_post_slider(){
    $args=array(
        'post_type'=>'post',
        'post_status'=>'publish',
        'posts_per_page'=>3
    );
    $the_posts=new WP_Query($args);
    if ($the_posts->have_posts()):
        while ($the_posts->have_posts()):
            $the_posts->the_post(); ?>
            <div class="card border-0 mt-3 mb-3">
                <div class="card-body py-0">
                    <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid mb-3">
                    <a href="<?php the_permalink(); ?>" class="d-block mb-2"> <?php the_title() ?></a>
                    <small class="d-block text-muted"> <?php echo get_the_date() ?></small>
                </div>
            </div>
        <?php
        endwhile;
    endif;
    wp_reset_postdata();
}

function hamyar_shop_get_approved_comment(){
    $args=array(
        'number'=>3,
        'status'  => 1,
        'order'   => 'DESC',
        'hierarchical'=>'threaded'
    );
    $comments_query = new WP_Comment_Query();
    $comments = $comments_query->query( $args );
        foreach ($comments as $comment):
            ?>
            <div class="d-flex align-items-center card-hover-3 border-bottom py-2">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/businessman.png" class="img-fluid ml-2" alt="nazar">
                <div>
                    <span class="d-block"> <?php echo $comment->comment_author; ?> </span>
                    <small><?php echo $comment->comment_content; ?> </small>
                </div>
            </div>
        <?php
        endforeach;

}