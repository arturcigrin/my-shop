@extends('user.layouts.index')

@section('title', 'Home')


@section('content')
  <main id="content" role="main">
        <!-- Slider Section -->
       @include('user.layouts.section.slider')
        <!-- End Slider Section -->
        <div class="container">
            <!-- Banner -->
            <div class="mb-5">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                    <img class="img-fluid" src="../../assets/img/190X150/img1.png"
                                        alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-7 col-wd-6">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i
                                                    class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                    <img class="img-fluid" src="../../assets/img/190X150/img2.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-7 col-wd-6">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i
                                                    class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                    <img class="img-fluid" src="../../assets/img/190X150/img3.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-7 col-wd-6">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i
                                                    class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                    <img class="img-fluid" src="{{asset('public/front/img/190X150/img4.png')}}"
                                        alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-7 col-wd-6">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i
                                                    class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Banner -->
     
                    <!-- Tab Prodcut -->
                    <div class="col">
                        <!-- Features Section -->
                        <div class="">
                            <!-- Nav Classic -->
                            <div class="position-relative bg-white text-center z-index-2">
                                <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active " id="pills-one-example1-tab" data-toggle="pill"
                                            href="#pills-one-example1" role="tab" aria-controls="pills-one-example1"
                                            aria-selected="true">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Featured
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="pills-two-example1-tab" data-toggle="pill"
                                            href="#pills-two-example1" role="tab" aria-controls="pills-two-example1"
                                            aria-selected="false">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                On Sale
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="pills-three-example1-tab" data-toggle="pill"
                                            href="#pills-three-example1" role="tab" aria-controls="pills-three-example1"
                                            aria-selected="false">
                                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                Top Rated
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Nav Classic -->

                            <!-- Tab Content -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel"
                                    aria-labelledby="pills-one-example1-tab">
                                    <ul class="row list-unstyled products-group no-gutters">
                                        <li class="col-6 col-wd-3 col-md-4 product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img1.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Tablet White
                                                                EliteBook Revolve 810 G2</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img2.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div
                                                                class="prodcut-price d-flex align-items-center flex-wrap position-relative">
                                                                <ins
                                                                    class="font-size-20 text-red text-decoration-none mr-2">$1999,00</ins>
                                                                <del
                                                                    class="font-size-12 tex-gray-6 position-absolute bottom-100">$2
                                                                    299,00</del>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Purple Solo 2
                                                                Wireless</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img3.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-wd">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Smartphone 6S 32GB
                                                                LTE</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img4.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Widescreen NX Mini F1
                                                                SMART NX</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img5.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Full Color LaserJet
                                                                Pro M452dn</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img6.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-xl">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">GameConsole Destiny
                                                                Special Edition</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img7.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-wd">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Camera C430W 4k
                                                                Waterproof</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img8.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel"
                                    aria-labelledby="pills-two-example1-tab">
                                    <ul class="row list-unstyled products-group no-gutters">
                                        <li class="col-6 col-wd-3 col-md-4 product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Tablet White
                                                                EliteBook Revolve 810 G2</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img2.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Purple Solo 2
                                                                Wireless</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img3.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Smartphone 6S 32GB
                                                                LTE</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img4.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-wd">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Widescreen NX Mini F1
                                                                SMART NX</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img5.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img1.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">GameConsole Destiny
                                                                Special Edition</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img7.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-xl">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Camera C430W 4k
                                                                Waterproof</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img8.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-wd">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Full Color LaserJet
                                                                Pro M452dn</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img6.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel"
                                    aria-labelledby="pills-three-example1-tab">
                                    <ul class="row list-unstyled products-group no-gutters">
                                        <li class="col-6 col-wd-3 col-md-4 product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Wireless Audio System
                                                                Multiroom 360 degree Full base audio</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img1.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Tablet White
                                                                EliteBook Revolve 810 G2</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img2.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Purple Solo 2
                                                                Wireless</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img3.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-wd">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Smartphone 6S 32GB
                                                                LTE</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img4.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Widescreen NX Mini F1
                                                                SMART NX</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img5.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Full Color LaserJet
                                                                Pro M452dn</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img6.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-xl">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">GameConsole Destiny
                                                                Special Edition</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img7.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-wd">
                                            <div class="product-item__outer h-100">
                                                <div class="product-item__inner px-xl-4 p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a
                                                                href="../shop/product-categories-7-column-full-width.html"
                                                                class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a
                                                                href="../shop/single-product-fullwidth.html"
                                                                class="text-blue font-weight-bold">Camera C430W 4k
                                                                Waterproof</a></h5>
                                                        <div class="mb-2">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="d-block text-center"><img class="img-fluid"
                                                                    src="../../assets/img/212X200/img8.jpg"
                                                                    alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">$685,00</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                        class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="../shop/compare.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-compare mr-1 font-size-15"></i>
                                                                Compare</a>
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Features Section -->
                    </div>
                    <!-- End Tab Prodcut -->
                </div>
            </div>
            <!-- End Deals-and-tabs -->
        </div>
        <!-- Products-4-1-4 -->
    
        <!-- End Products-4-1-4 -->
        <div class="container">
   
     
            <!-- Recently viewed -->
            <div class="mb-6">
                <div class="position-relative">
                    <div class="border-bottom border-color-1 mb-2">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Recently Viewed</h3>
                    </div>
                    <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                        data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                        data-slides-show="7" data-slides-scroll="1"
                        data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                        data-arrow-left-classes="fa fa-angle-left right-1"
                        data-arrow-right-classes="fa fa-angle-right right-0" data-responsive='[{
                              "breakpoint": 1400,
                              "settings": {
                                "slidesToShow": 6
                              }
                            }, {
                                "breakpoint": 1200,
                                "settings": {
                                  "slidesToShow": 4
                                }
                            }, {
                              "breakpoint": 992,
                              "settings": {
                                "slidesToShow": 3
                              }
                            }, {
                              "breakpoint": 768,
                              "settings": {
                                "slidesToShow": 2
                              }
                            }, {
                              "breakpoint": 554,
                              "settings": {
                                "slidesToShow": 2
                              }
                            }]'>
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Wireless Audio System Multiroom
                                                    360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="d-block text-center"><img class="img-fluid"
                                                        src="../../assets/img/212X200/img1.jpg"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Wireless Audio System Multiroom
                                                    360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="d-block text-center"><img class="img-fluid"
                                                        src="../../assets/img/212X200/img2.jpg"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Wireless Audio System Multiroom
                                                    360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="d-block text-center"><img class="img-fluid"
                                                        src="../../assets/img/212X200/img3.jpg"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Wireless Audio System Multiroom
                                                    360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="d-block text-center"><img class="img-fluid"
                                                        src="../../assets/img/212X200/img4.jpg"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Wireless Audio System Multiroom
                                                    360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="d-block text-center"><img class="img-fluid"
                                                        src="../../assets/img/212X200/img5.jpg"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Wireless Audio System Multiroom
                                                    360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="d-block text-center"><img class="img-fluid"
                                                        src="../../assets/img/212X200/img6.jpg"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Wireless Audio System Multiroom
                                                    360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="d-block text-center"><img class="img-fluid"
                                                        src="../../assets/img/212X200/img7.jpg"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Wireless Audio System Multiroom
                                                    360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="d-block text-center"><img class="img-fluid"
                                                        src="../../assets/img/212X200/img1.jpg"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="js-slide products-group">
                            <div class="product-item">
                                <div class="product-item__outer h-100">
                                    <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                        <div class="product-item__body pb-xl-2">
                                            <div class="mb-2"><a
                                                    href="../shop/product-categories-7-column-full-width.html"
                                                    class="font-size-12 text-gray-5">Speakers</a></div>
                                            <h5 class="mb-1 product-item__title"><a
                                                    href="../shop/single-product-fullwidth.html"
                                                    class="text-blue font-weight-bold">Wireless Audio System Multiroom
                                                    360 degree Full base audio</a></h5>
                                            <div class="mb-2">
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="d-block text-center"><img class="img-fluid"
                                                        src="../../assets/img/212X200/img1.jpg"
                                                        alt="Image Description"></a>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">$685,00</div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="../shop/single-product-fullwidth.html"
                                                        class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item__footer">
                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                                        class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Recently viewed -->
   
        </div>
    </main>

@endsection