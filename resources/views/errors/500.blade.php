@extends('layouts.default')

@section('title', '500 Internal Server Error - '.config('app.name'))
@section('description', '500 Internal Server Error - '.config('app.name'))
@section('keywords', '500, Internal, Server, Error, '.config('app.name'))

@section('content')

	<h1>Server Error: 500 (Internal Server Error)</h1>
	<h2>What does this mean?</h2>
	<p class="lead">Something went wrong on our servers while we were processing your request.</p>
	<p>We&#39;re really sorry about this, and will work hard to get this resolved as soon as possible.</p>
	<p>Perhaps you would like to go <a href="javascript:window.history.back();" title="Back">back</a> or go to our <a href="{{ url('/') }}" title="Home">homepage</a> ?</p>
	@if ($exception->getMessage())
		<h3>Exception</h3>
		<small><pre>{{ $exception->getMessage() }}</pre></small>
	@endif

@endsection
