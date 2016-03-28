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
                <a href="http://mercedesvietnamstar.vn/" class="navbar-brand"><img src="./images/logo.png" alt="logo"></a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse navmenus">
                <div class="hotline">
                    <h2>0909 222 022</h2> Hỗ trợ 24/7
                </div>
                <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>Nguyễn Văn Quý</h2>
                <div class="clearfix"></div>
                <div class="navmenuss">
                    <ul class="nav navbar-nav navbar-right nav-menus">
                        <li><a href="http://mercedesvietnamstar.vn/">Trang chủ</a></li>
                        <li><a href="http://mercedesvietnamstar.vn/gioi-thieu.html">Giới thiệu</a></li>
                        <li><a href="http://mercedesvietnamstar.vn/san-pham.html">Xe mới</a></li>
                        <li><a href="http://mercedesvietnamstar.vn/xe-da-qua-su-dung.html">Xe đã qua sử dụng</a></li>
                        <li><a href="http://mercedesvietnamstar.vn/khuyen-mai.html">Khuyến mãi</a></li>
                        <li><a href="http://mercedesvietnamstar.vn/tin-tuc.html">Tin tức</a></li>
                        <li><a href="http://mercedesvietnamstar.vn/lien-he.html">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End header -->

	@section('sidebar')
        <!-- This is the master sidebar. -->
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>