<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - FreshWash</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #17243a;
        }
        .navbar {
            background: white;
            padding: 20px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5eaf0;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #1674c5;
        }
        .navbar a {
            text-decoration: none;
            color: #53647b;
            margin-left: 20px;
            font-weight: bold;
        }
        .container {
            width: 90%;
            max-width: 1100px;
            margin: 35px auto;
        }
        .card {
            background: white;
            padding: 22px;
            border-radius: 14px;
            box-shadow: 0 4px 15px rgba(0,0,0,.04);
            margin-bottom: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }
        .stat {
            color: #1674c5;
            font-size: 28px;
            font-weight: bold;
        }
        .btn {
            display: inline-block;
            background: #1674c5;
            color: white !important;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px 0 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        th {
            color: #66758a;
        }
        footer {
            text-align: center;
            padding: 25px;
            color: #718096;
        }
        @media(max-width: 700px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .navbar {
                flex-direction: column;
                gap: 15px;
            }
            .navbar a {
                margin: 5px;
            }
        }

        @media(max-width: 450px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <x-navbar :username="$username ?? ''" />
    <div class="container">
        @yield('content')
    </div>
    @include('components.footer')
</body>
</html>
