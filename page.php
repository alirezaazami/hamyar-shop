<?php
get_header();
?>
<main>
    <div class="container my-5">
        <?php if (have_posts()):while(have_posts()):the_post();
        the_content();
        endwhile;
        endif;

        ?>
    </div>
</main>
<!-- End Main -->
<?php
get_footer();
