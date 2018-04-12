<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">
        {{-- Slider --}}
        @include('includes.sidebar')
        @include('includes.slider')
        {{-- End slider --}}
        <div id="header-box">
            <header class="header">
                @include('includes.header')
            </header>
        </div>
        {{--Main Content--}}
        <div class="main-content clearfix">
            @include('includes.left')
            @include('includes.right')
            {{--@yield('content')--}}
        </div>
        {{--End main content--}}
        <footer class="row">
            @include('includes.footer')
        </footer>

    </div>
</body>
</html>