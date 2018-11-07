<!DOCTYPE html>
<html>
<head>
	<title>QuocDat</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	@include('layouts.header')

	
	<div id="content">
	<h1>QUOC DAT</h1>
	@yield('NoiDung')
	</div>
	@include('layouts.nav')
	@include('layouts.footer')
</body>
</html>