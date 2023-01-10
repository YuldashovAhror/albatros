<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/main.css">
    @yield('style')
	<title>Albatros</title>
</head>
<body>
@include('components.front.mobile')
@include('components.front.header')
@include('components.front.feedback')
@include('components.front.sidebar')
@yield('content')
@if(\Request::segment(1) != 'contact' )  
@include('components.front.footer')
@endif
@include('components.front.scripts')
@yield('scripts')
</body>