@extends('welcome')
@section('content')
<?php

$user=Session::get('user');
$user_id=Session::get('user_id');
if($user) { ?>
<div class="home-section sky-bg pt-3">
    <div class="container">
        <div class="home-section-top">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <h1 class="text-primary">Xin chào, {{$user}}!</h1>
                </div>                
            </div>
        </div>        
    </div>
</div>
<?php } ?>
<div class="home-section">
    <div class="container">
        <h2 class="home-h2">Tài liệu mới nhất</h2>
        <div class="posts-grid row">
            @foreach($doc as $doc)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="postgrid-card gray-bg">
                    <article>
                        <a href="{{URL::to('tailieu/'.$doc->id_tailieu)}}">
                        <div class="post-title-wrapper">                            
                            <h2 class="postgrid-title">{{$doc->tentailieu}}</h2>
                        </div>
                        <div class="row small-gutters">
                            <div class="col grow0">
                                <div class="postgrid-card-img mb-2">
                                    <?php if($doc->hinhminhhoa) {?>
                                        <img src="{{asset('public/images/document_img/'.$doc->hinhminhhoa)}}" width="120px" height="147px">
                                        <?php }else{ ?>
                                        <img src="{{asset('public/images/document_img/default.jpg')}}" width="120px" height="147px">
                                        <?php } ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="postgrid-card-content card-body d-flex flex-column p-0">
                                    <p>{{$doc->tomtat}}</p>
                                    <div class="post-tags">

                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </article>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="home-section">
    <div class="container">
        <h2 class="home-h2">Đề thi mới nhất</h2>
        <div class="home-tests">            
            <div class="testitem-grid row ">
                @foreach($dethi as $dethi)
                <div class="col-6 col-md-3">
                    <div class="testitem-wrapper gray-bg">
                        <a class="text-dark" href="{{URL::to('/dethi/'.$dethi->id_dethi)}}">
                            <h2 class="testitem-title">
                                {{$dethi->tendethi}}
                            </h2>
                            <div class="testitem-info-wrapper">
                                <div>
                                    <span class="testitem-info">{{$dethi->mota}}</span>
                                </div>
                                <div>
                                    <span class="testitem-info">
                                        <span class="far fa-user mr-1"></span>{{$dethi->trinhdo}} | {{$dethi->kynang}} 
                                    </span>
                                </div>
                                <div>
                                    <span class="testitem-info">
                                        <span class="far fa-clock mr-1"></span>{{$dethi->thoigian}} phút                        
                                        | <span class="testitem-info">{{$dethi->de+$dethi->trungbinh+$dethi->kho}} câu hỏi</span>
                                    </span>
                                </div>
                                <br>
                            </div>
                        </a>
                        <div class="testitem-start-test">
                            <a class="text-dark" href="{{URL::to('/dethi/'.$dethi->id_dethi)}}"></a>
                            <a href="{{URL::to('/dethi/'.$dethi->id_dethi)}}" class="btn btn-block btn-outline-primary">Chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="modal" id="form-modal" tabindex="-1" aria-labelledby="form-modal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal-body" id="form-modal-content"></div>
        </div>
    </div>
</div>
@endsection