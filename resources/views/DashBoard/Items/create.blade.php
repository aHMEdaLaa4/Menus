@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>Create Items</h1>
    <form action="{{ url('/items') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" >
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" class="form-control">
                @foreach ($MenuCategories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
    
        <button type="submit" class="btn btn-primary mt-3">Create</button>
    </form>
</div>
@endsection