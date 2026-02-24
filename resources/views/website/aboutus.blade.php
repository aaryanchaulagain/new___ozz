@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')


<!-- PAGE HERO -->
<section class="about-hero" aria-labelledby="about-hero-title">
    <img
        src="{{ asset('image/about.webp') }}"
        alt="About Oz Connect education consultancy"
        class="about-hero-bg"
        width="1920"
        height="900"
        fetchpriority="high"
        decoding="async"
    >


</section>

<!-- INTRO + MISSION -->
<section class="about-oz-section" aria-labelledby="about-oz-heading">
  <div class="container">


    <!-- Who We Are -->
    <article class="about-card">
      <h2>Who We Are</h2>
      <p>
        Since its inception, Oz Connect Consultancy has been Nepal’s trusted education consultancy guiding students toward meaningful academic and career opportunities abroad. With personalized mentorship and expert guidance, we ensure every student has a clear roadmap to achieve their dream career.
      </p>
      <p>
        Our consultancy focuses on integrity, transparency, and student-first guidance. Over the years, we have helped thousands of students navigate complex academic decisions, international applications, and career planning with confidence.
      </p>
    </article>

    <!-- Our Mission -->
    <article class="about-card">
      <h2>Our Mission</h2>
      <p>
        Our mission is to empower students by providing ethical, professional, and personalized consultancy services. We bridge the gap between ambition and opportunity, creating life-changing educational pathways tailored to each student’s profile and aspirations.
      </p>
    </article>

    <!-- Our Vision -->
    <article class="about-card">
      <h2>Vision</h2>
      <p>
        To become a leading name in the education–migration ecosystem, trusted by students and institutions alike for honest guidance, reliable support, and impactful educational outcomes.
      </p>
    </article>

    <!-- Our Values -->
    <article class="about-card">
      <h2>Values</h2>
      <p>
        Integrity, Commitment, and Trust form the foundation of everything we do. We maintain ethical counselling practices, prioritize student welfare, and foster a culture of transparency.
      </p>
    </article>

    <!-- Our Goal -->
    <article class="about-card">
      <h2>Goal</h2>
      <p>
        Grow. Accelerate. Excel. We continuously challenge ourselves to provide better services, enhance student experiences, and create impactful education journeys.
      </p>
    </article>

    <!-- Our Objective -->
    <article class="about-card">
      <h2>Objective</h2>
      <p>
        We aim to grow by improving daily, accelerate by outperforming our past achievements, and excel by delivering exceptional results for our students. Our objective is to ensure that every student’s journey is personalized, informed, and aligned with their long-term goals.
      </p>
    </article>

    <!-- Our Commitment -->
    <article class="about-card">
      <h2>Our Commitment</h2>
      <p>
        At Oz Connect Consultancy, we are professionally committed to guiding students at every stage of their education abroad journey. With a dedicated and highly trained team, we provide authentic counselling, test preparation support, and reliable services to help students achieve global opportunities with confidence.
      </p>
    </article>
  </div>
</section>

<!-- CEO MESSAGE -->
@php
    $ceo = \App\Models\CEO::first();
@endphp

<section class="ceo-section" aria-labelledby="ceo-heading">
    <div class="container">
        <div class="ceo-wrapper">

            <article class="ceo-message">
                <h2 id="ceo-heading">Message from Our CEO</h2>
                <p>
                    {!! nl2br(e($ceo->message ?? '“At Oz Connect, we believe every student has the potential to achieve greatness. Our role is to guide, support, and inspire students to make informed decisions and unlock their full potential.”')) !!}
                </p>
                <strong>— {{ $ceo->name ?? 'Aryan' }}, CEO & Founder</strong>
            </article>

            <figure class="ceo-image">
                @if(file_exists(public_path('ceo/ceo.jpg')))
                    <img
                        src="{{ asset('ceo/ceo.jpg') }}"
                        alt="{{ $ceo->name ?? 'CEO' }}, CEO and Founder of Oz Connect"
                        width="450"
                        height="500"
                        loading="lazy"
                        decoding="async"
                    >
                @else
                    <img
                        src="{{ asset('image/aryan.webp') }}"
                        alt="{{ $ceo->name ?? 'CEO' }}, CEO and Founder of Oz Connect"
                        width="450"
                        height="500"
                        loading="lazy"
                        decoding="async"
                    >
                @endif
            </figure>

        </div>
    </div>
</section>

<!-- TEAM -->
{{-- REMOVE THE @php BLOCK ENTIRELY --}}

<section class="team-section" aria-labelledby="team-heading">
    <div class="container">
        <h2 id="team-heading">Meet Our Team</h2>

        <div class="team-grid">
            {{-- This $teamMembers variable now comes directly from HomeController@aboutus --}}
            @foreach ($teamMembers as $member)
                <article class="team-member">
                    <img
                        src="{{ asset('uploads/team/'.$member->image) }}"
                        alt="{{ $member->name }} - Oz Connect Team Member"
                        width="250"
                        height="250"
                        loading="lazy"
                        decoding="async"
                    >
                    <h3>{{ $member->name }}</h3>
                </article>
            @endforeach
        </div>
    </div>
</section>

    </div>
</section>

@endsection
