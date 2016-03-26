<!DOCTYPE html>
<html>
<head>
	<title>New User</title>
</head>
<body>
	<h1>New User</h1>
	{{ $messages = false }}
		{{ Form::open(array('post' => 'UserController@store')) }}
			<label for="name">Name:</label>
				<input type="text" name="name"></input>
				@if($errors->has('name'))
					{{ $errors->first('name')}}
				@endif
			<label for="l_name">Last Name:</label>
				<input type="text" name="l_name"></input>
				@if($errors->has('l_name'))
					{{ $errors->first('l_name')}}
				@endif
			<label for="email">Email:</label>
				<input type="email" name="email"></input>				
			<label for="password">Password:</label>
				<input type="password" name="password"></input>
				@if($errors->has('password'))
					{{ $errors->first('password')}}
				@endif
			<label for="company">Company Name:</label>
				<input type="text" name="company"></input>
		{{ Form::select('size', array('L' => 'Serbia', 'S' => 'Yugoslavia'), 'S')	}}
			{{ Form::submit('Register') }}
		{{ Form::close() }}
	</form>
	<br />

	

</body>
</html>