@extends('welcome')
@section('content')
    <div class="site-content-wrapper">
        <div class="content-header pb-0 gray-bg">
            <div class="container pb-0">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h1>Thư viện tài liệu</h1><br>
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
            @foreach($doc as $doc)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="postgrid-card gray-bg">
                    <article>
                        <div class="post-title-wrapper">                            
                            <h2 class="postgrid-title"><a href="{{URL::to('tailieu/'.$doc->id_tailieu)}}">{{$doc->tentailieu}}</a></h2>
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
                    </article>
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
@endsection