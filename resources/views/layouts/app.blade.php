<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Portal')</title> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #fdf8f5;
            color: #4a3e3d;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        nav {
            background: #ffffff;
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: center;
            gap: 2rem;
            box-shadow: 0 4px 15px rgba(184, 115, 101, 0.08);
            border-bottom: 2px solid #f3e5dc;
        }

        nav a {
            color: #7a5c58;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
        }

        nav a:hover {
            color: #c86d51;
            background-color: #fcf0ea;
        }

        .main-container {
            flex: 1;
            max-width: 650px;
            width: 90%;
            margin: 3rem auto;
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(184, 115, 101, 0.1);
            border: 1px solid #f5e8e1;
        }

        input[type="text"], input[type="number"], input[type="email"], select, textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            margin-top: 0.4rem;
            margin-bottom: 1.2rem;
            border: 1.5px solid #ebd8ce;
            border-radius: 8px;
            background-color: #fdfaf8;
            color: #4a3e3d;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #c86d51;
            background-color: #ffffff;
        }

        button, input[type="submit"] {
            background-color: #c86d51;
            color: #ffffff;
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.1s ease;
            box-shadow: 0 4px 12px rgba(200, 109, 81, 0.25);
        }

        button:hover, input[type="submit"]:hover {
            background-color: #b2583d;
            transform: translateY(-1px);
        }

        .profile-card {
            background-color: #faf2ed;
            border-radius: 12px;
            padding: 1.8rem;
            border: 1px dashed #e2c2b3;
            margin-top: 1rem;
        }

        .profile-card h3 {
            color: #9c4830;
            margin-bottom: 1rem;
            font-size: 1.3rem;
            border-bottom: 2px solid #ebd3c7;
            padding-bottom: 0.5rem;
        }

        .profile-card p {
            margin-bottom: 0.6rem;
            font-size: 0.98rem;
            color: #5c4744;
        }

        footer {
            background-color: #faf2ed;
            color: #8c716e;
            text-align: center;
            padding: 1.2rem;
            font-size: 0.85rem;
            border-top: 1px solid #f0ded5;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <!-- Tinanggal ang Register link dito sa nav -->
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
    </nav>

    <div class="main-container">
        @yield('content')
    </div>

    <footer>
        &copy; 2026 Student Portal 
    </footer>

</body>
</html>