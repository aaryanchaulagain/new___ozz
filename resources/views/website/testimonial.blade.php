@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/testimonial.css') }}">
@endpush

@section('content')
<section class="testimonial-section">
    <div class="testimonial-container">
        <div class="testimonial-header">
            <span class="sub-title">Wall of Fame</span>
            <h2 class="testimonial-title">What Our Clients Say</h2>
            <div class="title-line"></div>
        </div>

        <div class="testimonial-grid">
            @foreach($testimonials as $t)
                <article class="testimonial-card">
                    <div class="quote-icon">
                        <i class="fas fa-quote-left"></i>
                    </div>

                    <div class="image-inner-border">
                        <img src="{{ asset('uploads/testimonials/'.$t->image) }}"
                             alt="{{ $t->name }}" loading="lazy">
                    </div>

                    <div class="testimonial-content">
                        <h4>{{ $t->name }}</h4>
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p>“{{ $t->message }}”</p>
                    </div>

                    <div class="card-footer">
                        <span class="verified-badge"><i class="fas fa-check-circle"></i> Verified Review</span>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection
