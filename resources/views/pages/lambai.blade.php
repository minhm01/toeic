@extends('welcome')
@section('content')
<style>
div.sticky {
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 78px;
}
</style>

<div class="content-wrapper">
    <div class="xl-container">
        <h1 class="h4 text-center">{{$dethi->tendethi}}</h1>
        <h4 class="h5 font-500 text-center">{{$dethi->mota}}</h4>
        <form autocomplete="off" action="{{URL::to('/nopbai')}}" method="POST" enctype="multipart/form-data" name="baithi" id="baithi">
            {{csrf_field()}}            
            <button type="submit" disabled="" style="display: none" aria-hidden="true"></button>
            <input type="hidden" name="thoigian" id="thoigian" value=0>
            <input type="hidden" name="id_nguoidung" value="{{Session::get('user_id')}}">
            <input type="hidden" name="id_dethi" value="{{$dethi->id_dethi}}">
            <div class="test-wrapper" style="position: relative;">
                <div class="test-content contentblock" id="test-content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane active show" id="partcontent-6167" role="tabpanel" aria-labelledby="pills-tab">
                            <div class="test-questions-wrapper">
                                <div class="question-set-wrapper">
                                    <div class="question-groups-wrapper">
                                        <div class="question-group-wrapper">
                                            <div class="questions-wrapper">
                                                <?php $number=1; ?>
                                                @foreach($cau_hoi as $cauhoi)
                                                <input type="hidden" name="question[{{$number}}][id]" value={{$cauhoi->id_cauhoi}}>
                                                <div class="question-wrapper" data-qid="{{$cauhoi->id_cauhoi}}" id="question-wrapper-{{$number}}" style="scroll-margin-top: 60px;">
                                                    <div class="question-number">
                                                        <strong>{{$number}}</strong>
                                                    </div>
                                                    <div class="question-content text-highlightable">
                                                        <div class="question-text">{{$cauhoi->noidung}}</div>
                                                        <?php 
                                                        $dapan= array($cauhoi->da_a, $cauhoi->da_b, $cauhoi->da_c, $cauhoi->da_d);
                                                        shuffle($dapan);
                                                        if($cauhoi->hinhanh) { ?><div><img src="{{('../../public/images/question_img/'.$cauhoi->hinhanh)}}"></div><?php }; 
                                                        if($cauhoi->amthanh) { ?><audio controls><source src="{{('../../public/audio/question_audio/'.$cauhoi->amthanh)}}"></audio><?php } ?>
                                                        <div class="question-answers">
                                                            <div class="form-check" onchange="qt_color({{$number}})">
                                                                <input data-type="question-answer" class="form-check-input" data-qid="{{$cauhoi->id_cauhoi}}" type="radio" name="question[{{$number}}][traloi]" id="question-{{$cauhoi->id_cauhoi}}-A" value="{{$dapan[0]}}">
                                                                <label class="form-check-label" for="question-{{$cauhoi->id_cauhoi}}-A">{{$dapan[0]}}</label>
                                                            </div>
                                                            <div class="form-check" onchange="qt_color({{$number}})">
                                                                <input data-type="question-answer" class="form-check-input" data-qid="{{$cauhoi->id_cauhoi}}" type="radio" name="question[{{$number}}][traloi]" id="question-{{$cauhoi->id_cauhoi}}-B" value="{{$dapan[1]}}">
                                                                <label class="form-check-label" for="question-{{$cauhoi->id_cauhoi}}-B">{{$dapan[1]}}</label>
                                                            </div>
                                                            <div class="form-check" onchange="qt_color({{$number}})">
                                                                <input data-type="question-answer" class="form-check-input" data-qid="{{$cauhoi->id_cauhoi}}" type="radio" name="question[{{$number}}][traloi]" id="question-{{$cauhoi->id_cauhoi}}-C" value="{{$dapan[2]}}">
                                                                <label class="form-check-label" for="question-{{$cauhoi->id_cauhoi}}-C">{{$dapan[2]}}</label>
                                                            </div>
                                                            <div class="form-check" onchange="qt_color({{$number}})">
                                                                <input data-type="question-answer" class="form-check-input" data-qid="{{$cauhoi->id_cauhoi}}" type="radio" name="question[{{$number}}][traloi]" id="question-{{$cauhoi->id_cauhoi}}-D" value="{{$dapan[3]}}">
                                                                <label class="form-check-label" for="question-{{$cauhoi->id_cauhoi}}-D">{{$dapan[3]}}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="context-wrapper">
                                                    
                                                </div>
                                                <?php $number++ ?>
                                                @endforeach                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-navigation" id="test-navigation" style="" >
                    <div class="test-navigation__inner sticky" id="test-navigation__inner" >
                        <div class="">
                            <div class="timeleft-wrapper mb-3">
                                Thời gian làm bài: 
                                <?php if($thoigian==0) {?>
                                <span class="timeleft" id="minutes"></span>:<span class="timeleft" id="seconds"></span>
                                <?php }else{ ?>
                                <span data-totaltime="0" id="timeelapsed" class="timeleft">{{$thoigian}}:00</span><?php }?>
                            </div>
                            <button class="btn btn-outline-primary btn-block mb-3 mt-3" id="submit-test" type="submit">NỘP BÀI</button>
                            <div class="test-questions-list">
                                <div class="test-questions-list-part">
                                    <h6>Danh sách câu hỏi</h6>
                                    <div class="test-questions-list-wrapper">
                                        <?php $number_2=1;?>
                                        @foreach($cau_hoi as $ch)
                                        <a href="#question-wrapper-{{$number_2}}"><span class="test-questions-listitem " data-qid="{{$ch->id_cauhoi}}" id="test-questions-lisitem-{{$number_2}}">{{$number_2++}}</span></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden; opacity: 0;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden; opacity: 0;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden; opacity: 0;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
                </div>
            <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden; opacity: 0;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden; opacity: 0;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden; opacity: 0;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
        </form>
    </div>
</div>
<script type="text/javascript">
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);
    
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
    
            display.textContent = minutes + ":" + seconds;
            
        }, 1000);
    }    
    window.onload = function () {
            var timelimit = {{$thoigian}},
            display = document.querySelector('#timeelapsed');
            startTimer(timelimit, display);
            if({{$thoigian}}!=0){
                setTimeout(function (){
                    alert("Đã hết giờ làm bài");
                    document.baithi.submit();},
                    {{$thoigian}}*60*1000+2000);
                }
        };

    var sec = 0;
    function pad ( val ) { return val > 9 ? val : "0" + val; }
    setInterval( function(){
        document.getElementById("seconds").innerHTML=pad(++sec%60);
        document.getElementById("minutes").innerHTML=pad(parseInt(sec/60,10));
    }, 1000);
    setInterval( function(){
        if({{$thoigian}}==0){
            document.getElementById("thoigian").value = sec;
        }else{
            document.getElementById("thoigian").value = sec-3;
        }        
    }, 1000);

    function qt_color(id){
        document.getElementById('test-questions-lisitem-'+id).classList.add("done");
    }
</script>

@endsection