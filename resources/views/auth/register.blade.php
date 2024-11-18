@extends('layouts.app')

@section('content')
    <style>
        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .register-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 400px;
            margin: 0 auto;
        }
        .register-form input[type="text"],
        .register-form input[type="email"],
        .register-form input[type="password"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
            transition: border-color 0.3s;
            width: 100%;
            box-sizing: border-box;
        }
        .register-form input[type="text"]:focus,
        .register-form input[type="email"]:focus,
        .register-form input[type="password"]:focus {
            border-color: #4a90e2;
        }
        .register-button {
            background-color: #50c9c3;
            color: white;
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            box-sizing: border-box;
        }
        .register-button:hover {
            background-color: #3baaa8;
        }
    </style>

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
@endsection
