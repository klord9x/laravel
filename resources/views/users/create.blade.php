<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create users</title>
</head>
<body>
	{!! Form::open(array('route' => 'users.store')) !!}

	<div>
		{!! Form::label('email', 'Email') !!}
		{!! Form::text('email', Input::old('email'),[
			'placeholder' => 'email address', 'autofocus' => 'autofocus'
			]) !!}
		{{ $errors->first('email') }}
	</div>

	<div>
		{!! Form::label('password', 'Password') !!}
		{!! Form::password('password', ['placeholder' => 'password']) !!}
		{{ $errors->first('password') }}
	</div>

	<div>
		{!! Form::label('password_confirmation', 'Confirm Password') !!}
		{!! Form::password('password_confirmation', ['placeholder' => 'repeat password']) !!}
	</div>

	<div>
		{!! Form::submit('Sign up') !!}
	</div>

	{!! Form::close() !!}


</body>
</html>