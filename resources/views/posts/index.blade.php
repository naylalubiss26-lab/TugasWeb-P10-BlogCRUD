@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <h1>Daftar Post</h1>

    @foreach ($posts as $post)
        <x-card :title="$post->title">
            <p>{{ Str::limit($post->body, 100) }}</p>
            <p><small>Status: {{ $post->status }} | {{ $post->created_at->format('d M Y') }}</small></p>
            <a href="{{ route('posts.show', $post) }}">Baca selengkapnya →</a>
        </x-card>
    @endforeach

    {{ $posts->links() }}
@endsection