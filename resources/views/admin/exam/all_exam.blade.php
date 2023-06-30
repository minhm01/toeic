@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách đề thi
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
            <td>Tên đề thi</td>
            <td>Mô tả</td>
            <td>Kỹ năng</td>
            <td>Trình độ</td>
            <td>Thời gian</td>
            <td>Số câu hỏi</td>
            <td>Hiển thị</td>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_exam as $key => $exam)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$exam->id_dethi}}</td>
            <td>{{$exam->tendethi}}</td>
            <td>{{$exam->mota}}</td>
            <td>{{$exam->kynang}}</td>
            <td>{{$exam->trinhdo}}</td>
            <td>{{$exam->thoigian}} phút</td>
            <td>{{$exam->de}} dễ | {{$exam->trungbinh}} trung bình | {{$exam->kho}} khó</td>
            <td><?php if($exam->hienthi==0) { ?><a href="{{URL::to('/quanly/qt-exam/'.$exam->id_dethi)}}">Bổ sung câu hỏi</a> <?php } else { ?>Có<?php } ?></td>
            <td>
                <a href="{{URL::to('/quanly/edit-exam/'.$exam->id_dethi)}}" ui-toggle-class=""><i class="fa fa-pencil"></i>
                <a onclick="return confirm('Xác nhận xóa đề thi?')" href="{{URL::to('/quanly/del-exam/'.$exam->id_dethi)}}" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection