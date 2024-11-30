@extends('Layouts.head')

@section('title', 'Login')


@section('content')
        <form action="{{ route('login') }}" method="POST" class="container mt-5">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" class="form-control" type="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" class="form-control" type="password" name="password" required>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Login</button>
    </div>
</form> 
@endsection
