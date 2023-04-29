@extends('Frontend.layouts.master')
@section('main-content')

<!-- Page Contain -->
<div class="page-contain">

    <!-- Main content -->
    <div id="main-content" class="main-content">

        <!--Block 01: Main slide-->


        <!--Block 02: Banner-->
        <div class="special-slide">
            <div class="container">
                <ul class="biolife-carousel dots_ring_style" data-slick='{"arrows": false, "dots": true, "slidesMargin": 30, "slidesToShow": 1, "infinite": true, "speed": 800, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":20, "dots": false}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}' >
                    <li>
                        <div class="slide-contain biolife-banner__special">
                            <div class="banner-contain">
                                <div class="media">
                                    <a href="#" class="bn-link">
                                        <figure><img src="assets/images/home-03/bn_special_org.jpg" width="616" height="483" alt=""></figure>
                                    </a>
                                </div>
                                <div class="text-content">
                                    <b class="first-line">Pomegranate</b>
                                    <span class="second-line">Organic Heaven Made</span>
                                    <span class="third-line">Easy <i>Healthy, Happy Life</i></span>
                                    <div class="product-detail">
                                        <h4 class="product-name">National Fresh Fruit Production</h4>
                                        <div class="price price-contain">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                        </div>
                                        <div class="buttons">
                                            <a href="#" class="btn add-to-cart-btn">Thêm giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                
                    
                    
                </ul>
                <div class="biolife-service type01 biolife-service__type01 sm-margin-top-0 xs-margin-top-45px">
            
                    <ul class="services-list">
                        <li>
                            <div class="service-inner">
                                <span class="number">1</span>
                                <span class="biolife-icon icon-beer"></span>
                                <p class="srv-name" >Sản phảm chất lượng</p>
                            </div>
                        </li>
                        <li>
                            <div class="service-inner">
                                <span class="number">2</span>
                                <span class="biolife-icon icon-schedule"></span>
                                <p class="srv-name">Giao hàng tận nơi và đúng giờ</p>
                            </div>
                        </li>
                        <li>
                            <div class="service-inner">
                                <span class="number">3</span>
                                <span class="biolife-icon icon-car"></span>
                                <p class="srv-name">Miễn phí vận chuyển trong thành phố</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Block 03: Product Tab-->
        <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
            <div class="container">
                <div class="biolife-title-box">
                    <span class="subtitle">Tất cả các mặt hàng tốt nhất cho bạn</span>
                    <h3 class="main-title">Sách Mới Nhất</h3>
                </div>
                <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                    
                    <div class="tab-content">
                        <div id="tab01_1st" class="tab-contain active">
                            <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                            @foreach($all_product as $key => $product)
                            <li class="product-item">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="{{URL::to('uploads/product/'.$product->product_image)}}" alt="" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4 class="product-title"><a href="#" class="pr-name">{{$product->product_name}}</a></h4>
                                           <!-- <b class="categories">{{$product->product_name}}</b>-->
                                            <div class="price ">
                                                <ins><span class="price-amount">{{$product->product_price}}<span class="currencySymbol"> VND</span></span></ins>
                                                <!--<del><span class="price-amount"><span class="currencySymbol">VND</span>95.00</span></del>-->
                                            </div>
                                            <div class="slide-down-box">
                                                <p class="message">{{$product->product_desc}}</p>
                                                <div class="buttons">
                                                    <!--<a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>-->
                                                    <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
                                                    <!--<a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                                
                                
                                
                            </ul>
                        </div>    
                </div>
            </div>
        </div>
    </div>

</div>
@endsection