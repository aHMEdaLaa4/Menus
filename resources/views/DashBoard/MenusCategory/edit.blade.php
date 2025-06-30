@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>Edit Category</h1>
    <form action="{{ url('menuCategories/'.$menuCategory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $menuCategory->name }}">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $menuCategory->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div
@endsection