<!-- resources/views/posts/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div>
            <strong>Errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}" required>

        <label>Body:</label>
        <textarea name="body" required>{{ old('body', $post->body) }}</textarea>

        <button type="submit">Update</button>
    </form>
</div>
@endsection
