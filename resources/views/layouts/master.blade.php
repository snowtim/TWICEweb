<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>@yield('title')</title>
	
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<!--Bootstrape-->
	<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"-->

	<!--Less-->
	<!--link rel="stylesheet" href="{{ asset('less/test.less') }}"-->
	<!--link rel="stylesheet/less" type="text/css" href="{{ asset('less/test.less') }}">
	<script src="//cdn.jsdelivr.net/npm/less" ></script-->
</head>

<body>
	@include('layouts.header')
	@include('layouts.artist')
	@yield('content')
	@include('layouts.footer')

	<script src="{{ asset('js/artist-change.js') }}"></script>

	<!--Bootstrape-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>