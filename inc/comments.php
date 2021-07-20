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
            <?php
            if ( '0' === $comment->comment_approved ) { ?>
                <p class="meta">
                    <em class="woocommerce-review__awaiting-approval">
                        <?php esc_html_e( 'Your review is awaiting approval', 'woocommerce' ); ?>
                    </em>
                </p>
            <?php }
            ?>
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

add_filter( 'comment_form_fields', 'hamyar_shop_comment_fields_custom_order' );
function hamyar_shop_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    unset( $fields['comment'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['comment'] = $comment_field;
    // done ordering, now return the fields:
    return $fields;
}