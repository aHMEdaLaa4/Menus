@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>Edit Items</h1>
    <form action="{{ url('/items/'.$item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $item->price }}">
            <input type="hidden" name="old_image" value="{{ $item->image }}">
            <img src="{{ asset('storage/items/'.$item->image) }}" alt="{{ $item->name }}" width="100" class="mt-3 mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $item->description }}</textarea>
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" class="form-control">
                @foreach ($MenuCategories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id', $item->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection