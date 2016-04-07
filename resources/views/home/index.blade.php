<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    @include('alerts')
    @if (Auth::check())
        You are logged in. {!! Html::link('logout', 'Logout') !!}
    @else
        You are not logged in. {!! Html::link('login', 'Login') !!}
        {!! Html::link('signup', 'Sign up') !!}
    @endif

</body>
</html>