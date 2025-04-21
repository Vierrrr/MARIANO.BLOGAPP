<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Post</h1>

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

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" value="{{ old('title') }}" required>

        <label>Body:</label>
        <textarea name="body" required>{{ old('body') }}</textarea>

        <button type="submit">Save</button>
    </form>
</div>
@endsection
