<?php  echo hamyar_shop_acf_get_field('review');
$advantages=hamyar_shop_acf_get_field('advantage');
$disadvantages=hamyar_shop_acf_get_field('disadvantages');
$review_group=hamyar_shop_acf_get_field('review_group');

?>
<div class="row mt-5">
    <?php if (!empty($advantages)): ?>
    <div class="col-12 col-lg-4">
        <p class="text-success"> نقاط قوت : </p>
        <?php foreach ($advantages as $adv): if (empty($adv)) continue; ?>
            <small class="d-block mb-2">
                 <i class="fas fa-plus-circle align-middle text-success"></i> <?php echo $adv ?>
            </small>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if (!empty($disadvantages)): ?>
    <div class="col-12 col-lg-4">
        <p class="text-danger"> نقاط ضعف : </p>
        <?php foreach ($disadvantages as $adv): if (empty($adv)) continue; ?>
        <small class="d-block mb-2">
             <i class="fas fa-minus-circle align-middle text-danger"></i><?php echo $adv ?>
        </small>
        <?php endforeach; ?>

    </div>
    <?php endif; ?>
    <div class="col-12 col-lg-4">
        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <small> <?php esc_html_e('materials woven','hamyar'); ?> (<?php echo $review_group['materials_woven'] ?>%) </small>
                <small> خوب </small>
            </div>
            <div class="progress rounded-pill" style="height: 0.5rem;">
                <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" style="width: <?php echo $review_group['materials_woven'] ?>%;"></div>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <small> <?php esc_html_e('sewing quality','hamyar'); ?> (<?php echo $review_group['sewing_quality'] ?>%)</small>
                <small> خوب </small>
            </div>
            <div class="progress rounded-pill" style="height: 0.5rem;">
                <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" style="width: <?php echo $review_group['sewing_quality'] ?>%;"></div>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <small> <?php esc_html_e('customer satisfaction','hamyar'); ?> (<?php echo $review_group['customer_satisfaction'] ?>%) </small>
                <small> خوب </small>
            </div>
            <div class="progress rounded-pill" style="height: 0.5rem;">
                <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" style="width:  <?php echo $review_group['customer_satisfaction'] ?>%;"></div>
            </div>
        </div>
    </div>
</div>
