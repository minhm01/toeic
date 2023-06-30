@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách tài liệu
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
            <th>Tên tài liệu</th>
            <th>Tóm tắt</th>
            <th>Hình minh họa</th>
            <th>Người đăng</th>
            <th>Ngày đăng</th>
            <th>File đính kèm</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_doc as $key => $doc)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$doc->id_tailieu}}</td>
            <td><a href="{{URL::to("/tailieu/".$doc->id_tailieu)}}" >{{$doc->tentailieu}}</a></td>
            <td>{{$doc->tomtat}}</td>
            <td><?php if($doc->hinhminhhoa) { ?>
              <img src="{{asset('public/images/document_img/'.$doc->hinhminhhoa)}}" width="200px" height="244px">
              <?php }else{ ?>
                <img src="{{asset('public/images/document_img/default_thumb.jpg')}}" width="200px" height="244px"><?php } ?></td>
            <td>{{$doc->id_giaovien}}</td>
            <td>{{$doc->created_at}}</td>
            <td><a href="{{asset('public/document/'.$doc->filedinhkem)}}" download>{{$doc->filedinhkem}}</a></td>
            <td>
              <a href="{{URL::to('/quanly/edit-doc/'.$doc->id_tailieu)}}" ui-toggle-class=""><i class="fa fa-pencil"></i>
              <a onclick="return confirm('Xác nhận xóa tài liệu?')" href="{{URL::to('/quanly/del-doc/'.$doc->id_tailieu)}}" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
