<div class="d-flex justify-content-between align-items-center my-5 arrows">
    <?php if (get_next_post_link()): ?>
    <div class="next-post-link">
        <i class="fas fa-chevron-right align-middle ml-1"></i>
        <?php next_post_link('%link','next post'); ?>
    </div>
    <?php endif; ?>
    <?php if (get_previous_post_link()): ?>
    <div class="previous-post-link">
        <?php previous_post_link('%link','previous post'); ?>
        <i class="fas fa-chevron-left align-middle mr-1"></i>
    </div>
    <?php endif; ?>
</div>
<div class="d-felx justify-content-between align-items-center mb-4">
    <strong class="d-block"> برچسب ها :
        <?php the_tags(); ?>
<!--        <a href="#" class="px-3 py-1 rounded-pill bg-light"> لوازم </a>-->
<!--        <a href="#" class="px-3 py-1 rounded-pill bg-light"> طراحی </a>-->
    </strong>
</div>
<?php   comments_template();
