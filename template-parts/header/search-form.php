<?php
$action=get_home_url();
if (function_exists('is_woocommerce') && is_woocommerce()){
    $action=wc_get_page_permalink('shop');
}


?>

<form class="search-box my-2 my-lg-0" action="<?php echo $action ?>">
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text bg-transparent">
                <small> جستجو </small>
            </div>
        </div>
        <input name="s" type="text" class="form-control" placeholder="نام محصول مورد نظر خود را جستجو کنید . . . ">
    </div>
    <button class="btn position-absolute"> <i class="fas fa-search"></i> </button>
</form>
