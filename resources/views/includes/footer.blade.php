<footer class="footer">
    <div class="container">
        <p class="icons"></p>
        <p>Công ty TNHH Nội Dung Số Nguyên Bảo - 73/17 Trần Khánh Dư, Phường Mỹ An, Quận Ngũ Hành Sơn, TP Đà Nẵng</p>
        <p>Giấy phép phê duyệt nội dung số: 1967/QĐ-BTTTT cấp ngày 13/11/2017 do Bộ Thông Tin Và Truyền Thông cấp</p>
    </div>
</footer>
<p id="back-top" class="back-top" style="display: none;"><a href="#top">&nbsp;</a></p>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/tab.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#back-top').hide();
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100)
                $('#back-top').fadeIn();
            else
                $('#back-top').fadeOut();
        });
        $('#back-top a').click(function() {
            $('body, html').animate({ scrollTop: 0 }, 800);
            return false;
        });

        $('.bn-slide').bxSlider({
            auto: true,
            pause: 5000,
            controls: false
        });
        $('.bg-slide').bxSlider({
            auto: true,
            pause: 2000,
            mode: 'fade',
            controls: false,
            slideWidth: 1289
        });
    });

    function search() {
        window.location = '//taydu.360game.vn/tim-kiem?q=' + $('#search-input').val();
    }
</script>
<iframe style="display:none;visibility:hidden" src="https://sso3.zing.vn/xchecklogin?apikey=848dfc7c1dfe4da3b8dd3c58f8d34be8&amp;u=https%3A%2F%2Ftaydu.360game.vn%2Fauth%2Fzing-verify" width="0" height="0"></iframe>
<!--<iframe width="0" height="0" style="display:none;visibility:hidden" src="https://sso3.zing.vn/xchecklogin?apikey=848dfc7c1dfe4da3b8dd3c58f8d34be8&u=http%3A%2F%2F360game.vn%2Fauth%2Fauto-login"></iframe>-->
<script src="js/openwidget2.js" type="text/javascript"></script>
<div class="zme-boxy-wrapper zme-boxy-modal" style="display: none;">
    <div class="zme-boxy">
        <div class="zme-boxy-container">
            <div class="zme-boxy-title">Đồng bộ tài khoản</div>
            <div class="zme-boxy-body">
                <div class="zme-boxy-content"></div>
                <div class="zme-boxy-footer"><a class="btn_L3" tabindex="0" href="#"><em>Đồng ý</em></a></div>
            </div><a class="zme-boxy-close" href="#"></a></div>
    </div>
</div>
<script type="text/javascript">
    window.zAsyncInit = function() {
        zmeOpenWidget.init({
            apikey: "848dfc7c1dfe4da3b8dd3c58f8d34be8",
            callback: 'loginCallback',
            pid: '137',
            tpl: "5",
            css: 'https://img.zing.vn/products/vendor/general/widget-login/css/login_quickreg_1.05.css'
        });
    };

    window.loginCallback = function() {
        if (this.arguments[5] && this.arguments[5].register || window.quickLogin)
            window.location.href = 'https://taydu.360game.vn/quick-play' + location.search;
        else
            window.location.reload();
    };

    function boxyInject() {
        function boxInject(domId) {
            var dom = $('#' + domId);
            if (dom.length) {
                var params = getUrlParams();
                params.domId = domId;
                // $.ajax({ url: 'http://taydu.360game.vn/ajax-box', type: 'POST', data: params }).done(function(html) {
                //     dom.html(html);
                // });
            }
        }
        //
        boxInject('banner-slider-box');
        //
        boxInject('events-list-box');
        //
        boxInject('fb-box-fanpage');
        //
        boxInject('fb-box-like');
        //
        boxInject('fb-chat-box');
        //
        boxInject('fb-sdk-init');
        //
        boxInject('feature-box');
        //
        boxInject('header-box');
        //
        boxInject('info-detail-box');
        //
        boxInject('login-box');
        //
        boxInject('news-event-box');
        //
        boxInject('news-list-box');
        //
        boxInject('ranking-box');
        //
        boxInject('search-box');
        //
        boxInject('server-list-box');
        //
    }

    function getUrlParams() {
        var match,
            pl = /\+/g, // Regex for replacing addition symbol with a space
            search = /([^&=]+)=?([^&]*)/g,
            decode = function(s) { return decodeURIComponent(s.replace(pl, " ")); },
            query = window.location.search.substring(1);

        var urlParams = {};
        while (match = search.exec(query))
            urlParams[decode(match[1])] = decode(match[2]);

        return urlParams;
    };

    $(document).ready(function() {
        boxyInject();
    });
</script>
<script type="text/javascript">
    var config360game = {
        zing_account: "",
        app_name: "tdcl360",
        platform: "360game",
        _svid: "",
        show_header: "1"
    };
</script>
<script type="text/javascript" src="js/360game-.js"></script>
<iframe id="360log" src="js/tracking.txt" style="display:none;visibility:hidden" width="0" height="0"></iframe>
<iframe id="360logweb" src="js/tracking_002.txt" style="display:none;visibility:hidden" width="0" height="0"></iframe>
<div class="zme-boxy-wrapper zme-boxy-modal" style="display: none;">
    <div class="zme-boxy zme_login_boxy">
        <div class="zme-boxy-container">
            <div class="zme-boxy-title" style="display: none;"></div>
            <div class="zme-boxy-body">
                <div class="zme-boxy-content">
                    <div id="bxcontainer"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="zme-boxy-wrapper zme-boxy-modal" style="display: none;">
    <div class="zme-boxy zme_login_boxy">
        <div class="zme-boxy-container">
            <div class="zme-boxy-title">Thông báo</div>
            <div class="zme-boxy-body">
                <div class="zme-boxy-content">
                    <div id="bxalertcontainer"></div>
                </div>
                <div class="zme-boxy-footer"><a class="btn_L3" tabindex="0" href="#"><em>Đồng ý</em></a></div>
            </div>
        </div>
    </div>
</div>
<iframe id="ifr_trackinggame" src="js/tracking-game.htm" style="display:none;visibility:hidden" width="0" height="0"></iframe>
<div class="global_header">
    <div id="ved_section2">
        <div class="inner">
            <div class="block">
                <a href="http://360game.vn/?_src=360-logo-header" target="_blank" title="Web game 360Game"><img src="img/icon_360-1.png" class="banner" style="vertical-align:top;width:70px"></a>
            </div>
            <div class="block" onmouseover="script360.showListApps();">
                <a href="http://360game.vn/web-game/?_src=360-list-header" target="_blank" class="l1"><img src="img/icon_game.png" title="Danh sách web game" align="absmiddle">Danh sách game</a>
                <div id="list_apps_header"></div>
            </div>
            <div class="banner-topmain">
                <a class="hidden360" href="" title="" target="_blank">


                    <img class="banner_flash" title="vk360" src="img/360x31-1521791340327.gif" width="100%">

                </a>
                <div class="popup-main">
                    <a id="img_banner" href="https://360game.vn/dtbs/redirect?token=MjAxxg" title="" target="_blank">
                        <img src="img/huyet-chien-thu-hung-1521791349171.png" style="background:#FFFFFF; width:1000px;height:190px" title="vk360">
                    </a>
                </div>
            </div>
            <script>
                var data = {};
                data.action = 'get';
                //                data.pos = '104';
                data.pos = '6';

                // add attr for left_right banner
                $.ajax({
                    url: 'http://360game.vn/dtbs/get',
                    jsonp: 'callback',
                    dataType: 'jsonp',
                    data: data,
                    success: function(resp) {
                        if (resp.error >= 0) {
                            var banner = resp.data;
                            var bnPopup, bnImg, bnA;
                            bnPopup = $('.banner-topmain .popup-main img');
                            bnA = $('.banner-topmain .popup-main a');
                            bnImg = $('.banner-topmain .hidden360 img');

                            bnA.attr('href', banner.link);
                            bnImg.attr('src', banner.img);
                            bnPopup.attr('src', banner.bigImg);
                            bnPopup.attr('title', banner.appname);
                            bnImg.attr('title', banner.appname);
                        } else
                            $('.banner-topmain').remove();
                    }
                });
            </script>
        </div>
    </div>
</div>
<iframe style="visibility: hidden" src="js/iframe.htm" width="0" height="0" frameborder="0"></iframe>
<script>
    $('head').append('<meta name="google-site-verification" content="vBuOMU-IGotXRnJC4-7it8gDcyKFnKNCTxjQXsVQEH4" />').append('<meta name="google-site-verification" content="svvXWp88dXy-z8dSRr18g_aj0vV3Cd6pARgErhUc4as" />');
</script>
<div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div>
            <iframe name="fb_xdm_frame_https" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="js/FdM1l_dpErI.htm" frameborder="0"></iframe>
        </div>
    </div>
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div></div>
    </div>
</div>