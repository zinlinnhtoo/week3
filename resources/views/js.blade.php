@extends('layout')

@section('title')
 JS Page
@endsection

@section('content')

<h2>JS page</h2>

@foreach($data as $value)
    <li>{{ $value }}</li>
@endforeach

@endsection
