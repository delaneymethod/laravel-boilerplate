@extends('layouts.default')

@section('title', '403 Forbidden - '.config('app.name'))
@section('description', '403 Forbidden - '.config('app.name'))
@section('keywords', '403, Forbidden, '.config('app.name'))

@section('content')

	<h1>Server Error: 403 (Forbidden)</h1>
	<h2>What does this mean?</h2>
	<p class="lead">You don&#39;t have the right credentials to view the requested resource.</p>
	<p>Perhaps you would like to go <a href="javascript:window.history.back();" title="Back">back</a> or go to our <a href="{{ url('/') }}" title="Home">homepage</a> ?</p>

@endsection
