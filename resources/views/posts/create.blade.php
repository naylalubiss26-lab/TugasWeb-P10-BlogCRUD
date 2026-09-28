@extends('layouts.app')

@section('title', 'Tulis Post Baru')

@section('content')
    <h1>Tulis Post Baru</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <p>
            <label><strong>Judul:</strong></label><br>
            <input type="text" name="title" value="{{ old('title') }}" style="width:100%;">
            @error('title') <small style="color:red;">{{ $message }}</small> @enderror
        </p>

        <p>
            <label><strong>Isi:</strong></label><br>
            <textarea name="body" rows="6" style="width:100%;">{{ old('body') }}</textarea>
            @error('body') <small style="color:red;">{{ $message }}</small> @enderror
        </p>

        <p>
            <label><strong>Status:</strong></label><br>
            <select name="status">
                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
            </select>
            @error('status') <small style="color:red;">{{ $message }}</small> @enderror
        </p>

        <div>
            <label>Gambar (opsional)</label><br>
            <input type="file" name="image">
            @error('image')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn">Simpan Post</button>
        <a href="{{ route('posts.index') }}">Batal</a>
    </form>
@endsection