<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Enrollment System')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/register') }}">Enroll Now</a>
        <a href="{{ url('/about') }}">About Portal</a>
    </nav>

    <div class="main-container">
        @yield('content')
    </div>

    <footer>
        &copy; 2026 Student Enrollment System
    </footer>

</body>
</html>