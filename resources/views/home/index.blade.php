@extends('layouts.master')

@section('title', 'Trang chủ')

@section('slider')
    @parent
    @if (Auth::check())
        You are logged in. {!! Html::link('logout', 'Logout') !!}
    @else
        You are not logged in. {!! Html::link('login', 'Login') !!}
    @endif
<!-- {{$variable1}}
{{$infors['name']}} -->
    <!-- Slider  homeslide-->
    <section class="slider">
        <div class="container">
            <div class="homeslide">
                <div class="flexslider">
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-1170px, 0px, 0px);">
                            <li class="clone" aria-hidden="true" style="width: 1170px; float: left; display: block;"><img src="./images/slider/slider1.jpg" alt="slide" draggable="false"></li>
                            <li class="flex-active-slide.jpg" style="width: 1170px; float: left; display: block;"><img src="./images/slider/slider2.jpg" alt="slide" draggable="false"></li>
                            <li style="width: 1170px; float: left; display: block;" class=""><img src="./images/slider/slider3.jpg" alt="slide" draggable="false"></li>
                            <li style="width: 1170px; float: left; display: block;" class=""><img src="./images/slider/slider4.jpg" alt="slide" draggable="false"></li>                            
                        </ul>
                    </div>
                    <ol class="flex-control-nav flex-control-paging">
                        <li><a class="flex-active">1</a></li>
                        <li><a class="">2</a></li>
                        <li><a class="">3</a></li>
                    </ol>
                    <ul class="flex-direction-nav">
                        <li><a class="flex-prev" href="#">Previous</a></li>
                        <li><a class="flex-next" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider homeslide-->
@endsection

<!-- Informaster -->
@section('infomaster')
    <div class="infomaster">
        <div class="hotline">
            <h2>{{$infors['mobile']}}</h2> Hỗ trợ 24/7
        </div>
        <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>{{$infors['name']}}</h2>
    </div>
@endsection
<!-- End informaster -->

@section('right-content')
    <!-- Right content -->
                <div class="col-dl-9 right-content">
                    <div class="wrapper">
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Xe khuyến mãi<img src="./images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>
                        <!-- Product Xe khuyen mai-->
                        <div class="content">
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="E200 Edition E"></a>
                                    </div>
                                    <h4><a href="/chitiet">E200 Edition E</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.049.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="E200"></a>
                                    </div>
                                    <h4><a href="/chitiet">E200</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.999.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="CLA200"></a>
                                    </div>
                                    <h4><a href="/chitiet">CLA200</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.489.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="C200"></a>
                                    </div>
                                    <h4><a href="/chitiet">C200</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.439.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="V220 CDI"></a>
                                    </div>
                                    <h4><a href="/chitiet">V220 CDI</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.569.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="CLA250 4Matic"></a>
                                    </div>
                                    <h4><a href="/chitiet">CLA250 4Matic</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.819.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End product xe khuyen mai -->
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Xe nhập khẩu<img src="./images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>

                        <!-- Xe nhap khau -->
                        <div class="content">
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="GLE400 4Matic"></a>
                                    </div>
                                    <h4><a href="/chitiet">GLE400 4Matic</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.519.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="G300 CDI"></a>
                                    </div>
                                    <h4><a href="/chitiet">G300 CDI</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 4.369.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="SLS AMG Coupe"></a>
                                    </div>
                                    <h4><a href="/chitiet">SLS AMG Coupe</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 12.790.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="CLS350 AMG"></a>
                                    </div>
                                    <h4><a href="/chitiet">CLS350 AMG</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 4.199.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="AMG GTS"></a>
                                    </div>
                                    <h4><a href="/chitiet">AMG GTS</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 9.149.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="SL400 2Look"></a>
                                    </div>
                                    <h4><a href="/chitiet">SL400 2Look</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 5.799.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End xe nhap khau -->
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Xe đã qua sử dụng<img src="./images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>
                        <!-- Xe cu -->
                        <div class="content">
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="E400 AMG 2013"></a>
                                    </div>
                                    <h4><a href="/chitiet">E400 AMG 2013</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.650.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="/chitiet"><img src="./images/flace.png" alt="S500"></a>
                                    </div>
                                    <h4><a href="/chitiet">S500</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: Liên hệ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End xe cu -->
                    </div>
                </div>
                <!-- End right content -->
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
