@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')

<section class="blog-hero">
    <div class="blog-hero-overlay">
        <div class="container">
            <h1 class="blog-main-title">Our Insights & Updates</h1>
            <p class="blog-subtitle">Stay updated with the latest news and educational guides.</p>
        </div>
    </div>
</section>

<section class="blog-section">
    <div class="blog-container">
        <div class="blog-grid">
            @foreach($blogs as $blog)
                <article class="blog-card">
                    <div class="blog-image-wrapper">
                        <a href="{{ route('blog.show', $blog->id) }}">
                            <img
                                src="{{ asset('uploads/blogs/'.$blog->image) }}"
                                alt="{{ $blog->title }}"
                                loading="lazy"
                            >
                        </a>
                        <div class="blog-date-badge">
                            <span class="day">{{ $blog->created_at->format('d') }}</span>
                            <span class="month">{{ $blog->created_at->format('M') }}</span>
                        </div>
                    </div>

                    <div class="blog-content">
                        <h2 class="blog-title">
                            <a href="{{ route('blog.show', $blog->id) }}">
                                {{ $blog->title }}
                            </a>
                        </h2>

                        <p class="blog-excerpt">
                            {{ Str::limit(strip_tags($blog->content), 110) }}
                        </p>

                        <div class="blog-footer">
                            <a href="{{ route('blog.show', $blog->id) }}" class="btn-read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

@endsection
