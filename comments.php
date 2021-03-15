<div class="viwe">
    <p> <?php  
        echo get_comments_number();
        ?>
        <?php esc_html_e('comments for post','hamyar'); ?>
        <strong> "<?php the_title() ?>" </strong>
        <?php esc_attr_e('is sent:' ,'hamyar'); ?>
    </p>
</div>
<div class="comment-list">
    <?php
    wp_list_comments( array(
                          'short_ping'  => true,
                          'avatar_size' => 64,
                          'callback'=>'hamyar_shop_comment_callback'
                      ) );
    ?>
</div><!-- .comment-list -->

<?php
// Are there comments to navigate through?
if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
    <nav class="navigation comment-navigation" role="navigation">
        <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'hamyar' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'hamyar' ) ); ?></div>
    </nav><!-- .comment-navigation -->
<?php endif; // Check for comment navigation ?>

<br>
<div>
    <div class="pagination">
        <?php paginate_comments_links(); ?>
    </div>
</div>

<div class="form-comment mt-5">
<?php

$author='<div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text bg-white">
                    <small> نام و نام خانوادگی : </small>
                </div>
            </div>
            <input type="text" name="author" class="form-control" placeholder="لطفا نام ونام خانوادگی خود را وارد کنید . . . ">
        </div>';

$email='<div class="input-group my-3">
            <div class="input-group-prepend">
                <div class="input-group-text bg-white">
                    <small> ایمیل :</small>
                </div>
            </div>
            <input type="text" name="email" class="form-control" placeholder="لطفا پست الکترونیکی خود را وارد کنید . . . ">
        </div>';
$textarea='<div class="form-group">
            <textarea id="" cols="30" rows="10" name="comment" class="form-control" placeholder="متن نظر شما . . . . "></textarea>
        </div>';
//Array
$comments_args = array(
    //Define Fields
    'fields' => array(
        //Author field
        'author' => $author,
        //Email Field
        'email' => $email,
    ),
    // Change the title of send button
    'label_submit' => esc_html__('send comment','hamyar'),
    // Redefine your own textarea (the comment body).
    'comment_field' => $textarea,
    //Message Before Comment
//

    'comment_notes_before' =>sprintf('<small class="pb-2 d-block">%s</small>',esc_html__('your email address is private, please fill all input and send.','hamyar')),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
);
comment_form( $comments_args );
?>
</div>
