@extends('Backend.layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật sản phẩm
            </header>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo $message;
                Session::put('message', null);
            }
            ?>
            <div class="panel-body">
                <div class="position-center">
                @foreach($edit_product as $key => $edit_value)
                    <form role="form" action="{{URL::to('/update_product/'.$edit_value->product_id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" value="{{$edit_value->product_name}}" name="product_name" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" >
                            <img src="{{URL::to('../uploads/product/'.$edit_value->product_image)}}" height="100" width="100">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" value="{{$edit_value->product_price}}" name="product_price" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tác giả</label>
                            <input type="text" value="{{$edit_value->product_tacgia}}" name="product_tacgia" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nhà xuất bản</label>
                            <input type="text" value="{{$edit_value->product_nxb}}" name="product_nxb" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea style="resize: none" rows="5" name="product_desc" class="form-control" id="exampleInputPassword1" >{{$edit_value->product_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                            <textarea style="resize: none" rows="5" name="product_content" class="form-control" id="exampleInputPassword1" >{{$edit_value->product_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục sản phẩm</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key => $cate)
                                    @if($cate->category_id==$edit_value->category_id) 
                                        <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @else  
                                    <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endif
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiển thị</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                @if($edit_value->product_status==1)
                                    <option selcected value="1">Ẩn</option>
                                    <option value="0">Hiển thị</option>
                                @else
                                      <option value="0">Hiển thị</option>
                                    <option value="1">Ẩn</option>
                                   
                                @endif
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Cập nhật</button>
                    </form>
                    @endforeach
                </div>

            </div>
        </section>

    </div>


    @endsection