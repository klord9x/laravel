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
{!! Form::open(['route' => 'sessions.store']) !!}

    <!-- Title form input -->
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Content form input -->
    <div class="form-group">
        {!! Form::label('password', 'Pass word:') !!}
        {!! Form::password('password', null, ['class' => 'form-control']) !!}
    </div>
    <div>
    	{!! Form::submit('Login') !!}
    </div>

{!! Form::close() !!}
</body>
</html>