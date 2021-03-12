<div class="d-flex justify-content-between align-items-center my-5 arrows">
    <?php if (get_next_post_link()): ?>
    <div class="next-post-link">
        <i class="fas fa-chevron-right align-middle ml-1"></i>
        <?php next_post_link('%link',__('next post','hamyar')); ?>
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
    <strong class="d-block" id="single-post-tag-list">
        <?php the_tags(null,''); ?>
    </strong>
</div>
<?php
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;