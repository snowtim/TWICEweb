<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>@yield('title')</title>
	
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>
	@include('layouts.header')
	@include('layouts.artist')
	@yield('content')
	@include('layouts.footer')

	<script src="{{ asset('js/artist-change.js') }}"></script>
</body>

</html>