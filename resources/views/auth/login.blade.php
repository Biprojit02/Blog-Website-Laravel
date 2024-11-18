@extends('layouts.app')

@section('content')
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #50c9c3, #4a90e2);
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .login-container {
            max-width: 400px;
            background: #f7f9fc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form input:focus {
            border-color: #4a90e2;
            outline: none;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #4a90e2;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #357ab8;
        }
    </style>

    <div class="content">
        <div class="login-container">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST" class="login-form">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="login-button">Login</button>
            </form>
        </div>
    </div>

    <!-- <footer class="footer">
        © 2024 Blog Management System. All rights reserved.
    </footer> -->
@endsection
