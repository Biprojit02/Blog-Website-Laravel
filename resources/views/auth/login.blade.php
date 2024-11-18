@extends('layouts.app')

@section('content')
    <style>
        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .login-form input[type="email"],
        .login-form input[type="password"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
            width: 100%;
        }
        .login-button {
            background-color: #4a90e2;
            color: white;
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-button:hover {
            background-color: #357ab8;
        }
    </style>

    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
@endsection
