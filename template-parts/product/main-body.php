<?php   $product=wc_get_product(); ?>
<div class="col-12">
    <div class="card border-0 product">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-1 mb-3 mb-lg-0">
                    <ul class="nav pr-0 flex-column side-icon">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link">
                                <i class="fas fa-heart align-middle"></i>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link">
                                <i class="fas fa-share-alt align-middle"></i>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link">
                                <i class="fas fa-heart align-middle"></i>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link">
                                <i class="fas fa-share-alt align-middle"></i>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link">
                                <i class="fas fa-heart align-middle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 d-flex flex-column justify-content-between mb-3 mb-lg-0">

                    <div class="tab-content">
                        <div class="tab-pane fade show active showlarge" id="img1">
                            <a href="#" class="showlarge">
                                <img src="img/Mask Group 6.png" class="img-fluid" alt="img1">
                            </a>
                        </div>
                        <div class="tab-pane fade showlarge" id="img2">
                            <a href="#" class="showlarge">
                                <img src="img/Mask Group 6.png" class="img-fluid" alt="img1">
                            </a>
                        </div>
                        <div class="tab-pane fade showlarge" id="img3">
                            <a href="#" class="showlarge">
                                <img src="img/Mask Group 6.png" class="img-fluid" alt="img1">
                            </a>
                        </div>
                    </div>
                    <div class="nav pr-0 flex-nowrap mt-4 changer">
                        <li class="nav-item shadow-sm">
                            <a href="#img1" class="nav-link" data-toggle="tab">
                                <img src="img/Mask Group 6.png" class="img-fluid" alt="smallimg">
                            </a>
                        </li>
                        <li class="nav-item shadow-sm mx-2">
                            <a href="#img2" class="nav-link" data-toggle="tab">
                                <img src="img/Mask Group 6.png" class="img-fluid" alt="smallimg">
                            </a>
                        </li>
                        <li class="nav-item shadow-sm">
                            <a href="#img3" class="nav-link" data-toggle="tab">
                                <img src="img/Mask Group 6.png" class="img-fluid" alt="smallimg">
                            </a>
                        </li>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="border-bottom d-flex flex-column flex-lg-row">
                        <h4 style="font-weight: 700;"><?php echo $product->get_title(); ?> </h4>
                    </div>
                    <div class="my-4 border-bottom pb-4">
                        <div class="line1">
                            <strong> برند : <a href="#"> آدیداس </a></strong>
                            <strong class="mx-lg-5"> دسته بندی : <a href="#"> تیشرت ها </a></strong>
                            <strong> مناسب : <a href="#"> بانوان </a></strong>
                        </div>
                        <div class="line2 mt-4">
                            <strong class="ml-lg-5"> ویژگی های محصول : </strong>
                            <small class="ml-lg-5">
                                <i class="fas fa-dot-circle align-middle text-muted"></i> جنیس : نخ
                            </small>
                            <small class="ml-lg-5">
                                <i class="fas fa-dot-circle align-middle text-muted"></i> تراکم : 56
                            </small>
                            <small class="ml-lg-5">
                                <i class="fas fa-dot-circle align-middle text-muted"></i> مناسبه فصل : تابستان
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="colors mb-4">
                                <h6 style="font-weight: 500;font-size: 18px;"> انتخاب رنگ موردنظر : </h6>
                                <div class="mt-3">
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option> آبی </option>
                                                <option> صورتی </option>
                                                <option> زرد </option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="size mb-1">
                                <h6 style="font-weight: 500;font-size: 18px;"> انتخاب سایز موردنظر : </h6>
                                <div class="mt-3">
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option> small </option>
                                                <option> large </option>
                                                <option> xlarge </option>
                                                <option> xxlarge </option>
                                                <option> xxsmall </option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 price-all">
                            <h6> پیش فاکتور : </h6>
                            <div class="d-flex align-items-center justify-content-between mb-1 mt-2">
                                <small> کدمحصول : </small>
                                <small> 1631 </small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <small> ارسال از : </small>
                                <small style="color: red;font-weight: 600;"> همیارمارکت </small>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <small> وضعیت : </small>
                                <small style="color: green;font-weight: 600;"> <?php echo $product->get_stock_status() ?></small>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <small style="font-weight: 600;"> قیمت محصول : </small>
                                <small style="font-weight: 600;"> <?php echo $product->get_price_html() ?></small>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <p style="font-weight: 700;font-size: 20px;"> قیمت نهایی : </p>
                                <p style="font-weight: 700;font-size: 20px;color: #5dc9ff;"> 650.000 تومان </p>
                            </div>
                            <a href="#" class="btn btn-block py-3 hvr-shutter-out-horizontal">
                                <i class="fas fa-shopping-cart align-middle ml-2"></i> افزودن به سبد خرید
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="card border-0 info-product mt-5 mb-4">
        <div class="card-header bg-white pb-0" style="border-radius: 15px 15px 0 0 !important;">
            <ul class="nav pr-0 filter-product">
                <li class="nav-item">
                    <a href="#tabone" class="nav-link active pb-3" data-toggle="tab">
                        <i class="fas fa-list-alt align-middle ml-2"></i> مشخصات
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tabtow" class="nav-link pb-3" data-toggle="tab">
                        <i class="fas fa-comment align-middle ml-2"></i> نظرات کاربران
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tabthree" class="nav-link pb-3" data-toggle="tab">
                        <i class="fas fa-question align-middle ml-2"></i> نقد و بررسی
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tabone">
                    <h5 class="d-block"> مشخصات کلی محصول : </h5>
                    <small> لورم اپیسوم متن ساختگی با تولیدی نامهفوم میباشد </small>
                    <div class="mt-5">
                        <p> مشخصات : </p>
                        <table class="table table-borderless">
                            <tr>
                                <td style="width: 25%;font-weight: 500;" class="bg-light rounded-pill"> نام محصول: </td>
                                <td class="bg-light rounded-pill"> تیشرت آستین کوتاه کد 187</td>
                            </tr>
                            <tr>
                                <td style="width: 25%;font-weight: 500;" class="bg-light rounded-pill"> جنس محصول: </td>
                                <td class="bg-light rounded-pill"> نخی </td>
                            </tr>
                            <tr>
                                <td style="width: 25%;font-weight: 500;" class="bg-light rounded-pill"> مرغوبیت محصول: </td>
                                <td class="bg-light rounded-pill"> اعلا </td>
                            </tr>
                            <tr>
                                <td style="width: 25%;font-weight: 500;" class="bg-light rounded-pill"> دوخت محصول: </td>
                                <td class="bg-light rounded-pill"> غربی </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabtow">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="img/man (4).png" class="img-fluid ml-3" alt="img-users">
                                <div>
                                    <p class="mb-0"> امیر دینی گفته : </p>
                                    <small class="text-muted">  در تاریخ 17 دی 1398 این دیدگاه ارسال شده :</small>
                                </div>
                            </div>
                            <p class="mt-3" style="font-size: 14px;opacity: 0.7;margin-bottom: -15px;">
                                لورم ایپسوم متن ساختگی
                                با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                            </p>
                        </div>
                    </div>
                    <div class="card border-0 bg-light mt-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <img src="img/man (4).png" class="img-fluid ml-3" alt="img-users">
                                <div>
                                    <p class="mb-0"> امیر دینی گفته : </p>
                                    <small class="text-muted">  در تاریخ 17 دی 1398 این دیدگاه ارسال شده :</small>
                                </div>
                            </div>
                            <p class="mt-3" style="font-size: 14px;opacity: 0.7;margin-bottom: -15px;">
                                لورم ایپسوم متن ساختگی
                                با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون
                                و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                            </p>
                        </div>
                    </div>
                    <div class="form-comment mt-5">
                        <p class="mb-0"><strong> دیدگاهتان را بنویسید  </strong></p>
                        <small>
                            نشانی ایمیل شما منتشر نخواهد شد ، لطفا تمام کادرها را با دقت پر کنید و در نهایت ارسال را بزنید.
                        </small>
                        <form action="" class="link-dl shadow-none mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-white">
                                        <small> نام و نام خانوادگی : </small>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="لطفا نام ونام خانوادگی خود را وارد کنید . . . ">
                            </div>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-white">
                                        <small> ایمیل :</small>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="لطفا پست الکترونیکی خود را وارد کنید . . . ">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="متن نظر شما . . . . "></textarea>
                            </div>
                            <div class="form-group text-left">
                                <button class="btn px-3 py-1"> ارسال نظر </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabthree">
                    <p>

                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                        از صنعت چاپ و با استفاده از طراحان گرافیک
                        است. چاپگرها و متون بلکه روزنامه و مجله در ستون
                        و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                        نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                        باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                        آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                        نرم افزارها شناخت بیشتری را برای طراحان رایانه
                        ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                        فارسی ایجاد کرد. در این صورت می توان امید داشت که
                        تمام و دشواری موجود در ارائه راهکارها و شرایط سخت
                        تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                        دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای
                        موجود طراحی اساسا مورد استفاده قرار گیرد.

                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                        از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون
                        و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                        زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
                        متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان
                        رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                        ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود
                        در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز
                        شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای
                        موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                    <div class="row mt-5">
                        <div class="col-12 col-lg-4">
                            <p class="text-success"> نقاط قوت : </p>
                            <small class="d-block mb-2">
                                <i class="fas fa-plus-circle align-middle text-success"></i> لورم اپیسوم
                            </small>
                            <small class="d-block mb-2">
                                <i class="fas fa-plus-circle align-middle text-success"></i> لورم اپیسوم
                            </small>
                            <small class="d-block mb-2">
                                <i class="fas fa-plus-circle align-middle text-success"></i> لورم اپیسوم
                            </small>
                            <small class="d-block mb-2">
                                <i class="fas fa-plus-circle align-middle text-success"></i> لورم اپیسوم
                            </small>
                        </div>
                        <div class="col-12 col-lg-4">
                            <p class="text-danger"> نقاط ضعف : </p>
                            <small class="d-block mb-2">
                                <i class="fas fa-minus-circle align-middle text-danger"></i> لورم اپیسوم
                            </small>
                            <small class="d-block mb-2">
                                <i class="fas fa-minus-circle align-middle text-danger"></i> لورم اپیسوم
                            </small>
                            <small class="d-block mb-2">
                                <i class="fas fa-minus-circle align-middle text-danger"></i> لورم اپیسوم
                            </small>
                            <small class="d-block mb-2">
                                <i class="fas fa-minus-circle align-middle text-danger"></i> لورم اپیسوم
                            </small>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small> جنس بافت </small>
                                    <small> خوب </small>
                                </div>
                                <div class="progress rounded-pill" style="height: 0.5rem;">
                                    <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated"
                                         style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small> جنس بافت </small>
                                    <small> خوب </small>
                                </div>
                                <div class="progress rounded-pill" style="height: 0.5rem;">
                                    <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated"
                                         style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small> جنس بافت </small>
                                    <small> خوب </small>
                                </div>
                                <div class="progress rounded-pill" style="height: 0.5rem;">
                                    <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated"
                                         style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small> جنس بافت </small>
                                    <small> خوب </small>
                                </div>
                                <div class="progress rounded-pill" style="height: 0.5rem;">
                                    <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated"
                                         style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="bold text-center">
        <h5 class="d-block text-center" style="font-weight: 900;"> محصولات مشابه </h5>
        <small class="text-muted" style="letter-spacing: 4px;"> similar products </small>
    </div>
    <div class="slider-2st">
        <span class="slickArrow next2"> <i class="fas fa-chevron-right"></i> </span>
        <span class="slickArrow prev2"> <i class="fas fa-chevron-left"></i> </span>
        <div class="slider5">
            <div class="col-12 col-lg-3 my-4">
                <div class="card border-0 card-hover-2">
                    <div class="card-img-top">
                        <div class="overlay-card"></div>
                        <img src="img/Image 25.png" class="img-fluid card-img clip">
                    </div>
                    <div class="card-body">
                        <a href="#" class="d-block text-center" style="font-weight: 900;"> دکمه سرآستین کت مجلسی مردانه </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"> 85.000 تومان </small>
                            <p class="mb-0"> 65.000 تومان </p>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn btn-block"> <i class="fas fa-shopping-cart"></i> افزودن به سبد خرید </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 my-4">
                <div class="card border-0 card-hover-2">
                    <div class="card-img-top">
                        <div class="overlay-card"></div>
                        <img src="img/Image 25.png" class="img-fluid card-img clip">
                    </div>
                    <div class="card-body">
                        <a href="#" class="d-block text-center" style="font-weight: 900;"> دکمه سرآستین کت مجلسی مردانه </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"> 85.000 تومان </small>
                            <p class="mb-0"> 65.000 تومان </p>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn btn-block"> <i class="fas fa-shopping-cart"></i> افزودن به سبد خرید </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 my-4">
                <div class="card border-0 card-hover-2">
                    <div class="card-img-top">
                        <div class="overlay-card"></div>
                        <img src="img/Image 25.png" class="img-fluid card-img clip">
                    </div>
                    <div class="card-body">
                        <a href="#" class="d-block text-center" style="font-weight: 900;"> دکمه سرآستین کت مجلسی مردانه </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"> 85.000 تومان </small>
                            <p class="mb-0"> 65.000 تومان </p>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn btn-block"> <i class="fas fa-shopping-cart"></i> افزودن به سبد خرید </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 my-4">
                <div class="card border-0 card-hover-2">
                    <div class="card-img-top">
                        <div class="overlay-card"></div>
                        <img src="img/Image 25.png" class="img-fluid card-img clip">
                    </div>
                    <div class="card-body">
                        <a href="#" class="d-block text-center" style="font-weight: 900;"> دکمه سرآستین کت مجلسی مردانه </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"> 85.000 تومان </small>
                            <p class="mb-0"> 65.000 تومان </p>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn btn-block"> <i class="fas fa-shopping-cart"></i> افزودن به سبد خرید </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 my-4">
                <div class="card border-0 card-hover-2">
                    <div class="card-img-top">
                        <div class="overlay-card"></div>
                        <img src="img/Image 25.png" class="img-fluid card-img clip">
                    </div>
                    <div class="card-body">
                        <a href="#" class="d-block text-center" style="font-weight: 900;"> دکمه سرآستین کت مجلسی مردانه </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"> 85.000 تومان </small>
                            <p class="mb-0"> 65.000 تومان </p>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn btn-block"> <i class="fas fa-shopping-cart"></i> افزودن به سبد خرید </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 my-4">
                <div class="card border-0 card-hover-2">
                    <div class="card-img-top">
                        <div class="overlay-card"></div>
                        <img src="img/Image 25.png" class="img-fluid card-img clip">
                    </div>
                    <div class="card-body">
                        <a href="#" class="d-block text-center" style="font-weight: 900;"> دکمه سرآستین کت مجلسی مردانه </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"> 85.000 تومان </small>
                            <p class="mb-0"> 65.000 تومان </p>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn btn-block"> <i class="fas fa-shopping-cart"></i> افزودن به سبد خرید </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 my-4">
                <div class="card border-0 card-hover-2">
                    <div class="card-img-top">
                        <div class="overlay-card"></div>
                        <img src="img/Image 25.png" class="img-fluid card-img clip">
                    </div>
                    <div class="card-body">
                        <a href="#" class="d-block text-center" style="font-weight: 900;"> دکمه سرآستین کت مجلسی مردانه </a>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-muted"> 85.000 تومان </small>
                            <p class="mb-0"> 65.000 تومان </p>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn btn-block"> <i class="fas fa-shopping-cart"></i> افزودن به سبد خرید </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>