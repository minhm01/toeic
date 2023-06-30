@extends('welcome')
@section('content')
@foreach($user as $u)
    <div class="sm-container">
    <!-- Profile Cover -->
    <div class="profile-cover">
        <div class="profile-cover-img-wrapper">
          <img class="profile-cover-img" src="{{asset('/public/images/user_img/user_banner.jpg')}}">
        </div>
    </div>
    <!-- End Profile Cover -->
    <!-- User Profile Section -->
    <div class="mx-md-auto mb-3 text-center">
      <div class="profile-cover-avatar">            
          <img class="avatar-img" src="{{asset('/public/images/user_img/'.$u->avatar)}}" width="120px" height="120px">
          <a class="avatar-button text-dark" href="{{URL::to('trangcanhan/'.$u->id_nguoidung.'/setting')}}">
              <i class="avatar-icon fa fa-pencil"></i>
          </a>
      </div>    
      <h1 class="h3 profile-header-title">{{$u->ten}} </h1>
      <div class="profile-header-content">
          <p></p>
      </div>
  </div>
    <!-- End User Profile Section -->
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link " href="{{URL::to('trangcanhan')}}">Thông báo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{URL::to('trangcanhan/baithi')}}">Kết quả thi</a>
        </li>        
    </ul>        
        <div class="user-test">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                      <div class="row w3-res-tb">
                        <div class="col-sm-3">
                          <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
                              <button class="btn btn-sm btn-default" type="button">Go!</button>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                          <thead>
                            <tr>
                              <th>Đề thi</th>
                              <th>Ngày thi</th>
                              <th>Điểm số</th>
                              <th>Thời gian</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($history as $ht)
                            <tr>
                              <td><a href={{URL::to('/dethi/'.$ht->id_dethi)}}>{{$ht->tendethi}}</a></td>
                              <td>{{date('d/m/Y', strtotime($ht->ngaythi))}}</td>
                              <td>{{$ht->diemso}}/{{$ht->diemtong}}</td>
                              <td><?php echo floor($ht->thoigianlam/60).':'.($ht->thoigianlam-floor($ht->thoigianlam/60)*60) ?></td>
                              <th><a class="btn btn-info btn-sm" href="{{URL::to('/ketqua/'.$ht->id_baithi)}}">Xem chi tiết</a></th>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
        </div>
        <br>
        <nav class="jqpages">
            <div class="pagination">
                <span class="page-item active">
                    <a class="page-link" href="?page=1">1</a>
                </span>
            </div>
        </nav>
    </div>
@endforeach
@endsection