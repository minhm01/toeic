<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();
class AccountController extends Controller
{
    public function AuthAdmin(){
        $role=Session::get('role');
        if($role!="quanly"){
            Redirect::to('/')->send();
        }
    }
    public function AuthLogin(){
        $role=Session::get('role');
        if(!$role){
            Redirect::to('/')->send();
        }
    }
    public function login(Request $request){
        $username = $request->username;
        $pass = md5($request->password);
        $login = DB::table('nguoidung')->where('username',$username)->where('password',$pass)->first();
        if($login)
        {
            $user = DB::table('nguoidung')->where('id_nguoidung',$login->id_nguoidung)->first();
            $role=$user->vaitro;
            Session::put('user',$user->ten);
            Session::put('role',$role);
            Session::put('avatar',$user->avatar);
            Session::put('user_id',$user->id_nguoidung);
            if($role=='quanly'){
                return Redirect::to('quanly');
            }else{
                return Redirect::to('/');
            }
        }        
        else {
            Session::put('message','Đăng nhập thất bại');
            return Redirect::to('/');
        }
    }
    public function register(Request $request){
        $username = $request->username;        
        $check = DB::table('nguoidung')->where('username',$username)->first();
        if($check){
            Session::put('message','Tài khoản đã tồn tại');
            return Redirect::to('/');
        }
        else{
            $data['password'] = md5($request->password);
            $data['username'] = $username;
            $data['ten'] = $request->ten;
            $data['hocvan'] = $request->hocvan;
            $data['ngaysinh'] = $request->ngaysinh;
            $data['sdt'] = $request->sdt;
            DB::table('nguoidung')->insert($data);
            Session::put('message','Đăng ký thành công');
            return Redirect::to('/');
        }
    }
    public function index(){
        $this->AuthAdmin();
        return view('admin.dashboard');
   
    }
    public function show_dashboard(){
        $this->AuthAdmin();
        return view('admin.dashboard');
    }
    
    public function logout(){        
        Session::put('user',null);
        Session::put('role',null);
        Session::put('user_id',null);
        return Redirect::to('/');
    }
    public function change_pw(){
        $this->AuthAdmin();
        return view('admin.change_pw');
    }
    public function save_pw(Request $request){
        $this->AuthLogin();
        $user=Session::get('user_id');        
        $old=md5($request->old);
        if($user){
            $check=DB::table('nguoidung')->where('id_nguoidung',$user)->pluck('password')->first();
            if($old==$check) {
                $new=md5($request->new);
                DB::table('nguoidung')->where('id_nguoidung',$user)->update(['password' => $new]);
                Session::put('message','Đã đổi mật khẩu');
                return back();
            }
            else{
                Session::put('message','Sai mật khẩu');
                return back();
            }
        }        
    }
}

