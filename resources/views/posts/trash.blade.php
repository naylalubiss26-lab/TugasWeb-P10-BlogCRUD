@extends('layouts.app')

@section('content')
    <h1>🗑 Trash</h1>
    <p>Post yang sudah dihapus. Masih bisa dipulihkan!</p>

    @forelse ($posts as $post)
        <div style="border:1px dashed #999; padding:12px; margin-bottom:12px;">
            <strong>{{ $post->title }}</strong>
            <br><small>Dihapus: {{ $post->deleted_at->format('d M Y H:i') }}</small>

            <form action="{{ route('posts.restore', $post) }}" method="POST">
                @csrf
                <br>
                <button type="submit" class="btn">♻️ Pulihkan</button>
            </form>
        </div>
    @empty
        <p><em>Trash kosong — nggak ada post yang bisa dipulihkan.</em></p>
    @endforelse

    {{ $posts->links() }}

    <br>
    <a href="{{ route('posts.index') }}" class="btn">← Kembali ke daftar</a>
@endsection