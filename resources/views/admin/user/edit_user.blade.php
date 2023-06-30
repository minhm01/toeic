@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật người dùng
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
                @foreach($edit_user as $key => $edit)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/quanly/upd-user/'.$edit->id_nguoidung)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" class="form-control" value="{{$edit->id_nguoidung}}" name="id_nguoidung">
                        <div class="form-group">
                            <label for="name">Tên người dùng</label>
                            <input type="text" class="form-control" value="{{$edit->ten}}" name="ten" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="hocvan">Học vấn </label>
                            <select class="form-control input-lg m-bot15" name="hocvan">
                                <option value="Tiểu học" <?php if($edit->hocvan=='Tiểu học') echo "selected"; ?>>Tiểu học</option>
                                <option value="THCS" <?php if($edit->hocvan=='THCS') echo "selected"; ?>>TH Cơ sở</option>
                                <option value="THPT" <?php if($edit->hocvan=='THPT') echo "selected"; ?>>TH Phổ thông</option>
                                <option value="Đại học" <?php if($edit->hocvan=='Đại học') echo "selected"; ?>>Đại học</option>
                                <option value="Đi làm" <?php if($edit->hocvan=='Đi làm') echo "selected"; ?>>Đi làm</option>                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ngaysinh">Ngày sinh </label>
                            <input type="date" class="form-control" value="{{$edit->ngaysinh}}" name="ngaysinh" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại </label>
                            <input type="text" class="form-control" value="{{$edit->sdt}}" name="sdt" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="role">Vai trò </label>
                            <select class="form-control input-lg m-bot15" name="vaitro" <?php if($edit->vaitro=='quanly') echo "disabled"; ?>>
                                <option value="hocvien" <?php if($edit->vaitro=='hocvien') echo "selected"; ?>>Học viên</option>
                                <option value="giaovien" <?php if($edit->vaitro=='giaovien') echo "selected"; ?>>Giáo viên</option>
                                <option value="quanly" <?php if($edit->vaitro=='quanly') echo "selected"; ?> >Quản lý</option>                                
                            </select>
                        </div>
                    <button type="submit" name="edit_user" class="btn btn-info">Sửa</button>                    
                </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
