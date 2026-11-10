<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding: 100px 20px;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            max-width: 500px;
            margin: auto;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background: #f53003;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Selamat Datang di Laravel</h1>
        <p>Mulai bangun aplikasi web Anda.</p>

        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </div>

</body>
</html>
