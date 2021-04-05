<div class="row">
    <div class="col-12">
        <div id="pagination">
            <div class="nav-previous alignleft"><?php next_posts_link(); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link(); ?></div>
            <div class="clearfix"></div>
            <br>
            <?php   the_posts_pagination(); ?>
        </div>
    </div>
</div>

