@extends('welcome')
@section('content')
@foreach($doc as $doc)
<div class="content-wrapper">
    <div class="sm-container">
        <div class="post-wrapper contentblock">
            <h1>
                {{$doc->tentailieu}}
            </h1>
            <div class="media post-author-media py-2 mb-3 border-top border-bottom">
                <div class="media-body">
                    <div class="post-author-name">{{$doc->ten}}</div>
                    <div class="post-meta">{{date('d/m/Y',strtotime($doc->created_at))}}</div>
                </div>
            </div>
            <div class="post-main-wrapper">
                <div class="post-tags"></div>                
                <div class="post-main mt-2">
                    <div id="post-content" class="post-content md-content" prewrap="">
                    {!!$doc->noidung!!}
                    </div>
                </div>
                <br>
                <div class="post-comments-wrapper">
                    <h4>File đính kèm</h4>
                    <a href="{{asset('public/document/'.$doc->filedinhkem)}}" download>{{$doc->filedinhkem}}</a>
                    <br>
                    <div id="obj-comments-257" class="jqhtml-loader" data-href="/posts/257/comments/"><p><i>Chưa có bình luận nào. Hãy trở thành người đầu tiên bình luận bài này.</i></p></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection