<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class Exam extends Controller
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
    public function add_exam(){
        $this->AuthAdmin();
        return view('admin.exam.add_exam');
    }
    public function all_exam(){
        $this->AuthAdmin();
        $all_exam=DB::table('dethi')->get();
        $exam=view('admin.exam.all_exam')->with('all_exam',$all_exam);
        return view('admin_layout')->with('admin.exam.all_exam',$exam);
    }
    public function save_exam(Request $request){
        $this->AuthAdmin();
        $data = array();
        $data['tendethi']=$request->tendethi;
        $data['mota']=$request->mota;
        $data['trinhdo']=$request->trinhdo;
        $data['kynang']=$request->kynang;
        $data['thoigian']=$request->thoigian;
        $data['de']=$request->de;
        $data['trungbinh']=$request->tb;
        $data['kho']=$request->kho;
        DB::table('dethi')->insert($data);
        Session::put('message', 'Đã thêm đề thi');
        return Redirect::to('quanly/add-exam');
    }
    public function edit_exam($exam_id){
        $this->AuthAdmin();
        $edit_exam=DB::table('dethi')->where('id_dethi',$exam_id)->get();
        $cauhoi=DB::table('cauhoi')->join('cauhoi_dethi', 'cauhoi_dethi.id_cauhoi', '=', 'cauhoi.id_cauhoi')->where('id_dethi',$exam_id)->get();
        $exam=view('admin.exam.edit_exam')->with('edit_exam',$edit_exam)->with('cauhoi',$cauhoi);
        return view('admin_layout')->with('admin.exam.edit_exam',$exam);
    }
    public function upd_exam(Request $request,$exam_id){
        $this->AuthAdmin();
        $data = array();        
        $data['tendethi']=$request->tendethi;
        $data['mota']=$request->mota;
        $data['trinhdo']=$request->trinhdo;
        $data['kynang']=$request->kynang;
        $data['thoigian']=$request->thoigian;
        $data['de']=$request->de;
        $data['trungbinh']=$request->tb;
        $data['kho']=$request->kho;
        $data['hienthi']=$request->hienthi;
        DB::table('dethi')->where('id_dethi',$exam_id)->update($data);
        Session::put('message', 'Đã sửa đề thi');
        return Redirect::to('quanly/all-exam');
    }
    public function del_exam($id){
        $this->AuthAdmin();
        DB::table('dethi')->where('id_dethi',$id)->delete();
        Session::put('message', 'Đã xóa đề thi');
        return Redirect::to('quanly/all-exam');
    }
    public function qt_exam($id){
        $this->AuthAdmin();
        $exam=DB::table('dethi')->where('id_dethi',$id)->first();
        $all_qt=DB::table('cauhoi')->where('kynang',$exam->kynang)->get();
        $qt=view('admin.exam.add_qt')->with('all_qt',$all_qt)->with('exam',$exam);
        return view('admin_layout')->with('admin.exam.add_qt',$qt);
    }
    public function random_qt($id){
        $this->AuthAdmin();
        $exam=DB::table('dethi')->where('id_dethi',$id)->first();
        DB::table('cauhoi_dethi')->where('id_dethi',$id)->delete();
        $data['id_dethi']=$id;
        $cauhoi=DB::table('cauhoi')->where('kynang',$exam->kynang)->where('trinhdo',$exam->trinhdo)->inRandomOrder()->get();
        $de=$cauhoi->where('dokho','dễ')->take($exam->de);
        $tb=$cauhoi->where('dokho','trung bình')->take($exam->trungbinh);
        $kho=$cauhoi->where('dokho','khó')->take($exam->kho);
        foreach($de as $qt_de){
            $data['id_cauhoi']=$qt_de->id_cauhoi;
            DB::table('cauhoi_dethi')->insert($data);
        }
        foreach($tb as $qt_tb){
            $data['id_cauhoi']=$qt_tb->id_cauhoi;
            DB::table('cauhoi_dethi')->insert($data);
        }        
        foreach($kho as $qt_kho){
            $data['id_cauhoi']=$qt_kho->id_cauhoi;
            DB::table('cauhoi_dethi')->insert($data);
        }
        Session::put('message', 'Đã thêm câu hỏi');
        DB::table('dethi')->where('id_dethi',$id)->update(['hienthi' => 1]);
        return Redirect::to('quanly/all-exam');
    }
    public function add_qt_exam(Request $request,$id){
        $this->AuthAdmin();
        $data['id_dethi']=$id;
        DB::table('cauhoi_dethi')->where('id_dethi',$id)->delete();
        $n=DB::table('dethi')->where('id_dethi',$id)->first();
        $num=$n->de+$n->trungbinh+$n->kho;
        if(count($request->qt)!=$num){
            Session::put('message', 'Chọn đủ '.$num.' câu hỏi');
            return back();
        }
        else{
            foreach($request->qt as $qt){
                $data['id_cauhoi']=$qt;
                DB::table('cauhoi_dethi')->insert($data);
            }
            Session::put('message', 'Đã cập nhật danh sách câu hỏi');
            DB::table('dethi')->where('id_dethi',$id)->update(['hienthi' => 1]);
            return Redirect::to('quanly/all-exam');
        }        
    }
    public function upd_qt_exam($id){
        $this->AuthAdmin();
        $exam=DB::table('dethi')->where('id_dethi',$id)->first();
        $exam_qt=DB::table('cauhoi_dethi')->where('id_dethi',$id)->get();
        //$list=json_decode(json_encode($exam_qt->id_cauhoi),true);
        $list=[];
        foreach($exam_qt as $qtqt){
            $list[]=$qtqt->id_cauhoi;
        }
        $all_qt=DB::table('cauhoi')->where('kynang',$exam->kynang)->get();
        $qt=view('admin.exam.edit_qt')->with('all_qt',$all_qt)->with('exam',$exam)->with('old_qt',$list);
        return view('admin_layout')->with('admin.exam.edit_qt',$qt);
    }
    public function list_exam(){
        $exam=DB::table('dethi')->where('hienthi',1)->get();
        $list=view('pages.danhsach-dethi')->with('exam',$exam);
        return view('welcome')->with('pages.danhsach-dethi',$list);
    }
    public function info_exam($id){
        $exam=DB::table('dethi')->where('id_dethi',$id)->get();
        $tl=DB::table('cauhoi_dethi')->join('cauhoi','cauhoi.id_cauhoi','=','cauhoi_dethi.id_cauhoi')->where('id_dethi',$id)->get();
        $u=Session::get('user_id');
        $user=DB::table('nguoidung')->where('id_nguoidung',$u)->first();
        if($u){
            foreach($exam as $e){
                if($user->hocvan!=$e->trinhdo){
                    Session::put('message','Đề thi này không dành cho trình độ của bạn');
                }
            }
        }
        $info=view('pages.dethi')->with('exam',$exam)->with('tra_loi',$tl)->with('user',$user);        
        return view('welcome')->with('pages.dethi',$info);
    }
    public function do_exam(Request $request, $id){
        //$list_cauhoi=DB::table('cauhoi')->join('cauhoi_dethi','cauhoi.id_cauhoi','=','cauhoi_dethi.id_cauhoi')->where('id_dethi',$id)->get();
        $dethi=DB::table('dethi')->where('id_dethi',$id)->first();
        $cauhoi=DB::table('cauhoi')->where('kynang',$dethi->kynang)->where('trinhdo',$dethi->trinhdo)->inRandomOrder()->get();
        $de=$cauhoi->where('dokho','dễ')->take($dethi->de);
        $tb=$cauhoi->where('dokho','trung bình')->take($dethi->trungbinh);
        $kho=$cauhoi->where('dokho','khó')->take($dethi->kho);
        $list_cauhoi=$de->merge($kho)->merge($tb);        
        $thoigian=$request->time_limit;
        $exam=view('pages.lambai')->with('cau_hoi',$list_cauhoi)->with('dethi',$dethi)->with('thoigian',$thoigian);
        return view('welcome')->with('pages.lambai',$exam);
    }
    public function submit_exam(Request $request){
        $cauhoi[]=$request->input('question');
        $dung=0;$sai=0;$chua=0;
        foreach($cauhoi as &$cau){
            foreach($cau as &$ch){
                $da=DB::table('cauhoi')->where('id_cauhoi',$ch['id'])->value('da_dung');
                if(isset($ch['traloi'])){
                    if($ch['traloi']==$da){
                        $ch['ds']='Đúng';$dung++;
                    }else{
                        $ch['ds']='Sai';$sai++;
                    }
                }else{
                    $ch['ds']='Chưa trả lời';$chua++;
                }
            }
        }
        $ketqua['id_hocvien']=$request->id_nguoidung;
        $ketqua['id_dethi']=$request->id_dethi;
        $ketqua['traloi']=json_encode($cau);
        $ketqua['diemso']=$dung;
        $ketqua['diemtong']=count($cau);
        $ketqua['sai']=$sai;
        $ketqua['chua']=$chua;
        $ketqua['thoigianlam']=$request->thoigian;
        DB::table('baithi')->insert($ketqua);
        $dethi=DB::table('dethi')->where('id_dethi',$request->id_dethi)->get();
        $kq=view('pages.ketqua')->with('ketqua',$ketqua)->with('dethi',$dethi)->with('tra_loi',$cau);
        return view('welcome')->with('pages.ketqua',$kq);
    }
    public function test_result($id){
        $baithi=DB::table('baithi')->where('id_baithi',$id)->first();
        $ketqua=json_decode(json_encode($baithi), true);
        $dethi=DB::table('dethi')->where('id_dethi',$ketqua['id_dethi'])->get();
        $cau=json_decode($ketqua['traloi'],true);
        $kq=view('pages.ketqua')->with('ketqua',$ketqua)->with('dethi',$dethi)->with('tra_loi',$cau);
        return view('welcome')->with('pages.ketqua',$kq);
    }
}