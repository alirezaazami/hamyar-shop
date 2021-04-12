<?php
$args = array(
    'post_type'      => 'my_customer',
    'posts_per_page' => -1,
);
$loop = new WP_Query($args);
if ($loop->post_count>5):
?>
<div class="customers my-5 py-5">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="bold text-center mb-4">
                <h5 class="d-block text-center" style="font-weight: 900;"> مشتریان ما </h5>
                <small class="text-muted" style="letter-spacing: 4px;"> our customers </small>
            </div>
            <div class="col-12">
                <div class="card border-0 brands-card">
                    <div class="card-body py-2">
                        <div class="slider-2st">
                            <span class="slickArrow next8"> <i class="fas fa-chevron-right"></i> </span>
                            <span class="slickArrow prev8"> <i class="fas fa-chevron-left"></i> </span>
                            <div class="slider1 d-flex justify-content-between">
                                <?php

                                while ( $loop->have_posts() ) {
                                    $loop->the_post();
                                    ?>
                                <span title="<?php the_title() ?>">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <?php the_post_thumbnail('thumbnail',['class'=>'img-fluid d-block mx-auto']); ?>
                                        </div>
                                    </div>
                                </span>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php   endif;