<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class Question extends Controller
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
    public function add_qt(){
        $this->AuthAdmin();
        return view('admin.question.add_qt');
    }
    public function all_qt(){
        $this->AuthAdmin();
        $all_qt=DB::table('cauhoi')->get();
        $qt=view('admin.question.all_qt')->with('all_qt',$all_qt);
        return view('admin_layout')->with('admin.question.all_qt',$qt);
    }
    public function save_qt(Request $request){
        $this->AuthAdmin();
        $data = array();
        $data['noidung']=$request->noidung;        
        $data['da_a']=$request->da_a;
        $data['da_b']=$request->da_b;
        $data['da_c']=$request->da_c;
        $data['da_d']=$request->da_d;
        $data['kynang']=$request->kynang;
        $data['dokho']=$request->dokho;
        switch($request->da_dung){
            case "A":
                $data['da_dung']=$request->da_a;break;
            case "B":
                $data['da_dung']=$request->da_b;break;
            case "C":
                $data['da_dung']=$request->da_c;break;
            default:
                $data['da_dung']=$request->da_d;
        }
        $id=DB::table('cauhoi')->insertgetid($data);
        $hinhanh=$request->file('hinhanh');
        if($hinhanh){
            $qt_hinhanh=$id.'_img_'.time().'.'.$hinhanh->getClientOriginalExtension();
            $hinhanh->move('public/images/question_img',$qt_hinhanh);
            DB::table('cauhoi')->where('id_cauhoi',$id)->update(['hinhanh' => $qt_hinhanh]);
        }
        $amthanh=$request->file('amthanh');
        if($amthanh){
            $qt_amthanh=$id.'_audio_'.time().'.'.$amthanh->getClientOriginalExtension();
            $amthanh->move('public/audio/question_audio',$qt_amthanh);
            DB::table('cauhoi')->where('id_cauhoi',$id)->update(['amthanh' => $qt_amthanh]);
        }
        Session::put('message', 'Đã thêm câu hỏi');
        return Redirect::to('quanly/add-qt');
    }
    public function edit_qt($qt_id){
        $this->AuthAdmin();
        $edit_qt=DB::table('cauhoi')->where('id_cauhoi',$qt_id)->get();
        $qt=view('admin.question.edit_qt')->with('edit_qt',$edit_qt);
        return view('admin_layout')->with('admin.question.edit_qt',$qt);
    }
    public function upd_qt(Request $request,$id){
        $this->AuthAdmin();
        $data = array();
        $data['id_cauhoi']=$id;
        $data['noidung']=$request->noidung;        
        $data['da_a']=$request->da_a;
        $data['da_b']=$request->da_b;
        $data['da_c']=$request->da_c;
        $data['da_d']=$request->da_d;
        $data['trinhdo']=$request->trinhdo;
        $data['kynang']=$request->kynang;
        $data['dokho']=$request->dokho;
        switch($request->da_dung){
            case "A":
                $data['da_dung']=$request->da_a;break;
            case "B":
                $data['da_dung']=$request->da_b;break;
            case "C":
                $data['da_dung']=$request->da_c;break;
            default:
                $data['da_dung']=$request->da_d;
        }
        DB::table('cauhoi')->where('id_cauhoi',$id)->update($data);
        $hinhanh=$request->file('hinhanh');
        if($hinhanh){
            $qt_hinhanh=$id.'_img_'.time().'.'.$hinhanh->getClientOriginalExtension();
            $hinhanh->move('public/images/question_img',$qt_hinhanh);
            DB::table('cauhoi')->where('id_cauhoi',$id)->update(['hinhanh' => $qt_hinhanh]);
        }
        $amthanh=$request->file('amthanh');
        if($amthanh){
            $qt_amthanh=$id.'_audio_'.time().'.'.$amthanh->getClientOriginalExtension();
            $amthanh->move('public/audio/question_audio',$qt_amthanh);
            DB::table('cauhoi')->where('id_cauhoi',$id)->update(['amthanh' => $qt_amthanh]);
        }
        Session::put('message', 'Đã sửa câu hỏi');
        return Redirect::to('quanly/all-qt');
    }
    public function del_qt($qt){
        $this->AuthAdmin();
        DB::table('cauhoi')->where('id_cauhoi',$qt)->delete();        
        Session::put('message', 'Đã xóa câu hỏi');
        return Redirect::to('quanly/all-qt');
    }
}
