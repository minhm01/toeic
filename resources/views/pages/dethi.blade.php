@extends('welcome')
@section('content')
@foreach($exam as $exam)
<div class="col-12 col-md-12">
    <div class="practice-test-wrapper contentblock">        
        <h1>
            {{$exam->tendethi}}
        </h1>
        <ul class="mt-3 nav nav-horizontal nav-pills">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#test-info" role="tab">Thông tin đề thi</a>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#test-solutions" role="tab">Đáp án</a>
            </li>-->
        </ul>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade" id="test-solutions" role="tabpanel">
                <div class="result-answers-list">
                    <?php $num=1; ?>
                    <!--@foreach($tra_loi as $tl)
                        <div class="result-answers-item">
                            <span class="question-number"><strong>{{$num++}}</strong></span>
                            <span>
                                <span class="text-answerkey">
                                    {{$tl->da_dung}}</span>
                            </span>
                        </div>
                    @endforeach-->
                </div>
            </div>
            <div class="tab-pane fade show active" id="test-info" role="tabpanel">
                <br>
                <div>                    
                    <span>Thời gian làm bài: {{$exam->thoigian}} phút</span> |
                    <span>{{$exam->de+$exam->trungbinh+$exam->kho}} câu hỏi</span>
                </div>
                <div>
                    <span>Trình độ: {{$exam->trinhdo}}</span> |
                    <span>Kỹ năng: {{$exam->kynang}}</span>
                </div>
                <p><i>{{$exam->mota}}</i></p>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-practice" role="tabpanel">
                        <form method="GET" action="{{URL::to('/dethi/'.$exam->id_dethi.'/lambai')}}">
                            <div class="form-group">
                                <label class="label" for="time_limit">Giới hạn thời gian (Để trống để làm bài không giới hạn)</label>
                                <select name="time_limit" class="custom-select ">
                                    <option value="0" selected="">-- Chọn thời gian --</option>
                                    <option value="{{$exam->thoigian}}">{{$exam->thoigian}} phút</option>
                                    <option value="{{2*$exam->thoigian}}">{{2*$exam->thoigian}} phút</option>
                                    <option value="{{3*$exam->thoigian}}">{{3*$exam->thoigian}} phút</option>
                                    <option value="{{4*$exam->thoigian}}">{{4*$exam->thoigian}} phút</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">
                                LÀM BÀI
                            </button>
                            <?php
                            $msg=Session::get('message');
                            if($msg)	{
                                ?>
                            <div class="alert alert-danger" role="alert" data-dismiss="alert">
                                {{$msg}}
                            </div>
                                <?php
                                Session::put('message',null);}
                                $user=Session::get('user_id');
                                if(!$user)
                                {
                                    ?>
                                    <div class="alert alert-danger" data-toggle="modal" data-target="#modalLogin" role="alert" data-dismiss="modal">
                                        Bạn chưa đăng nhập. Bấm vào đây để đăng nhập/đăng ký và lưu lại kết quả làm bài
                                    </div>
                                    <?php
                                }
                                ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>   
@endforeach 
@endsection