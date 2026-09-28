@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Title</label><br>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Body</label><br>
            <textarea name="body" cols="40" rows="6">{{ old('body', $post->body) }}</textarea>
            @error('body')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Status</label><br>
            <select name="status">
                <option value="draft" @selected(old('status', $post->status) === 'draft')>Draft</option>
                <option value="published" @selected(old('status', $post->status) === 'published')>Published</option>
            </select>
            @error('status')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <br>
        <button type="submit" class="btn">Simpan Perubahan</button>
        <a href="{{ route('posts.show', $post) }}" class="btn">Batal</a>
    </form>
@endsection