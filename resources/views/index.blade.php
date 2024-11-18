@extends('layouts.app')

@section('content')
    <style>
        h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .post-card {
            background: #ffffff;
            margin: 15px 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            padding: 20px;
        }
        .post-card h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .post-card img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 10px;
        }
        .post-card p {
            color: #666;
            line-height: 1.6;
        }
        .post-card .post-author {
            font-size: 14px;
            color: #888;
        }
        .post-actions {
            margin-top: 15px;
        }
        .button {
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
            transition: 0.3s;
        }
        .edit-button {
            background-color: #4a90e2;
        }
        .edit-button:hover {
            background-color: #357ab8;
        }
        .delete-button {
            background-color: #e74c3c;
            border: none;
        }
        .delete-button:hover {
            background-color: #c0392b;
        }
    </style>

    <h1>All Blog Posts</h1>
    @foreach ($posts as $post)
        <div class="post-card">
            <h2>{{ $post->title }}</h2>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
            @endif
            <p>{{ Str::limit($post->content, 150) }}</p>
            <p class="post-author">Posted by {{ $post->user->name }}</p>
            <div class="post-actions">
                <a href="{{ route('posts.edit', $post) }}" class="button edit-button">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button delete-button">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
