@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pte.css') }}">
<link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
@endpush

@section('content')

<!-- PTE HERO -->
    <section class="hero">

        <div class="overlay"></div>

        <div class="hero-content">
            <span class="badge">PTE Preparation</span>

            <h1>
                Achieve Your Dream
                <span>PTE Band Score</span>
            </h1>

            <p>Professional guidance, smart strategies, and focused preparation to help you succeed with confidence.</p>

            <div class="hero-btns">
                <a href="/contactus" class="btn primary">Start Learning →</a>
                <a href="/contactus" class="btn outline">Free Consultation</a>
            </div>
        </div>
    </section>
<!-- PTE CONTENT -->
<section class="pte-section">
    <div class="pte-container">

        <header class="section-header">
            <h2>PTE Preparation</h2>
            <p class="pte-intro">
                The Pearson Test of English (PTE Academic) is a fully computer-based test
                designed to evaluate practical English skills. It is widely chosen by
                students planning studies, professional opportunities, or migration in
                English-speaking countries.
            </p>
        </header>

        <div class="pte-grid">
            <article class="pte-card">
                <h3>Who is PTE For?</h3>
                <p>
                    PTE is ideal for students aiming to enroll in English-taught programs,
                    meet language requirements for professional purposes, or demonstrate
                    English proficiency for migration. It suits those comfortable with
                    computers and preferring a fully digital exam format.
                </p>
            </article>

            <article class="pte-card">
                <h3>Skills Assessed</h3>
                <p>
                    The test evaluates Speaking, Writing, Reading, and Listening through
                    integrated tasks. Many exercises assess multiple skills at once,
                    reflecting how English is used in academic and professional settings.
                </p>
            </article>
        </div>

        <div class="pte-grid">
            <article class="pte-card">
                <h3>Detailed Test Structure</h3>
                <p>
                    Knowing the structure is key to effective preparation. Each section
                    is time-controlled and targets specific skills. Familiarity with task
                    types helps candidates perform confidently.
                </p>
            </article>

            <article class="pte-card">
                <h3>Speaking & Writing</h3>
                <p>
                    This section assesses verbal fluency, pronunciation, writing clarity,
                    and idea organisation. Tasks include reading aloud, repeating sentences,
                    describing visuals, summarising content, and essay writing. All responses
                    are scored by AI for accuracy and coherence.
                </p>
            </article>
        </div>

        <div class="pte-grid">
            <article class="pte-card">
                <h3>Reading</h3>
                <p>
                    Evaluate comprehension, sequencing, vocabulary, and interpretation
                    skills through academic-style texts. Tasks involve multiple-choice,
                    reordering paragraphs, and passage completion.
                </p>
            </article>

            <article class="pte-card">
                <h3>Listening</h3>
                <p>
                    Assess understanding of spoken English via audio/video lectures,
                    conversations, and discussions. Tasks include summarising, transcript
                    completion, and precise sentence writing.
                </p>
            </article>
        </div>

        <div class="pte-grid">
            <article class="pte-card">
                <h3>Test Format & Results</h3>
                <p>
                    PTE is fully computer-based. Speaking responses are recorded digitally,
                    results are fast, and scores are valid for two years. The AI-driven
                    system ensures consistent, impartial evaluation.
                </p>
            </article>

            <article class="pte-card">
                <h3>How Oz Education Supports You</h3>
                <p>
                    Oz Education guides students through structured, goal-oriented
                    preparation. We focus on integrated language skills, exam strategies,
                    and confidence-building exercises to help you perform at your best.
                </p>
            </article>
        </div>

        <div class="pte-grid">
            <article class="pte-card">
                <h3>Take the Next Step</h3>
                <p>
                    Consult our team to understand if PTE fits your goals and how to
                    prepare effectively. Oz Education provides personalised guidance
                    and clear direction for your PTE journey.
                </p>
            </article>
        </div>

    </div>
</section>
{{-- contact us --}}
<h2 class="pte-prep-title">Kickstart Your PTE Prep with OZ Support</h2>

<section class="contact-section">
    <div class="contact-container">


        @if(session('success'))
            <div class="success-msg">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
            @csrf

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="whatsapp">WhatsApp Number</label>
            <input type="text" id="whatsapp" name="whatsapp" placeholder="+61 XXXXXXXX" required>

            <label for="subject">Subject</label>
            <select id="subject" name="subject" required>
                <option value="">-- Select Subject --</option>
                <option value="Enquiry">Enquiry</option>
                <option value="Appointment">Appointment</option>
                <option value="Other">Other</option>
            </select>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write your message..." required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</section>


@endsection
