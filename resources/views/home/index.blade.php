@extends('layouts.master')

@section('title', 'Page home index.php')

@section('sidebar')
    @parent
{{$variable1}}
    <!-- Slider  homeslide-->
    <section class="slider">
        <div class="container">
            <div class="homeslide">
                <div class="flexslider">
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-1170px, 0px, 0px);">
                            <li class="clone" aria-hidden="true" style="width: 1170px; float: left; display: block;"><img src="http://lorempixel.com/1170/400/animals/1" alt="slide" draggable="false"></li>
                            <li class="flex-active-slide" style="width: 1170px; float: left; display: block;"><img src="http://lorempixel.com/1170/400/animals/2" alt="slide" draggable="false"></li>
                            <li style="width: 1170px; float: left; display: block;" class=""><img src=".http://lorempixel.com/1170/400/animals/3" alt="slide" draggable="false"></li>
                            <li style="width: 1170px; float: left; display: block;" class=""><img src="http://lorempixel.com/1170/400/animals/4" alt="slide" draggable="false"></li>
                            <li class="clone" aria-hidden="true" style="width: 1170px; float: left; display: block;"><img src="http://lorempixel.com/1170/400/animals/5" alt="slide" draggable="false"></li>
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
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-53/E200-Edition-E.html"><img src="./home_files/mercedes e200 edition e.jpg" alt="E200 Edition E"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-53/E200-Edition-E.html">E200 Edition E</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.049.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-12/E200.html"><img src="./home_files/E200 (1).jpg" alt="E200"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-12/E200.html">E200</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.999.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-7/CLA200.html"><img src="./home_files/cla200.PNG" alt="CLA200"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-7/CLA200.html">CLA200</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.489.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-4/C200.html"><img src="./home_files/C200.jpg" alt="C200"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-4/C200.html">C200</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.439.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-43/V220-CDI.html"><img src="./home_files/215_The_new_Mercedes-Benz_V-Class_front.jpg" alt="V220 CDI"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-43/V220-CDI.html">V220 CDI</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.569.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-10/CLA250-4Matic.html"><img src="./home_files/cla250.PNG" alt="CLA250 4Matic"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-10/CLA250-4Matic.html">CLA250 4Matic</a></h4>
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
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-48/GLE400-4Matic.html"><img src="./home_files/mercedes gle(1).jpg" alt="GLE400 4Matic"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-48/GLE400-4Matic.html">GLE400 4Matic</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.519.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-45/G300-CDI.html"><img src="./home_files/Mercedes-Benz-G350_.jpg" alt="G300 CDI"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-45/G300-CDI.html">G300 CDI</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 4.369.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-41/SLS-AMG-Coupe.html"><img src="./home_files/Mercedes-Benz-SLS_AMG_GT_2013_800x600_wallpaper_09.jpg" alt="SLS AMG Coupe"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-41/SLS-AMG-Coupe.html">SLS AMG Coupe</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 12.790.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-38/CLS350-AMG.html"><img src="./home_files/CLS350.jpg" alt="CLS350 AMG"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-38/CLS350-AMG.html">CLS350 AMG</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 4.199.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-37/AMG-GTS.html"><img src="./home_files/Mercedes-Benz-AMG_GT_2016_800x600_wallpaper_02.jpg" alt="AMG GTS"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-37/AMG-GTS.html">AMG GTS</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 9.149.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/dong-xe-36/SL400-2Look.html"><img src="./home_files/SL400.PNG" alt="SL400 2Look"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-36/SL400-2Look.html">SL400 2Look</a></h4>
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
                                        <a href="http://mercedesvietnamstar.vn/x1/E400-AMG-2013.html"><img src="./home_files/hinh-nho.JPG" alt="E400 AMG 2013"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/x1/E400-AMG-2013.html">E400 AMG 2013</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.650.000.000 VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="http://mercedesvietnamstar.vn/x2/S500.html"><img src="./home_files/mercedes s500 nền.JPG" alt="S500"></a>
                                    </div>
                                    <h4><a href="http://mercedesvietnamstar.vn/x2/S500.html">S500</a></h4>
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
