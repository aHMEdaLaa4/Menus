@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>Create Category</h1>
    <form action="{{ url('menuCategories/') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div
@endsection