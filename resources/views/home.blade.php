@extends('layout')

@section('title')
    Home
@endsection


@section('content')
    <div class="container">
        <h2>Home Page</h2>
        @foreach($data as $value)
            <li><a href="/receipe/{{ $value->id }}">Name - {{ $value->name }}</a></li>
            <li>Ingredient - {{ $value->ingredients }}</li>
            <li>category - {{ $value->category }}</li>
            <hr>
        @endforeach
    </div>
@endsection
