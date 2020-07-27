<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login</h1>
	<form method="post" action="/login-process">
		@csrf
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
		<input type="submit" value="Login">
	</form>
	<a href="/register">To Register Page >></a>
</body>
</html>
