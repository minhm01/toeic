<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class Document extends Controller
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
    public function add_doc(){
        $this->AuthAdmin();
        return view('admin.document.add_doc');
    }
    public function all_doc(){
        $this->AuthAdmin();
        $all_doc=DB::table('tailieu')->get();
        $doc=view('admin.document.all_doc')->with('all_doc',$all_doc);
        return view('admin_layout')->with('admin.document.all_doc',$doc);
    }
    public function save_doc(Request $request){
        $this->AuthAdmin();
        $data = array();
        $data['tentailieu']=$request->tentailieu;
        $data['tomtat']=$request->tomtat;
        $data['noidung']=$request->noidung;
        $data['id_giaovien']=Session::get('user_id');
        $id=DB::table('tailieu')->insertgetid($data);
        $hinhanh=$request->file('hinhanh');
        if($hinhanh){
            $qt_hinhanh=$id.'_img_'.time().'.'.$hinhanh->getClientOriginalExtension();
            $hinhanh->move('public/images/document_img',$qt_hinhanh);
            DB::table('tailieu')->where('id_tailieu',$id)->update(['hinhminhhoa' => $qt_hinhanh]);
        }
        $file=$request->file('filedinhkem');
        if($file){
            $dinhkem=$id.'_'.pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).'_'.time().'.'.$file->getClientOriginalExtension();
            $file->move('public/document/',$dinhkem);
            DB::table('tailieu')->where('id_tailieu',$id)->update(['filedinhkem' => $dinhkem]);
        }        
        Session::put('message', 'Đã thêm tài liệu');
        return Redirect::to('quanly/add-doc');
    }
    public function edit_doc($id){
        $this->AuthAdmin();
        $edit_doc=DB::table('tailieu')->where('id_tailieu',$id)->get();
        $doc=view('admin.document.edit_doc')->with('edit_doc',$edit_doc);
        return view('admin_layout')->with('admin.document.edit_doc',$doc);
    }
    public function upd_doc(Request $request,$id){
        $this->AuthAdmin();
        $data = array();
        $data['tentailieu']=$request->tentailieu;
        $data['tomtat']=$request->tomtat;
        $data['noidung']=$request->noidung;
        DB::table('tailieu')->where('id_tailieu',$id)->update($data);
        $hinhanh=$request->file('hinhanh');
        if($hinhanh){
            $qt_hinhanh=$id.'_img_'.time().'.'.$hinhanh->getClientOriginalExtension();
            $hinhanh->move('public/images/document_img',$qt_hinhanh);
            DB::table('tailieu')->where('id_tailieu',$id)->update(['hinhminhhoa' => $qt_hinhanh]);
        }        
        Session::put('message', 'Đã sửa tài liệu');
        return Redirect::to('quanly/all-doc');
    }
    public function del_doc($doc){
        $this->AuthAdmin();
        DB::table('tailieu')->where('id_tailieu',$doc)->delete();        
        Session::put('message', 'Đã xóa tài liệu');
        return Redirect::to('quanly/all-doc');
    }
    public function list_doc(){
        $doc=DB::table('tailieu')->get();
        $list=view('pages.danhsach-tailieu')->with('doc',$doc);
        return view('welcome')->with('pages.danhsach-tailieu',$list);
    }
    public function info_doc($id){
        $doc=DB::table('tailieu')->join('nguoidung','nguoidung.id_nguoidung','=','tailieu.id_giaovien')
        ->where('id_tailieu',$id)->select('tailieu.*','nguoidung.ten')->get();
        $info=view('pages.tailieu')->with('doc',$doc);
        return view('welcome')->with('pages.tailieu',$info);
    }
}
