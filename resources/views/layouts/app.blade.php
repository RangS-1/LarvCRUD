<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <br>
    <hr>
    <br>

    <nav>
        <a href="{{ route('students.index') }}">Data Siswa</a> |

        @auth
            Halo, {{ auth()->user()->name }} |
            <form action="{{ route('logout') }}" method="POST" style="display:inline">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a> |
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </nav>
    <hr>
    <br>
    
    @if (session('success'))
        <p>{{ session('success')}}</p>
    @endif

    @yield('content')
</body>
</html>