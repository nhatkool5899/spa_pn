@extends('mainlayout')
@section('title', 'Tin tức')
@section('content')
<div class="news">
            <div class="container">
                <div class="head-title">
                    <h3>Tin tức</h3>
                </div>
                <div class="row lists-news">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <a href="/tintuc/tintuc1">
                            <div class="wrap-news">
                                <div class="img-news">
                                    <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1643278959/news/7950752545b088eed1a1_q08zb2.jpg" alt="">
                                </div>
                                <div class="bottom-title">
                                    <span>
                                        Chương trình chia sẻ khó khăn
                                    </span>

                                </div>
                            </div>
                        </a>


                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <a href="/tintuc/tintuc2">
                            <div class="wrap-news">
                                <div class="img-news">
                                    <img src="https://res.cloudinary.com/spaphucngan/image/upload/v1643284765/news/pn_c7ohou.jpg" alt="">
                                </div>
                                <div class="bottom-title">
                                    <span>
                                        Chiêu sinh khóa kỹ thuật viên chuyên sâu đầu năm 2022
                                    </span>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <a href="/tintuc/tintuc3">
                            <div class="wrap-news">
                                <div class="img-news">
                                    <img src="https://res.cloudinary.com/spa-d24/image/upload/v1653298483/52ab7d69f12731796836_wgbnmr.jpg" alt="">
                                </div>
                                <div class="bottom-title">

                                    <div>
                                        <span>
                                            Đại hội - Hội nữ doanh nhân Thành Phố Cần Thơ
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
@endsection