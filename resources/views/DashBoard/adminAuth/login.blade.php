@extends('layouts.layout')
@section('content')
<div class="container mt-5">
    <h1>Admin Login</h1>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Login</button>
    </form>
</div>
@endsection
