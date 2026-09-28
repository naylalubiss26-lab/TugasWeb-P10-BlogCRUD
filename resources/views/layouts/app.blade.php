<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog CRUD | @yield('title', 'Beranda')</title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; }
        nav a { margin-right: 15px; text-decoration: none; }
        .btn { display: inline-block; padding: 8px 16px; background: #2563eb; color: white; border-radius: 6px; text-decoration: none; border: none; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('posts.index') }}">Daftar Post</a>
        <a href="{{ route('posts.create') }}">+ Tulis Post</a>
        <a href="{{ route('posts.trash') }}">🗑 Trash</a>
    </nav>
    <hr>

    @if (session('success'))
        <p style="background:#dcfce7; color:#166534; padding:12px; border-radius:6px;">✅ {{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p style="background:#fee2e2; color:#991b1b; padding:12px; border-radius:6px;">❌ {{ session('error') }}</p>
    @endif

    @yield('content')
</body>
</html>