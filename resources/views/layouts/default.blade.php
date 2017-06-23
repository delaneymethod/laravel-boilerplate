<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="noindex, nofollow, noarchive">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--[if IE]>
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<title>{{ config('app.name') }}</title>
	<link rel="home" href="{{ config('app.url') }}">
	<link rel="stylesheet" href="/assets/css/global.css?date={{ date('dmYHis') }}">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="/assets/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/img/apple-icon-144x144.png">
	<link rel="dns-prefetch" href="{{ config('app.url') }}">
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	<base href="/">
	<!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script async>
	'use strict';

	window.Laravel = {'csrfToken': '{{ csrf_token() }}'};
	</script>
</head>
<body>
	@yield('content')
	<script src="/assets/js/global.js?date={{ date('dmYHis') }}"></script>
</body>
</html>
