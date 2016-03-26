<h1>LOGIN</h1>
{{ Form::open(array('post' => 'UserController@postLogin')) }}
<label for="name">Name:</label>
	<input type="text" name="name"></input>
	@if($errors->has('name'))
		{{ $errors->first('name')}}
	@endif
<label for="password">Password:</label>
	<input type="password" name="password"></input>
	@if($errors->has('password'))
		{{ $errors->first('password')}}
	@endif
{{ Form::submit('Login') }}
{{ Form::close() }}