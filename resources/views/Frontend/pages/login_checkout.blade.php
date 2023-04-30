@extends('Frontend.layouts.master')
@section('main-content')

<div class="page-contain login-page">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container">

            <div class="row">

                <!--Form Sign In-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="signin-container">
                        <form action="#" name="frm-login" method="post">
                            <p class="form-row">
                                <label for="fid-name">Email:<span class="requite">*</span></label>
                                <input type="text" id="fid-name" name="name" value="" class="txt-input">
                            </p>
                            <p class="form-row">
                                <label for="fid-pass">Mật khẩu:<span class="requite">*</span></label>
                                <input type="email" id="fid-pass" name="email" value="" class="txt-input">
                            </p>
                            <p class="form-row wrap-btn">
                                <button class="btn btn-submit btn-bold" type="submit">Đăng nhập</button>
                                <a href="#" class="link-to-help">Quên mật khẩu</a>
                            </p>
                        </form>
                    </div>
                </div>

                <!--Go to Register form-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="register-in-container">
                        <div class="intro">
                            <h4 class="box-title">Khách hàng mới?</h4>
                            <br>
                            <form action="{{URL::to('/add_customer')}}" name="frm-login" method="post">
                                {{csrf_field()}}
                                <p class="form-row">
                                    <label for="fid-name">Họ và tên:<span class="requite">*</span></label><br>
                                    <input type="text" id="fid-name" name="customer_name" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Email:<span class="requite">*</span></label><br>
                                    <input type="text" id="fid-name" name="customer_email" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Mật khẩu:<span class="requite">*</span></label><br>
                                    <input type="password" id="fid-pass" name="customer_password" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Điện thoại:<span class="requite">*</span></label><br>
                                    <input type="text" id="fid-name" name="customer_phone" value="" class="txt-input">
                                </p>
                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit">Đăng ký</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection