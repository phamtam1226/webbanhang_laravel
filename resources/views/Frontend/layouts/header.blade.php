
    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">
        <div class="header-top bg-main hidden-xs">
            <div class="container">
                <div class="top-bar left">
                    <ul class="horizontal-menu">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>phambatam@gmail.com</a></li>
                        <li><a href="#">Miễn phí vận chuyển với đơn hàng trên 200.000vnd</a></li>
                    </ul>
                </div>
                <div class="top-bar right">
                    <ul class="social-list">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="horizontal-menu">              
                        <li><a href="login.html" class="login-link"><i class="biolife-icon icon-login"></i>Login/Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-middle biolife-sticky-object ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                        <a href="{{URL::to('/')}}" class="biolife-logo"><img src="assets/images/sach_logo.jpg" alt="biolife logo" width="135" height="34" ></a>
                        <h1 class="page-title">Cửa hàng sách</h1>
                    </div>
                    <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                        <div class="primary-menu">
                        <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
                            <li class="menu-item"><a href="{{URL::to('/')}}">Trang chủ </a></li>
                        
                            <li class="menu-item menu-item-has-children has-child">
                                <a href="#" class="menu-name" data-title="Products">Sản phẩm</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#">Omelettes</a></li>
                                    <li class="menu-item"><a href="#">Breakfast Scrambles</a></li>
                                </ul>
                            </li>     
                            <li class="menu-item"><a href="contact.html">Liên hệ</a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                        <div class="biolife-cart-info">
                            <div class="mobile-search">
                                <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                                <div class="mobile-search-content">
                                    <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                        <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                        <input type="text" name="s" class="input-text" value="" placeholder="Tìm kiếm...">
                                        <select name="category">
                                            <option value="-1" selected>All Categories</option>
                                            <option value="vegetables">Vegetables</option>                             
                                        </select>
                                        <button type="submit" class="btn-submit">go</button>
                                    </form>
                                </div>
                            </div>
                            <div class="wishlist-block hidden-sm hidden-xs">
                                <a href="#" class="link-to">
                                    <span class="icon-qty-combine">
                                        <i class="icon-heart-bold biolife-icon"></i>
                                        <span class="qty">4</span>
                                    </span>
                                </a>
                            </div>
                            <div class="minicart-block">
                                <div class="minicart-contain">
                                    <a href="javascript:void(0)" class="link-to">
                                            <span class="icon-qty-combine">
                                                <i class="icon-cart-mini biolife-icon"></i>
                                                <span class="qty">8</span>
                                            </span>
                                        <span class="title">My Cart</span>   
                                    </a>
                                    <div class="cart-content">
                                        <div class="cart-inner">
                                            <ul class="products">
                                                <li>
                                                    <div class="minicart-item">
                                                        <div class="thumb">
                                                            <a href="#"><img src="assets/images/minicart/pr-01.jpg" width="90" height="90" alt="National Fresh"></a>
                                                        </div>
                                                        <div class="left-info">
                                                            <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                            <div class="price">
                                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                            </div>
                                                            <div class="qty">
                                                                <label for="cart[id123][qty]">Qty:</label>
                                                                <input type="number" class="input-qty" name="cart[id123][qty]" id="cart[id123][qty]" value="1" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="btn-control">
                                                <a href="{{URL::to('/save_cart')}}" class="btn view-cart">Xem gỏi hàng</a>
                                                <a href="#" class="btn">Thanh toán</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu-toggle">
                                <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="vertical-menu vertical-category-block">
                            <div class="block-title">
                                <span class="menu-icon">
                                    <span class="line-1"></span>
                                    <span class="line-2"></span>
                                    <span class="line-3"></span>
                                </span>
                                <span class="menu-title">Danh mục sản phẩm</span>
                                <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                            <div class="wrap-menu">
                                <ul class="menu clone-main-menu">
                                    @foreach($category as $key => $cate)
                                         <li class="menu-item"><a href="{{URL::to('/danh_muc_san_pham/'.$cate->category_id)}}" class="menu-title">{{$cate->category_name}}</a></li>
                                    
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 padding-top-2px">
                        <div class="header-search-bar layout-01">
                            <form action="#" class="form-search" name="desktop-seacrh" method="get">
                                <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                                <select name="category">
                                    <option value="-1" selected>All Categories</option>
                                    <option value="vegetables">Vegetables</option>
                                    
                                </select>
                                <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                            </form>
                        </div>
                        <div class="live-info">
                            <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">(+900) 123 456 7891</b></p>
                            <p class="working-time">Mon-Fri: 8:30am-7:30pm; Sat-Sun: 9:30am-4:30pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>