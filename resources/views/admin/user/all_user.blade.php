@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách người dùng
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
            <th>Tên</th>
            <th>ngaây sinh</th>
            <th>Học vấn</th>
            <th>Số điện thoại</th>
            <th>Vai trò</th>
            <th>Tên đăng nhập</th>
            <th>Ngày tạo</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_user as $key => $user)        
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$user->id_nguoidung}}</td>
            <td>{{$user->ten}}</td>
            <td>{{$user->ngaysinh}}</td>            
            <td>{{$user->hocvan}}</td>
            <td>{{$user->sdt}}</td>
            <td>{{$user->vaitro}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->created_at}}</td>
            <td>
                <a href="{{URL::to('/quanly/edit-user/'.$user->id_nguoidung)}}" class="btn btn-info">Sửa</a>
                <a onclick="return confirm('Xác nhận xóa tài khoản?')" href="{{URL::to('/quanly/del-user/'.$user->id_nguoidung)}}" class="btn btn-danger">Xóa</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection