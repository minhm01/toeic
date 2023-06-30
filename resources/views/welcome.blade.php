<!DOCTYPE html>
<html lang="vi">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-style"></style>
<style lang="en" type="text/css" id="dark-mode-native-sheet"></style>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="{{asset('./public/sdk.js.download')}}" async="" crossorigin="anonymous"></script>
    <script async="" src="{{asset('./public/tag.js.download')}}"></script>
    <script async="" src="{{asset('./public/fbevents.js.download')}}"></script>
    <script type="text/javascript" async="" src="{{asset('./public/analytics.js.download')}}"></script>
    <script type="text/javascript" async="" src="{{asset('./public/js')}}"></script>
   
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="./public/js(1)" type="text/javascript"></script>

    <title>ENGLISH</title>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="turbolinks-cache-control" content="no-cache">
    <meta property="fb:app_id" content="170677886335455">    
    <meta property="og:type" content="article">
    <!-- <link rel=stylesheet id=flatsome-googlefonts-css  href='//fonts.googleapis.com/css?family=Roboto%3Aregular%2C700%2Cregular%2C700%2C500&#038;display=swap&#038;ver=3.9' type=text/css media=all> -->
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">    
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" as="style" href="{{asset('./public/vendor.1ad913603e6178a6c0f0.min.css')}}" onload="this.rel=&#39;stylesheet&#39;">
    <link rel="stylesheet" href="{{asset('./public/main.c0d9c66a65ed228f1253.min.css')}}">
    
    <script type="text/javascript">
        window.resizeIframe = function(obj) { obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px'; }
    </script>
</head>
<body class="plainpage nopadding highlighter-context">
    <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
    <script async="" defer="" crossorigin="anonymous" src="{{asset('./public/sdk.js(1).download')}}" nonce="qwvaCuYQ" type="text/javascript"></script>
    <div class="site-wrapper">
        <div class="topnav1 topnav-wrapper">
            <?php
                $message=Session::get('message');
                if($message){ ?>
            <div class="alert alert-danger" role="alert" data-dismiss="alert" style="text-align: center;  font-weight: bold;
            ">{{$message}}</div>
            <?php } 
            Session::put('message',null); ?>
            <div class="topnav-container">
                <nav class="navbar  navbar-expand-lg">
                    <span class="navbar-brand">
                        <a class="topnav-brand" href="{{URL::to('/')}}">
                            <img class="topnav-logo" src="{{asset('./public/logo_full_sm.png')}}">                    
                        </a>
                    </span>
                    <button class="navbar-toggler pull-xs-right d-lg-none" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        ☰
                    </button>
                    <div class="d-lg-block navbar-collapse justify-content-end collapse" id="navbar-collapse">                
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{URL::to('tailieu')}}">Danh sách tài liệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{URL::to('dethi')}}">Danh sách đề thi</a>
                            </li>                            
                            <?php
                            $user=Auth::check();
                            if(!$user){
                            ?>
                            <li class="nav-item">
                                <div class='btn btn-round btn-block btn-primary' data-toggle="modal" data-target="#modalLogin">Đăng nhập</div>
                            </li>
                            <?php } else { $avatar=Session::get('avatar');
                                ?>                        
                            <li class="nav-item user-topnav dropdown d-none d-lg-block">
                                <a class="nav-link dropdown-toggle user-topnav-profile" href="{{URL::to('trangcanhan')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="account-profile-img">
                                        <img src="{{asset('/public/images/user_img/'.$avatar)}}" width="40px" height="40px">
                                    </span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <div>
                                        <h6 class="dropdown-header"> Thông báo </h6>
                                        <div id="new-notis-dropdown-content" class="jqhtml-loader dropdown-text" data-href="/notifications/newest/">
                                            <p class="font-sm"><i>Bạn chưa có thông báo mới.</i></p>
                                            <div class="mt-2 link font-sm"><a href="">Xem tất cả &gt;&gt;</a></div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{URL::to('/trangcanhan')}}">Trang cá nhân</a>
                                    <a class="dropdown-item" href="{{URL::to('/logout')}}">Đăng xuất</a>                                    
                                </div>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="">Thông báo </a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="{{URL::to('/trangcanhan')}}">Trang cá nhân</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="{{URL::to('/logout')}}">Đăng xuất</a>
                            </li>
                            <?php } ?>        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>        
        <div class="site-content-wrapper">
            <div class="content-wrapper">
                @yield('content')                
            </div>
        </div>
        <div class="footer-wrapper">
            <div class="footer-container">
                <footer>
                   
                </footer>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('./public/ckeditor-init.js.download')}}"></script>
    <script type="text/javascript" src="{{asset('./public/ckeditor.js.download')}}"></script>
    <script type="text/javascript" src="{{asset('./public/WebAudioRecorder.min.js.download')}}"></script>
    <script type="text/javascript" src="{{asset('./public/vendor.1ad913603e6178a6c0f0.js.download')}}"></script>
    <script type="text/javascript" src="{{asset('./public/main.c0d9c66a65ed228f1253.js.download')}}"></script>        
    <script type="text/javascript">
        var swiper = new Swiper(".home-banners", {
            autoHeight: true, //enable auto height
            pagination: {
            el: ".swiper-pagination",
            },
        });

        var courses_swiper = new Swiper(".home-courses", {
            slidesPerView: 1,
            breakpoints: {
                768: {
                slidesPerView: 3
                }
            },
            pagination: {
            el: ".swiper-pagination",
            },
        });
    </script>    
    <div class="highlight-control" style="display: none; top: -35px;">
        <div>
            <span class="fas fa-trash highlight-icon highlight-remove"></span>
            <span class="fas fa-pencil highlight-icon highlight-note"></span>
            <span class="highlight-icon highlight-color blue"></span>
            <span class="highlight-icon highlight-color pink"></span>
            <span class="highlight-icon highlight-color green"></span>
            <span class="highlight-icon highlight-color yellow"></span>
            <span class="highlight-icon highlight-color underred"></span>
            <span class="highlight-icon highlight-color crossed">abc</span>
            <span class="ml-2 fas fa-plus highlight-icon highlight-flashcard" data-toggle="modal" data-target="#highlight-modal"></span>
        </div>
        <div class="highlight-editor" style="display: none;">
            <textarea rows="3"></textarea>
            <div><span class="far fa-check highlight-icon highlight-save"></span></div>
        </div>
    </div>
    <div class="modal" id="highlight-modal" tabindex="-1" aria-labelledby="highlight-modal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body" id="highlight-modal-content"></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLoginlabel">Đăng nhập</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="position-center">
                                <form class="form-horizontal" role="form" action="{{URL::to('/login')}}" method="post">
                                    {{csrf_field() }}
                                    <div class="form-group">
                                        <label for="username" >Tên đăng nhập</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Tên đăng nhập" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" >Mật khẩu</label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Ghi nhớ</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger">Đăng nhập</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal" data-toggle="modal" data-target="#modalRegister">Đăng ký</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalRegister" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalRegister">Đăng ký</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="position-center">
                                <form class="form-horizontal" role="form" action="{{URL::to('/register')}}" method="post">
                                    {{csrf_field() }}
                                    <div class="form-group">
                                        <label for="username" >Tên đăng nhập</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Tên đăng nhập" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" >Mật khẩu</label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ten" >Họ và tên</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="ten" id="ten" placeholder="Tên đầy đủ" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sdt" >Số điện thoại</label>
                                        <div class="col-lg-10">
                                            <input type="tel" class="form-control" name="sdt" id="sdt" placeholder="Số điện thoại" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ngaysinh" >Ngày sinh</label>
                                        <div class="col-lg-10">
                                            <input type="date" class="form-control" name="ngaysinh" id="ngaysinh" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="hocvan" >Học vấn</label>
                                        <div class="col-lg-10">
                                            <select multiple="" class="form-control" name="hocvan" id="hocvan">
                                                <option value="Tiểu học">Tiểu học</option>
                                                <option value="THCS">TH Cơ sở</option>
                                                <option value="THPT">TH Phổ thông</option>
                                                <option value="Đại học" selected>Đại học</option>
                                                <option value="Đi làm">Đi làm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger">Đăng ký</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal" data-toggle="modal" data-target="#modalLogin">Đăng nhập</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
      </div>
</body></html>
