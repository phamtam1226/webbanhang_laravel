<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
session_start();

class FrontendController extends Controller
{
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        return view('Frontend.index')->with('category',$cate_product);
    }
    public function cart()
    {
        return view('Frontend.pages.cart');
    }

    public function single()
    {
        return view('Frontend.pages.single');
    }
}
