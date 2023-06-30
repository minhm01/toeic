@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách câu hỏi
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
    <div class="table-responsive">
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
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_qt as $key => $qt)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$qt->id_cauhoi}}</td>
            <?php if($qt->hinhanh||$qt->amthanh) {echo '<td>';} else {echo '<td colspan="2">';} ?>
              {{$qt->noidung}}<?php if($qt->hinhanh) {?></td><td>
              <img src="{{asset('public/images/question_img/'.$qt->hinhanh)}}" width="300px" height="300px">
              <?php }; if($qt->amthanh) {?>
                <audio controls><source src="{{asset('public/audio/question_audio/'.$qt->amthanh)}}"><?php } ?></td>
            <td>{{$qt->kynang}}</td>
            <td>{{$qt->da_a}}</td>
            <td>{{$qt->da_b}}</td>
            <td>{{$qt->da_c}}</td>
            <td>{{$qt->da_d}}</td>
            <td>{{$qt->da_dung}}</td>
            <td>{{$qt->dokho}}</td>
            <td>
              <a href="{{URL::to('/quanly/edit-qt/'.$qt->id_cauhoi)}}" ui-toggle-class=""><i class="fa fa-pencil"></i>
              <a onclick="return confirm('Xác nhận xóa câu hỏi?')" href="{{URL::to('/quanly/del-qt/'.$qt->id_cauhoi)}}" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
          </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
