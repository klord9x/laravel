<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Login User</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@include('alerts')
{!! Form::open(['route' => 'sessions.store']) !!}

    <!-- Title form input -->
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', Input::old('email'), ['class' => 'form-control',
            'placeholder' => 'email address', 'autofocus' => 'autofocus'])
        !!}
    </div>

    <!-- Content form input -->
    <div class="form-group">
        {!! Form::label('password', 'Pass word:') !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) !!}
    </div>

    <div class="form-group">
        <label for="remeber_me">
            <input id="remember_me" name="remember_me" type="checkbox" value="1"></input>Remember me
        </label>
    </div>
    <div>
    	{!! Form::submit('Login') !!}
    </div>

{!! Form::close() !!}
</body>
</html>