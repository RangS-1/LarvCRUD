<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Siswa</title>

</head>
<body style="margin: 0px; font-family:'Courier New', Courier, monospace">
    <h1 style="background-color: blue; margin: 0px; padding: 20px; box-shadow: 2px;">Data Siswa</h1>
    <br>
    <br>

    <nav">
        <a href="{{ route('students.index') }}" style="padding: 10px; font-size: 20px; border-style: solid; border-color:black; border-radius: 20px;">Dashboard</a> |

        @auth
            Halo, {{ auth()->user()->name }} |
            <form action="{{ route('logout') }}" method="POST" style="display:inline; padding: 10px; font-size: 20px; border-style: solid; border-color:black; border-radius: 20px;">
                @csrf
                <button type="submit" style="background-color: white; border: none; padding: 10px; font-size: 10px;">
                    Logout
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" style="padding: 10px; font-size: 20px; border-style: solid; border-color:black; border-radius: 20px;">Login</a> |
            <a href="{{ route('register') }}" style="padding: 10px; font-size: 20px; border-style: solid; border-color:black; border-radius: 20px;">Register</a>
        @endauth
    </nav>
    <br>
    
    @if (session('success'))
        <p>{{ session('success')}}</p>
    @endif

    @yield('content')
</body>
</html>