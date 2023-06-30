@extends('welcome')
@section('content')
@foreach($user as $u)
<div class="content-wrapper">                    
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
                <i class="fas fa-wrench"></i>            </a>
        </div>    
        <h1 class="h3 profile-header-title">{{$u->ten}} </h1>
        <div class="profile-header-content">
            <p></p>
        </div>
    </div>
    <!-- End User Profile Section -->
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link active" href="{{URL::to('trangcanhan')}}">Thông báo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{URL::to('trangcanhan/baithi')}}">Kết quả thi</a>
        </li>
    </ul>
        <p><i>Chưa có thông báo mới!</i></p>
    </div>
</div>
@endforeach
@endsection