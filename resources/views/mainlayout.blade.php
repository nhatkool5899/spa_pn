<!doctype html>
<html class="" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spa Phúc Ngân - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Spa Phúc Ngân Cần Thơ | SPAPHUCNGAN">
    <meta property="og:description" content="Spa Phúc Ngân Cần Thơ | SPAPHUCNGAN">
    <meta property="og:image" content="{{asset('imgs/logo.png')}}">
    <meta property="og:image:secure_url" content="https://spaphucngan.vn/" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="Spa Phúc Ngân Cần Thơ | SPAPHUCNGAN" />
    <meta property="og:url" content="https://spaphucngan.vn/">
    <meta property="og:type" content="https://spaphucngan.vn/" />

    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta name="description" content="Spa Phúc Ngân Cần Thơ | SPAPHUCNGAN">
    <!-- Place favicon.ico in the root directory -->
    <link href="{{asset('imgs/logo_budhh4.png')}}" type="images/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{asset('CSS/front-end/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/front-end/core.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/front-end/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('CSS/front-end/responsive.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <!-- customizer style css -->
    <link href="#" data-style="styles" rel="stylesheet">
    <!-- Modernizr JS -->
    <script src="{{asset('JS/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="wrapper white-bg">
        <!--header section start-->
        <!--header section start-->
        <div class="header">
            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="mgea-full-width">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-9">
                                <div class="logo" style="margin-top: 20px;">
                                    <a href="/"><img src="{{asset('imgs/logo.png')}}" width="100%" height="60px" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-8 hidden-sm hidden-xs">
                                <div class="menu">
                                    <nav>
                                        <ul>
                                            <li><a href="{{url('ve-chung-toi')}}">Về chúng tôi</a>

                                            </li>
                                            <li><a href="https://www.facebook.com/phucngan.spa">Chi nhánh</a>

                                            </li>


                                            <li class="mega-parent"><a href="#">Dịch vụ <i class="fas fa-angle-down"></i></a>
                                                <ul class="mgea-menu">
                                                    <li class="mega-sub"><a class="sub-title">Chuyên về da</a>
                                                        <ul class="mega-sub-item">
                                                            <li><a href="{{url('dichvu/da/mun')}}">Chuyên về
                                                                    mụn</a></li>
                                                            <li><a href="{{url('dichvu/da/namtannhan')}}">Chuyên về nám
                                                                    tàn nhan</a></li>
                                                            <li><a href="{{url('dichvu/da/trietlong')}}">Triệt
                                                                    lông</a></li>
                                                            <li><a href="{{url('dichvu/da/tamtrang')}}">Tắm
                                                                    trắng</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-sub"><a href="#" class="sub-title">Dưỡng sinh</a>
                                                        <ul class="mega-sub-item">
                                                            <li><a href="{{url('dichvu/duongsinh/dau')}}">Vùng đầu</a>
                                                            </li>
                                                            <li><a href="{{url('dichvu/duongsinh/covaigay')}}">Cổ vai
                                                                    gáy</a></li>
                                                            <li><a href="{{url('dichvu/duongsinh/gan')}}">Gan</a></li>
                                                            <li><a href="{{url('dichvu/duongsinh/than')}}">Thận</a></li>
                                                            <li><a href="{{url('dichvu/duongsinh/phonghan')}}">Phong
                                                                    hàn</a></li>
                                                            <li><a href="{{url('dichvu/duongsinh/tyvi')}}">Tỳ vị</a></li>

                                                        </ul>
                                                    </li>

                                                    <li class="mega-sub"><a href="#" class="sub-title">Phun thêu thẩm
                                                            mỹ</a>
                                                        <ul class="mega-sub-item">
                                                            <li><a href="{{url('dichvu/phuntheu/phunmay')}}">Phun thêu
                                                                    mày</a></li>
                                                            <li><a href="{{url('dichvu/phuntheu/phunmoi')}}">Phun môi</a></li>

                                                        </ul>
                                                    </li>
                                                    <li class="mega-sub"><a href="#" class="sub-title">Xông hơi giảm
                                                            mỡ</a>
                                                        <ul class="mega-sub-item">
                                                            <li><a href="{{url('dichvu/xonghoigiammo/xonghoi')}}">Xông hơi</a>
                                                            </li>
                                                            <li><a href="{{url('dichvu/xonghoigiammo/xongchanthaidoc')}}">Xông chân
                                                                    thải độc</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#myModal">Khuyến mãi</a>
                                            <li><a href="{{asset('tintuc')}}">Tin tức</a>

                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#videoModalMain">Góp ý phản
                                                    hồi</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-3">
                                <div class="header-action-box">
                                    <div class="mini-cart">

                                        <a href="#" class="button-header">Tư vấn miễn phí</a>


                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu start -->
                <div class="mobile-menu-area hidden-lg hidden-md">
                    <div class="container">
                        <div class="col-md-12">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="/vechungtoi">Về Chúng Tôi</a>

                                    </li>
                                    <li><a href="#">Chuyên về da</a>
                                        <ul class="dropdown_menu">

                                            <li class="mega-sub"><a href="/dichvu/da/mun">Chuyên về
                                                    mụn</a></li>
                                            <li class="mega-sub"><a href="/dichvu/da/namtannhan">Chuyên về
                                                    nám
                                                    tàn nhan</a></li>
                                            <li class="mega-sub"><a href="/dichvu/da/trietlong">Triệt
                                                    lông</a></li>
                                            <li class="mega-sub"><a href="/dichvu/da/tamtrang">Tắm
                                                    trắng</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#">Dưỡng sinh</a>
                                        <ul class="dropdown_menu">
                                            <li><a href="/dichvu/duongsinh/dau">Vùng đầu</a></li>
                                            <li><a href="/dichvu/duongsinh/covaigay">Cổ vai gáy</a></li>
                                            <li><a href="/dichvu/duongsinh/gan">Gan</a></li>
                                            <li><a href="/dichvu/duongsinh/than">Thận</a></li>
                                            <li><a href="/dichvu/duongsinh/phonghan">Phong hàn</a></li>
                                            <li><a href="/dichvu/duongsinh/tyvi">Tỳ vị</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Phun Thêu Thẩm Mỹ</a>
                                        <ul class="dropdown_menu">
                                            <li><a href="/dichvu/phuntheu/phunmay">Phun thêu mày</a></li>
                                            <li><a href="/dichvu/phuntheu/phunmoi">Phun môi</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Xông Hơi Giảm mở</a>
                                        <ul class="dropdown_menu">
                                            <li><a href="/dichvu/xonghoigiammo/xonghoi">Xông hơi</a></li>
                                            <li><a href="/dichvu/xonghoigiammo/xongchanthaidoc">Xông chân thải độc</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" data-toggle="modal" data-target="#myModal">Khuyến mãi</a></li>
                                    <li><a href="/tintuc">Tin tức</a>
                                    <li><a href="#" data-toggle="modal" data-target="#videoModalMain">Góp ý phản
                                            hồi</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu end -->
            </div>


        </div>
        <!--header section end-->
        <!--header section end-->
        <!--slider section start-->
        @yield('content')




        <!--footer start-->
        <div class="footer">
            <div class="footer-top ptb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-footer contact">
                                <div class="footer-title">
                                    <img src="{{asset('imgs/logo.png')}}" width="100%" height="100px">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-footer open-hours">
                                <div class="footer-title">
                                    <h3>Liên hệ</h3>
                                </div>
                                <p style="color: white;">Khu dân cư 91b - 164 Nguyễn Hiền, Phường An Khánh - Quận Ninh
                                    Kiều, Thành Phố Cần Thơ </p>
                                <ul>
                                    <li>Hotline: 094 527 93 67 - 091 218 18 31 </li>
                                    <li>Website: spaphucngan.vn</li>
                                    <li><a href="https://www.facebook.com/phucngan.spa"> <i class="fab fa-facebook fa-2x"></i> /phucngan.spa</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="single-footer quick-links">
                                <div class="footer-title">
                                    <h3>Thời gian</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Thứ Hai Đến Chủ Nhật</a></li>
                                    <li><a href="#">8h00 đến 20h00</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-footer widget">
                                <div class="footer-title">
                                    <h3>Hình ảnh</h3>
                                </div>
                                <ul>
                                    <li><a href="#"><img src="{{asset('imgs/footer/1_oohybr.jpg')}}" width="100%" height="60px" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('imgs/footer/2_ujasku.jpg')}}" width="100%" height="60px" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('imgs/footer/3_buol8s.jpg')}}" width="100%" height="60px" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('imgs/footer/4_gkpjbu.jpg')}}" width="100%" height="60px" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('imgs/footer/5_pwlsqg.jpg')}}" width="100%" height="60px" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('imgs/footer/6_p2hbn8.jpg')}}" width="100%" height="60px" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer end-->

    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057229/images/about/DuongSinhCoVaiGay_-01_xele3c.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="videoModalMain" class="modal fade" role="dialog">
        <div class="modal-dialog" style="margin-top: 100px">
            <div class="modal-content">
                <div class="modal-body ">
                    <div class="row">
                        <div class="col-md-6" style="border-right: 5px solid #1d1e4f; text-align: center;">
                            <span style="font-size: 18px; font-weight: 500; color:#1d1e4f ;">Trị nám
                                sâu</span>
                            <video width="100%" height="500px" controls style="margin-top: 10px;">
                                <source src="https://res.cloudinary.com/spaphucngan/video/upload/v1639057118/videos/nam_h2w4r0.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-6" style="text-align: center;">
                            <span style="font-size: 18px; font-weight: 500;color:#1d1e4f ; ">Cảm
                                nhận hiệu quả
                                khi dưỡng sinh vùng
                                đầu</span>
                            <video width="100%" height="500px" controls style="margin-top: 10px;">
                                <source src="https://res.cloudinary.com/spaphucngan/video/upload/v1639057136/videos/3_kgcark.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->


    <!-- All js plugins included in this file. -->
    <script src="{{asset('JS/front-end/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('JS/front-end/bootstrap.min.js')}}"></script>
    <script src="{{asset('JS/front-end/jquery.nivo.slider.pack.js')}}"></script>
    <script src="{{asset('JS/front-end/owl.carousel.min.js')}}"></script>
    <script src="{{asset('JS/front-end/ajax-mail.js')}}"></script>
    <script src="{{asset('JS/front-end/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('JS/front-end/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('JS/front-end/waypoints.min.js')}}"></script>
    <script src="{{asset('JS/front-end/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>