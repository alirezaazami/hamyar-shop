<div class="row">
    <div class="col-12 mb-5">
        <div class="card border-0" style="border-radius: 25px;">
            <div class="card-body py-2 d-flex flex-column flex-lg-row justify-content-between align-items-center">
                <div class="breadcrumb breadcrumb1 bg-transparent pb-0">
                    <?php get_breadcrumb(); ?>
                </div>
                <div>
                    <ul class="nav pr-0 d-flex align-items-center fliter">
                        <li class="nav-item my-0 ml-lg-0">
                            <i class="fas fa-sort-amount-down align-middle"></i>
                            فیلتر بر اساس :
                        </li>
                        <?php
                        $active='newest';
                        if (isset($_GET['orderby'])){
                            if ($_GET['orderby']==='post_views'){
                                $active='must_views';
                            }elseif ($_GET['orderby']==='date' && $_GET['order']==='asc'){
                                $active='oldest';
                            }
                        }
                        
                        ?>
                        <li class="nav-item">
                            <a href="<?php echo add_query_arg(['orderby'=>'date','order'=>'desc']) ?>" class="nav-link px-2 <?php echo ($active==='newest')?'active':'' ?>"> جدیدترین </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo add_query_arg(['orderby'=>'post_views','order'=>'desc']) ?>" class="nav-link px-2  <?php echo ($active==='must_views')?'active':'' ?>"> پربازدیدترین </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo add_query_arg(['orderby'=>'date','order'=>'asc']) ?>" class="nav-link px-2 <?php echo ($active==='oldest')?'active':'' ?>"> قدیمیترین </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

