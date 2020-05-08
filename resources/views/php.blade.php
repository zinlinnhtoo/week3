@extends('layout')

@section('title')
    PHP Page
@endsection

@section('content')

<h2>php page</h2>

@foreach($data as $value)
    <li>{{ $value }}</li>
@endforeach

@endsection
