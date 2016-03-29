<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>App Name - @yield('title')</title>

    <!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	{!! Html::style('/css/bootstrap.css') !!}
	{!! Html::style('/css/style.css') !!}
	{!! Html::style('/css/flexslider.css') !!}

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
                <a href="#" class="navbar-brand"><img src="./images/logo.png" alt="logo"></a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse navmenus">
                <div class="hotline">
                    <h2>0909 222 022</h2> Hỗ trợ 24/7
                </div>
                <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>Nguyễn Văn Quý</h2>
                <div class="clearfix"></div>
                <div class="navmenuss">
                    <ul class="nav navbar-nav navbar-right nav-menus">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Xe mới</a></li>
                        <li><a href="#">Xe đã qua sử dụng</a></li>
                        <li><a href="#">Khuyến mãi</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End header -->

	@section('sidebar')
     @show
    <!-- This is the sidebar. -->
    <section>
        <div class="container toplink clearfix">
            <ul>
                <li><a href="#">Đăng ký lái thử</a></li>
                <li><a href="#">Mua xe trả góp</a></li>
                <li><a href="#">Tài chính &amp; Bảo hiểm</a></li>
                <li><a href="#">Bảng giá xe</a></li>
                <li><a href="#">Chứng nhận xe cũ chính hãng</a></li>
            </ul>
            <div class="infomaster">
                <div class="hotline">
                    <h2>0909 222 022</h2> Hỗ trợ 24/7
                </div>
                <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>Nguyễn Văn Quý</h2>
            </div>
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
                            <li><a href="#">Mercedes-Benz A</a></li>
                            <li><a href="#">Mercedes-Benz C </a></li>
                            <li><a href="#">Mercedes Benz CLA</a></li>
                            <li><a href="#">Mercedes-Benz E </a></li>
                            <li><a href="#">Mercedes-Benz S </a></li>
                            <li><a href="#">Mercedes-Benz GLA</a></li>
                            <li><a href="#">Mercedes-Benz GLC</a></li>
                            <li><a href="#">Mercedes-Benz GLE</a></li>
                            <li><a href="#">Mercedes-Benz GLS</a></li>
                            <li><a href="#">Mercedes-Benz G</a></li>
                            <li><a href="#">Mercedes Benz SLK </a></li>
                            <li><a href="#">Mercedes-Benz CLS</a></li>
                            <li><a href="#">Mercedes-Benz SL400</a></li>
                            <li><a href="#">Mercedes-AMG GTS</a></li>
                            <li><a href="#">Mercedes-AMG SLS 63</a></li>
                            <li><a href="#">Mercedes V</a></li>
                        </ul>
                        <button type="button" class="navbar-button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Main menu -->
                    <ul class="mainmenu">
                        <li><a href="#">Mercedes-Benz A</a>
                            <ul>
                                <li><a href="#">A200 2016</a></li>
                                <li><a href="#">A250 Sport 2016</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-Benz C </a>
                            <ul>
                                <li><a href="#">C200</a></li>
                                <li><a href="#">C250 Exclusive</a></li>
                                <li><a href="#">C250 AMG</a></li>
                                <li><a href="#">C300 AMG</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes Benz CLA</a>
                            <ul>
                                <li><a href="#">CLA200</a></li>
                                <li><a href="#">CLA250 4Matic</a></li>
                                <li><a href="#">CLA45 4Matic</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-Benz E </a>
                            <ul>
                                <li><a href="#">E200 Edition E</a></li>
                                <li><a href="#">E200</a></li>
                                <li><a href="#">E250 AMG</a></li>
                                <li><a href="#">E400 </a></li>
                                <li><a href="#">E400 Cabriolet</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-Benz S </a>
                            <ul>
                                <li><a href="#">S400L</a></li>
                                <li><a href="#">S500L</a></li>
                                <li><a href="#">S63AMG 4Matic</a></li>
                                <li><a href="#">S500 4Matic Coupe</a></li>
                                <li><a href="#">S63AMG Coupe</a></li>
                                <li><a href="#">S600 Maybach</a></li>
                                <li><a href="#">S600 Pullman 2016</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-Benz GLA</a>
                            <ul>
                                <li><a href="#">GLA200</a></li>
                                <li><a href="#">GLA250</a></li>
                                <li><a href="#">GLA45 AMG</a></li>
                                <li><a href="#">GLA45 AMG Edition 1</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-Benz GLC</a>
                            <ul>
                                <li><a href="#">GLC250 2016</a></li>
                                <li><a href="#">GLC300 2016</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-Benz GLE</a>
                            <ul>
                                <li><a href="#">GLE400 4Matic</a></li>
                                <li><a href="#">GLE400 Exclusive</a></li>
                                <li><a href="#">GLE400 Coupe</a></li>
                                <li><a href="#">GLE450 AMG Coupe</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-Benz GLS</a>
                            <ul>
                                <li><a href="#">GLS350 CDI</a></li>
                                <li><a href="#">GLS400 </a></li>
                                <li><a href="#">GLS500 AMG</a></li>
                                <li><a href="#">GLS63 AMG</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-Benz G</a>
                            <ul>
                                <li><a href="#">G300 CDI</a></li>
                                <li><a href="#">G500 Edition</a></li>
                                <li><a href="#">G63 AMG</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes Benz SLK </a>
                            <ul>
                                <li><a href="#">SLK350</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-Benz CLS</a>
                            <ul>
                                <li><a href="#">CLS350 AMG</a></li>
                                <li><a href="#">CLS400</a></li>
                                <li><a href="#">CLS500 4Matic</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-Benz SL400</a>
                            <ul>
                                <li><a href="#">SL400 2Look</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-AMG GTS</a>
                            <ul>
                                <li><a href="#">AMG GTS</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes-AMG SLS 63</a>
                            <ul>
                                <li><a href="#">SLS AMG Coupe</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mercedes V</a>
                            <ul>
                                <li><a href="#">V116 CDI</a></li>
                                <li><a href="#">V220 CDI</a></li>
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
                            <a href="http://mercedesvietnamstar.vn/n100/Mercedes-C300-AMG-2016-tai-Viet-Nam-Gia-xe-khoi-diem-1799-ty-dong-da-bao-gom-VAT.html"><img src="./images/IMG_5675.JPG" alt="Mercedes C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T"></a>
                        </div>
                        <h5><a href="http://mercedesvietnamstar.vn/n100/Mercedes-C300-AMG-2016-tai-Viet-Nam-Gia-xe-khoi-diem-1799-ty-dong-da-bao-gom-VAT.html" title="Mercedes C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T">Mercedes C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="http://mercedesvietnamstar.vn/n99/Hinh-anh-thuc-te-xe-Mercedes-E200-Edition-E-2015-2016.html"><img src="./images/IMG_2411 - Copy.JPG" alt="Hình ảnh thực tế xe Mercedes E200 Edition E 2015 2016 "></a>
                        </div>
                        <h5><a href="http://mercedesvietnamstar.vn/n99/Hinh-anh-thuc-te-xe-Mercedes-E200-Edition-E-2015-2016.html" title="Hình ảnh thực tế xe Mercedes E200 Edition E 2015 2016 ">Hình ảnh thực tế xe Mercedes E200 Edition E 2015 2016 </a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="http://mercedesvietnamstar.vn/n98/Mercedes-AClass-ban-nang-cap-se-chinh-thuc-ra-mat-nam-2016.html"><img src="./images/Mercedes-Benz-A-Class_2016_800x600_wallpaper_30 - Copy.jpg" alt="Mercedes A-Class bản nâng cấp sẽ chính thức ra mắt năm 2016."></a>
                        </div>
                        <h5><a href="http://mercedesvietnamstar.vn/n98/Mercedes-AClass-ban-nang-cap-se-chinh-thuc-ra-mat-nam-2016.html" title="Mercedes A-Class bản nâng cấp sẽ chính thức ra mắt năm 2016.">Mercedes A-Class bản nâng cấp sẽ chính thức ra mắt năm 2016.</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="http://mercedesvietnamstar.vn/n97/Tuan-le-thoi-trang-cua-MercedesBenz-Viet-Nam-dang-dien-ra-tai-Ha-Noi.html"><img src="./images/nền fashion.jpg" alt="Tuần lễ thời trang của Mercedes-Benz Việt Nam đang diễn ra tại Hà Nội."></a>
                        </div>
                        <h5><a href="http://mercedesvietnamstar.vn/n97/Tuan-le-thoi-trang-cua-MercedesBenz-Viet-Nam-dang-dien-ra-tai-Ha-Noi.html" title="Tuần lễ thời trang của Mercedes-Benz Việt Nam đang diễn ra tại Hà Nội.">Tuần lễ thời trang của Mercedes-Benz Việt Nam đang diễn ra tại Hà Nội.</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- End tin tuc -->

            <!-- Tin cong nghe -->
            <div class="row-data">
                <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Công nghệ ô tô<img src="./images/icon-3.png" alt="danh muc"></span></h3>
                <div class="clearfix"></div>
                <div class="home-news">
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="http://mercedesvietnamstar.vn/n93/Gia-xe-Mercedes-GLC-tot-nhat-nhan-dat-hang-ngay-hom-nay--Hotline-0909222022.html"><img src="./images/mercedes GLC (13).jpg" alt="Giá xe Mercedes GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022"></a>
                        </div>
                        <h5><a href="http://mercedesvietnamstar.vn/n93/Gia-xe-Mercedes-GLC-tot-nhat-nhan-dat-hang-ngay-hom-nay--Hotline-0909222022.html" title="Giá xe Mercedes GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022">Giá xe Mercedes GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="http://mercedesvietnamstar.vn/n91/Cong-nghe-ho-tro-phanh-moi-nhat-cua-Mercedes-C300-2015.html"><img src="./images/2015_Mercedes-Benz_C-Class_C300_4dr_Sedan_20L_4cyl_Turbo_7A_3977850.jpg" alt="Công nghệ hỗ trợ phanh mới nhất của Mercedes C300 2015"></a>
                        </div>
                        <h5><a href="http://mercedesvietnamstar.vn/n91/Cong-nghe-ho-tro-phanh-moi-nhat-cua-Mercedes-C300-2015.html" title="Công nghệ hỗ trợ phanh mới nhất của Mercedes C300 2015">Công nghệ hỗ trợ phanh mới nhất của Mercedes C300 2015</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="http://mercedesvietnamstar.vn/n89/Mercedes-G63AMG-ben-nguoi-dep.html"><img src="./images/650x434xmercedes-g63-amg-and-girl-10.jpg_pagespeed_ic_4rQd1cvUoO.jpg" alt="Mercedes G63AMG bên người đẹp"></a>
                        </div>
                        <h5><a href="http://mercedesvietnamstar.vn/n89/Mercedes-G63AMG-ben-nguoi-dep.html" title="Mercedes G63AMG bên người đẹp">Mercedes G63AMG bên người đẹp</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="http://mercedesvietnamstar.vn/n88/Mercedes-GLC-chinh-thuc-ra-mat-hinh-anh-thong-so-chi-tiet-cua-Mercedes-GLC.html"><img src="./images/Mercedes-Benz-GLC_2016_thumbnail_01.jpg" alt="Mercedes GLC chính thức ra mắt, hình ảnh thông số chi tiết của Mercedes GLC"></a>
                        </div>
                        <h5><a href="http://mercedesvietnamstar.vn/n88/Mercedes-GLC-chinh-thuc-ra-mat-hinh-anh-thong-so-chi-tiet-cua-Mercedes-GLC.html" title="Mercedes GLC chính thức ra mắt, hình ảnh thông số chi tiết của Mercedes GLC">Mercedes GLC chính thức ra mắt, hình ảnh thông số chi tiết của Mercedes GLC</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- End tin cong nghe -->
        </div>
    </section>
    <!-- End content center -->

    <!-- Infor footer -->
    <section>
        <div class="container clearfix content-center">
            <div class="row-data clearfix footer">
                <div class="col-dls-7">
                    <div class="infofooter">
                        <h1><span style="color:#0258aa;">Vietnam Star Automobile</span></h1>
                        <h3><span style="color:#0258aa;">Nhà phân phối Mercedes - Benz lớn nhất Việt Nam</span></h3> &nbsp;
                        <p>Phân phối xe chính hãng, xe nhập khẩu chính hãng.
                            <br> Hệ thống bảo hành toàn quốc.
                            <br> Đổi xe cũ - sở hữu xe mới chính hãng giá ưu đãi.
                            <br> Dịch vụ hỗ trợ 24/7, Tư vấn lái thử miễn phí.</p>
                        <p>Địa chỉ: 02 Trường Chinh, P.Tây Thạnh, Q. Tân Phú, TpHCM
                            <br> Điện thoại: 08.3.815.8888 , xưởng dịch vụ: 08.3815.7030
                            <br> Email: nguyen-van.quy@vietnamstar-auto.com
                            <br> Website bán hàng: <a href="http://mercedesvietnamstar.vn/">http://mercedesvietnamstar.vn</a>
                            <br><span style="font-size:8px;">LK: <a href="http://www.xemercedes.com.vn/">Mercedes Vietnam</a>,&nbsp;<a href="http://www.xemercedes.com.vn/mercedes-c-class/c200/">Mercedes C200</a> ,<a href="http://www.xemercedes.com.vn/mercedes-s-class/s400/">Mercedes S400</a> ,<a href="http://www.xemercedes.com.vn/mercedes-s-class/s500/">Mercedes S500</a> ,<a href="http://www.xemercedes.com.vn/mercedes-glc-class/">Mercedes GLC</a></span></p>
                    </div>
                    <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>Nguyễn Văn Quý</h2>
                    <div class="hotline">
                        <h2>0909 222 022</h2> Hỗ trợ 24/7
                    </div>
                    <div class="clearfix"></div>
                    <div class="social">
                        <div class="col-dls-4">
                            <a href="https://www.facebook.com/?ref=tn_tnmn" rel="nofollow" target="_blank"><img src="./images/icon-face.png" alt="facebook"></a>
                            <a href="https://plus.google.com/u/0/" rel="nofollow" target="_blank"><img src="./images/icon-google.png" alt="google"></a>
                            <a href="https://www.youtube.com/channel/UCRqBoAeTVSXPiXd2zMYY-zQ" rel="nofollow" target="_blank"><img src="./images/icon-youtube.png" alt="youtube"></a>
                        </div>
                        <div class="col-dls-8">
                            @ 2014 Bảng quyền thuộc sở hữu Mercedesvietnamstar.vn
                            <br>
                            <a href="http://phuongnamdesign.com/" target="_blank" rel="nofollow">Designed by Phuong nam Design</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-dls-5 footer-images">
                    <img src="./images/footer_img.jpg" alt="avatar">
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
                        <h5>Vietnam Star Automobile<br>Nhà phân phối Mercedes - Benz lớn nhất Việt Nam</h5>
                    </div>
                    <div class="col-dl-7 footer-avatar">
                        <img src="./images/avatar.png" alt="avatar">
                        <h2 class="col-dl-6 supporth"><span>Trưởng nhóm bán hàng</span><br>Nguyễn Văn Quý</h2>
                        <div class="col-dl-4 hotline">
                            <h2>0909 222 022</h2> Hỗ trợ 24/7
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->



   

    <div class="container">
        @yield('content')
    </div>
</body>
</html>