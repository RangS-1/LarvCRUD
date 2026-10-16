@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h2>Login</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <p>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
        </p>
        <p>
            <label>PW</label><br>
            <input type="password" name="password">
        </p>
        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
@endsection