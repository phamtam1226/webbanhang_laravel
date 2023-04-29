<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
session_start();

class BackendController extends Controller
{
    public function index(){
        return view('Backend.pages.admin_login');
    }
    public function show_dashboard(){
       
        return view('Backend.admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email= $request->admin_email;
        $admin_password= md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','Mật khẩu hoặc tài khoản bị sai');
            return Redirect::to('/admin');
        }

        return view('Backend.admin.dashboard');

    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}

