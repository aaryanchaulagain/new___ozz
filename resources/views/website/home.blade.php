@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
    {{-- @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;600&display=swap'); --}}
@endpush

@section('content')
    @php
        $ceo = \App\Models\CEO::first();
    @endphp

    <!-- CEO MESSAGE SECTION -->

    <section class="home-ceo" aria-labelledby="ceo-heading">
        <div class="container ceo-container">

            <!-- Text Content -->
            <article class="ceo-content">
                <header>
                    <h2 id="ceo-heading">Message from the CEO & Founder</h2>
                    <p class="dear-students">Dear Students,</p>
                </header>

                <p>
                    {!! nl2br(
                        e(
                            $ceo->message ??
                                'Welcome to <strong>Oz Connect</strong>, where we open doors to international education and help students achieve their global ambitions. As the CEO and Founder, I am proud to guide students toward academic success across Australia, the UK, Canada, the USA, Japan, Denmark, and more.',
                        ),
                    ) !!}
                </p>

                <a href="/aboutus" class="read-more-btn" aria-label="Read more about Oz Connect vision and leadership">
                    Read More About Our Vision
                </a>
            </article>

            <!-- Image -->
            <!-- Image -->
            <aside class="ceo-image-wrapper" aria-label="CEO profile image">
                <figure class="image-placeholder">
                    @if (file_exists(public_path('ceo/ceo.jpg')))
                        <img src="{{ asset('ceo/ceo.jpg') }}"
                            alt="{{ $ceo->name ?? 'CEO' }}, CEO and Founder of Oz Connect Education Consultancy"
                            width="360" height="460" loading="lazy" decoding="async">
                        <figcaption class="ceo-name-label">
                            {{ $ceo->name ?? 'Mr. Name Surname' }} — CEO & Founder
                        </figcaption>
                    @else
                        <!-- Fallback image if no CEO photo -->
                        <img src="{{ asset('image/bullet.webp') }}"
                            alt="CEO and Founder of Oz Connect Education Consultancy" width="360" height="460"
                            loading="lazy" decoding="async">
                        <figcaption class="ceo-name-label">
                            Mr. Name Surname — CEO & Founder
                        </figcaption>
                    @endif
                </figure>
            </aside>


        </div>
    </section>


    <!-- SERVICES SECTION -->

    <section class="services-section">
        <div class="services-header">
            <h4><span class="badge">Our Services</span></h4>
            <h1>Everything You Need to Study Abroad</h1>
            <p>We provide comprehensive support for your global education journey.</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="icon-box"><i class="fas fa-graduation-cap"></i></div>
                <h3>Admission Guidance</h3>
                <p>Expert counselling to help you choose the right course and university in Australia, tailored to your
                    career goals.</p>
            </div>

            <div class="service-card">
                <div class="icon-box blue-icon"><i class="fas fa-university"></i></div>
                <h3>University Admissions</h3>
                <p>End-to-end application support with error-free submissions to ensure your seat in top global
                    institutions.</p>
            </div>

            <div class="service-card">
                <div class="icon-box"><i class="fas fa-home"></i></div>
                <h3>Accommodation Support</h3>
                <p>
                    Helping students find safe, comfortable, and affordable accommodation that suits their needs and budget.
                </p>
            </div>

            <div class="service-card">
                <div class="icon-box blue-icon"><i class="fas fa-tools"></i></div>
                <h3>RTO Services</h3>
                <p>Comprehensive Registered Training Organisation support for vocational education and skills assessment.
                </p>
            </div>

            <div class="service-card">
                <div class="icon-box"><i class="fas fa-hand-holding-heart"></i></div>
                <h3>Settlement Support</h3>
                <p>
                    Helping students settle in smoothly with simple guidance, essential support, and local assistance for a
                    stress-free start.
                </p>
            </div>

            <div class="service-card">
                <div class="icon-box blue-icon"><i class="fas fa-book-open"></i></div>
                <h3>Study Support</h3>
                <p>Academic planning and resource support to help you excel in your chosen field of study abroad.</p>
            </div>

            <div class="service-card">
                <div class="icon-box"><i class="fas fa-globe-asia"></i></div>
                <h3>Career Guidance</h3>
                <p>Strategic career mapping aligned with long-term goals to ensure success after your graduation.</p>
            </div>

            <div class="service-card">
                <div class="icon-box blue-icon"><i class="fas fa-handshake"></i></div>
                <h3>Extended Support</h3>
                <p>Pre-departure briefings and settlement guidance to make your transition to a new country seamless.</p>
            </div>

            <div class="service-card">
                <div class="icon-box"><i class="fas fa-pen-nib"></i></div>
                <h3>Academic Guidance</h3>
                <p>Expert advice on courses, scholarships, and requirements to maximize your educational potential.</p>
            </div>
        </div>
    </section>



    {{-- 4TH SECTION --}}
    <div class="journey-section">
        <div class="content-side">
            <h1>SHAPING GLOBAL DREAMS THROUGH SMART PREPARATION</h1>
            <p>
                <strong>OZ Connect</strong> is a premier educational consultancy dedicated to helping students achieve
                success in their international journeys. We specialize in providing comprehensive study materials, guidance,
                and mock tests for <strong>IELTS</strong> and <strong>PTE</strong> to ensure you reach your target scores.
                Unlock your global potential with OZ Connect.
            </p>
            <a href="/contactus" class="btn-journey">
                START YOUR JOURNEY &rarr;
            </a>
        </div>

        <div class="image-side">
            <img src="{{ asset('image/ff.webp') }}" alt="Students studying IELTS and PTE">
        </div>
    </div>

    <!-- CONTACT CTA -->
    <section class="modern-banner">
        <div class="banner-bg">
            <img src="{{ asset('image/bookquery.webp') }}" alt="Consultancy" class="banner-img">
            <div class="banner-overlay"></div>
        </div>

        <div class="banner-container">
            <div class="banner-content">
                <div class="banner-badge">
                    <span class="pulse-dot"></span>
                    Expert Guidance Available
                </div>
                <h2 class="banner-title">Let’s bridge the gap to your <span>future.</span></h2>
                <p class="banner-text">Schedule a 1-on-1 session with our experts for a personalized roadmap.</p>

                <div class="banner-actions">
                    <a href="/contactus" class="btn-modern">
                        Book My Appointment
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <span class="banner-subtext">Free initial consultation</span>
                </div>
            </div>
        </div>
    </section>
@endsection
