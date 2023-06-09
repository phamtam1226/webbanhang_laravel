<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
session_start();

class CheckoutController extends Controller
{
    public function login_checkout()
  {
    $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    return view('Frontend.pages.login_checkout')->with('category',$cate_product); 
  }
  public function  add_customer(Request $request)
  {
    $data=array();
    $data['customer_name'] = $request->customer_name;
    $data['customer_email'] = $request->customer_email;
    $data['customer_password'] = $request->customer_password;
    $data['customer_phone'] = $request->customer_phone;

    $customer_id = DB::table('tbl_customers')->insertGetId($data);

    Session::put('customer_id',$customer_id);
    Session::put('customer_name',$request->customer_name);

    return Redirect('/checkout');
  }
  public function checkout()
  {
    $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    return view('Frontend.pages.checkout')->with('category',$cate_product); 
  }
  public function  save_checkout(Request $request)
  {
    $data=array();
    $data['shipping_name'] = $request->shipping_name;
    $data['shipping_email'] = $request->shipping_email;
    $data['shipping_address'] = $request->shipping_address;
    $data['shipping_phone'] = $request->shipping_phone;

    $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

    Session::put('shipping_id',$shipping_id);
    return Redirect('/payment');
  }
  public function payment()
  {
    $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    return view('Frontend.pages.checkout')->with('category',$cate_product); 
  }

 
}
