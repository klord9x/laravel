<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') -Tutorial</title>
</head>

<body>
    <nav role="navagation">
        <ul>
            <li>{!! Html::linkRoute('home', 'Home') !!}</li> 
            @if(Auth::check())
            <li>{!! Html::link('profile', 'Profile') !!}</li>
            <li>{!! Html::link('logout', 'Logout') !!}</li>
            @else
            <li>{!! Html::link('login', 'Login') !!}</li>
            @endif
        </ul>
    </nav>
    @yield('body')
</body>

</html>
