<?php
get_header();
?>
    <main>
        <div class="container my-5">
            <div class="row">
                            <?php if (have_posts()):while(have_posts()):the_post();
                                the_content();
                            endwhile;
                            endif;
                            ?>
            </div>
            <!-- /.row -->
        </div>
    </main>
    <!-- End Main -->
<?php
get_footer();
