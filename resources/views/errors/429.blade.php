@extends('layouts.default')

@section('title', '429 Too Many Attempts - '.config('app.name'))
@section('description', '429 Too Many Attempts - '.config('app.name'))
@section('keywords', '429, Too, Many, Attempts, '.config('app.name'))

@section('content')

	<h1>Server Error: 429 (Too Many Attempts)</h1>
	<h2>What does this mean?</h2>
	<p class="lead">You have made too many requests to the same resource, and now you will have to wait for a {{ $retryAfter }} seconds before trying again.</p>

@endsection
