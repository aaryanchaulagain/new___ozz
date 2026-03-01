@extends('layouts.master')

@section('content')
<div style="max-width:500px; background:#f9f9f9; padding:20px; border-radius:8px;">
    <h2>Edit Blog</h2>

    <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Title</label><br>
        <input type="text" name="title" value="{{ $blog->title }}" required style="width:100%; padding:8px"><br><br>

        <label>Image (leave blank to keep current)</label><br>
        <input type="file" name="image"><br>
        <img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="Current Image" style="width:150px; margin-top:10px"><br><br>

        <label>Content</label><br>
        <textarea name="content" rows="5" required style="width:100%; padding:8px">{{ $blog->content }}</textarea><br><br>

        <button type="submit" style="padding:10px 20px;">Update Blog</button>
    </form>
</div>
@endsection
