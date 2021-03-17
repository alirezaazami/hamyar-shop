<?php
$single_page_class= (is_active_sidebar('single-sidebar')) ? ' col-lg-8 ':'';
?>
<div class="col-12 <?php echo $single_page_class ?>">
    <div class="card border-0 content-blog">
        <div class="card-body">
            <?php if (have_posts()):
                    while (have_posts()):
                        the_post();
                        get_template_part('template-parts/single/body-header');
                        the_content();
                        get_template_part('template-parts/single/body-footer');
                endwhile;
                else:
                    echo 'no post';
                endif; ?>
        </div>
    </div>
</div>