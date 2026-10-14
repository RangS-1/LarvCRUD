@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h2>Register</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <p>
            <label>Nama</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
        </p>
        <p>
            <label>Password</label><br>
            <input type="password" name="password">
        </p>
        <p>
            <label>Konfir Password</label><br>
            <input type="password" name="password_confirmation">
        </p>
        <button type="submit">Daftar</button>
    </form>

    <p>Punya akun? <a href="{{ route('login') }}">Login</a></p>
@endsection