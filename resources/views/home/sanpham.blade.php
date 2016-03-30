@extends('layouts.master')

@section('title', 'Sản phẩm mới')

@section('slider')
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

<!-- Informaster -->
@section('infomaster')
    <div class="infomaster">
        <div class="hotline">
            <h2>0909 222 022</h2> Hỗ trợ 24/7
        </div>
        <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>Nguyễn Văn Quý</h2>
    </div>
@endsection
<!-- End informaster -->

@section('right-content')
    <!-- Right content -->
	<div class="col-dl-9 right-content">
	    <div class="wrapper">
	        <h3 class="titlel row-title"><span>Xe mới<img src="./images/icon-3.png" alt="danh muc"></span></h3>
	        <div class="clearfix"></div>
	        <div class="content">
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-53/E200-Edition-E.html"><img src="./images/mercedes e200 edition e.jpg" alt="E200 Edition E"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-53/E200-Edition-E.html">E200 Edition E</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.049.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-48/GLE400-4Matic.html"><img src="./images/mercedes gle(1).jpg" alt="GLE400 4Matic"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-48/GLE400-4Matic.html">GLE400 4Matic</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.519.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-45/G300-CDI.html"><img src="./images/Mercedes-Benz-G350_.jpg" alt="G300 CDI"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-45/G300-CDI.html">G300 CDI</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 4.369.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-42/V116-CDI.html"><img src="./images/vito 220.jpg" alt="V116 CDI"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-42/V116-CDI.html">V116 CDI</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: Liên hệ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-41/SLS-AMG-Coupe.html"><img src="./images/Mercedes-Benz-SLS_AMG_GT_2013_800x600_wallpaper_09.jpg" alt="SLS AMG Coupe"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-41/SLS-AMG-Coupe.html">SLS AMG Coupe</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 12.790.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-38/CLS350-AMG.html"><img src="./images/CLS350.jpg" alt="CLS350 AMG"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-38/CLS350-AMG.html">CLS350 AMG</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 4.199.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-37/AMG-GTS.html"><img src="./images/Mercedes-Benz-AMG_GT_2016_800x600_wallpaper_02.jpg" alt="AMG GTS"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-37/AMG-GTS.html">AMG GTS</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 9.149.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-36/SL400-2Look.html"><img src="./images/SL400.PNG" alt="SL400 2Look"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-36/SL400-2Look.html">SL400 2Look</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 5.799.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-35/SLK350.html"><img src="./images/SLK350.jpg" alt="SLK350"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-35/SLK350.html">SLK350</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.499.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-30/GLA200.html"><img src="./images/GLA200.PNG" alt="GLA200"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-30/GLA200.html">GLA200</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.519.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-22/GLC250-2016.html"><img src="./images/260X130.jpg" alt="GLC250 2016"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-22/GLC250-2016.html">GLC250 2016</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.749.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-12/E200.html"><img src="./images/E200 (1).jpg" alt="E200"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-12/E200.html">E200</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.999.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-9/S400L.html"><img src="./images/S400.PNG" alt="S400L"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-9/S400L.html">S400L</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.669.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-8/GLS350-CDI.html"><img src="./images/GL350 (1).PNG" alt="GLS350 CDI"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-8/GLS350-CDI.html">GLS350 CDI</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.899.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-7/CLA200.html"><img src="./images/cla200.PNG" alt="CLA200"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-7/CLA200.html">CLA200</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.489.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-4/C200.html"><img src="./images/C200.jpg" alt="C200"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-4/C200.html">C200</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.439.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-1/A200-2016.html"><img src="./images/2.jpg" alt="A200 2016"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-1/A200-2016.html">A200 2016</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.339.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="product">
	                <div class="products">
	                    <div class="product_img">
	                        <a href="http://mercedesvietnamstar.vn/dong-xe-49/GLE400-Exclusive.html"><img src="./images/mercedes gle (5) - Copy(1).jpg" alt="GLE400 Exclusive"></a>
	                    </div>
	                    <h4><a href="http://mercedesvietnamstar.vn/dong-xe-49/GLE400-Exclusive.html">GLE400 Exclusive</a></h4>
	                    <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 3.849.000.000 VNĐ</span><span class="spleft spright"></span></div>
	                </div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="pagination" align="right">
	                <span>1</span>
	                <a href="http://mercedesvietnamstar.vn/san-pham/trang-2.html">2</a> <a href="http://mercedesvietnamstar.vn/san-pham/trang-3.html">3</a> <a href="http://mercedesvietnamstar.vn/san-pham/trang-2.html">&gt;</a>
	                <a href="http://mercedesvietnamstar.vn/san-pham/trang-3.html">&gt;&gt;</a>
	            </div>
	            <!--pagination-->
	        </div>
	    </div>
	</div>
    <!-- End right content -->
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
