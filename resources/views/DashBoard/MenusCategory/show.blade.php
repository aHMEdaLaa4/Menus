@extends('layouts.layout')
@section('content')
    <h1>{{ $menuCategory->name }}</h1>
    <p>{{ $menuCategory->description }}</p>
        <a href="{{ url('menuCategories/'.$menuCategory->id.'/items/create') }}" class="btn btn-primary mb-3">Add Item to {{ $menuCategory->name }}</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($menuCategory->items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('items/'.$item->id) }}">{{ $item->name }}</a></td>
                    <td><img src="{{ asset('storage/items/'.$item->image) }}" alt="{{ $item->name }}" width="100"></td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->menuCategory->name }}</td>
                    <td>
                        <a href="{{ url('items/'.$item->id.'/edit') }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('items/'.$item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                
            @endforelse
                
        </tbody>
    </table>
@endsection