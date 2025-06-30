@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>Add Item to {{ $MenuCategories->name }}</h1>
    <form action="{{ url('/menuCategories/'.$MenuCategories->id.'/items') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" >
            <input type="hidden" class="form-control" name="category_id" value="{{ $MenuCategories->id }}">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>    
        <button type="submit" class="btn btn-primary mt-3">Create</button>
    </form>
</div>
@endsection