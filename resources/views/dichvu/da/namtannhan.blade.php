@extends('mainlayout')
@section('title', 'Nám tàn nhan')
@section('content')

<div class="main">
            <div id="img-top">
                <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriNamThuyCham_mmooty.jpg" width="100%" height="100%">
            </div>
            <div id="list">
                <p style="font-style: italic; font-size: 16px; margin-top: 20px; ">
                    Thủy châm chân nám là kỹ thuật điều trị y khoa mới với sự cộng hưởng của máy laser FFP CellToning và
                    tế bào mầm MF3 có khả năng tác động, kích thích vào sâu chân nám tiêu diệt tận gốc nám mảng, nám
                    chân sâu và nám lâu năm.
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

                                    <p class="text-1" style="font-size: 16px; margin-top: 9px;">Là phương pháp vượt trội
                                        hơn hẳn những phương pháp thông thường bởi khả năng tiêu diệt nám lên đến 98% và
                                        ngăn ngừa nám tái phát đến 300%. Với khả năng tấn công vào tận sâu chân nám,
                                        thủy chân chân nám giúp đánh bật cả nám mảng, nám chân sâu và các loại nám lâu
                                        năm.

                                        Ngoài khả năng điều trị nám tận gốc, thủy chân chân nám còn có cơ chế giúp cung
                                        cấp các vitamin và tái sinh các sợi cơ collagen giúp trẻ hóa và tăng tính đàn
                                        hồi cho da.

                                        Đặc biệt hơn hẳn các phương pháp laser thông thường khác, thủy chân chân nám có
                                        khả năng làm nhỏ lỗ chân lông sau quá trình điều trị nám và làm dịu nhẹ làn da,
                                        không hề gây đau rát.</p>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="about-img" style="margin-top: 25px; margin-bottom: 35px;">
                                    <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057265/images/dieutrida/trinam_i99hqk.jpg" width="85%" height="280px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="hieuqua-uudiem" class="row" style="margin-top: 40px;">
                <div id="hieuqua" class="col-md-6">
                    <div class="title-item">
                        <span>2. HIỆU QUẢ MANG LẠI</span>
                    </div>
                    <div class="list-content">
                        <ul>
                            <li>
                                Đánh bật tận gốc mọi loại nám, kể cả nám lâu năm khó trị
                            </li>
                            <li>
                                Phá hủy các hắc sắc tố gây thâm xỉn, tế bào chết trên bề mặt da
                            </li>
                            <li>
                                Kích thích sản sinh Collagen và Elastin giúp da đàn hồi, săn chắc
                            </li>
                            <li>
                                Thúc đẩy quá trình tái tạo, nuôi dưỡng da khỏe mạnh từ bên trong
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
                            <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriNam-01_axiu6y.jpg" alt="" title="#htmlcaption1" width="100%" height="90%" style="display: none;">
                            <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057259/images/dieutrida/TriNam2-02_ijzktn.jpg" alt="" title="#htmlcaption2" width="100%" height="90%" style="display: none;">
                        <img class="nivo-main-image" src="https://res.cloudinary.com/spaphucngan/image/upload/v1639057260/images/dieutrida/TriNam-01_axiu6y.jpg" style="display: inline;"><div class="nivo-caption" style="display: block;"></div></div><div class="nivo-controlNav"><a class="nivo-control active" rel="0">1</a><a class="nivo-control" rel="1">2</a></div>

                    </div>
                </div>
                <div class="col-md-12" id="doituong" style="margin-top: 40px;">
                    <div class="title-item">
                        <span>5. ĐỐI TƯỢNG PHÙ HỢP</span>
                    </div>
                    <div class="list-content">
                        <ul>
                            <li>
                                Làn da có biểu hiện xỉn màu, xuất hiện nám da ở gò má, trán và cằm
                            </li>
                            <li>
                                Xuất hiện những đốm da sẫm màu rải rác hoặc tập trung thành cụm
                            </li>
                            <li>
                                Nám chân sâu có màu đen sẫm, màu xám hoặc màu xanh xám
                            </li>
                            <li>
                                Phụ nữ sau tuổi 30 và tiền mãn kinh – Đối tượng dễ bị nám chân sâu
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

                    <div style="margin-top: 15px;">
                        <span style="font-size: 18px; font-weight: 550 !important;">Video tham khảo:
                            <ul style="margin-top:10px; margin-left: 20px">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#videoModal"><i class="fab fa-youtube" style="color: red;"></i>&nbsp;Trị nám
                                        sâu</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#videoModal1"><i class="fab fa-youtube" style="color: red;"></i>&nbsp;Dưỡng da với vitaminC</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#videoModal2"><i class="fab fa-youtube" style="color: red;"></i>&nbsp;Thay da sinh học</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#videoModal3"><i class="fab fa-youtube" style="color: red;"></i>&nbsp;Căng bóng da collagen</a>
                                </li>
                            </ul>

                        </span>
                        <!-- <video src="https://res.cloudinary.com/spaphucngan/video/upload/v1639057118/videos/nam_h2w4r0.mp4"></video> -->
                    </div>
                    <div id="videoModal" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="margin-top: 100px">
                            <div class="modal-content">


                                <div class="modal-body">
                                    <video width="100%" height="500px" controls="">
                                        <source src="https://res.cloudinary.com/spaphucngan/video/upload/v1639057118/videos/nam_h2w4r0.mp4" type="video/mp4">

                                    </video>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="videoModal1" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="margin-top: 100px">
                            <div class="modal-content">


                                <div class="modal-body">
                                    <video width="100%" height="500px" controls="" __idm_id__="172036">
                                        <source src="https://res.cloudinary.com/spaphucngan/video/upload/v1639057149/videos/vitaminc_ubfblr.mp4" type="video/mp4">

                                    </video>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="videoModal2" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="margin-top: 100px">
                            <div class="modal-content">


                                <div class="modal-body">
                                    <video width="100%" height="500px" controls="" __idm_id__="172035">
                                        <source src="https://res.cloudinary.com/spaphucngan/video/upload/v1639057060/videos/sinhhoc_rfdnuh.mp4" type="video/mp4">

                                    </video>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="videoModal3" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="margin-top: 100px">
                            <div class="modal-content">


                                <div class="modal-body">
                                    <video width="100%" height="500px" controls="" __idm_id__="172037">
                                        <source src="https://res.cloudinary.com/spaphucngan/video/upload/v1639057019/videos/collagen_n4cgvd.mp4" type="video/mp4">

                                    </video>
                                </div>


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
                                <span>1. Hiệu quả của trị nám bằng công nghệ Thủy châm Nhật Bản là gì?</span>
                            </div>
                            <div class="list-content">
                                <span>Là phương pháp vượt trội hơn hẳn những phương pháp thông thường bởi khả năng tiêu
                                    diệt nám lên đến 98% và ngăn ngừa nám tái phát đến 300%. Với khả năng tấn công vào
                                    tận sâu chân nám, thủy chân chân nám giúp đánh bật cả nám mảng, nám chân sâu và các
                                    loại nám lâu năm.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="title-item" style="border: none !important; margin-top: 20px;">
                                <span>2. Da bị tổn thương do dùng kem trị nám kém chất lượng trong thời gian dài có được
                                    sử dụng công nghệ thủy châm Nhật bản được không?</span>
                            </div>
                            <div class="list-content">
                                <span>Khi sử dụng kem trị nám hoặc mỹ phẩm kém chất lượng trong thời gian dài, da bạn sẽ
                                    bị bào mòn đáng kể và không ngoại trừ tình trạng nám sẽ nặng và đậm hơn. Trước khi
                                    đi vào điều trị bằng công nghệ thủy châm Nhật Bản, các chuyên gia sẽ thăm khám tận
                                    tình để
                                    xác định tình trạng da và lên phác đồ hợp lý nên không cần phải quá lo lắng nếu như
                                    “lỡ” dùng các loại kem trôi nổi trước đây.</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="title-item" style="border: none !important; margin-top: 20px;">
                                <span>3. Chị điều trị xong da có bị đỏ không , có phải ăn kiêng gì không ?</span>
                            </div>
                            <div class="list-content">
                                <span>Sau khi điều trị da chị hồng nhẹ thôi, và khoảng sau 1 tiếng là hết nha chị. Đối
                                    với da sau laser chị chăm sóc bình thường không kiêng gì hết nha chị, chuyên viên
                                    cũng sẽ hướng dẫn thêm cho chị nên chị an tâm nha. </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
@endsection