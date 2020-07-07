@extends('layout')

@section('title')
    Create Receipe
@endsection


@section('content')
    <div class="container">
        <h2>Add New Receipe</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/receipe">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            
            <div class="form-group">
                <label>Ingredients</label>
                <input type="text" name="ingredients" class="form-control" value="{{ old('ingredients') }}">
            </div>

            <div class="form-group">
                <select name="category" class="form-control">
                    @foreach($category as $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" class="btn btn-primary">

        </form>
    </div>    
@endsection
