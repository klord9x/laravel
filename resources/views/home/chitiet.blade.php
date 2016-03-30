@extends('layouts.master')

@section('title', 'Chi tiết sản phẩm')

@section('slider')
    @parent
{{$variable1}}
    <!-- Slider product-->
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-dl-9">
                    <div id="slider" class="flexslider">
                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                            <ul class="slides" style="width: 600%; transition-duration: 0s; transform: translate3d(-878px, 0px, 0px);">
                                <li class="clone" aria-hidden="true" style="width: 878px; float: left; display: block;"><img src="./single_product_files/iris__38.jpg" alt="Mercedes E200 Edition E | Mercedes E200 giá tốt | Hotline: 0909222022" draggable="false"></li>
                                <li class="flex-active-slide" style="width: 878px; float: left; display: block;"><img src="./single_product_files/iris__38.jpg" alt="Mercedes E200 Edition E | Mercedes E200 giá tốt | Hotline: 0909222022" draggable="false"></li>
                                <li class="clone" aria-hidden="true" style="width: 878px; float: left; display: block;"><img src="./single_product_files/iris__38.jpg" alt="Mercedes E200 Edition E | Mercedes E200 giá tốt | Hotline: 0909222022" draggable="false"></li>
                            </ul>
                        </div>
                        <ol class="flex-control-nav flex-control-paging"></ol>
                        <ul class="flex-direction-nav">
                            <li><a class="flex-prev flex-disabled" href="http://mercedesvietnamstar.vn/dong-xe-53/E200-Edition-E.html#" tabindex="-1">Previous</a></li>
                            <li><a class="flex-next flex-disabled" href="http://mercedesvietnamstar.vn/dong-xe-53/E200-Edition-E.html#" tabindex="-1">Next</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-dl-3">
                    <div class="detail-inf">
                        <h2 class="name-detail">E200 Edition E</h2>
                        <h3 class="price-detail">Giá: 2.049.000.000 đ</h3>
                        <p>Trả góp hàng tháng: 25.500.000 đ
                            <br> Trả trước:550.000.000 đ
                            <br> Lãi suất: 7%/năm</p>
                        <div class="tuvan">
                            <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>Nguyễn Văn Quý</h2>
                            <div class="hotline">
                                <h2>0909 222 022</h2> Hỗ trợ 24/7
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider product-->
    @endsection

	@section('right-content')
	<!-- Right content -->
        <div class="col-dl-9 right-content">
            <div class="wrapper">
                <div class="link-other">
                    <div class="link-others">
                        <span class="name-car">E200 Edition E</span><a rel="tabs1" href="javascript:void(0)">Đánh giá</a><a rel="tabs2" href="javascript:void(0)">Thông số kỹ thuật</a><a rel="tabs3" href="javascript:void(0)">Màu nội thất</a><a rel="tabs4" href="javascript:void(0)">Màu ngoại thất</a>
                    </div>
                </div>
                <script type="text/javascript">
                $(document).ready(function() {
                    $('.link-others a').click(function() {
                        var rel = $(this).attr('rel');
                        $('.link-others a').removeClass('active');
                        $(this).addClass('active');
                        $('.detail_news').hide();
                        $('#' + rel).show();
                    })
                })

                function opentab(tab) {
                    $('.detail_news').hide();
                    $('#' + tab).show();
                }
                </script>
                <!-- Main product content -->
                <div class="content">
                    <div>
                        <select class="slcOption" onchange="opentab(this.options[this.selectedIndex].value)">
                            <option value="tabs1">Đánh giá</option>
                            <option value="tabs2">Thông số kỹ thuật</option>
                            <option value="tabs3">Màu nội thất</option>
                            <option value="tabs4">Màu ngoại thất</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Tabs -->
                    <div class="detail_news" id="tabs1">
                        <h3 class="name_tab">Đánh giá</h3><img alt="" src="./single_product_files/mercedes trương chinh(1).png" style="height:288px;width:876px;">
                        <br>
                        <br> Mercedes-Benz Việt Nam chính thức nâng cấp dòng xe sang Mercedes E200 ra mắt trong tháng 08/2015. Mercedes E200 sau khi nâng cấp có tên gọi mới là <a href="http://mercedesvietnamstar.vn/n51/MercedesBenz-Viet-Nam-nang-cap-E200-Edition-E-2015.html">Mercedes E200 Edition E</a> sẽ thay đổi về ngoại thất cũng như nội thất.
                        <br> Về Ngoại thất Mercedes E200 Edition E trang bị gói AMG thể thao bao gồm cản trước, cản sau và logo lưới tản nhiệt giống như Mercedes E250 2014. Điểm nhấn đặc biệt ngoại thất của Mercedes E200 Edition E là trang bị bộ mâm 5 cánh đôi 18 inch đậm chất thể thao mạnh mẽ, phía bên hông xe là logo "Editon E" nhằm phân biệt với dòng xe Mercedes E250 trước đó.
                        <br> Điểm khác biệt nội thất của Mercedes E200 Edition E bao gồm tay lái thể thao 3 chấu, hệ thống CD màn hình 7 inch tích hợp bản đồ GPS Việt Nam tiện lợi cho khách hàng.
                        <br>
                        <br> Xe Mercedes E200 Editon E sẽ bắt đầu bàn giao đến khách hàng từ tháng 08/2015, Vì vậy Quý khách hàng có thể liên hệ nhân viên đại lý của Vietnam Star để biết thêm thông tin chi tiết hoặc gọi hotline PKD Mercedes-Benz: 0909222022
                        <br>
                        <br><span style="color:#0000FF;">Màu sơn</span>: &nbsp;&nbsp; Trắng Polar (149), Đen Obsidian (197), Nâu Dolomite (526), Xanh Covelline (585), Xám Tenorite (755), Bạc Iridium (775), Xanh Cavansite (890), Bạc Diamond (988), Đỏ Hyacinth (996)
                        <br><span style="color:#0000FF;">Nội thất</span>: &nbsp; Da; Đen (211), Vàng Silk (215), Xám Crystal (218), Vàng Porcelain/Đen (255), Xám Crystal/Đen (258), Nâu Chestnut (274)
                        <br> &nbsp;&nbsp; &nbsp;
                        <br><span style="color:#0000FF;">Thiết kế: </span>&nbsp;&nbsp;
                        <br> Lưới tản nhiệt 2 nan với logo ngôi sao 3 cánh ở chính giữa
                        <br> Nẹp chỉ mạ chrome trên cản trước, cản sau &amp; thân xe
                        <br> Mâm xe 18-inch 5 chấu kép
                        <br> Đĩa phanh trước đục lỗ, kẹp phanh in logo ‘Mercedes-Benz’
                        <br> Huy hiệu ‘Edition E’ bên sườn xe
                        <br> Chụp ống xả kép tích hợp với cản sau
                        <br> Đèn viền nội thất có thể điều chỉnh 3 màu sắc &amp; độ sáng
                        <br> Nội thất ốp nhôm với vân màu tối
                        <br> Tay lái thể thao 3 chấu bọc da nappa
                        <br> Bảng đồng hồ dạng 3 ống
                        <br> Mặt táp-lô &amp; thành cửa bọc da với đường viền chỉ trang trí
                        <br> Đồng hồ thời gian analogue với ngôi sao Mercedes-Benz ở chính giữa bảng điều khiển
                        <br> Thảm sàn với logo ‘Edition E’
                        <br> &nbsp;&nbsp; &nbsp;
                        <br><span style="color:#0000FF;">An toàn &amp; Công nghệ&nbsp;</span>&nbsp; &nbsp;
                        <br> Hệ thống treo DIRECT CONTROL
                        <br> Hệ thống lái Direct-Steer trợ lực điện với trợ lực &amp; tỉ số truyền lái biến thiên theo tốc độ giúp đem lại cảm giác lái tối ưu, hỗ trợ đánh lái thoải mái &amp; chính xác
                        <br> Cần số điều khiển điện DIRECT SELECT phía sau tay lái
                        <br> Lẫy chuyển số bán tự động DIRECT SELECT phía sau tay lái
                        <br> Cụm đèn trước LED toàn phần (Full-LED) thông minh
                        <br> Đèn báo rẽ trên gương chiếu hậu, cụm đèn sau &amp; đèn phanh thứ ba công nghệ LED
                        <br> Gương chiếu hậu chống chói tự động; gương chiếu hậu bên ngoài chỉnh &amp; gập điện
                        <br> Chức năng ECO start/stop tự động ngắt động cơ khi xe tạm dừng; giúp giảm thiểu tiêu hao nhiêu liệu &amp; khí xả
                        <br> Hệ thống hỗ trợ đỗ xe chủ động Active parking assist tích hợp PARKTRONIC dò tìm không gian đỗ xe phù hợp; tự động điều khiển tay lái và phanh để đưa xe vào chỗ đỗ (cả trong trường hợp đỗ xe song song &amp; đỗ xe vuông góc)
                        <br> Chức năng cảnh báo mất tập trung ATTENTION ASSIST
                        <br> Hệ thống tự động bảo vệ PRE-SAFE® kết hợp tối đa các tính năng an toàn trong trường hợp khẩn cấp
                        <br> Hệ thống chống bó cứng phanh ABS; Hỗ trợ lực phanh khẩn cấp BAS; Chống trượt khi tăng tốc ASR; Ổn định thân xe điện tử ESP
                        <br> Hệ thống phanh ADAPTIVE với chức năng hỗ trợ dừng xe (HOLD) và hỗ trợ khởi hành ngang dốc (Hill-Start Assist)
                        <br> Đèn phanh Adaptive nhấp nháy khi phanh gấp
                        <br> Túi khí phía trước; túi khí bên hông phía trước &amp; sau; túi khí cửa sổ
                        <br> Tựa đầu điều chỉnh được cho tất cả các ghế; tựa đầu giảm chấn thương cổ cho ghế trước
                        <br> Dây đai an toàn 3 điểm cho tất cả các ghế với bộ căng đai khẩn cấp &amp; giới hạn lực siết
                        <br> Cần gạt nước mưa với cảm biến mưa
                        <br> Hệ thống cảnh báo giảm áp suất lốp
                        <br> Hệ thống khóa cửa trung tâm với chức năng tự động khóa khi xe chạy và mở khóa trong trường hợp khẩn cấp
                        <br> &nbsp;&nbsp; &nbsp;
                        <br><span style="color:#0000FF;">Tiện nghi&nbsp;&nbsp;</span> &nbsp;
                        <br> Ghế người lái &amp; hành khách phía trước điều chỉnh điện (xa/gần, độ cao ghế, lưng ghế, độ nghiêng &amp; chiều dài mặt ghế, đệm đỡ lưng, tựa đầu)
                        <br> Bộ nhớ 3 vị trí cho ghế trước, tay lái &amp; gương chiếu hậu bên ngoài
                        <br> Hệ thống âm thanh với đầu đọc CD; màn hình màu TFT 5,8 inch; bộ thu sóng phát thanh; kết nối Bluetooth
                        <br> Hệ thống dẫn đường &amp; định vị vệ tinh toàn cầu GPS tích hợp bản đồ Việt Nam
                        <br> Cổng kết nối truyền thông đa phương tiện phía dưới tựa tay trung tâm, hỗ trợ các thiết bị giải trí di động
                        <br> Điều hòa khí hậu tự động đa vùng THERMOTRONIC
                        <br> Màn che nắng kính sau chỉnh điện
                        <br> Màn che nắng cho cửa sổ hai bên phía sau
                        <br> Khóa cửa điều khiển từ xa &amp; mã hóa động cơ chống trộm
                        <br> Chức năng mở cốp sau từ xa bằng khóa điện tử
                        <br> Tín hiệu âm thanh khi mở/khóa cửa
                        <br> Chức năng kiểm soát tốc độ Cruise Control với SPEEDTRONIC cho phép điều chỉnh tốc độ tối đa mong muốn trong khu vực bị giới hạn tốc độ
                        <br> Đồng hồ hiển thị nhiệt độ ngoài trời.
                        <br>
                        <br><strong>Một số hình ảnh Mercedes E200 Edition E:</strong>
                        <br><img alt="mercedes e200 edition e" src="./single_product_files/iris__38(1).jpg" style="height:390px;width:880px;"><img alt="mercedes e200 edition e" src="./single_product_files/iris__39.jpg" style="height:587px;width:880px;"><img alt="mercedes e200 edition e" src="./single_product_files/iris__40.jpg" style="height:587px;width:880px;"><img alt="mercedes e200 edition e" src="./single_product_files/iris__41.jpg" style="height:587px;width:880px;"><img alt="mercedes e200 edition e" src="./single_product_files/iris__42.jpg" style="height:587px;width:880px;"><img alt="mercedes e200 edition e" src="./single_product_files/iris__43.jpg" style="height:587px;width:880px;"><img alt="mercedes e200 edition e" src="./single_product_files/iris__45.jpg" style="height:587px;width:880px;"><img alt="mercedes e200 edition e" src="./single_product_files/iris__48.jpg" style="height:587px;width:880px;">
                        <br><img alt="mercedes e200" src="./single_product_files/3112035_E-200-Edition-E-201500003.jpg" style="height:323px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112037_E-200-Edition-E-201500006.jpg" style="height:347px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112038_E-200-Edition-E-201500007.jpg" style="height:348px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112043_E-200-Edition-E-201500013.jpg" style="height:533px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112044_E-200-Edition-E-201500014.jpg" style="height:533px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112045_E-200-Edition-E-201500015.jpg" style="height:524px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112046_E-200-Edition-E-201500016.jpg" style="height:533px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112047_E-200-Edition-E-201500017.jpg" style="height:533px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112048_E-200-Edition-E-201500018.jpg" style="height:533px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112049_E-200-Edition-E-201500019.jpg" style="height:542px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112050_E-200-Edition-E-201500020.jpg" style="height:533px;width:800px;"><img alt="mercedes e200" src="./single_product_files/3112052_E-200-Edition-E-201500022.jpg" style="height:533px;width:800px;">
                        <br>
                        <br> Bảng giá xe Mercedes E-Class đã bao gồm V.A.T:
                        <ul>
                            <li><a href="http://mercedesvietnamstar.vn/dong-xe-12/E200.html">Mercedes E200: 1.939.000.000 VNĐ</a></li>
                            <li><a href="http://mercedesvietnamstar.vn/dong-xe-53/E200-Edition-E.html">Mercedes E200 Edition E: 1.989.000.000 VNĐ</a></li>
                            <li><a href="http://mercedesvietnamstar.vn/dong-xe-14/E250-AMG.html">Mercedes E250AMG: 2.259.000.000 VNĐ</a></li>
                            <li><a href="http://mercedesvietnamstar.vn/dong-xe-15/E400-AMG.html">Mercedes E400: 2.799.000.000 VNĐ</a></li>
                       </ul>
                       <span style="font-size:10.5pt;">Liên hệ ngay với chúng tôi để:<br>
                        - Tư vấn mua xe phù hợp.<br>
                        - Lái thử xe 7 ngày trong tuần.<br>
                        - Có khuyến mãi, giá tốt nhất.<br>
                        - Tư vấn tài chính,lãi suất thấp nhất.</span>
                        <br>
                        <br><strong><u><span style="font-size:10.5pt;">Phòng kinh doanh Mercedes-Benz:</span></u></strong>
                        <br><span style="font-size:10.5pt;">CÔNG TY TNHH Ô TÔ NGÔI SAO VIỆT NAM<br>
                        Số 02 Trường Chinh – P.Tây Thạnh – Q.Tân Phú - TpHCM<br><strong>Trưởng nhóm bán hàng</strong><br>
                        Nguyễn Văn Quý<br>
                        Mobile: 0909 222 022<br>
                        Email: </span><a href="mailto:nguyen-van.quy@vietnamstar-auto.com"><span style="font-size:10.5pt;">nguyen-van.quy@vietnamstar-auto.com</span></a>
                        <br><span style="font-size:10.5pt;">Website bán hàng: </span><a href="http://mercedesvietnamstar.vn/">http://mercedesvietnamstar.vn</a></div>

                    <div class="detail_news detail_tab" id="tabs2">
                        <h3 class="name_tab">Thông số kỹ thuật</h3></div>
                    <div class="detail_news detail_tab" id="tabs3">
                        <h3 class="name_tab">Màu nội thất</h3></div>
                    <div class="detail_news detail_tab" id="tabs4">
                        <h3 class="name_tab">Màu ngoại thất</h3></div>

                    <div class="clear"></div>
                    <!-- End tabs-->

                    <!-- Other product -->
                    <div class="product_other">
                        <h3 class="title-other"><span>Sản phẩm khác</span></h3>
                        <div class="product">
                            <div class="products">
                                <div class="product_img">
                                    <a href="http://mercedesvietnamstar.vn/dong-xe-12/E200.html"><img src="./single_product_files/E200 (1).jpg" alt="E200"></a>
                                </div>
                                <h4><a href="http://mercedesvietnamstar.vn/dong-xe-12/E200.html">E200</a></h4>
                                <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 1.999.000.000 VNĐ</span><span class="spleft spright"></span></div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="products">
                                <div class="product_img">
                                    <a href="http://mercedesvietnamstar.vn/dong-xe-14/E250-AMG.html"><img src="./single_product_files/E250 (14).jpg" alt="E250 AMG"></a>
                                </div>
                                <h4><a href="http://mercedesvietnamstar.vn/dong-xe-14/E250-AMG.html">E250 AMG</a></h4>
                                <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.329.000.000 VNĐ</span><span class="spleft spright"></span></div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="products">
                                <div class="product_img">
                                    <a href="http://mercedesvietnamstar.vn/dong-xe-15/E400.html"><img src="./single_product_files/AMG4.jpg" alt="E400 "></a>
                                </div>
                                <h4><a href="http://mercedesvietnamstar.vn/dong-xe-15/E400.html">E400 </a></h4>
                                <div class="product_price"><span class="spleft"></span><span class="spcenter">Giá: 2.879.000.000 VNĐ</span><span class="spleft spright"></span></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <h3 class="title-other"><span>Bình luận</span></h3>
                        <div class="fb-comments" data-href="http://laravel1.local" data-width="100%" data-numposts="5"></div>
                    </div>
                    <!-- End other product -->

                </div>
                <!-- End content product -->

                <!-- Facebook comment -->
                <!-- <script type="text/javascript" src="./single_product_files/plusone.js" gapi_processed="true"></script> -->
                <div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=806635242786866";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
            </div>
        </div>
        <!-- End right content -->
	@endsection