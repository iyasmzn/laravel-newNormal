<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') | BangAbid</title>
	@yield('style')
</head>
<body>
	@include('layout.navbar')
	<hr>
	@yield('content')
</body>
</html>
