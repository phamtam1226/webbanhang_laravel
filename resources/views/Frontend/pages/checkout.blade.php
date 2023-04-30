@extends('Frontend.layouts.master')
@section('main-content')
<div class="page-contain checkout">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container sm-margin-top-37px">
            <div class="row">

                <!--checkout progress box-->
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <div class="checkout-progress-wrap">
                        <ul class="steps">
                            <li class="step 1st">
                                <div class="checkout-act active">
                                    <h3 class="title-box"><span class="number">1</span>Điền thông tin</h3>
                                    <div class="box-content">
                                        <p class="txt-desc">Checking out as a <a class="pmlink" href="#">Guest?</a> You’ll be able to save your details to create an account with us later.</p>
                                        <div class="login-on-checkout">
                                            <form action="{{URL::to('/save_checkout')}}" name="frm-login" method="post">
                                                {{csrf_field()}}
                                                <p class="form-row">
                                                    <label for="fid-name">Họ và tên:<span class="requite">*</span></label>
                                                    <input type="text" id="fid-name" name="shipping_name" value="" class="txt-input">
                                                </p>
                                                <p class="form-row">
                                                    <label for="fid-name">Email:<span class="requite">*</span></label>
                                                    <input type="text" id="fid-name" name="shipping_email" value="" class="txt-input">
                                                </p>
                                                <p class="form-row">
                                                    <label for="fid-pass">Địa chỉ:<span class="requite">*</span></label>
                                                    <input type="text" id="fid-pass" name="shipping_address" value="" class="txt-input">
                                                </p>
                                                <p class="form-row">
                                                    <label for="fid-name">Điện thoại:<span class="requite">*</span></label>
                                                    <input type="text" id="fid-name" name="shipping_phone" value="" class="txt-input">
                                                </p>
                                                <p class="form-row wrap-btn">
                                                    <button class="btn btn-submit btn-bold" type="submit">Thanh toán</button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="step 2nd">
                                <div class="checkout-act">
                                    <h3 class="title-box"><span class="number">2</span>Shipping</h3>
                                </div>
                            </li>
                            <li class="step 3rd">
                                <div class="checkout-act">
                                    <h3 class="title-box"><span class="number">3</span>Billing</h3>
                                </div>
                            </li>
                            <li class="step 4th">
                                <div class="checkout-act">
                                    <h3 class="title-box"><span class="number">4</span>Payment</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Order Summary-->
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                    <div class="order-summary sm-margin-bottom-80px">
                        <div class="title-block">
                            <h3 class="title">Đơn hàng</h3>
                            <a href="#" class="link-forward">Xem lại giỏ hàng</a>
                        </div>
                        <div class="cart-list-box short-type">
                            <span class="number">2 items</span>
                            <ul class="cart-list">
                                <li class="cart-elem">
                                    <div class="cart-item">
                                        <div class="product-thumb">
                                            <a class="prd-thumb" href="#">
                                                <figure><img src="assets/images/shippingcart/pr-01.jpg" width="113" height="113" alt="shop-cart"></figure>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <span class="txt-quantity">1X</span>
                                            <a href="#" class="pr-name">National Fresh Fruit</a>
                                        </div>
                                        <div class="price price-contain">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>

                                        </div>
                                    </div>
                                </li>
                                <li class="cart-elem">
                                    <div class="cart-item">
                                        <div class="product-thumb">
                                            <a class="prd-thumb" href="#">
                                                <figure><img src="assets/images/shippingcart/pr-02.jpg" width="113" height="113" alt="shop-cart"></figure>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <span class="txt-quantity">1X</span>
                                            <a href="#" class="pr-name">National Fresh Fruit</a>
                                        </div>
                                        <div class="price price-contain">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="subtotal">
                                <li>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Tổng tiền:</b>
                                        <span class="stt-price">£170.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Phí vận chuyển</b>
                                        <span class="stt-price">£20.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Thuế</b>
                                        <span class="stt-price">£0.00</span>
                                    </div>
                                </li>
                                <li>

                                </li>
                                <li>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Thành tiền:</b>
                                        <span class="stt-price">£190.00</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection