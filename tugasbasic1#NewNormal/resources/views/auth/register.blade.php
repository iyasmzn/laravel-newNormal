<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
</head>
<body>
	<h1>Register</h1>
	<form method="post" action="/registration-process">
		@csrf
		<label>
			Name
			<input type="text" name="name">
		</label>
		<br>
		<br>
		<label>
			Email
			<input type="email" name="email">
		</label>
		<br>
		<br>
		<label>
			Password
			<input type="password" name="password">
		</label>
		<br>
		<br>
		<input type="submit" value="Register">
	</form>
	<a href="/login">To Login Page >></a>
</body>
</html>
