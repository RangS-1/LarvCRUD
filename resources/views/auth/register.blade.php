@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h2 style="padding: 5px; font-size: 20px;">Register</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('register') }}" method="POST" style="padding: 5px;">
        @csrf
        <p>
            <label style="font-size: 20px; font-weight: bold;">Nama</label><br>
            <input type="text" name="name" value="{{ old('name') }}" style="border-style: solid; border-radius: 5px; padding: 5px;">
        </p>
        <p>
            <label style="font-size: 20px; font-weight: bold;">Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" style="border-style: solid; border-radius: 5px; padding: 5px;">
        </p>
        <p>
            <label style="font-size: 20px; font-weight: bold;">Password</label><br>
            <input type="password" name="password" style="border-style: solid; border-radius: 5px; padding: 5px;">
        </p>
        <p>
            <label style="font-size: 20px; font-weight: bold;">Konfir Password</label><br>
            <input type="password" name="password_confirmation" style="border-style: solid; border-radius: 5px; padding: 5px;">
        </p>
        <button type="submit" style="font-size: 20px; font-weight: bold; background-color:aqua">Daftar</button>
    </form>

    <p style="font-size: 20px;">Punya akun? <a href="{{ route('login') }}">Login</a></p>
@endsection