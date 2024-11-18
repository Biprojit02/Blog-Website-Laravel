<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Management System</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4a90e2, #50c9c3);
            color: #333;
        }

        /* Navbar Styling */
        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        nav form {
            display: inline;
        }

        nav button {
            background: none;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        /* Container Styling */
        .container {
            max-width: 900px;
            margin: 30px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* Footer Styling */
        footer {
            text-align: center;
            padding: 15px;
            background-color: #333;
            color: #fff;
            position: relative;
            bottom: -150px;
            width: 100%;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <a href="{{ route('posts.index') }}">Home</a>
        @auth
            <a href="{{ route('posts.create') }}">Create Post</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth
        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endguest
    </nav>

    <!-- Main Content Area -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} Blog Management System. All rights reserved.
    </footer>
</body>
</html>
