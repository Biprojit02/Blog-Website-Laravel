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
        }
        .form label {
            font-weight: bold;
            color: #555;
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
        .current-image {
            max-width: 100%;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>

    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required>

        <label for="content">Content</label>
        <textarea name="content" id="content" required>{{ $post->content }}</textarea>

        <label for="image">Update Image (optional)</label>
        <input type="file" name="image" id="image" accept="image/*">

        @if ($post->image)
            <p>Current Image:</p>
            <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image" class="current-image">
        @endif

        <button type="submit" class="submit-button">Update Post</button>
    </form>
@endsection
