@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <form action="{{ route('posts.index') }}" method="GET">
        <input type="text" name="search" placeholder="Cari judul post..." value="{{ request('search') }}">
        <button type="submit" class="btn">Cari</button>
    </form>
    <br>

    <h1>Daftar Post</h1>

    @foreach ($posts as $post)
        <x-card :title="$post->title">
            <p>{{ Str::limit($post->body, 100) }}</p>
            <p><small>Status: {{ $post->status }} | {{ $post->created_at->format('d M Y') }}</small></p>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="" style="max-width:150px; display:block; margin-bottom:8px;">
            @endif
            <a href="{{ route('posts.show', $post) }}">Baca selengkapnya →</a>
        </x-card>
    @endforeach

    {{ $posts->withQueryString()->links() }}
@endsection