@extends('layouts.default')

@section('title', '503 Be Right Back - '.config('app.name'))
@section('description', '503 Be Right Back - '.config('app.name'))
@section('keywords', '503, Be, Right, Back, '.config('app.name'))

@section('content')
			
	<h1>Server Error: 503 (Be Right Back)</h1>
	<h2>What does this mean?</h2>
	<p class="lead">{{ json_decode(file_get_contents(storage_path('framework/down')), true)['message'] }}</p>

@endsection
