<!DOCTYPE html>
<html>
<head>
	<title>New User</title>
</head>
<body>
	<h1>New User</h1>
		{{ Form::open(array('action' => 'UserController@store')) }}
			<label for="name">Name:</label>
				<input type="text" name="name"></input>
			<label for="name">Last Name:</label>
				<input type="text" name="l_name"></input>
			<label for="name">Email:</label>
				<input type="email" name="email"></input>
			<label for="name">Password:</label>
				<input type="password" name="password"></input>
			<label for="name">Company Name:</label>
				<input type="text" name="company"></input>
			<select name="country"  form="new_user">
				<option value="Serbia">Serbia</option>
				<option value="Serbia">Serbia</option>
				<option value="Serbia">Serbia</option>
				<option value="Serbia">Serbia</option>
			</select>
			<input type="submit"></input>
		{{ Form::close() }}
	</form>
	<br />

	

</body>
</html>