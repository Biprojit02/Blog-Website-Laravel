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
            width: 100%;
        }

        .register-container {
            max-width: 400px;
            background: #f7f9fc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .register-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .register-form input:focus {
            border-color: #4a90e2;
            outline: none;
        }

        .register-button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #50c9c3;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-button:hover {
            background-color: #3baaa8;
        }
    </style>

    <div class="content">
        <div class="register-container">
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="POST" class="register-form">
                @csrf
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button type="submit" class="register-button">Register</button>
            </form>
        </div>
    </div>

    <!-- <footer class="footer">
        © 2024 Blog Management System. All rights reserved.
    </footer> -->
@endsection
