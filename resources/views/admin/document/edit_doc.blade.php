@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Chỉnh sửa tài liệu
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
                @foreach($edit_doc as $key => $doc)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/quanly/upd-doc/'.$doc->id_tailieu)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="tentailieu">Tên tài liệu </label>
                            <input type="text" class="form-control" name="tentailieu" placeholder="Tên tài liệu" required value="{{$doc->tentailieu}}">
                        </div>
                        <div class="form-group">
                            <label for="tomtat">Tóm tắt </label>
                            <textarea class="form-control" name="tomtat" placeholder="Tóm tắt (100 chữ)" required maxlength="100" rows="3">{{$doc->tomtat}}</textarea>                            
                        </div>
                        <div class="form-group">
                            <label for="tendethi">Hình minh họa </label>
                            <input type="file" accept="image/*" class="form-control" name="hinhanh">
                            <?php if($doc->hinhminhhoa) { ?>
                            <img src="{{asset('public/images/document_img/'.$doc->hinhminhhoa)}}"><?php } ?>
                        </div>
                        <div class="form-group">
                            <label for="tendethi">Nội dung tài liệu </label>
                            <textarea class="form-control" name="noidung" id="editor" placeholder="Nội dung tài liệu" required rows="10">{!!$doc->noidung!!}</textarea>
                        </div>
                        
                        <script>
                        CKEDITOR.replace( 'editor', {
                            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                        } );
                        </script>
                        @include('ckfinder::setup')                        
                        <button type="submit" name="add_doc" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
