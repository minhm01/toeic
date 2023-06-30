<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class User extends Controller
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
    public function all_user(){
        $this->AuthAdmin();
        $all_user=DB::table('nguoidung')->get();
        $user=view('admin.user.all_user')->with('all_user',$all_user);
        return view('admin_layout')->with('admin.user.all_user',$user);
    }
    public function edit_user($user_id){
        $this->AuthAdmin();
        $edit_user=DB::table('nguoidung')->where('id_nguoidung',$user_id)->get();        
        $user=view('admin.user.edit_user')->with('edit_user',$edit_user);
        return view('admin_layout')->with('admin.user.edit_user',$user);
    }
    public function upd_user(Request $request){
        $this->AuthAdmin();
        $data = array();        
        $data['ten']=$request->ten;
        $data['hocvan']=$request->hocvan;
        $data['sdt']=$request->sdt;
        $data['ngaysinh']=$request->ngaysinh;
        $data['vaitro']=$request->vaitro;
        DB::table('nguoidung')->where('id_nguoidung',$request->id_nguoidung)->update($data);        
        Session::put('message', 'Đã sửa thông tin');
        return Redirect::to('quanly/all-user');        
    }
    public function del_user($user_id){
        $this->AuthAdmin();
        DB::table('nguoidung')->where('id_nguoidung',$user_id)->delete();
        Session::put('message', 'Đã xóa tài khoản');
        return Redirect::to('quanly/all-user');
    }
    public function accountpage(){
        $this->AuthLogin();
        $id=Session::get('user_id');
        $user=DB::table('nguoidung')->where('id_nguoidung',$id)->get();
        $u=view('pages.canhan')->with('user',$user);
        return view('welcome')->with('pages.canhan',$u);
    }
    public function test_hst(){
        $this->AuthLogin();
        $id=Session::get('user_id');
        $user=DB::table('nguoidung')->where('id_nguoidung',$id)->get();
        $hst=DB::table('baithi')->join('dethi','baithi.id_dethi','=','dethi.id_dethi')
        ->where('id_hocvien',$id)->orderBy('id_baithi','DESC')->get();
        $h=view('pages.lichsu_baithi')->with('history',$hst)->with('user',$user);
        return view('welcome')->with('pages.lichsu_baithi',$h);
    }
    public function setting($id){
        $this->AuthLogin();
        $user=DB::table('nguoidung')->where('id_nguoidung',$id)->get();
        $u=view('pages.canhan-setting')->with('user',$user);
        return view('welcome')->with('pages.canhan-setting',$u);
    }
    public function save_user_setting(Request $request, $id){
        $this->AuthLogin();
        $data = array();        
        $data['ten']=$request->ten;
        $data['hocvan']=$request->hocvan;
        $data['sdt']=$request->sdt;
        $data['ngaysinh']=$request->ngaysinh;
        DB::table('nguoidung')->where('id_nguoidung',$id)->update($data);
        $hinhanh=$request->avatar;
        if($hinhanh){
            $qt_hinhanh=$hinhanh->getClientOriginalName();
            if(file_exists("public/images/user_img/$qt_hinhanh")) unlink("public/images/user_img/$qt_hinhanh");
            $hinhanh->move('public/images/user_img',$qt_hinhanh);
            DB::table('nguoidung')->where('id_nguoidung',$id)->update(['avatar' => $qt_hinhanh]);
        }
        Session::put('message', 'Đã cập nhật thông tin');
        return back();
    }
}
