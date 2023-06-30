@extends('welcome')
@section('content')
@foreach($dethi as $dt)
<div class="contentblock">
    <?php
    $user=Session::get('user_id');
    if(!$user)	
    {
        ?>
        <div class="alert alert-danger" data-toggle="modal" data-target="#modalLogin" role="alert" data-dismiss="modal">
            Bạn chưa đăng nhập. Bấm vào đây để đăng nhập/đăng ký và lưu lại kết quả làm bài lần sau
        </div>
        <?php
    }
    ?>
        <h1 class="h2 mb-3">
            Kết quả luyện tập: {{$dt->tendethi}}
        </h1>
    <div class="mb-3">
        <a href="#result-answers" class="btn btn-sm btn-primary">Xem đáp án</a>
        <a href="{{URL::to('/dethi/'.$dt->id_dethi.'/')}}" class="btn btn-sm btn-sky">Làm lại bài thi</a>
    </div>

    <div class="result-score-details">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="result-stats-box">
                    <div class="result-stats-item">
                        <span class="result-stats-icon fas fa-check"></span>
                        <span class="result-stats-label">Kết quả làm bài</span>
                        <span class="result-stats-text">{{$ketqua['diemso']}}/{{$ketqua['diemtong']}}</span>
                    </div>
                    <br>
                    <div class="result-stats-item">
                        <span class="result-stats-icon fas fa-bullseye"></span>
                        <span class="result-stats-label">Độ chính xác (#đúng/#tổng)</span>
                        <span class="result-stats-text">{{$ketqua['diemso']/$ketqua['diemtong']*100}}%</span>
                    </div>
                    <br>
                    <div class="result-stats-item">
                        <span class="result-stats-icon far fa-clock"></span>
                        <span class="result-stats-label">Thời gian hoàn thành</span>
                        <span class="result-stats-text"><?php echo floor($ketqua['thoigianlam']/60).':'.($ketqua['thoigianlam']-floor($ketqua['thoigianlam']/60)*60) ?></span>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-12 col-md-9">
                <div class="row">
                    <div class="col">
                        <div class="result-score-box">
                            <div class="result-score-icon text-correct"><span class="fas fa-check-circle"></span></div>
                            <div class="result-score-icontext text-correct">Trả lời đúng</div>
                            <div class="result-score-text">{{$ketqua['diemso']}}</div>
                            <div class="result-score-sub"><span>câu hỏi</span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="result-score-box">
                            <div class="result-score-icon text-wrong"><span class="fas fa-times-circle"></span></div>
                            <div class="result-score-icontext text-wrong">Trả lời sai</div>
                            <div class="result-score-text">{{$ketqua['sai']}}</div>
                            <div class="result-score-sub"><span>câu hỏi</span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="result-score-box">
                            <div class="result-score-icon text-unanswered"><span class="fas fa-minus-circle"></span></div>
                            <div class="result-score-icontext text-unanswered">Bỏ qua</div>
                            <div class="result-score-text">{{$ketqua['chua']}}</div>
                            <div class="result-score-sub"><span>câu hỏi</span></div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <h4>
        <span class="anchor" id="result-answers"></span>
        Đáp án
    </h4>
    <div class="result-answers-list">
    <?php $num=1; ?>
    @foreach($tra_loi as $tl)
        <div class="result-answers-item">
            <span class="question-number"><strong>{{$num++}}</strong></span>
            <span>
                <span class="text-answerkey">
                    <?php if(isset($tl['traloi'])) {echo $tl['traloi']; }?></span>:
                    <i class="mr-1">{{$tl['ds']}}</i>
            </span>
        </div>
    @endforeach
    </div>
    <br>   
@endforeach 
@endsection