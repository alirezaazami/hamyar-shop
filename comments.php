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
