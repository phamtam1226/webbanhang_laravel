@extends('Frontend.layouts.master')
@section('main-content')
<!--Hero Section-->
<div class="hero-section hero-background">
    <h1 class="page-title">Organic Fruits</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="{{URL::to('/')}}" class="permal-link">Home</a></li>
            <li class="nav-item"><span class="current-page">Giỏ hàng</span></li>
        </ul>
    </nav>
</div>

<div class="page-contain shopping-cart">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container">



            <!--Cart Table-->
            <div class="shopping-cart-container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="box-title">Giỏ hàng của bạn</h3>
                        <form class="shopping-cart-form" action="{{URL::to('/_cart')}}" method="post">
                            <?php
                            $content = Cart::content();
                            ?>
                            <table class="shop_table cart-form">
                                <thead>
                                    <tr>
                                        <th class="product-name">Tên sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng tiền</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($content as $v_content)

                                    <tr class="cart_item">
                                        <td class="product-thumbnail" data-title="Product Name">
                                            <a class="prd-thumb" href="#">
                                                <figure><img width="113" height="113" src="{{URL::to('uploads/product/'.$v_content->options->image)}}" alt="shipping cart"></figure>
                                            </a>
                                            <a class="prd-name" href="{{URL::to('/chi_tiet_san_pham/'.$v_content->id)}}">{{($v_content->name)}}</a>
                                            <div class="action">
                                                <a href="{{URL::to('/update_cart/'.$v_content->rowId)}}" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="{{URL::to('/delete_cart/'.$v_content->rowId)}}" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">{{number_format($v_content->price,0,',','.')}}<span class="currencySymbol">VND</span></span></ins>

                                            </div>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity-box type1">
                                                <div class="qty-input">
                                                    <input type="text" name="qty" value="{{($v_content->qty)}}" data-max_value="20" data-min_value="1" data-step="1">
                                                    <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                                    <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
        
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">
                                                    <?php
                                                    $subtotal = $v_content->price *  $v_content->qty;
                                                    echo number_format($subtotal,0,',','.')
                                                    ?>
                                                    <span class="currencySymbol">VND</span></span></ins>
                                            </div>
                                        </td>
                                       

                                    </tr>
                                    @endforeach
                                    <tr class="cart_item wrap-buttons">
                                        <td class="wrap-btn-control" colspan="4">
                                            <a href="{{URL::to('/')}}" class="btn back-to-shop">Back to Shop</a>
                                            <button class="btn btn-update" type="submit" disabled>Cập nhật</button>
                                            <a href="{{URL::to('/delete_all_cart/')}}" class="qty-btn btn-down">Xóa tất cả
                                            <button class="btn btn-clear" type="reset">Xóa tất cả</button>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                        </form>
                        <br>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="shpcart-subtotal-block">
                            <div class="subtotal-line">
                                <b class="stt-name">Tổng <span class="sub"></span></b>
                                <span class="stt-price">{{Cart::subtotal(0,',','.')}}<span class="currencySymbol">VND</span></span>
                            </div>
                            <div class="subtotal-line">
                                <b class="stt-name">Thuế</b>
                                <span class="stt-price">{{Cart::tax(0,',','.')}}<span class="currencySymbol">VND</span></span>
                            </div>
                            <div class="subtotal-line">
                                <b class="stt-name">Thành tiển</b>
                                <span class="stt-price">{{Cart::total(0,',','.')}}<span class="currencySymbol">VND</span></span>
                            </div>
                           
                            <div class="btn-checkout">
                            <?php
                                    $customer_id = Session::get('customer_id');
                                    if ($customer_id != NULL) {

                                    ?>
                                        <a href="{{URL::to('/checkout')}}" class="btn checkout">Thanh toán</a>

                                    <?php
                                    } else {
                                    ?>
                                        <a href="{{URL::to('/login_checkout')}}" class="btn checkout">Thanh toán</a>
                                    <?php
                                    }
                                    ?> 
                               
                            </div>
                            <div class="biolife-progress-bar">
                                
                           
                    </div>
                </div>
            </div>


           
            

        </div>
    </div>
</div>
@endsection