<!-- resources/views/posts/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($posts->count())
        <div class="list-group">
            @foreach($posts as $post)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('posts.show', $post->id) }}" class="fw-bold text-decoration-none">
                            {{ $post->title }}
                        </a>
                    </div>
                    <div>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>

                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this post?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-3">
            {{ $posts->links() }}
        </div>
    @else
        <p class="text-muted">No posts available.</p>
    @endif
</div>
@endsection
