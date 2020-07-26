<!DOCTYPE html>
<html>
<head>
	<title>Iyasmzn | @yield('title')</title>
	@yield('style')
</head>
<body>
	@include('layout.navbar')
	@yield('content')
</body>
</html>
