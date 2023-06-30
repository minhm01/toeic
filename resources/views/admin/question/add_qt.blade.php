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
                Thêm câu hỏi
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/quanly/save-qt')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                    <div class="form-group">
                        <label for="tendethi">Nội dung câu hỏi </label>
                        <textarea class="form-control" name="noidung" placeholder="Nội dung câu hỏi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tendethi">Hình ảnh </label>
                        <input type="file" accept="image/*" class="form-control" name="hinhanh">
                    </div>
                    <div class="form-group">
                        <label for="tendethi">Âm thanh </label>
                        <input type="file" accept="audio/*" class="form-control" name="amthanh">
                    </div>
                    <div class="form-group">
                        <label for="kynang">Kỹ năng </label>
                        <select class="form-control" name="kynang" required>
                            <option value="vocabulary">Vocabulary</option>
                            <option value="grammar">Grammar</option>
                            <option value="reading">Reading</option>
                            <option value="listening">Listening</option>
                        </select>
                    </div>                    
                    <div class="form-group">
                        <label for="socauhoi">Đáp án A </label>
                        <textarea class="form-control" name="da_a" placeholder="Đáp án A" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="socauhoi">Đáp án B </label>
                        <textarea class="form-control" name="da_b" placeholder="Đáp án A" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="socauhoi">Đáp án C </label>
                        <textarea class="form-control" name="da_c" placeholder="Đáp án A" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="socauhoi">Đáp án D </label>
                        <textarea class="form-control" name="da_d" placeholder="Đáp án A" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="socauhoi">Đáp án đúng </label>
                        <select class="form-control input-lg m-bot15" name="da_dung" required>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="trinhdo">Trình độ </label>
                        <select class="form-control" name="trinhdo" required>
                            <option value="Tiểu học">Tiểu học</option>
                            <option value="THCS">TH Cơ sở</option>
                            <option value="THPT">TH Phổ thông</option>
                            <option value="Đại học" >Đại học</option>
                            <option value="Đi làm">Đi làm</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dokho">Độ khó </label>
                        <select class="form-control" name="dokho" required>
                            <option value="dễ">Dễ</option>
                            <option value="trung bình">Trung bình</option>
                            <option value="khó">Khó</option>
                        </select>
                    </div>
                    <button type="submit" name="add_exam" class="btn btn-info">Thêm câu hỏi</button>
                </form>
                </div>
            </div>
        </section>
    </div>
@endsection
