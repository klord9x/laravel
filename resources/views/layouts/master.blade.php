<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Toyota - @yield('title')</title>

    <!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	{!! Html::style('/css/bootstrap.css') !!}	
	{!! Html::style('/css/flexslider.css') !!}
	{!! Html::style('/css/style.css') !!}

	<!-- global js -->
    {!! Html::script('/js/jquery.min.js') !!}
    {!! Html::script('/js/jquery.flexslider.js') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

<div id="overlay" class="overlay"></div>
    <!-- Header -->
    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
        <div class="container header">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand"><img src="./images/logo.png" alt="logo"></a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse navmenus">
                <div class="hotline">
                    <h2>{{$infors['mobile']}}</h2> Hỗ trợ 24/7
                </div>
                <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>{{$infors['name']}}</h2>
                <div class="clearfix"></div>
                <div class="navmenuss">
                    <ul class="nav navbar-nav navbar-right nav-menus">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="/lienhe">Giới thiệu</a></li>
                        <li><a href="/sanpham">Xe mới</a></li>
                        <li><a href="/sanpham">Xe đã qua sử dụng</a></li>
                        <li><a href="/lienhe">Khuyến mãi</a></li>
                        <li><a href="/tintuc">Tin tức</a></li>
                        <li><a href="/lienhe">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End header -->

    <!-- Start slider -->
	@section('slider')
     @show
    <!-- End slider. -->
    <section>
        <div class="container toplink clearfix">
            <ul>
                <li><a href="#">Đăng ký lái thử</a></li>
                <li><a href="#">Mua xe trả góp</a></li>
                <li><a href="#">Tài chính &amp; Bảo hiểm</a></li>
                <li><a href="#">Bảng giá xe</a></li>
                <li><a href="#">Chứng nhận xe cũ chính hãng</a></li>
            </ul>            
            @yield('infomaster')
        </div>
    </section>
    <!-- Content center -->
    <section>
        <div class="container clearfix content-center">
            <div class="row-data">
                <!-- Left content -->
                <div class="col-dl-3 left-content">
                    <h3 class="titlel"><span>Các dòng xe<img src="./images/icon-3.png" alt="danh muc"></span></h3>
                    <div class="left-menus">
                        <ul class="left-menu">
                            <li><a href="/chitiet">Toyota A</a></li>
                            <li><a href="/chitiet">Toyota C </a></li>
                            <li><a href="/chitiet">Toyota CLA</a></li>
                            <li><a href="/chitiet">Toyota E </a></li>
                            <li><a href="/chitiet">Toyota S </a></li>
                            <li><a href="/chitiet">Toyota GLA</a></li>
                            <li><a href="/chitiet">Toyota GLC</a></li>
                            <li><a href="/chitiet">Toyota GLE</a></li>
                            <li><a href="/chitiet">Toyota GLS</a></li>
                            <li><a href="/chitiet">Toyota G</a></li>
                            <li><a href="/chitiet">Toyota SLK </a></li>
                            <li><a href="/chitiet">Toyota CLS</a></li>
                            <li><a href="/chitiet">Toyota SL400</a></li>
                            <li><a href="/chitiet">Toyota-AMG GTS</a></li>
                            <li><a href="/chitiet">Toyota-AMG SLS 63</a></li>
                            <li><a href="/chitiet">Toyota V</a></li>
                        </ul>
                        <button type="button" class="navbar-button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Main menu -->
                    <ul class="mainmenu">
                        <li><a href="/chitiet">Toyota A</a>
                            <ul>
                                <li><a href="/chitiet">A200 2016</a></li>
                                <li><a href="/chitiet">A250 Sport 2016</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota C </a>
                            <ul>
                                <li><a href="/chitiet">C200</a></li>
                                <li><a href="/chitiet">C250 Exclusive</a></li>
                                <li><a href="/chitiet">C250 AMG</a></li>
                                <li><a href="/chitiet">C300 AMG</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota CLA</a>
                            <ul>
                                <li><a href="/chitiet">CLA200</a></li>
                                <li><a href="/chitiet">CLA250 4Matic</a></li>
                                <li><a href="/chitiet">CLA45 4Matic</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota E </a>
                            <ul>
                                <li><a href="/chitiet">E200 Edition E</a></li>
                                <li><a href="/chitiet">E200</a></li>
                                <li><a href="/chitiet">E250 AMG</a></li>
                                <li><a href="/chitiet">E400 </a></li>
                                <li><a href="/chitiet">E400 Cabriolet</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota S </a>
                            <ul>
                                <li><a href="/chitiet">S400L</a></li>
                                <li><a href="/chitiet">S500L</a></li>
                                <li><a href="/chitiet">S63AMG 4Matic</a></li>
                                <li><a href="/chitiet">S500 4Matic Coupe</a></li>
                                <li><a href="/chitiet">S63AMG Coupe</a></li>
                                <li><a href="/chitiet">S600 Maybach</a></li>
                                <li><a href="/chitiet">S600 Pullman 2016</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota GLA</a>
                            <ul>
                                <li><a href="/chitiet">GLA200</a></li>
                                <li><a href="/chitiet">GLA250</a></li>
                                <li><a href="/chitiet">GLA45 AMG</a></li>
                                <li><a href="/chitiet">GLA45 AMG Edition 1</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota GLC</a>
                            <ul>
                                <li><a href="/chitiet">GLC250 2016</a></li>
                                <li><a href="/chitiet">GLC300 2016</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota GLE</a>
                            <ul>
                                <li><a href="/chitiet">GLE400 4Matic</a></li>
                                <li><a href="/chitiet">GLE400 Exclusive</a></li>
                                <li><a href="/chitiet">GLE400 Coupe</a></li>
                                <li><a href="/chitiet">GLE450 AMG Coupe</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota GLS</a>
                            <ul>
                                <li><a href="/chitiet">GLS350 CDI</a></li>
                                <li><a href="/chitiet">GLS400 </a></li>
                                <li><a href="/chitiet">GLS500 AMG</a></li>
                                <li><a href="/chitiet">GLS63 AMG</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota G</a>
                            <ul>
                                <li><a href="/chitiet">G300 CDI</a></li>
                                <li><a href="/chitiet">G500 Edition</a></li>
                                <li><a href="/chitiet">G63 AMG</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota SLK </a>
                            <ul>
                                <li><a href="/chitiet">SLK350</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota CLS</a>
                            <ul>
                                <li><a href="/chitiet">CLS350 AMG</a></li>
                                <li><a href="/chitiet">CLS400</a></li>
                                <li><a href="/chitiet">CLS500 4Matic</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota SL400</a>
                            <ul>
                                <li><a href="/chitiet">SL400 2Look</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota-AMG GTS</a>
                            <ul>
                                <li><a href="/chitiet">AMG GTS</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota-AMG SLS 63</a>
                            <ul>
                                <li><a href="/chitiet">SLS AMG Coupe</a></li>
                            </ul>
                        </li>
                        <li><a href="/chitiet">Toyota V</a>
                            <ul>
                                <li><a href="/chitiet">V116 CDI</a></li>
                                <li><a href="/chitiet">V220 CDI</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End main menu -->
                </div>
                <!-- End left content -->

                <!-- Right content -->
                @yield('right-content')
                <!-- End right content -->
                <div class="clearfix"></div>
            </div>

            <!-- Tin tuc -->
            <div class="row-data">
                <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Tin tức - Sự kiện<img src="./images/icon-3.png" alt="danh muc"></span></h3>
                <div class="clearfix"></div>
                <div class="home-news">
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="/tintuc"><img src="./images/flace2.png" alt="Toyota C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T"></a>
                        </div>
                        <h5><a href="/tintuc" title="Toyota C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T">Toyota C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="/tintuc"><img src="./images/flace2.png" alt="Hình ảnh thực tế xe Toyota E200 Edition E 2015 2016 "></a>
                        </div>
                        <h5><a href="/tintuc" title="Hình ảnh thực tế xe Toyota E200 Edition E 2015 2016 ">Hình ảnh thực tế xe Toyota E200 Edition E 2015 2016 </a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="/tintuc"><img src="./images/flace2.png" alt="Toyota A-Class bản nâng cấp sẽ chính thức ra mắt năm 2016."></a>
                        </div>
                        <h5><a href="/tintuc" title="Toyota A-Class bản nâng cấp sẽ chính thức ra mắt năm 2016.">Toyota A-Class bản nâng cấp sẽ chính thức ra mắt năm 2016.</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="/tintuc"><img src="./images/flace2.png" alt="Tuần lễ thời trang của Toyota Việt Nam đang diễn ra tại Hà Nội."></a>
                        </div>
                        <h5><a href="/tintuc" title="Tuần lễ thời trang của Toyota Việt Nam đang diễn ra tại Hà Nội.">Tuần lễ thời trang của Toyota Việt Nam đang diễn ra tại Hà Nội.</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- End tin tuc -->

            <!-- Tin cong nghe -->
            <div class="row-data">
                <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Chường trình khuyến mãi<img src="./images/icon-3.png" alt="danh muc"></span></h3>
                <div class="clearfix"></div>
                <div class="home-news">
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="/tintuc"><img src="./images/flace2.png" alt="Giá xe Toyota GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022"></a>
                        </div>
                        <h5><a href="/tintuc" title="Giá xe Toyota GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022">Giá xe Toyota GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="/tintuc"><img src="./images/flace2.png" alt="Công nghệ hỗ trợ phanh mới nhất của Toyota C300 2015"></a>
                        </div>
                        <h5><a href="/tintuc" title="Công nghệ hỗ trợ phanh mới nhất của Toyota C300 2015">Công nghệ hỗ trợ phanh mới nhất của Toyota C300 2015</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="/tintuc"><img src="./images/flace2.png" alt="Toyota G63AMG bên người đẹp"></a>
                        </div>
                        <h5><a href="/tintuc" title="Toyota G63AMG bên người đẹp">Toyota G63AMG bên người đẹp</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="/tintuc"><img src="./images/flace2.png" alt="Toyota GLC chính thức ra mắt, hình ảnh thông số chi tiết của Toyota GLC"></a>
                        </div>
                        <h5><a href="/tintuc" title="Toyota GLC chính thức ra mắt, hình ảnh thông số chi tiết của Toyota GLC">Toyota GLC chính thức ra mắt, hình ảnh thông số chi tiết của Toyota GLC</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- End tin cong nghe -->
        </div>
    </section>

    <script type="text/javascript">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
    </script>

    <!-- End content center -->

    <!-- Infor footer -->
    <section>
        <div class="container clearfix content-center">
            <div class="row-data clearfix footer">
                <div class="col-dls-7">
                    <div class="infofooter">
                        <h1><span style="color:#0258aa;">Toyota Tân Cảng</span></h1>
                        <h3><span style="color:#0258aa;">Nhà phân phối Toyota lớn nhất Việt Nam</span></h3> &nbsp;
                        <p>Phân phối xe chính hãng, xe nhập khẩu chính hãng.
                            <br> Hệ thống bảo hành toàn quốc.
                            <br> Đổi xe cũ - sở hữu xe mới chính hãng giá ưu đãi.
                            <br> Dịch vụ hỗ trợ 24/7, Tư vấn lái thử miễn phí.</p>
                        <p>Địa chỉ: {{$infors['addr']}}
                            <br> Điện thoại: 08.3.815.8888 , xưởng dịch vụ: 08.3815.7030
                            <br> Email: {{$infors['email']}}
                            <br> Website bán hàng: <a href="http://Toyotavietnamstar.vn/">http://Toyotavietnamstar.vn</a>
                            <br><span style="font-size:8px;">LK: <a href="http://www.xeToyota.com.vn/">Toyota Vietnam</a>,&nbsp;<a href="http://www.xeToyota.com.vn/Toyota-c-class/c200/">Toyota C200</a> ,<a href="http://www.xeToyota.com.vn/Toyota-s-class/s400/">Toyota S400</a> ,<a href="http://www.xeToyota.com.vn/Toyota-s-class/s500/">Toyota S500</a> ,<a href="http://www.xeToyota.com.vn/Toyota-glc-class/">Toyota GLC</a></span></p>
                    </div>
                    <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>{{$infors['name']}}</h2>
                    <div class="hotline">
                        <h2>{{$infors['mobile']}}</h2> Hỗ trợ 24/7
                    </div>
                    <div class="clearfix"></div>
                    <div class="social">
                        <div class="col-dls-4">
                            <a href="https://www.facebook.com/?ref=tn_tnmn" rel="nofollow" target="_blank"><img src="./images/icon-face.png" alt="facebook"></a>
                            <a href="https://plus.google.com/u/0/" rel="nofollow" target="_blank"><img src="./images/icon-google.png" alt="google"></a>
                            <a href="https://www.youtube.com/channel/UCRqBoAeTVSXPiXd2zMYY-zQ" rel="nofollow" target="_blank"><img src="./images/icon-youtube.png" alt="youtube"></a>
                        </div>
                        <div class="col-dls-8">
                            @ 2016 Bảng quyền thuộc sở hữu Toyotavietnamstar.vn
                            <br>
                            <a href="#" target="_blank" rel="nofollow">Designed by PN2H Design</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-dls-5 footer-images">
                    <img src="./images/flace3.png" alt="avatar">
                </div>
            </div>
        </div>
    </section>
    <!-- End infor footer -->
    <!-- Footer -->
    <footer>
        <div class="footerfixed">
            <div class="footerfixeds container">
                <div class="footerfixeds-sub">
                    <div class="col-dl-5 info_footer">
                        <h5>Toyota Tân Cảng<br>Nhà phân phối Toyota lớn nhất Việt Nam</h5>
                    </div>
                    <div class="col-dl-7 footer-avatar">
                        <img src="./images/avatar.png" alt="avatar">
                        <h2 class="col-dl-6 supporth"><span>Trưởng nhóm bán hàng</span><br>{{$infors['name']}}</h2>
                        <div class="col-dl-4 hotline">
                            <h2>{{$infors['mobile']}}</h2> Hỗ trợ 24/7
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->
</body>
</html>