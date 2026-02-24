@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog-detail.css') }}">
@endpush

@section('content')
<article class="single-blog-wrapper">
    <header class="single-blog-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="{{ route('blog') }}">Blog</a> / <span>{{ $blog->title }}</span>
            </nav>
            <h1 class="single-post-title">{{ $blog->title }}</h1>
            <div class="single-post-meta">
                <span class="date"><i class="far fa-calendar-alt"></i> {{ $blog->created_at->format('M d, Y') }}</span>
            </div>
        </div>
    </header>

    <div class="single-featured-image">
        <div class="container">
            <img src="{{ asset('uploads/blogs/'.$blog->image) }}" alt="{{ $blog->title }}">
        </div>
    </div>

    <div class="single-content-area">
        <div class="container">
            <div class="post-body">
                {!! $blog->content !!}
            </div>

            <div class="post-footer">
                <a href="{{ route('blog') }}" class="btn-back">Back to All Blogs</a>
            </div>
        </div>
    </div>
</article>
@endsection
