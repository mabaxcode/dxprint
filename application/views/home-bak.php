
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<? $this->load->view('template/header'); ?>

<body class="preload-wrapper popup-loader">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        <!-- Header -->
        <header id="header" class="header-default header-absolute">
            <div class="px_15 lg-px_40">
                <div class="row wrapper-header align-items-center">
                    <div class="col-md-4 col-3 tf-lg-hidden">
                        <a href="#mobileMenu" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                <path d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z" fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <a href="index.html" class="logo-header">
                            <!-- <img src="<?= base_url(); ?>assets/images/logo/logo.svg" alt="logo" class="logo"> -->
                            <h5><b>DXPRINT</b></h5>
                        </a>
                    </div>
                    <div class="col-xl-6 tf-md-hidden">
                        <? include 'top-menu.php'; ?>
                    </div>
                    <div class="col-xl-3 col-md-4 col-3">
                        <? include 'top-right.php'; ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->
        <!-- Slider -->
        <div class="tf-slideshow slider-effect-fade position-relative"> 
            <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-loop="true" data-auto-play="false" data-delay="0" data-speed="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <img src="<?= base_url(); ?>assets/images/slider/1_E9m2iVwyTP9xG9CPw_KxIA.png" alt="fashion-slideshow">
                            <div class="box-content">
                                <div class="container">
                                    <h1 class="fade-item fade-item-1">Super Value<br>Deal</h1>
                                    <p class="fade-item fade-item-2" style="color:white;">From casual to formal, we've got you covered</p>
                                    <a href="shop-default.html" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <img src="<?= base_url(); ?>assets/images/slider/fashion-slideshow-02.jpg" alt="fashion-slideshow">
                            <div class="box-content">
                                <div class="container">
                                    <h1 class="fade-item fade-item-1">Simple <br class="md-hidden">Style</h1>
                                    <p class="fade-item fade-item-2">From casual to formal, we've got you covered</p>
                                    <a href="shop-default.html" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="wrap-slider">
                            <img src="<?= base_url(); ?>assets/images/slider/fashion-slideshow-03.jpg" alt="fashion-slideshow">
                            <div class="box-content">
                                <div class="container">
                                    <h1 class="fade-item fade-item-1">Glamorous<br>Glam</h1>
                                    <p class="fade-item fade-item-2">From casual to formal, we've got you covered</p>
                                    <a href="shop-default.html" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-pagination">
                <div class="container">
                    <div class="sw-dots sw-pagination-slider justify-content-center"></div>
                </div>
            </div>
        </div>
        <!-- /Slider -->
        <!-- Marquee -->
        <?/*
        <div class="tf-marquee bg_yellow-2">
            <div class="wrap-marquee">
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                    </div>
                    <p class="text">Spring Clearance Event: Save Up to 70%</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                    </div>
                    <p class="text">Spring Clearance Event: Save Up to 70%</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                    </div>
                    <p class="text">Spring Clearance Event: Save Up to 70%</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                    </div>
                    <p class="text">Spring Clearance Event: Save Up to 70%</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                    </div>
                    <p class="text">Spring Clearance Event: Save Up to 70%</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                    </div>
                    <p class="text">Spring Clearance Event: Save Up to 70%</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                    </div>
                    <p class="text">Spring Clearance Event: Save Up to 70%</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                    </div>
                    <p class="text">Spring Clearance Event: Save Up to 70%</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                    </div>
                    <p class="text">Spring Clearance Event: Save Up to 70%</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20"><path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path></svg>
                    </div>
                    <p class="text">Spring Clearance Event: Save Up to 70%</p>
                </div>
            </div>
                      
        </div>
        */?>
        <!-- /Marquee -->
        <!-- Categories -->
        <section class="flat-spacing-4 flat-categorie">
            <div class="container-full">
               <div class="flat-title-v2">
                    <div class="box-sw-navigation">
                        <div class="nav-sw nav-next-slider nav-next-collection"><span class="icon icon-arrow-left"></span></div>
                        <div class="nav-sw nav-prev-slider nav-prev-collection"><span class="icon icon-arrow-right"></span></div>
                    </div>
                    <span class="text-3 fw-7 text-uppercase title wow fadeInUp" data-wow-delay="0s">SHOP BY CATEGORIES</span>
               </div>
               <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div dir="ltr" class="swiper tf-sw-collection" data-preview="3" data-tablet="2" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" lazy="true">
                                    <div class="collection-item style-left hover-img">
                                        <div class="collection-inner">
                                            <a href="shop-default.html" class="collection-image img-style">
                                                <img class="lazyload" data-src="<?= base_url();?>assets/images/homepage/bg-lpanjang.jpeg" src="<?= base_url();?>assets/images/homepage/bg-lpanjang.jpeg" alt="collection-img">
                                            </a>
                                            <div class="collection-content">
                                                <a href="shop-default.html" class="tf-btn collection-title hover-icon fs-15"><span>T - Shirt Lengan Panjang</span><i class="icon icon-arrow1-top-left"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" lazy="true">
                                    <div class="collection-item style-left hover-img">
                                        <div class="collection-inner">
                                            <a href="shop-default.html" class="collection-image img-style">
                                                <img class="lazyload" data-src="<?= base_url();?>assets/images/homepage/bg-lpendek.jpg" src="<?= base_url();?>assets/images/homepage/bg-lpendek.jpg" alt="collection-img">
                                            </a>
                                            <div class="collection-content">
                                                <a href="shop-default.html" class="tf-btn collection-title hover-icon fs-15"><span>T - Shirt Lengan Pendek</span><i class="icon icon-arrow1-top-left"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" lazy="true">
                                    <div class="collection-item style-left hover-img">
                                        <div class="collection-inner">
                                            <a href="shop-default.html" class="collection-image img-style">
                                                <img class="lazyload" data-src="<?= base_url();?>assets/images/homepage/jersey.jpg" src="<?= base_url();?>assets/images/homepage/jersey.jpg" alt="collection-demo-1">
                                            </a>
                                            <div class="collection-content">
                                                <a href="shop-default.html" class="tf-btn collection-title hover-icon fs-15"><span>Jersey</span><i class="icon icon-arrow1-top-left"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?/*
                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <div class="discovery-new-item">
                            <h5>Discovery all new items</h5>
                            <a href="shop-collection-list.html"><i class="icon-arrow1-top-left"></i></a>
                        </div>
                    </div>
                    */?>
               </div>
               
            </div>
        </section>
        <!-- /Categories -->
        <!-- Seller -->
        <section class="flat-spacing-5 pt_0 flat-seller">
            <div class="container">
                <div class="flat-title">
                    <span class="title wow fadeInUp" data-wow-delay="0s">Best Seller</span>
                    <p class="sub-title wow fadeInUp" data-wow-delay="0s">Shop the Latest Styles: Stay ahead of the curve with our newest arrivals</p>
                </div>
                <div class="grid-layout loadmore-item wow fadeInUp" data-wow-delay="0s" data-grid="grid-4">
                    <!-- card product 1 -->
                    <div class="card-product fl-item">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="lazyload img-product" data-src="<?= base_url(); ?>assets/images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="<?= base_url(); ?>assets/images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                            </a>
                            <div class="list-product-btn">
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Quick Add</span>
                                </a>
                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                    <span class="icon icon-check"></span>
                                </a>
                                <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                            <div class="size-list">
                                <span>S</span>
                                <span>M</span>
                                <span>L</span>
                                <span>XL</span>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="title link">Ribbed Tank Top</a>
                            <span class="price">$16.95</span>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch active">
                                    <span class="tooltip">Orange</span>
                                    <span class="swatch-value bg_orange-3"></span>
                                    <img class="lazyload" data-src="<?= base_url(); ?>assets/images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">Black</span>
                                    <span class="swatch-value bg_dark"></span>
                                    <img class="lazyload" data-src="<?= base_url(); ?>assets/images/products/black-1.jpg" src="images/products/black-1.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">White</span>
                                    <span class="swatch-value bg_white"></span>
                                    <img class="lazyload" data-src="<?= base_url(); ?>assets/images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- card product 2 -->
                    <div class="card-product fl-item">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="lazyload img-product" data-src="<?= base_url(); ?>assets/images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="<?= base_url(); ?>assets/images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                            </a>
                            <div class="list-product-btn">
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Quick Add</span>
                                </a>
                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                    <span class="icon icon-check"></span>
                                </a>
                                <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                            <div class="size-list">
                                <span>M</span>
                                <span>L</span>
                                <span>XL</span>
                            </div>
                            <div class="countdown-box">
                                <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"></div>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="title link">Ribbed modal T-shirt</a>
                            <span class="price">From $18.95</span>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch active">
                                    <span class="tooltip">Brown</span>
                                    <span class="swatch-value bg_brown"></span>
                                    <img class="lazyload" data-src="<?= base_url(); ?>assets/images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">Light Purple</span>
                                    <span class="swatch-value bg_purple"></span>
                                    <img class="lazyload" data-src="<?= base_url(); ?>assets/images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">Light Green</span>
                                    <span class="swatch-value bg_light-green"></span>
                                    <img class="lazyload" data-src="<?= base_url(); ?>assets/images/products/green.jpg" src="images/products/green.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- card product 3 -->
                    <div class="card-product fl-item">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="lazyload img-product" data-src="<?= base_url(); ?>assets/images/products/white-3.jpg" src="images/products/white-3.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="<?= base_url(); ?>assets/images/products/white-4.jpg" src="images/products/white-4.jpg" alt="image-product">
                            </a>
                            <div class="list-product-btn absolute-2">
                                <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Add to cart</span>
                                </a>
                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                    <span class="icon icon-check"></span>
                                </a>
                                <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="title link">Oversized Printed T-shirt</a>
                            <span class="price">$10.00</span>
                        </div>
                    </div>
                    <!-- card product 4 -->
                    <div class="card-product fl-item">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="lazyload img-product" data-src="<?= base_url(); ?>assets/images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="<?= base_url(); ?>assets/images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                            </a>
                            <div class="list-product-btn">
                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Quick Add</span>
                                </a>
                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                    <span class="icon icon-check"></span>
                                </a>
                                <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                            <div class="size-list">
                                <span>S</span>
                                <span>M</span>
                                <span>L</span>
                                <span>XL</span>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="title">Oversized Printed T-shirt</a>
                            <span class="price">$16.95</span>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch active">
                                    <span class="tooltip">White</span>
                                    <span class="swatch-value bg_white"></span>
                                    <img class="lazyload" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">Pink</span>
                                    <span class="swatch-value bg_purple"></span>
                                    <img class="lazyload" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">Black</span>
                                    <span class="swatch-value bg_dark"></span>
                                    <img class="lazyload" data-src="images/products/black-2.jpg" src="images/products/black-2.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tf-pagination-wrap view-more-button text-center">
                    <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore "><span class="text">Load more</span></button>
                </div>
            </div>
        </section>
        <!-- /Seller -->
        <!-- Testimonial -->
        <section class="flat-spacing-5 pt_0 flat-testimonial">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">Happy Clients</span>
                    <p class="sub-title">Hear what they say about us</p>
                </div>
                <div class="wrap-carousel">
                    <div dir="ltr" class="swiper tf-sw-testimonial" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="15">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item style-column wow fadeInUp" data-wow-delay="0s">
                                    <div class="rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="heading">Best Online Fashion Site</div>
                                    <div class="text">
                                        “ I always find something stylish and affordable on this web fashion site ”
                                    </div>
                                    <div class="author">
                                        <div class="name">Robert smith</div>
                                        <div class="metas">Customer from USA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item style-column wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="heading">Great Selection and Quality</div>
                                    <div class="text">
                                        "I love the variety of styles and the high-quality clothing on this web fashion site."
                                    </div>
                                    <div class="author">
                                        <div class="name">Allen Lyn</div>
                                        <div class="metas">Customer from France</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item style-column wow fadeInUp" data-wow-delay=".2s">
                                    <div class="rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="heading">Best Customer Service</div>
                                    <div class="text">
                                        "I finally found a web fashion site with stylish and flattering options in my size."
                                    </div>
                                    <div class="author">
                                        <div class="name">Peter Rope</div>
                                        <div class="metas">Customer from USA</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item style-column wow fadeInUp" data-wow-delay=".3s">
                                    <div class="rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="heading">Great Selection and Quality</div>
                                    <div class="text">
                                        "I love the variety of styles and the high-quality clothing on this web fashion site."
                                    </div>
                                    <div class="author">
                                        <div class="name">Hellen Ase</div>
                                        <div class="metas">Customer from Japan</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-testimonial lg"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-testimonial lg"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-testimonial justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->
        <!-- Footer -->
        <footer id="footer" class="footer md-pb-70">
            <div class="footer-wrap">
                <div class="footer-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="footer-infor">
                                    <div class="footer-logo">
                                        <a href="index.html">
                                            <img src="images/logo/logo.svg" alt="">
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <p><b>Mokku Pasar Payang </b><br> Jalan Sultan Zainal Abidin,</p>
                                        </li>
                                        <li>
                                            <p>Kampung Tanjung Kapur,</p>
                                        </li>
                                        <li>
                                            <p>20200 Kuala Terengganu, Terengganu</p>
                                        </li>
                                    </ul>
                                    <a href="contact-1.html" class="tf-btn btn-line">Get direction<i class="icon icon-arrow1-top-left"></i></a>
                                    <ul class="tf-social-icon d-flex gap-10">
                                        <li><a href="#" class="box-icon w_34 round social-facebook social-line"><i class="icon fs-14 icon-fb"></i></a></li>
                                        <li><a href="#" class="box-icon w_34 round social-twiter social-line"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                                        <li><a href="#" class="box-icon w_34 round social-instagram social-line"><i class="icon fs-14 icon-instagram"></i></a></li>
                                        <li><a href="#" class="box-icon w_34 round social-tiktok social-line"><i class="icon fs-14 icon-tiktok"></i></a></li>
                                        <li><a href="#" class="box-icon w_34 round social-pinterest social-line"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12 footer-col-block">
                                <div class="footer-heading footer-heading-desktop">
                                    <h6>Help</h6>
                                </div>
                                <div class="footer-heading footer-heading-moblie">
                                    <h6>Help</h6>
                                </div>
                                <ul class="footer-menu-list tf-collapse-content">
                                    <li>
                                        <a href="privacy-policy.html" class="footer-menu_item">Privacy Policy</a>
                                    </li>
                                    <li> 
                                        <a href="delivery-return.html" class="footer-menu_item">  Returns + Exchanges </a>
                                    </li>
                                    <li> 
                                        <a href="shipping-delivery.html" class="footer-menu_item">Shipping</a>
                                    </li>
                                    <li> 
                                        <a href="terms-conditions.html" class="footer-menu_item">Terms &amp; Conditions</a>
                                    </li>
                                    <li> 
                                        <a href="faq-1.html" class="footer-menu_item">FAQ’s</a>
                                    </li>
                                    <li> 
                                        <a href="compare.html" class="footer-menu_item">Compare</a>
                                    </li>
                                    <li> 
                                        <a href="wishlist.html" class="footer-menu_item">My Wishlist</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12 footer-col-block">
                                <div class="footer-heading footer-heading-desktop">
                                    <h6>About us</h6>
                                </div>
                                <div class="footer-heading footer-heading-moblie">
                                    <h6>About us</h6>
                                </div>
                                <ul class="footer-menu-list tf-collapse-content">
                                    <li>
                                        <a href="about-us.html" class="footer-menu_item">Our Story</a>
                                    </li>
                                    <li> 
                                        <a href="our-store.html" class="footer-menu_item">Visit Our Store</a>
                                    </li>
                                    <li> 
                                        <a href="contact-1.html" class="footer-menu_item">Contact Us</a>
                                    </li>
                                    <li> 
                                        <a href="login.html" class="footer-menu_item">Account</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="footer-newsletter footer-col-block">
                                    <div class="footer-heading footer-heading-desktop">
                                        <h6>Sign Up for Email</h6>
                                    </div>
                                    <div class="footer-heading footer-heading-moblie">
                                        <h6>Sign Up for Email</h6>
                                    </div>
                                    <div class="tf-collapse-content">
                                        <div class="footer-menu_item">Sign up to get first dibs on new arrivals, sales, exclusive content, events and more!</div>
                                        <form class="form-newsletter subscribe-form" id="" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
                                            <div class="subscribe-content">
                                                <fieldset class="email">
                                                    <input type="email" name="email-form" class="subscribe-email" placeholder="Enter your email...." tabindex="0" aria-required="true">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button id="" class="subscribe-button tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn" type="button">Subscribe<i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                            <div class="subscribe-msg"></div>
                                        </form>
                                        <div class="tf-cur">
                                            <div class="tf-currencies">
                                                <select class="image-select center style-default type-currencies">
                                                    <option data-thumbnail="images/country/fr.svg">EUR <span>€ | France</span></option>
                                                    <option data-thumbnail="images/country/de.svg">EUR <span>€ | Germany</span></option>
                                                    <option selected data-thumbnail="images/country/us.svg">USD <span>$ | United States</span></option>
                                                    <option data-thumbnail="images/country/vn.svg">VND <span>₫ | Vietnam</span></option>
                                                </select>
                                            </div>
                                            <div class="tf-languages">
                                                <select class="image-select center style-default type-languages">
                                                    <option>English</option>
                                                    <option>العربية</option>
                                                    <option>简体中文</option>
                                                    <option>اردو</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="footer-bottom-wrap d-flex gap-20 flex-wrap justify-content-between align-items-center">
                                    <div class="footer-menu_item">© 2024 Mokku Pasar Payang. All Rights Reserved</div>
                                    <div class="tf-payment">
                                        <img src="images/payments/visa.png" alt="">
                                        <img src="images/payments/img-1.png" alt="">
                                        <img src="images/payments/img-2.png" alt="">
                                        <img src="images/payments/img-3.png" alt="">
                                        <img src="images/payments/img-4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
        
    </div>
     


    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /gotop -->
    
    <!-- toolbar-bottom -->
    <div class="tf-toolbar-bottom type-1150">
        <div class="toolbar-item">
            <a href="#toolbarShopmb" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                <div class="toolbar-icon">
                    <i class="icon-shop"></i>
                </div>
                <div class="toolbar-label">Shop</div>
            </a>
        </div>
        
        <div class="toolbar-item">
            <a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                <div class="toolbar-icon">
                    <i class="icon-search"></i>
                </div>
                <div class="toolbar-label">Search</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#login" data-bs-toggle="modal">
                <div class="toolbar-icon">
                    <i class="icon-account"></i>
                </div>
                <div class="toolbar-label">Account</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="wishlist.html">
                <div class="toolbar-icon">
                    <i class="icon-heart"></i>
                    <div class="toolbar-count">0</div>
                </div>
                <div class="toolbar-label">Wishlist</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#shoppingCart" data-bs-toggle="modal">
                <div class="toolbar-icon">
                    <i class="icon-bag"></i>
                    <div class="toolbar-count">1</div>
                </div>
                <div class="toolbar-label">Cart</div>
            </a>
        </div>
    </div>
    <!-- /toolbar-bottom -->

    <!-- modalDemo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <h5 class="demo-title">Ultimate HTML Theme</h5>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-01.jpg" src="images/demo/home-01.jpg" alt="home-01">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                        <span>Trend</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Fashion 01</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-multi-brand.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-multi-brand.jpg" src="images/demo/home-multi-brand.jpg" alt="home-multi-brand">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                        <span class="demo-hot">Hot</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Multi Brand</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-02.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-02.jpg" src="images/demo/home-02.jpg" alt="home-02">
                                    <div class="demo-label">
                                        <span class="demo-hot">Hot</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Fashion 02</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-03.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-03.jpg" src="images/demo/home-03.jpg" alt="home-03">
                                </div>
                                <span class="demo-name">Home Fashion 03</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-04.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-04.jpg" src="images/demo/home-04.jpg" alt="home-04">
                                </div>
                                <span class="demo-name">Home Fashion 04</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-05.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-05.jpg" src="images/demo/home-05.jpg" alt="home-05">
                                </div>
                                <span class="demo-name">Home Fashion 05</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-06.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="images/demo/home-06.jpg" src="images/demo/home-06.jpg" alt="home-06">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Fashion 06</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-07.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-07.jpg" src="images/demo/home-07.jpg" alt="home-07">
                                </div>
                                <span class="demo-name">Home Fashion 07</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-08.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-08.jpg" src="images/demo/home-08.jpg" alt="home-08">
                                </div>
                                <span class="demo-name">Home Fashion 08</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-skincare.jpg" src="images/demo/home-skincare.jpg" alt="home-skincare">
                                </div>
                                <span class="demo-name">Home Skincare</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-headphone.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-headphone.jpg" src="images/demo/home-headphone.jpg" alt="home-headphone">
                                </div>
                                <span class="demo-name">Home Headphone</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-giftcard.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-giftcard.jpg" src="images/demo/home-giftcard.jpg" alt="home-gift-card">
                                </div>
                                <span class="demo-name">Home Gift Card</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-furniture.jpg" src="images/demo/home-furniture.jpg" alt="home-furniture">
                                </div>
                                <span class="demo-name">Home Furniture</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture-02.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-furniture2.jpg" src="images/demo/home-furniture2.jpg" alt="home-furniture-2">
                                </div>
                                <span class="demo-name">Home Furniture 2</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skateboard.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-skateboard.jpg" src="images/demo/home-skateboard.jpg" alt="home-skateboard">
                                </div>
                                <span class="demo-name">Home Skateboard</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-stroller.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-stroller.jpg" src="images/demo/home-stroller.jpg" alt="home-stroller">
                                </div>
                                <span class="demo-name">Home Stroller</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-decor.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-decor.jpg" src="images/demo/home-decor.jpg" alt="home-decor">
                                </div>
                                <span class="demo-name">Home Decor</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-electronic.jpg" src="images/demo/home-electronic.jpg" alt="home-electronic">
                                </div>
                                <span class="demo-name">Home Electronic</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-setup-gear.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-setup-gear.jpg" src="images/demo/home-setup-gear.jpg" alt="home-setup-gear">
                                </div>
                                <span class="demo-name">Home Setup Gear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-dog-accessories.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-dog-accessories.jpg" src="images/demo/home-dog-accessories.jpg" alt="home-dog-accessories">
                                </div>
                                <span class="demo-name">Home Dog Accessories</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-kitchen-wear.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-kitchen.jpg" src="images/demo/home-kitchen.jpg" alt="home-kitchen-wear">
                                </div>
                                <span class="demo-name">Home Kitchen Wear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-phonecase.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-phonecase.jpg" src="images/demo/home-phonecase.jpg" alt="home-phonecase">
                                </div>
                                <span class="demo-name">Home Phonecase</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-paddle-boards.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home_paddle_board.jpg" src="images/demo/home_paddle_board.jpg" alt="home-paddle_board">
                                </div>
                                <span class="demo-name">Home Paddle Boards</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-glasses.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-glasses.jpg" src="images/demo/home-glasses.jpg" alt="home-glasses">
                                </div>
                                <span class="demo-name">Home Glasses</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pod-store.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-pod-store.jpg" src="images/demo/home-pod-store.jpg" alt="home-pod-store">
                                </div>
                                <span class="demo-name">Home POD Store</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-activewear.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-activewear.jpg" src="images/demo/home-activewear.jpg" alt="home-activewear">
                                </div>
                                <span class="demo-name">Activewear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-handbag.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-handbag.jpg" src="images/demo/home-handbag.jpg" alt="home-handbag">
                                </div>
                                <span class="demo-name">Home Handbag</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-tee.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-tee.jpg" src="images/demo/home-tee.jpg" alt="home-tee">
                                </div>
                                <span class="demo-name">Home Tee</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sock.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-socks.jpg" src="images/demo/home-socks.jpg" alt="home-sock">
                                </div>
                                <span class="demo-name">Home Sock</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewerly.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-jewelry.jpg" src="images/demo/home-jewelry.jpg" alt="home-jewelry">
                                </div>
                                <span class="demo-name">Home Jewelry</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sneaker.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-sneaker.jpg" src="images/demo/home-sneaker.jpg" alt="home-sneaker">
                                </div>
                                <span class="demo-name">Home Sneaker</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-accessories.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-accessories.jpg" src="images/demo/home-accessories.jpg" alt="home-accessories">
                                </div>
                                <span class="demo-name">Home Accessories</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-grocery.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-gocery.jpg" src="images/demo/home-gocery.jpg" alt="home-grocery">
                                </div>
                                <span class="demo-name">Home Grocery</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-baby.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="images/demo/home-baby.jpg" src="images/demo/home-baby.jpg" alt="home-baby">
                                </div>
                                <span class="demo-name">Home Baby</span>
                            </a>
                        </div>
                        
                    </div>
                </div>
                
            </div> 
        </div>
    </div>
    <!-- /modalDemo -->    

    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-one" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-one">
                            <span>Home</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-one" class="collapse">
                            <ul class="sub-nav-menu" >
                                <li><a href="index.html" class="sub-nav-link">Home Fashion 01</a></li>
                                <li><a href="home-02.html" class="sub-nav-link">Home Fashion 02</a></li>
                                <li><a href="home-03.html" class="sub-nav-link">Home Fashion 03</a></li>
                                <li><a href="home-04.html" class="sub-nav-link">Home Fashion 04</a></li>
                                <li><a href="home-05.html" class="sub-nav-link">Home Fashion 05</a></li>
                                <li><a href="home-06.html" class="sub-nav-link">Home Fashion 06</a></li>
                                <li><a href="home-07.html" class="sub-nav-link">Home Fashion 07</a></li>
                                <li><a href="home-08.html" class="sub-nav-link">Home Fashion 08</a></li>
                                <li><a href="home-giftcard.html" class="sub-nav-link">Home Gift Card</a></li>
                                <li><a href="home-headphone.html" class="sub-nav-link">Home Headphone</a></li>
                                <li><a href="home-multi-brand.html" class="sub-nav-link">Home Multi Brand</a></li>
                                <li><a href="home-skincare.html" class="sub-nav-link">Home skincare</a></li>
                                <li><a href="home-headphone.html" class="sub-nav-link">Home Headphone</a></li>
                                <li><a href="home-giftcard.html" class="sub-nav-link">Home Gift Card</a></li>
                                <li><a href="home-furniture.html" class="sub-nav-link">Home Furniture</a></li>
                                <li><a href="home-furniture-02.html" class="sub-nav-link">Home Furniture 2</a></li>
                                <li><a href="home-skateboard.html" class="sub-nav-link">Home Skateboard</a></li>
                                <li><a href="home-stroller.html" class="sub-nav-link">Home Stroller</a></li>
                                <li><a href="home-decor.html" class="sub-nav-link">Home Decor</a></li>
                                <li><a href="home-electronic.html" class="sub-nav-link">Home Electronic</a></li>
                                <li><a href="home-setup-gear.html" class="sub-nav-link">Home Setup Gear</a></li>
                                <li><a href="home-dog-accessories.html" class="sub-nav-link">Home Dog Accessories</a></li>
                                <li><a href="home-kitchen-wear.html" class="sub-nav-link">Home Kitchen Wear</a></li>
                                <li><a href="home-phonecase.html" class="sub-nav-link">Home Phonecase</a></li>
                                <li><a href="home-paddle-boards.html" class="sub-nav-link">Home Paddle Boards</a></li>
                                <li><a href="home-glasses.html" class="sub-nav-link">Home Glasses</a></li>
                                <li><a href="home-pod-store.html" class="sub-nav-link">Home POD Store</a></li>
                                <li><a href="home-activewear.html" class="sub-nav-link">Home Activewear</a></li>
                                <li><a href="home-handbag.html" class="sub-nav-link">Home Handbag</a></li>
                                <li><a href="home-tee.html" class="sub-nav-link">Home Tee</a></li>
                                <li><a href="home-sock.html" class="sub-nav-link">Home Sock</a></li>
                                <li><a href="home-jewerly.html" class="sub-nav-link">Home Jewelry</a></li>
                                <li><a href="home-sneaker.html" class="sub-nav-link">Home Sneaker</a></li>
                                <li><a href="home-accessories.html" class="sub-nav-link">Home Accessories</a></li>
                                <li><a href="home-grocery.html" class="sub-nav-link">Home Grocery</a></li>
                                <li><a href="home-baby.html" class="sub-nav-link">Home Baby</a></li>
                            </ul>
                        </div>
                        
                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-two" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-two">
                            <span>Shop</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-two" class="collapse">
                            <ul class="sub-nav-menu" id="sub-menu-navigation">
                                <li><a href="#sub-shop-one" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-one">
                                        <span>Shop layouts</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-shop-one" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="shop-default.html" class="sub-nav-link">Default</a></li>
                                            <li><a href="shop-left-sidebar.html" class="sub-nav-link">Left sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html" class="sub-nav-link">Right sidebar</a></li>
                                            <li><a href="shop-fullwidth.html" class="sub-nav-link">Fullwidth</a></li>
                                            <li><a href="shop-collection-sub.html" class="sub-nav-link">Sub collection</a></li>
                                            <li><a href="shop-collection-list.html" class="sub-nav-link">Collections list</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#sub-shop-two" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-two">
                                        <span>Features</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-shop-two" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="shop-link.html" class="sub-nav-link">Pagination links</a></li>
                                            <li><a href="shop-loadmore.html" class="sub-nav-link">Pagination loadmore</a></li>
                                            <li><a href="shop-infinite-scrolling.html" class="sub-nav-link">Pagination infinite scrolling</a></li>
                                            <li><a href="shop-filter-sidebar.html" class="sub-nav-link">Filter sidebar</a></li>
                                            <li><a href="shop-filter-hidden.html" class="sub-nav-link">Filter hidden</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#sub-shop-three" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-three">
                                        <span>Product styles</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-shop-three" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="product-style-list.html" class="sub-nav-link">Product style list</a></li>
                                            <li><a href="product-style-01.html" class="sub-nav-link">Product style 01</a></li>
                                            <li><a href="product-style-02.html" class="sub-nav-link">Product style 02</a></li>
                                            <li><a href="product-style-03.html" class="sub-nav-link">Product style 03</a></li>
                                            <li><a href="product-style-04.html" class="sub-nav-link">Product style 04</a></li>
                                            <li><a href="product-style-05.html" class="sub-nav-link">Product style 05</a></li>
                                            <li><a href="product-style-06.html" class="sub-nav-link">Product style 06</a></li>
                                            <li><a href="product-style-07.html" class="sub-nav-link">Product style 07</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-three" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-three">
                            <span>Products</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-three" class="collapse">
                            <ul class="sub-nav-menu" id="sub-menu-navigation">
                                <li>
                                    <a href="#sub-product-one" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-one">
                                        <span>Product layouts</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-product-one" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="product-detail.html" class="sub-nav-link">Product default</a></li>
                                            <li><a href="product-grid-1.html" class="sub-nav-link">Product grid 1</a></li>
                                            <li><a href="product-grid-2.html" class="sub-nav-link">Product grid 2</a></li>
                                            <li><a href="product-stacked.html" class="sub-nav-link">Product stacked</a></li>
                                            <li><a href="product-right-thumbnails.html" class="sub-nav-link">Product right thumbnails</a></li>
                                            <li><a href="product-bottom-thumbnails.html" class="sub-nav-link">Product bottom thumbnails</a></li>
                                            <li><a href="product-drawer-sidebar.html" class="sub-nav-link">Product drawer sidebar</a></li>
                                            <li><a href="product-description-accordion.html" class="sub-nav-link">Product description accordion</a></li>
                                            <li><a href="product-description-list.html" class="sub-nav-link">Product description list</a></li>
                                            <li><a href="product-description-vertical.html" class="sub-nav-link">Product description vertical</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#sub-product-two" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-two">
                                        <span>Product details</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-product-two" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="product-inner-zoom.html" class="sub-nav-link">Product inner zoom</a></li>
                                            <li><a href="product-zoom-magnifier.html" class="sub-nav-link">Product zoom magnifier</a></li>
                                            <li><a href="product-no-zoom.html" class="sub-nav-link">Product no zoom</a></li>
                                            <li><a href="product-photoswipe-popup.html" class="sub-nav-link">Product photoswipe popup</a></li>
                                            <li><a href="product-zoom-popup.html" class="sub-nav-link">Product external zoom and photoswipe popup</a></li>
                                            <li><a href="product-video.html" class="sub-nav-link">Product video</a></li>
                                            <li><a href="product-3d.html" class="sub-nav-link">Product 3D, AR models</a></li>
                                            <li><a href="product-options-customizer.html" class="sub-nav-link">Product options & customizer</a></li>
                                            <li><a href="product-advanced-types.html" class="sub-nav-link">Advanced product types</a></li>
                                            <li><a href="product-giftcard.html" class="sub-nav-link">Recipient information form for gift card products</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#sub-product-three" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-three">
                                        <span>Product swatchs</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-product-three" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="product-color-swatch.html" class="sub-nav-link">Product color swatch</a></li>
                                            <li><a href="product-rectangle.html" class="sub-nav-link">Product rectangle</a></li>
                                            <li><a href="product-rectangle-color.html" class="sub-nav-link">Product rectangle color</a></li>
                                            <li><a href="product-swatch-image.html" class="sub-nav-link">Product swatch image</a></li>
                                            <li><a href="product-swatch-image-rounded.html" class="sub-nav-link">Product swatch image rounded</a></li>
                                            <li><a href="product-swatch-dropdown.html" class="sub-nav-link">Product swatch dropdown</a></li>
                                            <li><a href="product-swatch-dropdown-color.html" class="sub-nav-link">Product swatch dropdown color</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#sub-product-four" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-four">
                                        <span>Product features</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-product-four" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="product-frequently-bought-together.html" class="sub-nav-link">Frequently bought together</a></li>
                                            <li><a href="product-frequently-bought-together-2.html" class="sub-nav-link">Frequently bought together 2</a></li>
                                            <li><a href="product-upsell-features.html" class="sub-nav-link">Product upsell features</a></li>
                                            <li><a href="product-pre-orders.html" class="sub-nav-link">Product pre-orders</a></li>
                                            <li><a href="product-notification.html" class="sub-nav-link">Back in stock notification</a></li>
                                            <li><a href="product-pickup.html" class="sub-nav-link">Product pickup</a></li>
                                            <li><a href="product-images-grouped.html" class="sub-nav-link">Variant images grouped</a></li>
                                            <li><a href="product-complimentary.html" class="sub-nav-link">Complimentary products</a></li>
                                            <li><a href="product-quick-order-list.html" class="sub-nav-link line-clamp">Quick order list<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-four" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
                            <span>Pages</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-four" class="collapse">
                            <ul class="sub-nav-menu" id="sub-menu-navigation">
                                <li><a href="about-us.html" class="sub-nav-link">About us</a></li>
                                <li><a href="brands.html" class="sub-nav-link line-clamp">Brands<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                <li><a href="brands-v2.html" class="sub-nav-link">Brands V2</a></li>
                                <li><a href="contact-1.html" class="sub-nav-link">Contact 1</a></li>
                                <li><a href="contact-2.html" class="sub-nav-link">Contact 2</a></li>
                                <li><a href="faq-1.html" class="sub-nav-link">FAQ 01</a></li>
                                <li><a href="faq-2.html" class="sub-nav-link">FAQ 02</a></li>
                                <li><a href="our-store.html" class="sub-nav-link">Our store</a></li>
                                <li><a href="store-locations.html" class="sub-nav-link">Store locator</a></li>
                                <li><a href="timeline.html" class="sub-nav-link line-clamp">Timeline<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                <li><a href="view-cart.html" class="sub-nav-link line-clamp">View cart</a></li>
                                <li><a href="checkout.html" class="sub-nav-link line-clamp">Check out</a></li>
                                <li><a href="payment-confirmation.html" class="sub-nav-link line-clamp">Payment Confirmation</a></li>
                                <li><a href="payment-failure.html" class="sub-nav-link line-clamp">Payment Failure</a></li>
                                <li><a href="#sub-account" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-account">
                                    <span>My Account</span>
                                    <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-account" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="my-account.html" class="sub-nav-link">My account</a></li>
                                            <li><a href="my-account-orders.html" class="sub-nav-link">My order</a></li>
                                            <li><a href="my-account-orders-details.html" class="sub-nav-link">My order details</a></li>
                                            <li><a href="my-account-address.html" class="sub-nav-link">My address</a></li>
                                            <li><a href="my-account-edit.html" class="sub-nav-link">My account details</a></li>
                                            <li><a href="my-account-wishlist.html" class="sub-nav-link">My wishlist</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="invoice.html" class="sub-nav-link line-clamp">Invoice</a></li>
                                <li><a href="404.html" class="sub-nav-link line-clamp">404</a></li>
                            </ul>
                        </div>
                        
                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-five" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-five">
                            <span>Blog</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-five" class="collapse">
                            <ul class="sub-nav-menu" >
                                <li><a href="blog-grid.html" class="sub-nav-link">Grid layout</a></li>
                                <li><a href="blog-sidebar-left.html" class="sub-nav-link">Left sidebar</a></li>
                                <li><a href="blog-sidebar-right.html" class="sub-nav-link">Right sidebar</a></li>
                                <li><a href="blog-list.html" class="sub-nav-link">Blog list</a></li>
                                <li><a href="blog-detail.html" class="sub-nav-link">Single Post</a></li>
                            </ul>
                        </div>
                        
                    </li>
                    <li class="nav-mb-item">
                        <a href="https://themeforest.net/item/ecomus-ultimate-html5-template/53417990?s_rank=3" class="mb-menu-link">Buy now</a>
                    </li>
                </ul>
                <div class="mb-other-content">
                    <div class="d-flex group-icon">
                        <a href="wishlist.html" class="site-nav-icon"><i class="icon icon-heart"></i>Wishlist</a>
                        <a href="home-search.html" class="site-nav-icon"><i class="icon icon-search"></i>Search</a>
                    </div>
                    <div class="mb-notice">
                        <a href="contact-1.html" class="text-need">Need help ?</a>
                    </div>
                    <ul class="mb-info">
                        <li>Address: 1234 Fashion Street, Suite 567, <br> New York, NY 10001</li>
                        <li>Email: <b>info@fashionshop.com</b></li>
                        <li>Phone: <b>(212) 555-1234</b></li>
                    </ul>
                </div>
            </div>
            <div class="mb-bottom">
                <a href="login.html" class="site-nav-icon"><i class="icon icon-account"></i>Login</a>
                <div class="bottom-bar-language">
                    <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option data-thumbnail="images/country/fr.svg">EUR <span>€ | France</span></option>
                            <option data-thumbnail="images/country/de.svg">EUR <span>€ | Germany</span></option>
                            <option selected data-thumbnail="images/country/us.svg">USD <span>$ | United States</span></option>
                            <option data-thumbnail="images/country/vn.svg">VND <span>₫ | Vietnam</span></option>
                        </select>
                    </div>
                    <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>English</option>
                            <option>العربية</option>
                            <option>简体中文</option>
                            <option>اردو</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>       
    </div>
    <!-- /mobile menu -->



    <!-- canvasSearch -->
    <div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">
        <div class="canvas-wrapper">
            <header class="tf-search-head">
                <div class="title fw-5">
                    Search our site
                    <div class="close">
                        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                    </div>
                </div>
                <div class="tf-search-sticky">
                    <form class="tf-mini-search-frm">
                        <fieldset class="text">
                            <input type="text" placeholder="Search" class="" name="text" tabindex="0" value="" aria-required="true" required="">
                        </fieldset>
                        <button class="" type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </header>
            <div class="canvas-body p-0">
                <div class="tf-search-content">
                    <div class="tf-cart-hide-has-results">
                        <div class="tf-col-quicklink">
                            <div class="tf-search-content-title fw-5">Quick link</div>
                            <ul class="tf-quicklink-list">
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Fashion</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Men</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Women</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Accessories</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tf-col-content">
                            <div class="tf-search-content-title fw-5">Need some inspiration?</div>
                            <div class="tf-search-hidden-inner">
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Cotton jersey top</a>
                                        <div class="tf-product-info-price">
                                            <div class="compare-at-price">$10.00</div>
                                            <div class="price-on-sale fw-6">$8.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Mini crossbody bag</a>
                                        <div class="tf-product-info-price">
                                            <div class="price fw-6">$18.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Oversized Printed T-shirt</a>
                                        <div class="tf-product-info-price">
                                            <div class="price fw-6">$18.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /canvasSearch -->

    <!-- toolbarShopmb -->
    <div class="offcanvas offcanvas-start canvas-mb toolbar-shop-mobile" id="toolbarShopmb">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="images/shop/cate/cate1.jpg" alt="">
                            </div>
                            <span>Accessories</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="images/shop/cate/cate2.jpg" alt="">
                            </div>
                            <span>Dog</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="images/shop/cate/cate3.jpg" alt="">
                            </div>
                            <span>Grocery</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="images/shop/cate/cate4.png" alt="">
                            </div>
                            <span>Handbag</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#cate-menu-one" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-one">
                            <div class="image">
                                <img src="images/shop/cate/cate5.jpg" alt="">
                            </div>
                            <span>Fashion</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="cate-menu-one" class="collapse list-cate">
                            <ul class="sub-nav-menu" id="cate-menu-navigation">
                                <li>
                                    <a href="#cate-shop-one" class="tf-category-link has-children sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-shop-one">
                                        <div class="image">
                                            <img src="images/shop/cate/cate6.jpg" alt="">
                                        </div>
                                        <span>Mens</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="cate-shop-one" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li>
                                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                    <div class="image">
                                                        <img src="images/shop/cate/cate1.jpg" alt="">
                                                    </div>
                                                    <span>Accessories</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                    <div class="image">
                                                        <img src="images/shop/cate/cate8.jpg" alt="">
                                                    </div>
                                                    <span>Shoes</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#cate-shop-two" class="tf-category-link has-children sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-shop-two">
                                        <div class="image">
                                            <img src="images/shop/cate/cate9.jpg" alt="">
                                        </div>
                                        <span>Womens</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="cate-shop-two" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li>
                                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                    <div class="image">
                                                        <img src="images/shop/cate/cate4.png" alt="">
                                                    </div>
                                                    <span>Handbag</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                    <div class="image">
                                                        <img src="images/shop/cate/cate7.jpg" alt="">
                                                    </div>
                                                    <span>Tee</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#cate-menu-two" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-two">
                            <div class="image">
                                <img src="images/shop/cate/cate6.jpg" alt="">
                            </div>
                            <span>Men</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="cate-menu-two" class="collapse list-cate">
                            <ul class="sub-nav-menu" id="cate-menu-navigation1">
                                <li>
                                    <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                        <div class="image">
                                            <img src="images/shop/cate/cate1.jpg" alt="">
                                        </div>
                                        <span>Accessories</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                        <div class="image">
                                            <img src="images/shop/cate/cate8.jpg" alt="">
                                        </div>
                                        <span>Shoes</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="images/shop/cate/cate7.jpg" alt="">
                            </div>
                            <span>Tee</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="images/shop/cate/cate8.jpg" alt="">
                            </div>
                            <span>Shoes</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#cate-menu-three" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-three">
                            <div class="image">
                                <img src="images/shop/cate/cate9.jpg" alt="">
                            </div>
                            <span>Women</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="cate-menu-three" class="collapse list-cate">
                            <ul class="sub-nav-menu" id="cate-menu-navigation2">
                                <li>
                                    <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                        <div class="image">
                                            <img src="images/shop/cate/cate4.png" alt="">
                                        </div>
                                        <span>Handbag</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                        <div class="image">
                                            <img src="images/shop/cate/cate7.jpg" alt="">
                                        </div>
                                        <span>Tee</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mb-bottom">
                <a href="shop-default.html" class="tf-btn fw-5 btn-line">View all collection<i class="icon icon-arrow1-top-left"></i></a>
            </div>
        </div>       
    </div>
    <!-- /toolbarShopmb -->

    <!-- modal login -->
    <div class="modal modalCentered fade form-sign-in modal-part-content" id="login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Log in</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="" action="<? echo base_url('login'); ?>" accept-charset="utf-8" method="post">
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="text"  name="username" required>
                            <label class="tf-field-label" for="">Username *</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="password"  name="password" required>
                            <label class="tf-field-label" for="">Password *</label>
                        </div>
                        <!-- <div>
                            <a href="#forgotPassword" data-bs-toggle="modal" class="btn-link link">Forgot your password?</a>
                        </div> -->
                        <div class="bottom"> 
                            <div class="w-100">
                                <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Log in</span></button>
                            </div>
                            <div class="w-100">
                                <a href="#register" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                    New customer? Create your account
                                    <i class="icon icon-arrow1-top-left"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modalCentered fade form-sign-in modal-part-content" id="forgotPassword">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Reset your password</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="">
                        <div>
                            <p>Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails</p>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div>
                            <a href="#login" data-bs-toggle="modal" class="btn-link link">Cancel</a>
                        </div>
                        <div class="bottom"> 
                            <div class="w-100">
                                <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Reset password</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modalCentered fade form-sign-in modal-part-content" id="register">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Register</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="" action="<? echo base_url('login/register'); ?>" accept-charset="utf-8" method="post">
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" required placeholder=" " type="text"  name="name">
                            <label class="tf-field-label" for="">Fullname</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" required placeholder=" " type="email"  name="email">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" required placeholder=" " type="text"  name="username">
                            <label class="tf-field-label" for="">Username</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" required placeholder=" " type="password"  name="password">
                            <label class="tf-field-label" for="">Password *</label>
                        </div>
                        <div class="bottom"> 
                            <div class="w-100">
                                <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Register</span></button>
                            </div>
                            <div class="w-100">
                                <a href="#login" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                    Already have an account? Log in here
                                    <i class="icon icon-arrow1-top-left"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal login -->

    <!-- shoppingCart -->
    <div class="modal fullRight fade modal-shopping-cart" id="modal-my-cart">
        
    </div>
    <!-- /shoppingCart -->

    <!-- modal compare -->
    <div class="offcanvas offcanvas-bottom canvas-compare" id="compare">
        <div class="canvas-wrapper">
            <header class="canvas-header">
                <div class="close-popup">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                </div>
            </header>
            <div class="canvas-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tf-compare-list">
                                <div class="tf-compare-head">
                                    <div class="title">Compare Products</div>
                                </div>
                                <div class="tf-compare-offcanvas">
                                    <div class="tf-compare-item">
                                        <div class="position-relative">
                                            <div class="icon">
                                                <i class="icon-close"></i>
                                            </div>
                                            <a href="product-detail.html">
                                                <img class="radius-3" src="images/products/orange-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tf-compare-item">
                                        <div class="position-relative">
                                            <div class="icon">
                                                <i class="icon-close"></i>
                                            </div>
                                            <a href="product-detail.html">
                                                <img class="radius-3" src="images/products/pink-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-compare-buttons">
                                    <div class="tf-compare-buttons-wrap">
                                        <a href="compare.html" class="tf-btn radius-3 btn-fill justify-content-center fw-6 fs-14 flex-grow-1 animate-hover-btn ">Compare</a>
                                        <div class="tf-compapre-button-clear-all link">
                                            Clear All
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
    <!-- /modal compare -->
    
    <!-- modal quick_add -->
    <div class="modal fade modalDemo" id="quick_add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="tf-product-info-item">
                        <div class="image">
                            <img src="images/products/orange-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <a href="product-detail.html">Ribbed Tank Top</a>
                            <div class="tf-product-info-price">
                                <!-- <div class="price-on-sale">$8.00</div>
                                <div class="compare-at-price">$10.00</div>
                                <div class="badges-on-sale"><span>20</span>% OFF</div> -->
                                <div class="price">$18.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-info-variant-picker mb_15">
                        <div class="variant-picker-item">
                            <div class="variant-picker-label">
                                Color: <span class="fw-6 variant-picker-label-value">Orange</span>
                            </div>
                            <div class="variant-picker-values">
                                <input id="values-orange" type="radio" name="color" checked>
                                <label class="hover-tooltip radius-60" for="values-orange" data-value="Orange">
                                    <span class="btn-checkbox bg-color-orange"></span>
                                    <span class="tooltip">Orange</span>
                                </label>
                                <input id="values-black" type="radio" name="color">
                                <label class=" hover-tooltip radius-60" for="values-black" data-value="Black">
                                    <span class="btn-checkbox bg-color-black"></span>
                                    <span class="tooltip">Black</span>
                                </label>
                                <input id="values-white" type="radio" name="color">
                                <label class="hover-tooltip radius-60" for="values-white" data-value="White">
                                    <span class="btn-checkbox bg-color-white"></span>
                                    <span class="tooltip">White</span>
                                </label>
                            </div>
                        </div>
                        <div class="variant-picker-item">
                            <div class="variant-picker-label">
                                Size: <span class="fw-6 variant-picker-label-value">S</span>
                            </div>
                            <div class="variant-picker-values">
                                <input type="radio" name="size" id="values-s" checked>
                                <label class="style-text" for="values-s" data-value="S">
                                    <p>S</p>
                                </label>
                                <input type="radio" name="size" id="values-m">
                                <label class="style-text" for="values-m" data-value="M">
                                    <p>M</p>
                                </label>
                                <input type="radio" name="size" id="values-l">
                                <label class="style-text" for="values-l" data-value="L">
                                    <p>L</p>
                                </label>
                                <input type="radio" name="size" id="values-xl">
                                <label class="style-text" for="values-xl" data-value="XL">
                                    <p>XL</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-info-quantity mb_15">
                        <div class="quantity-title fw-6">Quantity</div>
                        <div class="wg-quantity">
                            <span class="btn-quantity minus-btn">-</span>
                            <input type="text" name="number" value="1">
                            <span class="btn-quantity plus-btn">+</span>
                        </div>
                    </div>
                    <div class="tf-product-info-buy-button">
                        <form>
                            <a class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add to cart -&nbsp;</span><span class="tf-qty-price">$18.00</span></a>
                            <div class="tf-product-btn-wishlist btn-icon-action">
                                <i class="icon-heart"></i>
                                <i class="icon-delete"></i>
                            </div>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="icon icon-check"></span>
                            </a>
                            <div class="w-100">
                                <a href="#" class="btns-full">Buy with <img src="images/payments/paypal.png" alt=""></a>
                                <a href="#" class="payment-more-option">More payment options</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_add -->

    <!-- modal quick_view -->
    <div class="modal fade modalDemo" id="quick_view">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="tf-product-media-wrap">
                        <div dir="ltr" class="swiper tf-single-slide">
                            <div class="swiper-wrapper" >
                                <div class="swiper-slide">
                                    <div class="item">
                                        <img src="images/products/orange-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <img src="images/products/pink-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next button-style-arrow single-slide-prev"></div>
                            <div class="swiper-button-prev button-style-arrow single-slide-next"></div>
                        </div>
                    </div>
                    <div class="tf-product-info-wrap position-relative">
                        <div class="tf-product-info-list">
                            <div class="tf-product-info-title">
                                <h5><a class="link" href="product-detail.html">Ribbed Tank Top</a></h5>
                            </div>
                            <div class="tf-product-info-badges">
                                <div class="badges text-uppercase">Best seller</div>
                                <div class="product-status-content">
                                    <i class="icon-lightning"></i>
                                    <p class="fw-6">Selling fast! 48 people have this in their carts.</p>
                                </div>
                            </div>
                            <div class="tf-product-info-price">
                                <div class="price">$18.00</div>
                            </div>
                            <div class="tf-product-description">
                                <p>Nunc arcu faucibus a et lorem eu a mauris adipiscing conubia ac aptent ligula facilisis a auctor habitant parturient a a.Interdum fermentum.</p>
                            </div>
                            <div class="tf-product-info-variant-picker">
                                <div class="variant-picker-item">
                                    <div class="variant-picker-label">
                                        Color: <span class="fw-6 variant-picker-label-value">Orange</span>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input id="values-orange-1" type="radio" name="color-1" checked>
                                        <label class="hover-tooltip radius-60" for="values-orange-1" data-value="Orange">
                                            <span class="btn-checkbox bg-color-orange"></span>
                                            <span class="tooltip">Orange</span>
                                        </label>
                                        <input id="values-black-1" type="radio" name="color-1">
                                        <label class=" hover-tooltip radius-60" for="values-black-1" data-value="Black">
                                            <span class="btn-checkbox bg-color-black"></span>
                                            <span class="tooltip">Black</span>
                                        </label>
                                        <input id="values-white-1" type="radio" name="color-1">
                                        <label class="hover-tooltip radius-60" for="values-white-1" data-value="White">
                                            <span class="btn-checkbox bg-color-white"></span>
                                            <span class="tooltip">White</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="variant-picker-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="variant-picker-label">
                                            Size: <span class="fw-6 variant-picker-label-value">S</span>
                                        </div>
                                        <div class="find-size btn-choose-size fw-6">Find your size</div>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input type="radio" name="size-1" id="values-s-1" checked>
                                        <label class="style-text" for="values-s-1" data-value="S">
                                            <p>S</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-m-1">
                                        <label class="style-text" for="values-m-1" data-value="M">
                                            <p>M</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-l-1">
                                        <label class="style-text" for="values-l-1" data-value="L">
                                            <p>L</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-xl-1">
                                        <label class="style-text" for="values-xl-1" data-value="XL">
                                            <p>XL</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-quantity">
                                <div class="quantity-title fw-6">Quantity</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity minus-btn">-</span>
                                    <input type="text" name="number" value="1">
                                    <span class="btn-quantity plus-btn">+</span>
                                </div>
                            </div>
                            <div class="tf-product-info-buy-button">
                                <form class="">
                                    <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add to cart -&nbsp;</span><span class="tf-qty-price">$8.00</span></a>
                                    <a href="javascript:void(0);" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <div class="w-100">
                                        <a href="#" class="btns-full">Buy with <img src="images/payments/paypal.png" alt=""></a>
                                        <a href="#" class="payment-more-option">More payment options</a>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <a href="product-detail.html" class="tf-btn fw-6 btn-line">View full details<i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_view -->

    <!-- modal find_size -->
    <div class="modal fade modalDemo tf-product-modal" id="find_size">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Size chart</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-rte">
                    <div class="tf-table-res-df">
                        <h6>Size guide</h6>
                        <table class="tf-sizeguide-table">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>US</th>
                                    <th>Bust</th>
                                    <th>Waist</th>
                                    <th>Low Hip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>XS</td>
                                    <td>2</td>
                                    <td>32</td>
                                    <td>24 - 25</td>
                                    <td>33 - 34</td>
                                </tr>
                                <tr>
                                    <td>S</td>
                                    <td>4</td>
                                    <td>34 - 35</td>
                                    <td>26 - 27</td>
                                    <td>35 - 26</td>
                                </tr>
                                <tr>
                                    <td>M</td>
                                    <td>6</td>
                                    <td>36 - 37</td>
                                    <td>28 - 29</td>
                                    <td>38 - 40</td>
                                </tr>
                                <tr>
                                    <td>L</td>
                                    <td>8</td>
                                    <td>38 - 29</td>
                                    <td>30 - 31</td>
                                    <td>42 - 44</td>
                                </tr>
                                <tr>
                                    <td>XL</td>
                                    <td>10</td>
                                    <td>40 - 41</td>
                                    <td>32 - 33</td>
                                    <td>45 - 47</td>
                                </tr>
                                <tr>
                                    <td>XXL</td>
                                    <td>12</td>
                                    <td>42 - 43</td>
                                    <td>34 - 35</td>
                                    <td>48 - 50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tf-page-size-chart-content">
                        <div>
                            <h6>Measuring Tips</h6>
                            <div class="title">Bust</div>
                            <p>Measure around the fullest part of your bust.</p>
                            <div class="title">Waist</div>
                            <p>Measure around the narrowest part of your torso.</p>
                            <div class="title">Low Hip</div>
                            <p class="mb-0">With your feet together measure around the fullest part of your hips/rear.
                            </p>
                        </div>
                        <div>
                            <img class="sizechart lazyload" data-src="images/shop/products/size_chart2.jpg" src="images/shop/products/size_chart2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal find_size -->

    <!-- auto popup  -->
    <div class="modal modalCentered fade auto-popup modal-newleter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-top">
                    <img class="lazyload" data-src="images/item/banner-newleter.jpg" src="images/item/banner-newleter.jpg" alt="home-01">
                    <span class="icon icon-close btn-hide-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="modal-bottom">
                    <h4 class="text-center">Don’t mis out</h4>
                    <h6 class="text-center">Be the first one to get the new product at early bird prices.</h6>
                    <form id="subscribe-form" action="#" class="form-newsletter" method="post" accept-charset="utf-8" data-mailchimp="true">
                        <div id="subscribe-content">
                            <input type="email" name="email-form" id="subscribe-email" placeholder="Email *">
                            <button type="button" id="subscribe-button" class="tf-btn btn-fill radius-3 animate-hover-btn w-100 justify-content-center">Keep me updated</button>
                        </div>
                        <div id="subscribe-msg"></div>
                    </form>
                    <div class="text-center">
                        <a href="#" data-bs-dismiss="modal" class="tf-btn btn-line fw-6 btn-hide-popup">Not interested</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /auto popup  -->


    <!-- Javascript -->
    <script type="text/javascript">var base_url = "<?= base_url(); ?>";</script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/carousel.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/lazysize.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/count-down.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/wow.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/multiple-modal.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/main.js"></script>

    <script type="text/javascript">
        <?php if ($this->session->flashdata('error')) { ?>
                var msg = '<?php echo $this->session->flashdata('error'); ?>';
                alert (msg);
        <?php } ?>

        <?php if ($this->session->flashdata('success')) { ?>
                var msg = '<?php echo $this->session->flashdata('success'); ?>';
                alert (msg);
        <?php } ?>

        function viewMyCart(userid)
        {
            $.ajax({
                url: base_url + 'main/viewMycart',
                type: 'POST',
                data: {userid:userid},
                success: function(data) {
                    $('#modal-my-cart').html(data);
                    $("#modal-my-cart").modal('show');
                },
                error: function() {
                    alert ('error');
                }
            });
        }


    </script>


</body>

</html>