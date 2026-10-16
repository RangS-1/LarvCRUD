@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h2 style="padding: 5px; font-size: 20px;">Login</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('login') }}" method="POST" style="padding: 5px;">
        @csrf
        <p>
            <label style="font-size: 20px; font-weight: bold;">Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" style="border-style: solid; border-radius: 5px; padding: 5px;">
        </p>
        <p>
            <label style="font-size: 20px; font-weight: bold;">PW</label><br>
            <input type="password" name="password" style="border-style: solid; border-radius: 5px; padding: 5px;">
        </p>
        <button type="submit" style="font-size: 20px; font-weight: bold; background-color:aqua">Login</button>
    </form>

    <p style="font-size: 20px;">Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
@endsection