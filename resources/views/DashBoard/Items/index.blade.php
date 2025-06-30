@extends('layouts.layout')
@section('content')
    <a href="{{ url('/items/create') }}" class="btn btn-primary mb-3">Create Item</a>
    <div class="card-header">
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
            @forelse ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img src="{{ asset('storage/items/'.$item->image) }}" alt="{{ $item->name }}" width="100"></td>
                    <a href="{{ url('items/'.$item->id) }}"><td>{{ $item->name }}</td></a>
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
</div>
@endsection