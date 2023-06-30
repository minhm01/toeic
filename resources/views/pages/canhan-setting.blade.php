@extends('welcome')
@section('content')
@foreach($user as $u)
<div class="content-wrapper">
    <div class="sm-container">
        <div class="contentblock">
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
            <div class="settings-wrapper">
                <h1 class="mb-3">Cập nhật thông tin cá nhân</h1>
                <ul class="nav nav-tabs mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#basics">Thông tin cơ bản</a></li>                    
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#change-password">Đổi mật khẩu</a></li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="basics" role="tabpanel" aria-labelledby="pills-basics-tab">
                        <form id="settings-form" action="{{URL::to('save-user-setting/'.$u->id_nguoidung)}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="ten" >Họ và tên</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="ten" id="ten" placeholder="Tên đầy đủ" required value="{{$u->ten}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sdt" >Số điện thoại</label>
                                <div class="col-lg-10">
                                    <input type="tel" class="form-control" name="sdt" id="sdt" placeholder="Số điện thoại" value="{{$u->sdt}}" maxlength="10">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ngaysinh" >Ngày sinh</label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" name="ngaysinh" id="ngaysinh" required value="{{$u->ngaysinh}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hocvan" >Học vấn</label>
                                <div class="col-lg-10">
                                    <select multiple="" class="form-control" name="hocvan" id="hocvan">
                                        <option <?php if($u->hocvan=="Tiểu học") echo 'checked'?> value="Tiểu học">Tiểu học</option>
                                        <option <?php if($u->hocvan=="THCS") echo 'checked'?>value="THCS">TH Cơ sở</option>
                                        <option <?php if($u->hocvan=="THPT") echo 'checked'?> value="THPT">TH Phổ thông</option>
                                        <option <?php if($u->hocvan=="Đại học") echo 'checked'?> value="Đại học" selected>Đại học</option>
                                        <option <?php if($u->hocvan=="Đi làm") echo 'checked'?> value="Đi làm">Đi làm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label" for="avatar">Ảnh đại diện</label>
                                <input class="form-control-file" id="field-profile_pic" type="file" name="avatar" accept="image/*">
                            </div>                            
                            <div class="form-group">
                                <input type="submit" value="Lưu" class="btn btn-primary">
                            </div>
                        </form>
                    </div>                    
                    <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="pills-change-password-tab">
                        <form action="{{URL::to('/save-password')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group ">
                                <label class="label" for="old">Password cũ</label>
                                <input class="form-control " id="field-old_password" name="old" type="password" placeholder="Password cũ" value="" step="None">
                            </div>
                            <div class="form-group ">
                                <label class="label" for="new">Password mới</label>
                                <input class="form-control " id="field-new_password1" name="new" type="password" placeholder="Password mới" value="" step="None">
                            </div>                            
                            <div>
                                <input type="submit" value="Thay đổi" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection