@extends('welcome')
@section('content')
<div class="site-content-wrapper">
    <div class="content-header pb-0 gray-bg">
        <div class="container pb-0">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h1>Thư viện đề thi</h1><br>
                    <form method="GET">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="input-addon inner-addon right-addon">                                        
                                        <input type="text" class="form-control" placeholder="Nhập từ khoá bạn muốn tìm kiếm" name="term">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Tìm kiếm</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="exam-top-modal" tabindex="-1" aria-labelledby="exam-top-modal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body" id="exam-top-modal-content"></div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="testitem-grid row ">
                    @foreach($exam as $list)
                    <div class="col-6 col-md-3">
                        <div class="testitem-wrapper ">
                            <a class="text-dark" href="{{URL::to('/dethi/'.$list->id_dethi)}}">
                                <h2 class="testitem-title">{{$list->tendethi}}</h2>
                                <div class="testitem-info-wrapper">
                                    <div><span class="testitem-info">{{$list->mota}}</span></div>                    
                                    <div>
                                        <span class="testitem-info">
                                            Trình độ: {{$list->trinhdo}}
                                            | {{$list->thoigian}} phút
                                        </span>
                                    </div>
                                    <div>
                                        <span class="testitem-info">
                                            Kỹ năng: {{$list->kynang}}
                                            | {{$list->de+$list->trungbinh+$list->kho}} câu hỏi
                                        </span>
                                    </div>
                                </div><br>
                                </a><div class="testitem-start-test"><a class="text-dark" href="{{URL::to('/dethi/'.$list->id_dethi)}}">
                                </a><a href="{{URL::to('/dethi/'.$list->id_dethi)}}" class="btn btn-block btn-outline-primary">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <nav class="jqpages">
            <div class="pagination">
                <span class="page-item active">
                    <a class="page-link" href="?page=1">1</a>
                </span>
                <span class="page-item ">
                    <a class="page-link" href="?page=2">2</a>
                </span>
                <span class="page-item ">
                    <a class="page-link" href="?page=3">3</a>
                </span>
                <span class="page-item ">
                    <a class="page-link" href="?page=4">4</a>
                </span>
                <span class="page-item ">
                    <a class="page-link" href="?page=5">5</a>
                </span>
                <span class="page-item">
                    <a class="page-link" href="?page=2"><i class="fas fa-chevron-right"></i></a>
                </span>
            </div>
        </nav>
    </div>    
</div> 
@endsection