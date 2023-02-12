@extends('layout.app')

@section('content')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1 class="text-center">Login</h1>
        <form action="/sesi/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"
                value="{{ Session::get('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
                <p class="mt-2 text-center">Belum punya akun ?<a href="/sesi/register">Klik disini</a></p>
            </div>
        </form>
    </div>
@endsection