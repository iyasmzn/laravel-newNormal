<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
</head>
<body>
	<h1>Register Form</h1>
	<form method="post" action="/registration-process">
		@csrf
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
			</tr>
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
				<td colspan="3"><input type="submit" value="Sign Up"></td>
			</tr>
		</table>
	</form>
	<a href="/login">Sign In >></a>
</body>
</html>
