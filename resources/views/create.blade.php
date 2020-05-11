@extends('layout')

@section('title')
    Create Receipe
@endsection


@section('content')
    <div class="container">
        <h2>Add New Receipe</h2>
        <form method="POST" action="/receipe">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Ingredients</label>
                <input type="text" name="ingredients" class="form-control">
            </div>

            <div class="form-group">
                <label>Category</label>
                <input type="text" name="category" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary">

        </form>
    </div>    
@endsection
