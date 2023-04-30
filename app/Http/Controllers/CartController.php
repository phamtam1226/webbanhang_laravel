<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;


session_start();

class CartController extends Controller
{
  public function save_cart(Request $request)
  {
    $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();

    $productId = $request->productid_hidden;
    $quantity = $request->qty;
    $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();
    //Cart::add('293ad', 'Product 1', 1, 9.99);
    //Cart::destroy();

    $data['id'] = $product_info->product_id;
    $data['qty'] = $quantity;
    $data['name'] = $product_info->product_name;
    $data['price'] = $product_info->product_price;
    $data['options']['image'] = $product_info->product_image;
    Cart::add($data);
    Cart::setGlobalTax(5);
    //Cart::destroy();
    return Redirect::to('/cart');
    //  $data = DB::table('tbl_product')->where('product_id',$productId)->get();

  }
  public function cart()
  {
    $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
    return view('Frontend.pages.cart')->with('category', $cate_product);
  }
  public function delete_cart($rowId)
  {

    Cart::update($rowId, 0);
    return Redirect::to('/cart');
  }
  public function delete_all_cart()
  {
    Cart::destroy();
    return Redirect::to('/cart');
  }
  public function update_cart(Request $request,$rowId)
  {
    $quantity = $request->qty;
    Cart::update($rowId, $quantity);
    return Redirect::to('/cart');
  }
}
