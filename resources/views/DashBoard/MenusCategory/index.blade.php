@extends('layouts.layout')
@section('content')
    <a href="{{ url('menuCategories/create') }}" class="btn btn-primary mb-3">Create Category</a>
    <div class="card-header">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td><a href="{{ url('menuCategories/'.$category->id) }}">{{ $category->name }}</a></td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ url('menuCategories/'.$category->id.'/edit') }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('menuCategories/'.$category->id) }}" method="POST" style="display:inline;">
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