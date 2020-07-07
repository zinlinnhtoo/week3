@extends('layout')

@section('title')
    Show
@endsection

@section('content')
    <div class="container">
        <h2>{{ $receipe->name }}</h2>
        <li>Ingredients - {{ $receipe->ingredients }}</li>
        <li>Category - {{ $receipe->categories->name }}</li>
        <a href="{{$receipe->id}}/edit"><button class="btn btn-primary">Edit</button></a>
        <form method="POST" action="/receipe/{{$receipe->id}}">
            {{method_field("DELETE")}}
            {{csrf_field()}}
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
