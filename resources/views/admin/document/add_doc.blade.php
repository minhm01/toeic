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
                Thêm tài liệu
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/quanly/save-doc')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="tentailieu">Tên tài liệu </label>
                            <input type="text" class="form-control" name="tentailieu" placeholder="Tên tài liệu" required>
                        </div>
                        <div class="form-group">
                            <label for="tomtat">Tóm tắt </label>
                            <textarea class="form-control" name="tomtat" placeholder="Tóm tắt (100 chữ)" required maxlength="100" rows="3"></textarea>                            
                        </div>
                        <div class="form-group">
                            <label for="tendethi">Hình minh họa </label>
                            <input type="file" accept="image/*" class="form-control" name="hinhanh">
                        </div>
                        <div class="form-group">
                            <label for="tendethi">Nội dung tài liệu </label>
                            <textarea class="form-control" name="noidung" id="editor" placeholder="Nội dung tài liệu" required rows="10"></textarea>
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
                        <div class="form-group">
                            <label for="filedinhkem">File đính kèm </label>
                            <input type="file" class="form-control" name="filedinhkem">
                        </div>
                        <button type="submit" name="add_doc" class="btn btn-info">Đăng tài liệu</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
