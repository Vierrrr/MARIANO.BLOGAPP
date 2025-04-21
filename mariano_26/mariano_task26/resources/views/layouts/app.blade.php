<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog App</title>
</head>
<body>
    <header>
        <nav>
            <!-- Add your navigation here if needed -->
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('posts.index') }}">All Posts</a>
        </nav>
    </header>

    <main>
        <!-- The content from each view will go here -->
        @yield('content')
    </main>

    <footer>
        <!-- Add your footer content here -->
        <p>&copy; 2025 My Blog App</p>
    </footer>
</body>
</html>
