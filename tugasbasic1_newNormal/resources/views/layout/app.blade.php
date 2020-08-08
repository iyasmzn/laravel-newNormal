<!DOCTYPE html>
<html>
<head>
	<title>Iyasmzn | @yield('title')</title>
	@yield('style')
</head>
<body style="margin: 0;">
	@include('layout.navbar')
	@yield('content')
</body>
</html>
