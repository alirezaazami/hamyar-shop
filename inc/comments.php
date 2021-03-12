<?php
function hamyar_shop_comment_callback($comment, $args, $depth){
    ?>
    <div class="card border-0 bg-light mb-2 <?php echo (!empty($args['has_children']))?' parent ':' ' ?>">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <?php echo get_avatar( $comment, $args['avatar_size'] ,'','img-users',['class'=>'img-fluid ml-3']); ?>
                <div>
                    <p class="mb-0"> <?php echo get_comment_author($comment); ?> گفته : </p>
                    <small class="text-muted">  در تاریخ  <?php echo get_comment_date(); ?> این دیدگاه ارسال شده :  </small>
                </div>
            </div>
            <?php  comment_text(); ?>
            <?php
            comment_reply_link(
                array_merge(
                    $args,
                    array(
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth']
                    )
                )
            ); ?>
        </div>

    </div>
    <?php
}
