<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Student Information System')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #ffffff; }
        nav { background: #f4f4f4; padding: 10px 15px; margin-bottom: 20px; border-radius: 4px; }
        nav a { margin-right: 10px; text-decoration: none; color: #0056b3; font-weight: bold; }
        .profile-card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; background: #fdfdfd; max-width: 450px; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a> | 
        <a href="{{ url('/register') }}">Registration Form</a> | 
        <a href="{{ url('/about') }}">About System</a>
    </nav>
    <hr>
    <div class="container">
        @yield('content')
    </div>
    <hr>
    <footer>
        <p>&copy; 2026 Web Development 3 Class. All rights reserved.</p>
    </footer>
</body>
</html>
