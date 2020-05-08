@extends('layout')

@section('title')
    Home
@endsection

<h2>Home Page</h2>
@section('content')
    @foreach($data as $value)
        <li>Name - {{ $value->name }}</li>
        <li>Ingredient - {{ $value->ingredients }}</li>
        <li>category - {{ $value->category }}</li>
        <hr>
    @endforeach
@endsection
