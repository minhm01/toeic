@extends('admin_layout')
@section('admin_content')
<style>
    .my-custom-scrollbar {
        position: relative;
        height: 600px;
        overflow: auto;
    }
    .table-wrapper-scroll-y {
        display: block;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Chỉnh sửa đề thi
            </header>
            <div class="panel-body">
                <?php
                $msg=Session::get('message');
                if($msg)	{
                    ?>
                <div class="alert alert-danger" role="alert" data-dismiss="alert">
                    {{$msg}}
                </div>
                    <?php
                    Session::put('message',null);
                }
                ?>
                @foreach($edit_exam as $key => $edit)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/quanly/upd-exam/'.$edit->id_dethi)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="tendethi">Tên đề thi </label>
                            <input type="text" class="form-control" name="tendethi" value="{{$edit->tendethi}}" placeholder="Tên đề thi" required>
                        </div>
                        <div class="form-group">
                            <label for="mota">Mô tả </label>
                            <textarea class="form-control" name="mota" placeholder="Mô tả" required>{{$edit->mota}}</textarea>                        
                        </div>
                        <div class="form-group">
                            <label for="kynang">Kỹ năng </label>
                            <select multiple class="form-control" name="kynang" required>
                                <option <?php if($edit->kynang=='vocabulary') echo 'selected'?> value="vocabulary">Vocabulary</option>
                                <option <?php if($edit->kynang=='grammar') echo 'selected'?> value="grammar">Grammar</option>
                                <option <?php if($edit->kynang=='reading') echo 'selected'?> value="reading">Reading</option>
                                <option <?php if($edit->kynang=='listening') echo 'selected'?> value="listening">Listening</option>                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="trinhdo">Trình độ </label>
                            <select multiple="" class="form-control" name="trinhdo" required>
                                <option <?php if($edit->trinhdo=='Tiểu học') echo 'selected'?> value="Tiểu học">Tiểu học</option>
                                <option <?php if($edit->trinhdo=='THCS') echo 'selected'?> value="THCS">TH Cơ sở</option>
                                <option <?php if($edit->trinhdo=='THPT') echo 'selected'?> value="THPT">TH Phổ thông</option>
                                <option <?php if($edit->trinhdo=='Đại học') echo 'selected'?> value="Đại học" >Đại học</option>
                                <option <?php if($edit->trinhdo=='Đi làm') echo 'selected'?> value="Đi làm">Đi làm</option>
                            </select>
                        </div>
                        <label for="socauhoi">Số câu hỏi </label>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                Dễ: <input type="number" class="form-control" name="de" value="{{$edit->de}}" placeholder="Dễ" min="0">
                            </div>
                            <div class="col-md-4 form-group">
                                Trung bình: <input type="number" class="form-control" name="tb" value="{{$edit->trungbinh}}" placeholder="Trung bình" min="0">
                            </div>
                            <div class="col-md-4 form-group">
                                Khó: <input type="number" class="form-control" name="kho" value="{{$edit->kho}}" placeholder="Khó" min="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thoigian">Thời gian </label>
                            <input type="number" class="form-control" name="thoigian" value="{{$edit->thoigian}}" placeholder="Số câu hỏi" min="1" required> phút
                        </div>
                        <div class="form-group">
                            <label for="hienthi">Hiển thị  </label>
                            <select class="form-select" aria-label="Default select example" name="hienthi">                                
                                <option value="1" <?php if($edit->hienthi==1) echo 'selected'?>>Hiển thị</option>
                                <option value="0" <?php if($edit->hienthi==0) echo 'selected'?>>Ẩn</option>                                
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="qt-list">Danh sách câu hỏi </label><br>
                            <a href="{{URL::to('quanly/upd-qt-exam/'.$edit->id_dethi)}}">Chỉnh sửa danh sách câu hỏi</a>
                        <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-striped b-t b-light">
                              <thead>
                                <tr>
                                  <th style="width:30px;"></th>
                                  <th colspan="2">Nội dung</th>            
                                  <th>Đáp án A</th>
                                  <th>Đáp án B</th>
                                  <th>Đáp án C</th>
                                  <th>Đáp án D</th>
                                  <th>Đáp án đúng</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($cauhoi as $key => $qt)
                                <tr>                                  
                                  <td>{{$qt->id_cauhoi}}</td>
                                  <?php if($qt->hinhanh||$qt->amthanh) {echo '<td>';} else {echo '<td colspan="2">';} ?>
                                    {{$qt->noidung}}<?php if($qt->hinhanh) {?></td><td>
                                    <img src="{{('../../public/images/question_img/'.$qt->hinhanh)}}" width="300px" height="300px">
                                    <?php }; if($qt->amthanh) {?>
                                      <audio controls><source src="{{('../../public/audio/question_audio/'.$qt->amthanh)}}"><?php } ?></td>
                                  <td>{{$qt->da_a}}</td>
                                  <td>{{$qt->da_b}}</td>
                                  <td>{{$qt->da_c}}</td>
                                  <td>{{$qt->da_d}}</td>
                                  <td>{{$qt->da_dung}}</td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>                            
                          </div>
                    <button type="submit" name="edit_Exam" class="btn btn-info">Cập nhật</button>
                </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
