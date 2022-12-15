@extends('mainlayout')
@section('title', 'Điều trị mụn')
@section('content')

<div class="main">
            <div id="img-top">
                <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057249/images/dieutrida/3_v1cppn.jpg" width="100%" height="100%">
            </div>
            <div id="list">
                <p style="font-style: italic; font-size: 16px; margin-top: 20px; ">
                    Công Nghệ RF-Acacia Dũng Sỹ Trị Mụn Triệt Dầu Số 1 Hàn Quốc!
                </p>
                <div class="list-item">
                    <p>MỤC LỤC</p>
                    <ul>
                        <li>
                            <a href="#gioithieu">Giới thiệu về dịch vụ</a>
                        </li>
                        <li>
                            <a href="#hieuqua">Hiệu quả mang lại</a>
                        </li>
                        <li>
                            <a href="#uudiem">Ưu điểm vượt trội</a>
                        </li>
                        <li>
                            <a href="#ketqua">Kết quả trước sau</a>
                        </li>
                        <li>
                            <a href="#doituong">Đối tượng phù hợp</a>
                        </li>
                        <li>
                            <a href="#quytrinh">Quy trình thực hiện</a>
                        </li>
                        <li>
                            <a href="#cauhoi">Câu hỏi thường gặp</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div id="gioithieu">
                <div class="welcome-about">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 about-text">
                                <div class="about-desc">
                                    <div class="title-item">
                                        <span>1.GIỚI THIỆU DỊCH VỤ</span>
                                    </div>

                                    <p class="text-1" style="font-size: 16px; margin-top: 9px;">
                                        Acacia là công nghệ trị mụn thành công vượt bậc trên thế giới với kết quả đảm
                                        bảo mụn không tái phát, được phát minh bởi Tiến sỹ Park Kyoo Jong - người đã có
                                        hơn 20 năm kinh nghiệm trong ngành y. Máy Acacia được sử dụng bằng cách dùng mũi
                                        kim cách nhiệt truyền tần số điện RF 1.2Mhz bằng siêu vi kim châm vào các lỗ
                                        chân lông nơi tuyến bã nhờn hoạt động quá mức - nguyên nhân chính gây ra mụn các
                                        loại. Tuyến bã nhờn bị tấn công sẽ không còn tiết dầu thừa một cách không kiểm
                                        soát như trước nữa. Vi khuẩn ở khu vực da bị mụn sinh tồn trong bã nhờn, giờ đây
                                        không thể tiếp tục phát triển và tồn tại. Cả 2 yếu tố cốt lõi hình thành mụn là
                                        dầu thừa và vi khuẩn đều bị xử lý, vì thế, mụn không thể phát triển và không thể
                                        tái phát trở lại.</p>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="about-img" style="margin-top: 25px; margin-bottom: 35px;">
                                    <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057255/images/dieutrida/buoc1_thamkham_tyagfw.jpg" width="85%" height="280px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="hieuqua-uudiem" class="row" style="margin-top: 55px;">
                <div id="hieuqua" class="col-md-6">
                    <div class="title-item">
                        <span>2. HIỆU QUẢ MANG LẠI</span>
                    </div>
                    <div class="list-content">
                        <ul>
                            <li>
                                Tiêu diệt "tận gốc" vi khuẩn gây mụn
                            </li>
                            <li>
                                Loại bỏ nhân mụn và điều tiết tuyến bã nhờn mà không gây ra bất cứ tổn thương nào cho
                                các vùng mô của da
                            </li>
                            <li>
                                Triệt da dầu
                            </li>
                            <li>
                                Đẩy nhanh quá trình lưu thông bạch huyết giúp làm lành nhanh chóng các tổn thương trên
                                da.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="uudiem" class="col-md-6">
                    <div class="title-item">
                        <span>3. ƯU ĐIỂM VƯỢT TRỘI</span>
                    </div>
                    <div class="list-content">
                        <ul>
                            <li>
                                Thực hiện nhẹ nhàng, nhanh chóng
                            </li>
                            <li>
                                Không đau, không xâm lấn, không cần nghỉ dưỡng
                            </li>
                            <li>
                                Tiết kiệm tối đa thời gian, chi phí
                            </li>
                            <li>
                                Phù hợp với mọi loại da
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12" id="ketqua" style="margin-top: 40px;">
                    <div class="title-item">
                        <span>4. KẾT QUẢ THỰC HIỆN</span>
                    </div>
                    <!-- <div class="img-content" style="margin-top: 20px;">
                        <img src="../../images/dieutrida/4.jpg" width="100%" height="100%">

                    </div> -->
                    <div class="slider-container" style="margin-top: 20px;">
                        <!-- Slider Image -->
                        <div id="mainSlider" class="nivoSlider slider-image">
                            <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057258/images/dieutrida/TriMun-01_uufdtk.jpg" alt="" title="#htmlcaption1" width="100%" height="90%" style="width: 764px; visibility: hidden;">
                            <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" alt="" title="#htmlcaption2" width="100%" height="90%" style="width: 764px; visibility: hidden;">
                        <img class="nivo-main-image" src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="display: inline; height: 500px; width: 764px;"><div class="nivo-caption" style="display: block;"></div><div class="nivo-slice" name="0" style="left: 0px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-0px;"></div><div class="nivo-slice" name="1" style="left: 42px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-42px;"></div><div class="nivo-slice" name="2" style="left: 84px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-84px;"></div><div class="nivo-slice" name="3" style="left: 126px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-126px;"></div><div class="nivo-slice" name="4" style="left: 168px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-168px;"></div><div class="nivo-slice" name="5" style="left: 210px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-210px;"></div><div class="nivo-slice" name="6" style="left: 252px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-252px;"></div><div class="nivo-slice" name="7" style="left: 294px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-294px;"></div><div class="nivo-slice" name="8" style="left: 336px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-336px;"></div><div class="nivo-slice" name="9" style="left: 378px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-378px;"></div><div class="nivo-slice" name="10" style="left: 420px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-420px;"></div><div class="nivo-slice" name="11" style="left: 462px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-462px;"></div><div class="nivo-slice" name="12" style="left: 504px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-504px;"></div><div class="nivo-slice" name="13" style="left: 546px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-546px;"></div><div class="nivo-slice" name="14" style="left: 588px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-588px;"></div><div class="nivo-slice" name="15" style="left: 630px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-630px;"></div><div class="nivo-slice" name="16" style="left: 672px; width: 42px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-672px;"></div><div class="nivo-slice" name="17" style="left: 714px; width: 50px; height: 500px; opacity: 1; overflow: hidden; top: 0px;"><img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriMun2-01_euxnju.jpg" style="position:absolute; width:764px; height:auto; display:block !important; top:0; left:-714px;"></div></div><div class="nivo-controlNav"><a class="nivo-control" rel="0">1</a><a class="nivo-control active" rel="1">2</a></div>
                    </div>
                </div>
                <div class="col-md-12" id="doituong" style="margin-top: 40px;">
                    <div class="title-item">
                        <span>5. ĐỐI TƯỢNG PHÙ HỢP</span>
                    </div>
                    <div class="list-content">
                        <ul>
                            <li>
                                Những làn da bắt đầu có dấu hiệu lão hóa tự nhiên mà quá trình này thường bắt
                                đầu từ độ
                                tuổi 20
                            </li>
                            <li>
                                Làn da có tình trạng mụn đặc biệt là các loại mụn trứng cá
                            </li>
                            <li>
                                Làn da với nhiều nám, tàn nhang, sạm,… cần được làm trẻ hóa
                            </li>
                            <li>
                                Xuất hiện những đốm da sẫm màu rải rác hoặc tập trung thành cụm
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12" id="quytrinh" style="margin-top: 40px;">
                    <div class="title-item">
                        <span>6. QUY TRÌNH THỰC HIỆN</span>
                    </div>
                    <div>
                        <div class="row service-content pt-5">
                            <div class=" col-sm-3  ">
                                <div class="box  ">
                                    <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057255/images/dieutrida/buoc1_thamkham_tyagfw.jpg" class="img-responsive image  ">
                                    <p class="title-products">1. Thăm khám, tư vấn</p>
                                </div>
                            </div>
                            <div class=" col-sm-3  ">
                                <div class="box  ">
                                    <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057386/images/phunthieu/2_wywnkj.jpg" class="img-responsive image  ">
                                    <p class="title-products">2. Vệ sinh, làm sạch da</p>
                                </div>
                            </div>
                            <div class=" col-sm-3  ">
                                <div class="box  ">
                                    <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057252/images/dieutrida/buoc3_dieutri_ox6snn.jpg" class="img-responsive image  ">
                                    <p class="title-products">3. Tiến hành điều trị</p>
                                </div>
                            </div>
                            <div class=" col-sm-3  ">
                                <div class="box  ">
                                    <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057251/images/dieutrida/buoc2_lamsachda_ihexxe.jpg" class="img-responsive image  ">
                                    <p class="title-products">4.Chăm sóc, đắp mặt nạ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-video" style="margin-top: 15px;">
                        <span style="font-size: 18px; font-weight: 550 !important;">Video tham khảo:
                            <ul style="margin-top:10px; margin-left: 20px">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#videoModal"><i class="fab fa-youtube" style="color: red;"></i>&nbsp;Liệu trình mụn viêm hiệu quả</a>
                                </li>
                            </ul>

                        </span>
                        <!-- <video src="https://res.cloudinary.com/spaphucngan/video/upload/v1639057118/videos/nam_h2w4r0.mp4"></video> -->
                    </div>
                    <div id="videoModal" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="margin-top: 100px">
                            <div class="modal-content">


                                <div class="modal-body">
                                    <video width="100%" height="500px" controls="" __idm_id__="163843">
                                        <source src="https://res.cloudinary.com/spaphucngan/video/upload/v1639057060/videos/mun_oasagf.mp4" type="video/mp4">

                                    </video>
                                </div>


                            </div>
                        </div>
                    </div>



                    <div class="col-md-12" id="cauhoi" style="margin-top: 40px;">
                        <div class="title-item">
                            <span>7. CÂU HỎI THƯỜNG GẶP</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-item" style="border: none !important; margin-top: 20px;">
                                    <span>1. Trị mụn có khỏi vĩnh viễn được không?</span>
                                </div>
                                <div class="list-content">
                                    <span>Mụn có thể điều trị khỏi được, nếu bạn chăm sóc da đúng cách,Lối sống
                                        khoa học
                                        lành mạnh và tuân thủ phác đồ Skincare chuẩn nhé.

                                        Điều đặc biệt là khi cấu trúc da của bạn tốt, được phục hồi thì hoàn
                                        toàn. Thì
                                        mỗi khi đến chu kỳ kinh, hay Stress, thức đêm thì Mụn có thể lên lại
                                        nhưng không
                                        nhiều và nhanh khỏi.
                                        Do đó, Nếu lối sống không lành mạnh, cấu trúc da không được phục hồi,
                                        chăm sóc
                                        da đúng cách thì việc tái lại là rất cao. Thậm chí lên đến 60-70%</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-item" style="border: none !important; margin-top: 20px;">
                                    <span>2. Trị mụn có khỏi thâm không?</span>
                                </div>
                                <div class="list-content">
                                    <span>Nên Nếu muốn điều trị thâm thì cần phải điều trị dứt điểm tình trạng
                                        mụn, đặc
                                        biệt là mụn viêm mủ nặng. Bởi vì khi mụn viêm sẽ để lại rất nhiều vết
                                        thâm. Có
                                        mụn mới thì sẽ có vết thâm mới.

                                        Vì vậy, điều trị mụn,Các Bác sĩ sẽ ưu tiên lựa chọn các phương pháp
                                        kháng viêm,
                                        khu trú tổn thương, hạn chế gây tổn thương mô, ưu tiên phục hồi da. Bí
                                        kíp trị
                                        thâm: Da khỏe thâm cũng sẽ hết nhanh hơn.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-item" style="border: none !important; margin-top: 20px;">
                                    <span>4. Mang thai có trị mụn được không?</span>
                                </div>
                                <div class="list-content">
                                    <span>Mang thai là thời điểm rất nhiều bạn nữ bị mụn trứng cá trầm trọng.
                                        Cũng có
                                        nhiều bạn sau khi sinh nở xong muộn lại giảm đi. Vậy có cần điều trị khi
                                        mang
                                        thai không. Chắc chắn rồi nếu chúng ta không điều trị thì lúc mang thai
                                        xong các
                                        di chứng để lại do mụn sẽ rất trầm trọng. Ví dụ thâm, đặc biệt là sẹo
                                        lõm làm
                                        cho các chị em mất đi rất nhiều sự tự tin.

                                        Mang thai vẫn có thể điều trị mụn. Tuy nhiên nên tránh các sản phẩm có
                                        thành
                                        phần từ vitamin A. Retinol, Retinoids, …. </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-item" style="border: none !important; margin-top: 20px;">
                                    <span>3. Trị mụn có cần thiết phải nặn mụn không?</span>
                                </div>
                                <div class="list-content">
                                    <span>Điều đó có nghĩa là không cần nặn mụn vẫn có thể điều trị khỏi được.
                                        Khi chúng
                                        ta không làm sạch, không vô khuẩn tốt, đặc biệt là đôi tay có rất nhiều
                                        vi
                                        khuẩn. Nên khi kẹt nặng không đảm bảo vệ sinh sẽ làm mụn viêm và vết
                                        thâm nhiều
                                        hơn. </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

@endsection