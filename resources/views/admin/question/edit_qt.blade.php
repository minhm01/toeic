@extends('admin_layout')
@section('admin_content')
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
                @foreach($edit_qt as $key => $edit)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/quanly/upd-qt/'.$edit->id_cauhoi)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="tendethi">Nội dung câu hỏi </label>
                            <textarea class="form-control" name="noidung" placeholder="Nội dung câu hỏi" required>{{$edit->noidung}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="tendethi">Hình ảnh </label>
                            <input type="file" accept="image/*" class="form-control" name="hinhanh">
                            <?php if($edit->hinhanh) {?>
                                <img src="{{('../public/images/question_img/'.$edit->hinhanh)}}">
                                <?php } ?>
                        </div>
                        <div class="form-group">
                            <label for="tendethi">Âm thanh </label>
                            <input type="file" accept="audio/*" class="form-control" name="amthanh">
                            <?php if($edit->amthanh) {?>
                                <audio controls><source src="{{('../public/audio/question_audio/'.$edit->amthanh)}}"><?php } ?>
                        </div>
                        <div class="form-group">
                            <label for="kynang">Kỹ năng </label>
                            <select class="form-control" name="kynang" required>
                                <option <?php if($edit->kynang=='vocabulary') echo 'selected' ?> value="vocabulary">Vocabulary</option>
                                <option <?php if($edit->kynang=='grammar') echo 'selected' ?> value="grammar">Grammar</option>
                                <option <?php if($edit->kynang=='reading') echo 'selected' ?> value="reading">Reading</option>
                                <option <?php if($edit->kynang=='listening') echo 'selected' ?> value="listening">Listening</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="socauhoi">Đáp án A </label>
                            <textarea class="form-control" name="da_a" placeholder="Đáp án A" required>{{$edit->da_a}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="socauhoi">Đáp án B </label>
                            <textarea class="form-control" name="da_b" placeholder="Đáp án A" required>{{$edit->da_b}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="socauhoi">Đáp án C </label>
                            <textarea class="form-control" name="da_c" placeholder="Đáp án A" required>{{$edit->da_c}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="socauhoi">Đáp án D </label>
                            <textarea class="form-control" name="da_d" placeholder="Đáp án A" required>{{$edit->da_d}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="socauhoi">Đáp án đúng </label>
                            <select class="form-control input-lg m-bot15" name="da_dung" required>
                                <option value="A" <?php if($edit->da_dung==$edit->da_a) {echo 'selected';}?>>A</option>
                                <option value="B" <?php if($edit->da_dung==$edit->da_b) {echo 'selected';}?>>B</option>
                                <option value="C" <?php if($edit->da_dung==$edit->da_c) {echo 'selected';}?>>C</option>
                                <option value="D" <?php if($edit->da_dung==$edit->da_d) {echo 'selected';}?>>D</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dokho">Độ khó </label>
                            <select class="form-control" name="dokho" required>
                                <option <?php if($edit->dokho=='dễ') echo 'selected' ?> value="dễ">Dễ</option>
                                <option <?php if($edit->dokho=='trung bình') echo 'selected' ?>value="trung bình">Trung bình</option>
                                <option <?php if($edit->dokho=='khó') echo 'selected' ?>value="khó">Khó</option>
                            </select>
                        </div>
                    <button type="submit" name="edit_qt" class="btn btn-info">Cập nhật</button>
                </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
