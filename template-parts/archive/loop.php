<?php
if (have_posts()):
    ?>
    <div class="row">
    <?php
    while (have_posts()):the_post();
        get_template_part('template-parts/archive/inside-loop');
    endwhile;
    ?>
    </div>
<?php
        get_template_part('template-parts/other/pagination');
    else : ?>

<?php esc_html_e('Sorry, no posts matched your criteria.','hamyar-shop'); ?>

<?php endif; ?>