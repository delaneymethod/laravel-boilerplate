@extends('layouts.default')

@section('title', '404 Page not found - '.config('app.name'))
@section('description', '404 Page not found - '.config('app.name'))
@section('keywords', '404, Page, not, found, '.config('app.name'))

@section('content')

	<h1>Server Error: 404 (Page not found)</h1>
	<h2>What does this mean?</h2>
	<p class="lead">We couldn&#39;t find the page you requested on our servers.</p>
	<p>We&#39;re really sorry about that. It&#39;s our fault, not yours.</p>
	<p>We&#39;ll work hard to get this page back online as soon as possible.</p>
	<p>Perhaps you would like to go <a href="javascript:window.history.back();" title="Back">back</a> or go to our <a href="{{ url('/') }}" title="Home">homepage</a> ?</p>

@endsection
