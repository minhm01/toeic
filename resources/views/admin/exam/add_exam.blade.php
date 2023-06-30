@extends('admin_layout')
@section('admin_content')

<div class="row">    
    <div class="col-lg-12">
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
        <section class="panel">
            <header class="panel-heading">
                Tạo đề thi
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/quanly/save-exam')}}" method="post">
                        {{csrf_field()}}
                    <div class="form-group">
                        <label for="tendethi">Tên đề thi </label>
                        <input type="text" class="form-control" name="tendethi" placeholder="Tên đề thi" required>
                    </div>
                    <div class="form-group">
                        <label for="mota">Mô tả </label>
                        <textarea class="form-control" name="mota" placeholder="Mô tả" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kynang">Kỹ năng </label>
                        <select multiple class="form-control" name="kynang" required>
                            <option value="vocabulary">Vocabulary</option>
                            <option value="grammar">Grammar</option>
                            <option value="reading">Reading</option>
                            <option value="listening">Listening</option>                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="trinhdo">Trình độ </label>
                        <select multiple="" class="form-control" name="trinhdo" required>
                            <option value="Tiểu học">Tiểu học</option>
                            <option value="THCS">TH Cơ sở</option>
                            <option value="THPT">TH Phổ thông</option>
                            <option value="Đại học" >Đại học</option>
                            <option value="Đi làm">Đi làm</option>
                        </select>
                    </div>
                    <label for="socauhoi">Số câu hỏi </label>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            Dễ: <input type="number" class="form-control" name="de" placeholder="Dễ" min="0">
                        </div>
                        <div class="col-md-4 form-group">
                            Trung bình: <input type="number" class="form-control" name="tb" placeholder="Trung bình" min="0">
                        </div>
                        <div class="col-md-4 form-group">
                            Khó: <input type="number" class="form-control" name="kho" placeholder="Khó" min="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="thoigian">Thời gian </label>
                        <input type="number" class="form-control" name="thoigian" placeholder="Số câu hỏi" min="1" required> phút
                    </div>
                    <button type="submit" name="add_exam" class="btn btn-info">Tạo</button>
                </form>
                </div>
            </div>
        </section>
    </div>
@endsection
