@extends('layouts.master')

@section('title', 'Tin tức')

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
	        <h3 class="titlel row-title"><span>Tin tức<img src="./tintuc_files/icon-3.png" alt="danh muc"></span></h3>
	        <div class="clearfix"></div>
	        <div class="content">
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n100/Mercedes-C300-AMG-2016-tai-Viet-Nam-Gia-xe-khoi-diem-1799-ty-dong-da-bao-gom-VAT.html"><img src="./tintuc_files/IMG_5675.JPG" alt="Mercedes C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T"></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n100/Mercedes-C300-AMG-2016-tai-Viet-Nam-Gia-xe-khoi-diem-1799-ty-dong-da-bao-gom-VAT.html">Mercedes C300 AMG 2016 tại Việt Nam. Giá xe khởi điểm 1.799 tỷ đồng đã bao gồm V.A.T</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n99/Hinh-anh-thuc-te-xe-Mercedes-E200-Edition-E-2015-2016.html"><img src="./tintuc_files/IMG_2411 - Copy.JPG" alt="Hình ảnh thực tế xe Mercedes E200 Edition E 2015 2016 "></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n99/Hinh-anh-thuc-te-xe-Mercedes-E200-Edition-E-2015-2016.html">Hình ảnh thực tế xe Mercedes E200 Edition E 2015 2016 </a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n98/Mercedes-AClass-ban-nang-cap-se-chinh-thuc-ra-mat-nam-2016.html"><img src="./tintuc_files/Mercedes-Benz-A-Class_2016_800x600_wallpaper_30 - Copy.jpg" alt="Mercedes A-Class bản nâng cấp sẽ chính thức ra mắt năm 2016."></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n98/Mercedes-AClass-ban-nang-cap-se-chinh-thuc-ra-mat-nam-2016.html">Mercedes A-Class bản nâng cấp sẽ chính thức ra mắt năm 2016.</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n97/Tuan-le-thoi-trang-cua-MercedesBenz-Viet-Nam-dang-dien-ra-tai-Ha-Noi.html"><img src="./tintuc_files/nền fashion.jpg" alt="Tuần lễ thời trang của Mercedes-Benz Việt Nam đang diễn ra tại Hà Nội."></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n97/Tuan-le-thoi-trang-cua-MercedesBenz-Viet-Nam-dang-dien-ra-tai-Ha-Noi.html">Tuần lễ thời trang của Mercedes-Benz Việt Nam đang diễn ra tại Hà Nội.</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n96/Mercedes-V220-CDI-chinh-thuc-ra-mat-tai-Viet-NamHotline-0909222022.html"><img src="./tintuc_files/xedoisong_chi_tiet_mpv_mercedes_benz_v220_cdi_2015_vietnam_h2_jivp.jpg" alt="Mercedes V220 CDI chính thức ra mắt tại Việt Nam|Hotline: 0909222022"></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n96/Mercedes-V220-CDI-chinh-thuc-ra-mat-tai-Viet-NamHotline-0909222022.html">Mercedes V220 CDI chính thức ra mắt tại Việt Nam|Hotline: 0909222022</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n95/Gia-ban-Mercedes-GLE-tot-nhat--Mercedes-Viet-Nam--Hotline-0909222022.html"><img src="./tintuc_files/Mercedes-Benz-GLE_400.jpg" alt="Giá bán Mercedes GLE tốt nhất | Mercedes Việt Nam | Hotline: 0909222022"></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n95/Gia-ban-Mercedes-GLE-tot-nhat--Mercedes-Viet-Nam--Hotline-0909222022.html">Giá bán Mercedes GLE tốt nhất | Mercedes Việt Nam | Hotline: 0909222022</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n94/MercedesBenz-Fashion-Week-tai-Ha-Noi-mo-cua-tu-do-tu-ngay-2730082015.html"><img src="./tintuc_files/Nhung dieu thu vi ve Mercedes-Benz Fashion Week 2015.jpg" alt="Mercedes-Benz Fashion Week tại Hà Nội, mở cửa tự do từ ngày 27-30/08/2015"></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n94/MercedesBenz-Fashion-Week-tai-Ha-Noi-mo-cua-tu-do-tu-ngay-2730082015.html">Mercedes-Benz Fashion Week tại Hà Nội, mở cửa tự do từ ngày 27-30/08/2015</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n93/Gia-xe-Mercedes-GLC-tot-nhat-nhan-dat-hang-ngay-hom-nay--Hotline-0909222022.html"><img src="./tintuc_files/mercedes GLC (13).jpg" alt="Giá xe Mercedes GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022"></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n93/Gia-xe-Mercedes-GLC-tot-nhat-nhan-dat-hang-ngay-hom-nay--Hotline-0909222022.html">Giá xe Mercedes GLC tốt nhất, nhận đặt hàng ngay hôm nay | Hotline: 0909222022</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n92/Mercedes-CClass-coupe-se-la-SClass-Coupe-thu-nho.html"><img src="./tintuc_files/Mercedes_Benz_C-Class_Coupe (8).jpg" alt="Mercedes C-Class coupe sẽ là S-Class Coupe thu nhỏ"></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n92/Mercedes-CClass-coupe-se-la-SClass-Coupe-thu-nho.html">Mercedes C-Class coupe sẽ là S-Class Coupe thu nhỏ</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n91/Cong-nghe-ho-tro-phanh-moi-nhat-cua-Mercedes-C300-2015.html"><img src="./tintuc_files/2015_Mercedes-Benz_C-Class_C300_4dr_Sedan_20L_4cyl_Turbo_7A_3977850.jpg" alt="Công nghệ hỗ trợ phanh mới nhất của Mercedes C300 2015"></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n91/Cong-nghe-ho-tro-phanh-moi-nhat-cua-Mercedes-C300-2015.html">Công nghệ hỗ trợ phanh mới nhất của Mercedes C300 2015</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n90/MercedesBenz-Viet-Nam-nang-cap-toan-dien-EClass-2015.html"><img src="./tintuc_files/IMG_1140.JPG" alt="Mercedes-Benz Việt Nam nâng cấp toàn diện E-Class 2015"></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n90/MercedesBenz-Viet-Nam-nang-cap-toan-dien-EClass-2015.html">Mercedes-Benz Việt Nam nâng cấp toàn diện E-Class 2015</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="news">
	                <div class="news-img">
	                    <a href="http://mercedesvietnamstar.vn/n89/Mercedes-G63AMG-ben-nguoi-dep.html"><img src="./tintuc_files/650x434xmercedes-g63-amg-and-girl-10.jpg_pagespeed_ic_4rQd1cvUoO.jpg" alt="Mercedes G63AMG bên người đẹp"></a>
	                </div>
	                <h4><a href="http://mercedesvietnamstar.vn/n89/Mercedes-G63AMG-ben-nguoi-dep.html">Mercedes G63AMG bên người đẹp</a></h4>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="clearfix"></div>
	            <div class="pagination" align="right">
	                <span>1</span>
	                <a href="http://mercedesvietnamstar.vn/tin-tuc/trang-2.html">2</a> <a href="http://mercedesvietnamstar.vn/tin-tuc/trang-3.html">3</a> ... <a href="http://mercedesvietnamstar.vn/tin-tuc/trang-8.html">8</a> <a href="http://mercedesvietnamstar.vn/tin-tuc/trang-2.html">&gt;</a>
	                <a href="http://mercedesvietnamstar.vn/tin-tuc/trang-8.html">&gt;&gt;</a>
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
