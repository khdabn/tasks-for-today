<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Tasks for Today')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f5f7;
            color: #263238;
            line-height: 1.6;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            padding: 16px 24px;
            background: #204d74;
        }

        nav a {
            padding: 6px 12px;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        nav a:hover,
        nav a[aria-current="page"] {
            background: #143550;
            text-decoration: underline;
        }

        main {
            width: min(1000px, 92%);
            margin: 32px auto;
            padding: 28px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px #00000015;
        }

        h1 {
            margin-top: 0;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #d9dfe5;
            text-align: left;
        }

        th {
            background: #204d74;
            color: white;
        }

        tbody tr:nth-child(even) {
            background: #f3f6f9;
        }

        dt {
            font-weight: bold;
            margin-top: 14px;
        }

        dd {
            margin-left: 0;
            overflow-wrap: anywhere;
        }
    </style>
</head>
<body>
    <nav aria-label="Main navigation">
        <a href="{{ route('home') }}"
           @if(request()->routeIs('home')) aria-current="page" @endif>
            Welcome
        </a>

        <a href="{{ route('tasks.index') }}"
           @if(request()->routeIs('tasks.index')) aria-current="page" @endif>
            Task List
        </a>

        <a href="{{ route('profile') }}"
           @if(request()->routeIs('profile')) aria-current="page" @endif>
            Profile
        </a>

        <a href="{{ route('about') }}"
           @if(request()->routeIs('about')) aria-current="page" @endif>
            About
        </a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>