<div class="left">
    <h2 class="play-btn"><a class="btnquicklogin" href="#"></a></h2>
        @include('includes.register')
        @include('includes.payment')
    <div class="search">
        <input id="search-input" name="" placeholder="Nhập từ khóa cần tìm" type="text">
        <a href="javascript:search();" class="search-btn"></a>
    </div>
    <div id="login-box" class="login-box">
        @guest
        <iframe style="float: left; display:none; visibility:hidden" name="ifr_login" width="0" height="0" frameborder="0"></iframe>
        <form id = "frmLoginDirect" method="post" enctype="application/x-www-form-urlencoded" action="{{ route('login') }}">
            {{ csrf_field() }}
            @if ($errors->has('password'))
                <span class="error" id="login-box-err" >{{ $errors->first('password') }}</span>
            @endif
            @if ($errors->has('email'))
                <span class="error" id="login-box-err" >{{ $errors->first('email') }}</span>
            @endif
            <div class="frm-bock clearfix">
                <div class="left-frm">
                    <p class="frm">
                        <input id="i_name" name="email" placeholder="Tài khoản Zing ID" type="text" value="{{ old('email') }}" required autofocus>
                    </p>
                    <p class="frm">
                        <input id="i_pass" name="password" placeholder="Mật khẩu" type="password">
                    </p>
                </div>
                <p id="btnlogin" class="login-btn"><a href="javascript:void(0);">Đăng nhập</a></p>
            </div>
            <p class="pass-forgot"><a href="{{ route('password.request') }}" target="_blank">Quên mật khẩu?</a></p>
        </form>
        @else
            <div class="frm-bock clearfix">
                <div class="acc clearfix">
                    <p class="avatar"><img src="#"></p>
                    <p class="name">
                        <span class="txt1">Xin chào</span>
                        <span class="txt2">{{ Auth::user()->name }}</span>
                    </p>
                </div>
                <div class="server-btn"><a href="#" onclick="location='//taydu.360game.vn/server-game'+location.search"></a></div>
            </div>
            <div class="links clearfix">
                <p class="info-acc"><a href="#">Thông tin tài khoản</a></p>
                <p class="logout"><a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">(Thoát)
                    </a></p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        @endguest
        <script type="text/javascript">
            $('#btnlogin').click(function() {
                $('#frmLoginDirect').submit();
            });
            /*

            $('#btnquicklogin').click(function(e) {
                e.preventDefault();
                window.quickLogin = true;
                zmeOpenWidget.doLogin();
            });

            $('.btnquicklogin').click(function(e) {
                e.preventDefault();
                window.quickLogin = true;
                zmeOpenWidget.doLogin();
            });

            $('.btnreg').click(function(e) {
                e.preventDefault();
                window.quickLogin = true;
                zmeOpenWidget.doRegister();
            });*/
        </script>
    </div>

    <div id="server-list-box">
        <div class="server-list">
            <h2 class="title">Danh sách server</h2>
            <div class="new-server"><a href="javascript:void(0)" onclick="doServerLogin('87')">S87-Thủy Liêm Động</a></div>
            <ul class="list clearfix" style="display: block;">
                <li style="display: list-item;"><a href="javascript:void(0)" onclick="doServerLogin('86')">S86-Bạch Cốt Động</a></li>
                <li style="display: list-item;"><a href="javascript:void(0)" onclick="doServerLogin('85')">S85-Bàn Tơ Động</a></li>
                <li style="display: list-item;"><a href="javascript:void(0)" onclick="doServerLogin('84')">S84-Liên Hoa Động</a></li>
                <li style="display: list-item;"><a href="javascript:void(0)" onclick="doServerLogin('83')">S83-Cao Lão Trang</a></li>
                <li style="display: list-item;"><a href="javascript:void(0)" onclick="doServerLogin('82')">S82-Ngũ Hành Sơn</a></li>
                <li style="display: list-item;"><a href="javascript:void(0)" onclick="doServerLogin('81')">S81-Hoa Quả Sơn</a></li>
                <li style="display: list-item;"><a href="javascript:void(0)" onclick="doServerLogin('80')">S80-Tử Kim Bầu</a></li>
                <li style="display: list-item;"><a href="javascript:void(0)" onclick="doServerLogin('79')">S79-Đại Thiên Am</a></li>
                <li style="display: list-item;"><a href="javascript:void(0)" onclick="doServerLogin('78')">S78-Não Bạt Vàng</a></li>
                <li style="display: list-item;"><a href="javascript:void(0)" onclick="doServerLogin('77')">S77-Túi Hậu Thiên</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('76')">S76-Thừng Hoàng Kim</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('75')">S75-Kim Cang Trát</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('74')">S74-Ngọc Tịnh Bình</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('73')">S73-Tam Chân Hỏa</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('72')">S72-Phong Hỏa Luân</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('71')">S71-Lung Linh Tháp</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('70')">S70-Ba Tiêu Phiến</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('69')">S69-Đinh Ba</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('68')">S68-Bảo Trượng</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('67')">S67-Cửu Đinh Ba</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('66')">S66-Định Hải Châm</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('65')">S65-Tích Trượng Hoàn</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('64')">S64-Ngọc Diện</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('63')">S63-Hoàng Bào Quái</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('62')">S62-Cửu Đầu Trùng</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('61')">S61-Kim Quan</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('60')">S60-Ngọc Thố</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('59')">S59-Hoàng Phong Quái</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('58')">S58-Hoàng Mi Lão</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('57')">S57-Ngân Giác Vương</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('56')">S56-Kim Giác Vương</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('55')">S55-Bạch Tượng Vương</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('54')">S54-Thanh Sư Vương</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('53')">S53-Đại Bàng Vương</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('52')">S52-Đế Thính</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('51')">S51-Địa Tạng Vương</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('50')">S50-Bạch Vô Thường</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('49')">S49-Hắc Vô Thường</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('48')">S48-Phục Hổ</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('47')">S47-Hàng Long</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('46')">S46-Tiên Thiên Tôn</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('45')">S45-Xích Cước Tiên</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('44')">S44-Bồ Đề Tổ</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('43')">S43-Tào Quốc Cựu</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('42')">S42-Hàn Tương Tử</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('41')">S41-Hà Tiên Cô</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('40')">S40-Trương Quả Lão</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('39')">S39-Lam Thể Hòa </a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('38')">S38-Lữ Đồng Tân</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('37')">S37-Hớn Chung Ly</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('36')">S36-Lý Thiết Quả</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('35')">S35-Chức Nữ</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('34')">S34-Ngưu Lang</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('33')">S33-Thổ Địa</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('32')">S32-Nguyệt Lão</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('31')">S31-Hằng Nga</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('30')">S30-Tử Hà Tiên Tử</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('29')">S29-Vũ Sư</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('28')">S28-Phong Bà</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('27')">S27.Điện Mẫu</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('26')">S26.Lôi Công</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('25')">S25.Thiên Lôi</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('24')">S24.Thuận Phong Nhĩ</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('23')">S23.Thiên Lý Nhãn</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('22')">S22.Vương Mẫu</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('21')">S21.Thái Thượng Quân</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('20')">S20.Thái Bạch</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('19')">S19.Hồng Hài Nhi</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('18')">S18.Thiết Phiến</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('17')">S17.Ngưu Ma Vương</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('16')">S16.Thông Túy Hầu</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('15')">S15.Xích Khao Hầu</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('14')">S14-Lục Nhĩ Hầu</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('13')">S13.Nhị Lang Thần</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('12')">S12.Na Tra</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('11')">S11-Lý Tịnh</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('10')">S10-Quan Thế Âm</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('9')">S9.Như Lai</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('8')">S8.Ngọc Hoàng</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('7')">S7.Mạnh Bà</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('6')">S6.Diêm Vương</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('5')">S5.Bạch Long Mã</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('4')">S4.Sa Ngộ Tịnh</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('3')">S3.Trư Ngộ Năng</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('2')">S2.Tôn Ngộ Không</a></li>
                <li style="display: none;"><a href="javascript:void(0)" onclick="doServerLogin('1')">S1.Huyền Trang</a></li>
            </ul>
            <div class="server-slide">
                <a href="javascript:void(0)" class="slide-btn prev"></a>
                <a href="javascript:void(0)" class="slide-btn next"></a>
                <ul style="width: 517px; display: block;">
                    <li class="active"><a bucket="0" href="javascript:void(0)">86-77</a></li>
                    <li><a bucket="1" href="javascript:void(0)">76-67</a></li>
                    <li><a bucket="2" href="javascript:void(0)">66-57</a></li>
                    <li><a bucket="3" href="javascript:void(0)">56-47</a></li>
                    <li><a bucket="4" href="javascript:void(0)">46-37</a></li>
                    <li><a bucket="5" href="javascript:void(0)">36-27</a></li>
                    <li><a bucket="6" href="javascript:void(0)">26-17</a></li>
                    <li><a bucket="7" href="javascript:void(0)">16-7</a></li>
                    <li><a bucket="8" href="javascript:void(0)">6-1</a></li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            window.loginSrvId = 1;

            function doServerLogin(srvId) {
                window.loginSrvId = srvId;
                zmeOpenWidget.doLogin('cbServerLogin');
            }
            window.cbServerLogin = function() {
                var protocal = window.location.protocol;
                var dest = encodeURIComponent('https://taydu.360game.vn/play-game?_svid=' + window.loginSrvId + "&" + location.search);
                var ck = encodeURIComponent('https://taydu.360game.vn/auth/zing-verify?cb_url=' + dest);
                var iframe = `<iframe width="0" height="0" style="display:none;visibility:hidden" src="https://sso3.zing.vn/xchecklogin?apikey=848dfc7c1dfe4da3b8dd3c58f8d34be8&u=${ck}"></iframe>`;
                $('body').append(iframe);
            };

            (function() {
                var NUMBER_PER_PAGE = 10;
                var li = $('.server-list .list li');
                $('.server-slide ul').html('');
                var bucket = Math.ceil(li.length / NUMBER_PER_PAGE);
                for (var i = 0; i < bucket; i++) {
                    var from = li.length - (i * NUMBER_PER_PAGE);
                    var to = li.length - ((i + 1) * NUMBER_PER_PAGE - 1);
                    if (to <= 0) to = 1;
                    $('.server-slide ul').append('<li><a bucket="' + i + '" href="javascript:void(0)">' + from + '-' + to + '</a></li>');
                }

                var page = 0;
                var btnNext = $('.server-slide [class="slide-btn next"]');
                var btnPrev = $('.server-slide [class="slide-btn prev"]');
                var ul = $('.server-slide ul');
                var li = $('.server-slide li');
                var liWidth = 0;
                for (var i = 0; i < li.length; i++)
                    liWidth += $(li.get(i)).width();
                if (liWidth < $('.server-slide').width())
                    liWidth = $('.server-slide').width();
                $('.server-slide ul').css({ width: (liWidth + 25) });
                var liWidth = $('.server-slide').width() - $('.server-slide a').width() * 2;
                btnNext.click(function() {
                    page++;
                    if (page > bucket - 3)
                        page = bucket - 3;
                    else
                    //ul.animate({'margin-left': '-=' + liWidth}, 200);
                        ul.animate({ 'margin-left': '-=57.11' }, 200);
                });
                btnPrev.click(function() {
                    page--;
                    if (page < 0)
                        page = 0;
                    else
                    //ul.animate({'margin-left': '+=' + liWidth}, 200);
                        ul.animate({ 'margin-left': '+=57.11' }, 200);
                });

                $('.server-slide ul a').click(function() {
                    var b = $(this).attr('bucket');
                    $('.server-slide li').removeClass('active');
                    $(this).parent().addClass('active');
                    var dom = $('.server-list .clearfix li');
                    dom.hide();
                    for (var i = 0; i < NUMBER_PER_PAGE; i++) {
                        var index = i + (b * NUMBER_PER_PAGE);
                        if (index < dom.length)
                            $(dom.get(index)).show();
                    }
                    dom = $('.server-list ul');
                    dom.hide();
                    dom.fadeIn(100);
                });

                var d = $('.server-slide ul a');
                if (d.length > 0)
                    $(d.get(0)).trigger('click');
            })();
        </script>
    </div>
    <div id="feature-box" class="feature-social clearfix">
        <ul>
            <li><a href="http://360game.vn/plus/download-tdcl360plus"></a></li>
            <li><a href="https://taydu.360game.vn/su-kien/chuoi-su-kien-may-chu-moi.html"></a></li>
            <li><a href="https://www.facebook.com/taydu.360game.vn"></a></li>
            <li><a href="https://taydu.360game.vn/cam-nang/tinh-nang-co-ban/bien-than.html"></a></li>
        </ul>
    </div>
    <div id="fb-box-fanpage" class="">
        <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/taydu.360game.vn" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1417344631718277&amp;container_width=260&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftaydu.360game.vn&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=false"><span style="vertical-align: bottom; width: 260px; height: 130px;"><iframe name="f1a0f62360a3a14" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.10/plugins/page.php?adapt_container_width=true&amp;app_id=1417344631718277&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FFdM1l_dpErI.js%3Fversion%3D42%23cb%3Df14cfbcba7904c4%26domain%3Dtaydu.360game.vn%26origin%3Dhttps%253A%252F%252Ftaydu.360game.vn%252Ffc504d6c694178%26relation%3Dparent.parent&amp;container_width=260&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftaydu.360game.vn&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=false" style="border: none; visibility: visible; width: 260px; height: 130px;" class=""></iframe></span></div>
    </div>
</div>