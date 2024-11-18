@extends('layouts.app')

@section('content')
    <style>
        h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .form-container {
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
            width: 100%;
            margin-bottom: 10px;
        }
        .submit-button {
            background-color: #4a90e2;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }
        .submit-button:hover {
            background-color: #357ab8;
        }
    </style>

    <div class="form-container">
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" required>

            <label for="content">Content</label>
            <textarea name="content" id="content" rows="5" required>{{ $post->content }}</textarea>

            <label for="image">Upload New Image (optional)</label>
            <input type="file" name="image" id="image" accept="image/*">

            @if ($post->image)
                <p>Current Image:</p>
                <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image" style="max-width: 100%; border-radius: 5px;">
            @endif

            <button type="submit" class="submit-button">Update Post</button>
        </form>
    </div>
@endsection
