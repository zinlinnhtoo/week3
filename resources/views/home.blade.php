@extends('layout')

@section('title')
    Home
@endsection


@section('content')
    <div class="container">
        <h2>Home Page</h2>
        <div>
            <a href="/receipe/create"><button class="btn btn-success">Create</button></a>
        </div>
        @foreach($data as $value)
            <li><a href="/receipe/{{ $value->id }}">Name - {{ $value->name }}</a></li>
            <li>Ingredient - {{ $value->ingredients }}</li>
            <li>category - {{ $value->category }}</li>
            <hr>
        @endforeach
    </div>
@endsection
