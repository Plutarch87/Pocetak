<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<h1>Users</h1>
	
	@if(Auth::check())
		<a href="{{ URL::route('edit-profile') }}">Edit profile</a>
		<a href="{{ URL::route('login-user') }}" action="{{ Auth::logout() }}">Logout</a>
	@else
		<a href="{{ URL::route('login-user') }}">Login</a>
		<a href="{{ URL::route('register-user') }}">Register</a>
	@endif
</body>
</html>