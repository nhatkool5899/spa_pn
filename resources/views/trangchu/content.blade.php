@extends('mainlayout')
@section('title', 'Trang chủ')
@section('content')


<div class="slider-container">
            <!-- Slider Image -->
            <div id="mainSlider" class="nivoSlider slider-image">
                <img src="{{asset('imgs/banner/1_f4tntw.jpg')}}"
                    alt="" title="#htmlcaption1" />
                <img src="{{asset('imgs/banner/2_uanldx.jpg')}}"
                    alt="" title="#htmlcaption2" />
                <img src="{{asset('imgs/banner/3_kpaeci.jpg')}}"
                    alt="" title="#htmlcaption2" />
                <img src="{{asset('imgs/banner/4_qvcbxo.jpg')}}"
                    alt="" title="#htmlcaption2" />
                <img src="{{asset('imgs/banner/5_zrkzfb.jpg')}}"
                    alt="" title="#htmlcaption2" />
            </div>
        </div>
        
        <div class="welcome-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-img">
                            <img src="{{asset('imgs/1_jlu7qi.jpg')}}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 about-text">
                        <div class="about-desc">
                            <h6>Welcome to beauty house</h6>
                            <h2>Về chúng tôi</h2>
                            <p class="text-1"> Spa Phúc Ngân
                                với đội ngủ nhân viên chuyên nghiệp Với quyết tâm và lòng nhiệt huyết, mong muốn mang
                                đến cho quý khách hàng 1 làn da đẹp và khỏe mạnh</p>
                            <p class="text-2">Với nhu cầu ngày một tăng về chăm sóc sắc đẹp và thư giản cho mọi người,
                                mang đến những dịch vụ chất lượng tốt với giá thành phù hợp, được đi kèm với dòng sản
                                phẩm đã rất nổi tiếng. Chúng tôi hy vọng sẽ được phục vụ các bạn, nhằm mang đến chất
                                lượng sống cân bằng và thoải mái hơn. </p>
                            <a href="{{url('ve-chung-toi')}}">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fun-fact text-center ptb-10 ">
            <div class="container">
                <h3>Dịch vụ nổi bật</h2>
                    <div class="row service-content pt-5">
                        <div class=" col-sm-4  ">
                            <div class="box  zoom">
                                <div style="overflow: hidden;">
                                    <img src="{{asset('imgs/home/buoc1_thamkham_tyagfw.jpg')}}"
                                        class="img-responsive image" />
                                </div>
                                <a href="{{url('dichvu/da/mun')}}">
                                    <p class="title-products">CHUYÊN VỀ MỤN</p>
                                </a>
                            </div>
                        </div>
                        <div class=" col-sm-4">
                            <div class="box zoom ">
                                <div style="overflow: hidden;">
                                    <img src="{{asset('imgs/home/buoc2_lamsachda_ihexxe.jpg')}}"
                                        class="img-responsive image" />
                                </div>
                                <a href="{{url('dichvu/da/namtannhang')}}">
                                    <p class="title-products">CHUYÊN VỀ NÁM</p>
                                </a>

                            </div>
                        </div>
                        <div class=" col-sm-4">
                            <div class="box zoom">
                                <div style="overflow: hidden;">
                                    <img src="{{asset('imgs/home/covaigay_b1_puduuu.jpg')}}"
                                        class="img-responsive image" />

                                </div>
                                <a href="{{url('dichvu/duongsinh/dau')}}">
                                    <p class="title-products">DƯỠNG SINH</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="box zoom">
                                <div style="overflow: hidden;">
                                    <img src="{{asset('imgs/home/Charm-m%C3%A0y_ryrsny.jpg')}}"
                                        class="img-responsive image" />
                                </div>
                                <a href="{{url('dichvu/phuntheu/phunmay')}}">
                                    <p class="title-products">PHUN THÊU THẪM MỸ</p>
                                </a>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="box zoom">
                                <div style="overflow: hidden;">
                                    <img src="{{asset('imgs/home/77e2861e64579409cd46_z0a8fs.jpg')}}"
                                        class="img-responsive image" />
                                </div>
                                <a href="{{url('dichvu/xonghoigiammo/xonghoi')}}">
                                    <p class="title-products">XÔNG HƠI</p>
                                </a>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
        <!--fun fact area end-->
        <!--Gallery section start-->
        <div class="galllery ptb-100">
            <div class="container text-center">
                <h3>Hình ảnh tham khảo</h3>
            </div>
            <div class="gallery-tab-section">

                <div class="gallery-tab-content">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="all">
                            <div class="single-gallery-list owl_pagination">
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/1_oohybr.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/1_oohybr.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/2_ujasku.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/2_ujasku.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/3_buol8s.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/3_buol8s.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/4_gkpjbu.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/4_gkpjbu.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/5_pwlsqg.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/5_pwlsqg.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/6_p2hbn8.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/6_p2hbn8.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/7_oi61ho.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/7_oi61ho.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/8_ngmgru.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/8_ngmgru.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/9_an4tw2.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/9_an4tw2.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/10_ghdapb.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/10_ghdapb.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/11_bon09h.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/11_bon09h.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                                <div class="single-gallery">
                                    <div class="gallery-img">
                                        <img src="{{asset('imgs/home/hinhanh/12_ozhww8.jpg')}}"
                                            alt="">
                                        <a
                                            href="{{asset('imgs/home/hinhanh/12_ozhww8.jpg')}}"><i
                                                class="zmdi zmdi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
        <!--Gallery section end-->
        <!--Offer section start-->
        <div class="content">
            <div class="row">
                <div class="col-md-6 event-content">

                    <h style="border-left: solid 4px">
                        <a href="#">TIN TỨC & SỰ KIỆN</a>
                    </h>

                    <div class="col-12" style="margin-top: 12px;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-top fix">
                                        <div class="blog-img">
                                            <a href="#">
                                                <img src="{{asset('imgs/home/tintuc/9_elgoxo.jpg')}}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="blog-desc">
                                            <h6><a href="#">Dưỡng sinh vai cổ</a></h6>
                                            <p>Đau cổ vai gáy là tình trạng cơ vùng vai gáy co cứng gây đau, kèm theo
                                                các hạn chế vận động khi quay cổ hoặc quay đầu. Bệnh thường xuất hiện
                                                vào buổi sáng và có liên quan chặt chẽ đến hệ thống cơ xương khớp và
                                                mạch máu vùng vai gáy. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-top fix">
                                        <div class="blog-img">
                                            <a href="#">
                                                <img src="{{asset('imgs/home/tintuc/3_dm917m.jpg')}}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="blog-desc">
                                            <h6><a href="#">Kinh lạc đã thông</a></h6>
                                            <p>Dưỡng sinh chải thông kinh lạc được biết đến là một phương pháp cải
                                                thiện, giữ gìn sức khỏe cực kì hiệu quả, đặc biệt đối với phụ nữ </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-top fix">
                                        <div class="blog-img">
                                            <a href="#">
                                                <img src="{{asset('imgs/home/tintuc/b-2_qwrmbl.jpg')}}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="blog-desc">
                                            <h6><a href="#">Gội đầu dưỡng sinh</a></h6>
                                            <p>Gội đầu dưỡng sinh sẽ giúp các chị em đả thông kinh lạc, đem đến sự sảng
                                                khoái, duy trì một hệ thần kinh ổn định để có thể làm việc tốt hơn. </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 spa-content">

                    <h style="border-left: solid 4px; margin-left: -14px;">
                        <a href="#">BÍ QUYẾT LÀM ĐẸP</a>
                    </h>
                    <div class="row">
                        <div class="col-12" style="margin-top: 12px;">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="single-blog">
                                        <div class="single-blog-top fix">
                                            <div class="blog-img">
                                                <a href="#">
                                                    <img src="{{asset('imgs/home/tintuc/buoc1_thamkham_tyagfw.jpg')}}"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="blog-desc">
                                                <h6><a href="#">Bí mật của sức khỏe trường thọ</a></h6>
                                                <p>Vùng đầu là cơ quan quản lý của lục phủ ngũ tạng, thất kinh bát mạch.
                                                    Vùng đầu có
                                                    minh mẫn thì sức khỏe mới trường thọ, vạn sự mới thành công.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="single-blog">
                                        <div class="single-blog-top fix">
                                            <div class="blog-img">
                                                <a href="#">
                                                    <img src="{{asset('imgs/home/tintuc/IMG_8147_pha89n.jpg')}}"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="blog-desc">
                                                <h6><a href="#">Vấn đề về da</a></h6>
                                                <p>Khi bạn thấy da xuất hiện những đốm mụn trứng cá, bị phát ban đỏ, bị
                                                    ngứa ngáy khó
                                                    chịu,… kéo dài thì nên đi khám bác sĩ. Một nguyên nhân dẫn đến hiện
                                                    tượng này là
                                                    chất độc tích tụ nhiều trong cơ thể, gan không kịp chuyển hoá, đào
                                                    thải ra ngoài, khiến
                                                    da bị nổi mụn, mẩn đỏ, nổi mề đay…
                                                </p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="single-blog">
                                        <div class="single-blog-top fix">
                                            <div class="blog-img">
                                                <a href="#">
                                                    <img src="{{asset('imgs/home/tintuc/IMG_8132_tolufj.jpg')}}"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="blog-desc">
                                                <h6><a href="#">Trị liệu chuyên sâu cổ vai gáy</a></h6>
                                                <p>Bằng kỹ thuật chuyên sâu, tạo áp lực cơ học vào đầu ngón tay và cả
                                                    tác động nhiệt học
                                                    tức thời từ đá nóng , cao nóng – Trị liệu chuyên sâu #Vai_Cổ_Gáy có
                                                    khả năng kích
                                                    thích lưu thông khí huyết và giải tỏa căng cơ, cải thiện chức năng
                                                    cơ thể hiệu quả:
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>




@endsection