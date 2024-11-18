@extends('layouts.app')

@section('content')
    <style>
        h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .form label {
            font-weight: bold;
            color: #555;
        }
        .form input[type="text"],
        .form textarea,
        .form input[type="file"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
            transition: border-color 0.3s;
        }
        .form input[type="text"]:focus,
        .form textarea:focus,
        .form input[type="file"]:focus {
            border-color: #4a90e2;
        }
        .submit-button {
            background-color: #50c9c3;
            color: white;
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .submit-button:hover {
            background-color: #3baaa8;
        }
    </style>

    <h1>Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Enter post title" required>

        <label for="content">Content</label>
        <textarea name="content" id="content" placeholder="Write your post content here..." required></textarea>

        <label for="image">Upload Image</label>
        <input type="file" name="image" id="image" accept="image/*">

        <button type="submit" class="submit-button">Create Post</button>
    </form>
@endsection
