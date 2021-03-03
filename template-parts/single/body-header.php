<?php echo get_the_post_thumbnail(get_the_ID(),'medium_large',array( 'class' => 'img-fluid' )) ?>
<h5 class="d-block text-center mt-4 mb-2"> <?php the_title() ?> </h5>
<div class="d-flex justify-content-around align-items-center mt-3 flex-warp blog-info">
    <small class="px-3 py-1">تاریخ:  <?php the_time(); ?> </small>
    <small class="px-3 py-1">دسته بندی ها: <?php the_category(); ?> </small>
    <small class="px-3 py-1"> نویسنده : <?php the_author() ?> </small>
</div>