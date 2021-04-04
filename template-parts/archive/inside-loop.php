<div class="col-12 col-lg-6">
    <div class="card border-0 articles mb-3">
        <div class="card-body px-2 pt-2 pb-0">
            <div class="d-flex align-items-center">
                <div class="card-img-top w-50 ml-lg-2">
                    <?php
                    if ( has_post_thumbnail( get_the_ID() ) ):
                        echo get_the_post_thumbnail( get_the_ID(), 'thumbnail', array('class' => 'img-fluid') );
                    else:
                        echo '<img src="'.get_stylesheet_directory_uri().'/assets/img/empty-100x100.jpg" class="img-fluid">';
                    endif; ?>
                </div>
                <div>
                <a href="<?php the_permalink(); ?>" target="_blank" class="d-block title-link">
                       <?php the_title() ?>
                    </a>
                    <small class="d-block mt-2">
                    <?php the_excerpt(); ?>
                    </small>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center articles-bottom mt-2">
                <div class="mr-1">
                    <time datetime="<?php echo get_post_time('Y-m-d h:i',get_the_ID()) ?>"><small><i class="fas fa-calendar-alt"></i> <?php echo get_the_date() ?></small></time>
                    <small class="mr-2"><i class="fas fa-pen-alt"></i> <?php the_author() ?> </small>
                </div>
                <a href="<?php the_permalink(); ?>" class="px-3 py-1 ml-1" target="_blank"> بیشتر بدانید </a>
            </div>
        </div>
    </div>
</div>