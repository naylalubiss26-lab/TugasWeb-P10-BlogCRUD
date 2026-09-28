@extends('layouts.app')

@section('content')
    <x-card>
        <h1>{{ $post->title }}</h1>
        <p><strong>Status:</strong> {{ $post->status }}</p>
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                style="max-width:400px; display:block; margin-bottom:12px;">
        @endif
        <p><strong>Dibuat:</strong> {{ $post->created_at->format('d M Y') }}</p>
        <hr>
        <p>{{ $post->body }}</p>
    </x-card>

    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Yakin mau hapus post ini?')">
        @csrf
        @method('DELETE')
        <br>
        <button type="submit" class="btn" style="background:#dc3545">Hapus Post</button>
    </form>

    <a href="{{ route('posts.index') }}" class="btn">← Kembali ke daftar</a>
@endsection