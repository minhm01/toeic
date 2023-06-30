<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $u=Session::get('user_id');
    if(isset($u)){
        $user=DB::table('nguoidung')->where('id_nguoidung',Session::get('user_id'))->first();
        $dethi=DB::table('dethi')->where('hienthi',1)->where('trinhdo',$user->hocvan)->orderBy('created_at','DESC')->limit(4)->get();
    }else{
        $dethi=DB::table('dethi')->where('hienthi',1)->orderBy('created_at','DESC')->limit(4)->get();
    }
    $doc=DB::table('tailieu')->orderBy('created_at','DESC')->limit(3)->get();    
    return view('pages.home')->with('dethi',$dethi)->with('doc',$doc);
});
//Frontend
//Lambaithi
Route::get('/dethi/{id}', 'Exam@info_exam');
Route::get('/dethi', 'Exam@list_exam');
Route::get('/danhsach-dethi', 'Exam@list_exam');
Route::get('/dethi/{id}/lambai', 'Exam@do_exam');
Route::post('/nopbai', 'Exam@submit_exam');
Route::get('/ketqua/{id}', 'Exam@test_result');
//Trangcanhan
Route::get('/trangcanhan', 'User@accountpage');
Route::get('/trangcanhan/{id}/setting', 'User@setting');
Route::get('/trangcanhan/baithi', 'User@test_hst');
Route::post('/save-user-setting/{id}', 'User@save_user_setting');
//Tailieu
Route::get('/tailieu/{id}', 'Document@info_doc');
Route::get('/tailieu', 'Document@list_doc');

//Backend
Route::post('/login', 'AccountController@login');
Route::get('/logout', 'AccountController@logout');
Route::post('/register', 'AccountController@register');
Route::get('/quanly', 'AccountController@index');
Route::get('/dashboard', 'AccountController@show_dashboard');
Route::get('/change-password', 'AccountController@change_pw');
Route::post('/save-password', 'AccountController@save_pw');

//User
Route::get('/quanly/all-user', 'User@all_user');
Route::get('/quanly/edit-user/{user_id}', 'User@edit_user');
Route::post('/quanly/upd-user/{user_id}', 'User@upd_user');
Route::get('/quanly/del-user/{user_id}', 'User@del_user');

//Exam
Route::get('/quanly/add-exam', 'Exam@add_exam');
Route::get('/quanly/all-exam', 'Exam@all_exam');
Route::post('/quanly/save-exam', 'Exam@save_exam');
Route::get('/quanly/edit-exam/{id}', 'Exam@edit_exam');
Route::post('/quanly/upd-exam/{id}', 'Exam@upd_exam');
Route::get('/quanly/del-exam/{id}', 'Exam@del_exam');
Route::get('/quanly/qt-exam/{id}', 'Exam@qt_exam');
Route::get('/quanly/random-qt/{id}', 'Exam@random_qt');
Route::post('/quanly/add-qt-exam/{id}', 'Exam@add_qt_exam');
Route::get('/quanly/upd-qt-exam/{id}', 'Exam@upd_qt_exam');

//Question
Route::get('/quanly/add-qt', 'Question@add_qt');
Route::get('/quanly/all-qt', 'Question@all_qt');
Route::post('/quanly/save-qt', 'Question@save_qt');
Route::get('/quanly/edit-qt/{id}', 'Question@edit_qt');
Route::post('/quanly/upd-qt/{id}', 'Question@upd_qt');
Route::get('/quanly/del-qt/{id}', 'Question@del_qt');

//Document
Route::get('/quanly/add-doc', 'Document@add_doc');
Route::get('/quanly/all-doc', 'Document@all_doc');
Route::post('/quanly/save-doc', 'Document@save_doc');
Route::get('/quanly/edit-doc/{id}', 'Document@edit_doc');
Route::post('/quanly/upd-doc/{id}', 'Document@upd_doc');
Route::get('/quanly/del-doc/{id}', 'Document@del_doc');

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');