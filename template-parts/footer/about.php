<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-8 contacting">
            <img src="<?php echo hamyar_shop_get_option('logo')['url'] ?>" class="img-fluid d-block" alt="hamyarmarket">
              <?php echo hamyar_shop_get_option('footer-text') ?>
            <div class="d-flex flex-column flex-lg-row" id="sub-footer-texts">
                <?php foreach (hamyar_shop_get_option('footer-multi-text') as $text): ?>
                <div class="card border-0 bg-transparent flex-grow-1 text-muted">
                    <?php echo $text; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="d-flex flex-column flex-lg-row align-items-center mt-3">
                <?php if (hamyar_shop_get_option('enable-telegram')==='1'): ?>
                <a href="<?php echo hamyar_shop_get_option('telegram-url') ?>" class="text-white">
                    <div class="card border-0 massengers1">
                        <div class="card-body d-flex align-items-center py-2">
                            <span class="text-white"><i class="fab fa-telegram-plane fa-2x"></i> </span>
                            <p class="mb-0 mr-1 text-white" style="font-size: 15px;">  <?php echo hamyar_shop_get_option('telegram-text') ?> </p>
                        </div>
                    </div>
                </a>
                <?php endif; ?>
                <?php if (hamyar_shop_get_option('enable-instagram')==='1'): ?>
                <a href="<?php echo hamyar_shop_get_option('intagram-url') ?>" class="text-white" target="_blank">
                    <div class="card border-0 massengers2 mx-lg-3 my-3 my-lg-0">
                        <div class="card-body d-flex align-items-center py-2">
                            <span class="text-white"><i class="fab fa-instagram fa-2x"></i> </span>
                            <p class="mb-0 mr-1 text-white" style="font-size: 15px;"> <?php echo hamyar_shop_get_option('intagram-text') ?></p>
                        </div>
                    </div>
                </a>
                <?php endif; ?>
                <?php if (hamyar_shop_get_option('enable-whatsapp')==='1'): ?>
                <a href="<?php echo hamyar_shop_get_option('whatsapp-url') ?>" class="text-white">
                    <div class="card border-0 massengers3">
                        <div class="card-body d-flex align-items-center py-2">
                            <span class="text-white"><i class="fab fa-whatsapp fa-2x"></i> </span>
                            <p class="mb-0 mr-1 text-white" style="font-size: 15px;">  <?php echo hamyar_shop_get_option('whatsapp-text') ?> </p>
                        </div>
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <form class="link-dl shadow-sm mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-white">
                            <small> عضویت در خبرنامه </small>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder=" لطفا ایمیل خود را وارد کنید . . . ">
                </div>
                <button class="btn position-absolute"> ثبت </button>
            </form>
            <div class="d-flex my-3">
                <div>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/_2973266085536.png" class="img-fluid" alt="googleplay">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/_2973266085536.png" class="img-fluid" alt="googleplay">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/_2973266085536.png" class="img-fluid" alt="googleplay">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/_2973266085536.png" class="img-fluid" alt="googleplay">
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center">
                <a href="#" class="flex-grow-1">
                    <div class="card border-0 enamad">
                        <div class="card-body p-1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/Group 706.png" class="img-fluid d-block mx-auto" alt="logoenamad">
                            <small class="text-center text-muted mt-2 d-block"> نماد اعتماد الکترونیکی </small>
                        </div>
                    </div>
                </a>
                <a href="#" class="flex-grow-1">
                    <div class="card border-0 enamad my-3 mx-lg-2 my-lg-0">
                        <div class="card-body p-1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/Group 706.png" class="img-fluid d-block mx-auto" alt="logoenamad">
                            <small class="text-center text-muted mt-2 d-block"> نماد اعتماد الکترونیکی </small class="text-center text-muted mt-2 d-block">
                        </div>
                    </div>
                </a>
                <a href="#" class="flex-grow-1">
                    <div class="card border-0 enamad">
                        <div class="card-body p-1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/Group 706.png" class="img-fluid d-block mx-auto" alt="logoenamad">
                            <small class="text-center text-muted mt-2 d-block"> نماد اعتماد الکترونیکی </small class="text-center text-muted mt-2 d-block">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>