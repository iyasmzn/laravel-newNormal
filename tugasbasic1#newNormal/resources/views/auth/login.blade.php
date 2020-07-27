<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<form action="/login-process" method="post">
		@csrf
		<table>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="Sign In"></td>
			</tr>
		</table>
	</form>
	<a href="/register">Sign Up >></a>
</body>
</html>
