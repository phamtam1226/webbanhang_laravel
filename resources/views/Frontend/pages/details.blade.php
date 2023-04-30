@extends('Frontend.layouts.master')
@section('main-content')
<!--Hero Section-->
<div class="hero-section hero-background">
    <h1 class="page-title">Cửa hàng sách</h1>
</div>

<!--Navigation section-->
<div class="container">
    @foreach($product_details as $key =>$value)
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{URL::to('/')}}" class="permal-link">Trang chủ</a></li>
            <li class="nav-item"><a href="{{URL::to('/danh_muc_san_pham/'.$value->category_id)}}" class="permal-link">{{$value->category_name}}</a></li>
            <li class="nav-item"><span class="current-page">{{$value->product_name}}</span></li>
        </ul>
    </nav>
</div>

<div class="page-contain single-product">
    <div class="container">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!-- summary info -->
            <div class="sumary-product single-layout">

                <div class="media">
                    <ul class="biolife-carousel slider-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                        <li><img src="{{URL::to('uploads/product/'.$value->product_image)}}" alt="" width="500" height="500"></li>


                    </ul>
                    <!--   <ul class="biolife-carousel slider-nav" data-slick='{"arrows":false,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":4,"slidesToScroll":1,"asNavFor":".slider-for"}'>
                        <li><img src="{{URL::to('uploads/product/'.$value->product_image)}}" alt="" width="88" height="88"></li>
                       

                    </ul>-->
                </div>
                <div class="product-attribute">
                    <h3 class="title">{{$value->product_name}}</h3>
                    <p class="excerpt">{{$value->product_desc}}</p>
                    <br>
                    <p class="excerpt">Tác giả: {{$value->product_tacgia}}</p>
                    <p class="excerpt">NXB: {{$value->product_nxb}}</p>
                    <div class="price">
                        <ins><span class="price-amount">{{$value->product_price}}<span class="currencySymbol"> VND</span></span></ins>

                    </div>
                    <div class="product-atts">

                    </div>
                    <div class="shipping-info">
                        <p class="shipping-day">Vận chuyển trong 3 ngày</p>

                    </div>
                </div>
                <div class="action-form">
                    <form action="{{URL::to('/save_cart')}}" method="POST">
                        {{csrf_field()}}
                        <div class="quantity-box">
                            <span class="title">Số lượng:</span>
                            <div class="qty-input">
                                <input type="text" name="qty" value="1" data-max_value="20" data-min_value="1" data-step="1">
                                <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <input name="productid_hidden" type="hidden" value="{{$value->product_id}}"/>
                            </div>
                        </div>
                        <div class="total-price-contain">
                            <span class="title">Tổng tiền:</span>
                            <p class="price">£199.99</p>
                        </div>
                        <div class="buttons">
                            <button type="submit" class="btn add-to-cart-btn" style="margin-left: 20%;">
                            <i >Thêm vào giỏ</i>
                            </button>
                        </div>
                        <div class="location-shipping-to">
                            <span class="title">Ship to:</span>
                            <select name="shipping_to" class="country">
                                <option value="-1">Select Country</option>
                                <option value="america">America</option>
                                <option value="france">France</option>
                                <option value="germany">Germany</option>
                                <option value="japan">Japan</option>
                            </select>
                        </div>
                        <div class="social-media">
                            <ul class="social-list">
                                <li><a href="#" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="acepted-payment-methods">
                            <ul class="payment-methods">
                                <li><img src="assets/images/card1.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card2.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card3.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card4.jpg" alt="" width="51" height="36"></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tab info -->
            <div class="product-tabs single-layout biolife-tab-contain">
                <div class="tab-head">
                    <ul class="tabs">
                        <li class="tab-element active"><a href="#tab_1st" class="tab-link">Giới thiệu sản phẩm</a></li>

                    </ul>
                </div>
                <div class="tab-content">
                    <div id="tab_1st" class="tab-contain desc-tab active">
                        <p class="desc">{{$value->product_content}}</p>

                    </div>
                </div>
            </div>
            @endforeach

            <!-- related products -->
            <div class="product-related-box single-layout">
                <div class="biolife-title-box lg-margin-bottom-26px-im">

                    <span class="subtitle">Tất cả các mặt hàng tốt nhất cho bạn</span>
                    <h3 class="main-title">Những sảm phẩm tương tự</h3>
                </div>
                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
                    @foreach($relate as $key =>$tuongtu)
                    <li class="product-item">
                        <div class="contain-product layout-default">
                            <div class="product-thumb">
                                <a href="#" class="link-to-product">
                                    <img src="{{URL::to('uploads/product/'.$tuongtu->product_image)}}" alt="dd" width="270" height="270" class="product-thumnail">
                                </a>
                            </div>
                            <div class="info">

                                <h4 class="product-title"><a href="#" class="pr-name">{{$tuongtu->product_name}}</a></h4>
                                <div class="price">
                                    <ins><span class="price-amount">{{$tuongtu->product_price}}<span class="currencySymbol"> VND</span></span></ins>

                                </div>
                                <div class="slide-down-box">
                                    <p class="message">{{$tuongtu->product_desc}}</p>
                                    <div class="buttons">

                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
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
@endsection