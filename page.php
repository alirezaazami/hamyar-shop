<?php
get_header();
?>
<main>
    <div class="container my-5">
        <div class="row">
                <div class="col-12 ">
                    <div class="card border-0 content-blog">
                        <div class="card-body">
            <?php if (have_posts()):while(have_posts()):the_post();
                the_content();
            endwhile;
            endif;
            ?>
                        </div></div></div>
        </div>
        <!-- /.row -->
    </div>
</main>
<!-- End Main -->
<?php
get_footer();
