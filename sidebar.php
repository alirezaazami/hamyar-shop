<!--separate single and archive sidebar-->
<?php if (is_active_sidebar('single-sidebar')): ?>
<div class="col-12 col-lg-4" id="single-sidebar">
    <div class="card border-0 mt-3 mt-lg-0">
           <?php dynamic_sidebar('single-sidebar'); ?>
    </div>
</div>
<?php endif; ?>