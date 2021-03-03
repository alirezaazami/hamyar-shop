<div class="col-12 col-lg-8">
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