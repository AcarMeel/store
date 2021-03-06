<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> @yield('title','Vive Store') </title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/simplex/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/acarmeel.css')}}">
</head>
<body>
	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif
	@include('store.partials.nav')
	@yield('content')
	@include('store.partials.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset('js/pinterest_grid.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
