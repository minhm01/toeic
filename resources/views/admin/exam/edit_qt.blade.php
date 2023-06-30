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
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      cập nhật danh sách câu hỏi
    </div>
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
    <form role="form" action="{{URL::to('/quanly/add-qt-exam/'.$exam->id_dethi)}}" method="post">
      {{csrf_field()}}
    <div class="row">      
        <div class="col-sm-8"><h3>Đề thi: {{$exam->tendethi}}</h3>
          Mô tả: {{$exam->mota}}
          <br> Kỹ năng: {{$exam->kynang}}
          <br> Trình độ: {{$exam->trinhdo}}
        </div>
        <div class="col-sm-4">Số câu hỏi: {{$exam->de}} dễ | {{$exam->trungbinh}} trung bình | {{$exam->kho}} khó<br>
          <a href="{{URL::to('quanly/random-qt/'.$exam->id_dethi)}}" onclick="return confirm('Chọn ngẫu nhiên từ danh sách?')">Chọn ngẫu nhiên</a><br>
          <button type="submit" name="edit_Exam" class="btn btn-info">Thêm câu hỏi</button>
        </div>      
    </div>
    <header class="panel-heading">câu hỏi dễ {{$exam->de}} câu</header>
    <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">      
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th style="width:30px;"></th>
            <th colspan="2">Nội dung</th> 
            <th>Kỹ năng</th>           
            <th>Đáp án A</th>
            <th>Đáp án B</th>
            <th>Đáp án C</th>
            <th>Đáp án D</th>
            <th>Đáp án đúng</th>
            <th>Độ khó</th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_qt as $key => $qt)
        <?php if($qt->dokho=='dễ') {?>
          <tr>
            <td><label class="i-checks m-b-none"><input <?php if(in_array($qt->id_cauhoi,$old_qt)) {echo 'checked';}?> type="checkbox" name="qt[]" value='{{$qt->id_cauhoi}}'><i></i></label></td>
            <td>{{$qt->id_cauhoi}}</td>
            <?php if($qt->hinhanh||$qt->amthanh) {echo '<td>';} else {echo '<td colspan="2">';} ?>
              {{$qt->noidung}}<?php if($qt->hinhanh) {?></td><td>
              <img src="{{('../../public/images/question_img/'.$qt->hinhanh)}}" width="300px" height="300px">
              <?php }; if($qt->amthanh) {?>
                <audio controls><source src="{{('../../public/audio/question_audio/'.$qt->amthanh)}}"><?php } ?></td>
            <td>{{$qt->kynang}}</td>
            <td>{{$qt->da_a}}</td>
            <td>{{$qt->da_b}}</td>
            <td>{{$qt->da_c}}</td>
            <td>{{$qt->da_d}}</td>
            <td>{{$qt->da_dung}}</td>
            <td>{{$qt->dokho}}</td>
          </tr>
          <?php } ?>
        @endforeach
        </tbody>
      </table>
    </div>
    <header class="panel-heading">câu hỏi trung bình {{$exam->trungbinh}} câu</header>
    <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">      
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th style="width:30px;"></th>
            <th colspan="2">Nội dung</th> 
            <th>Kỹ năng</th>           
            <th>Đáp án A</th>
            <th>Đáp án B</th>
            <th>Đáp án C</th>
            <th>Đáp án D</th>
            <th>Đáp án đúng</th>
            <th>Độ khó</th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_qt as $key => $qt)
        <?php if($qt->dokho=='trung bình') {?>
          <tr>
            <td><label class="i-checks m-b-none"><input <?php if(in_array($qt->id_cauhoi,$old_qt)) {echo 'checked';}?> type="checkbox" name="qt[]" value='{{$qt->id_cauhoi}}'><i></i></label></td>
            <td>{{$qt->id_cauhoi}}</td>
            <?php if($qt->hinhanh||$qt->amthanh) {echo '<td>';} else {echo '<td colspan="2">';} ?>
              {{$qt->noidung}}<?php if($qt->hinhanh) {?></td><td>
              <img src="{{('../../public/images/question_img/'.$qt->hinhanh)}}" width="300px" height="300px">
              <?php }; if($qt->amthanh) {?>
                <audio controls><source src="{{('../../public/audio/question_audio/'.$qt->amthanh)}}"><?php } ?></td>
            <td>{{$qt->kynang}}</td>
            <td>{{$qt->da_a}}</td>
            <td>{{$qt->da_b}}</td>
            <td>{{$qt->da_c}}</td>
            <td>{{$qt->da_d}}</td>
            <td>{{$qt->da_dung}}</td>
            <td>{{$qt->dokho}}</td>
          </tr>
          <?php } ?>
        @endforeach
        </tbody>
      </table>
    </div>
    <header class="panel-heading">câu hỏi khó: {{$exam->kho}} câu</header>
    <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">      
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th style="width:30px;"></th>
            <th colspan="2">Nội dung</th> 
            <th>Kỹ năng</th>           
            <th>Đáp án A</th>
            <th>Đáp án B</th>
            <th>Đáp án C</th>
            <th>Đáp án D</th>
            <th>Đáp án đúng</th>
            <th>Độ khó</th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_qt as $key => $qt)
        <?php if($qt->dokho=='khó') {?>
          <tr>
            <td><label class="i-checks m-b-none"><input <?php if(in_array($qt->id_cauhoi,$old_qt)) {echo 'checked';}?> type="checkbox" name="qt[]" value='{{$qt->id_cauhoi}}'><i></i></label></td>
            <td>{{$qt->id_cauhoi}}</td>
            <?php if($qt->hinhanh||$qt->amthanh) {echo '<td>';} else {echo '<td colspan="2">';} ?>
              {{$qt->noidung}}<?php if($qt->hinhanh) {?></td><td>
              <img src="{{('../../public/images/question_img/'.$qt->hinhanh)}}" width="300px" height="300px">
              <?php }; if($qt->amthanh) {?>
                <audio controls><source src="{{('../../public/audio/question_audio/'.$qt->amthanh)}}"><?php } ?></td>
            <td>{{$qt->kynang}}</td>
            <td>{{$qt->da_a}}</td>
            <td>{{$qt->da_b}}</td>
            <td>{{$qt->da_c}}</td>
            <td>{{$qt->da_d}}</td>
            <td>{{$qt->da_dung}}</td>
            <td>{{$qt->dokho}}</td>
          </tr>
          <?php } ?>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
