@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/ielts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
@endpush

@section('content')
    <!-- HERO -->
    <section class="hero">

        <div class="overlay"></div>

        <div class="hero-content">
            <span class="badge">IELTS Preparation</span>

            <h1>
                Achieve Your Dream
                <span>IELTS Band Score</span>
            </h1>

            <p>Professional guidance, smart strategies, and focused preparation to help you succeed with confidence.</p>

            <div class="hero-btns">
                <a href="/contactus" class="btn primary">Start Learning →</a>
                <a href="/contactus" class="btn outline">Free Consultation</a>
            </div>
        </div>
    </section>

    <!-- WHAT IS IELTS -->
    <section class="section">
        <div class="container center">
            <h2>What is IELTS?</h2>
            <div class="line"></div>
            <p>
                IELTS (International English Language Testing System) is one of the most widely accepted English proficiency
                tests worldwide.
            </p>
            <p>
                It is essential for students, professionals, and individuals planning migration pathways.
            </p>
        </div>
    </section>

    <!-- WHO SHOULD TAKE -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="center">Who Should Take IELTS?</h2>
            <div class="line center"></div>

            <div class="grid3">
                <div class="card">
                    <div class="icon">🎓</div>
                    <h3>Students</h3>
                    <p>Ideal for students preparing to study abroad.</p>
                </div>

                <div class="card">
                    <div class="icon">💼</div>
                    <h3>Professionals</h3>
                    <p>For career growth and professional certification.</p>
                </div>

                <div class="card">
                    <div class="icon">🌍</div>
                    <h3>Migrants</h3>
                    <p>For individuals aiming to migrate internationally.</p>
                </div>
            </div>
        </div>
    </section>

   <!-- SKILLS -->
<section class="section skills-serial">
  <div class="container">

    <h2 class="center">Skills Tested in IELTS</h2>
    <div class="line center"></div>

    <!-- Listening -->
    <div class="skill-row">
      <div class="skill-head">
        <span class="skill-icon">🎧</span>
        <h3>Listening</h3>
      </div>

      <p>
        The Listening module evaluates your ability to understand spoken English in a wide range of everyday, academic,
        and professional contexts. You will hear conversations, discussions, and monologues delivered in different
        accents, reflecting real-world communication scenarios.
      </p>

      <p>
        This section measures how accurately you can identify key ideas, follow opinions, recognize attitudes, and
        understand specific factual information. You are also assessed on your ability to grasp the speaker’s purpose,
        tone, and direction of discussion.
      </p>

      <p>
        Strong listening skills help you respond effectively in lectures, meetings, and social interactions. Through
        targeted practice and exposure to diverse audio materials, candidates can significantly improve accuracy,
        concentration, and speed of comprehension.
      </p>
    </div>

    <!-- Reading -->
    <div class="skill-row">
      <div class="skill-head">
        <span class="skill-icon">📖</span>
        <h3>Reading</h3>
      </div>

      <p>
        The Reading section measures your ability to understand written English across academic and general contexts.
        Academic candidates work with longer, complex texts taken from books, journals, research articles, and
        newspapers, while General Training candidates focus on everyday and workplace-based materials.
      </p>

      <p>
        This module tests comprehension skills such as identifying main ideas, scanning for specific information,
        understanding arguments, and recognizing the writer’s opinion and intention. It also evaluates logical
        reasoning and interpretation abilities.
      </p>

      <p>
        Effective reading strategies, vocabulary building, and time-management techniques allow candidates to navigate
        long passages efficiently and respond accurately under exam pressure.
      </p>
    </div>

    <!-- Writing -->
    <div class="skill-row">
      <div class="skill-head">
        <span class="skill-icon">✍</span>
        <h3>Writing</h3>
      </div>

      <p>
        The Writing module assesses your ability to express ideas clearly, logically, and accurately in written English.
        It consists of two tasks designed to evaluate real-world communication skills and academic writing competence.
      </p>

      <p>
        Task 1 focuses on interpreting visual data for Academic candidates or writing formal and informal letters for
        General Training candidates. Task 2 requires writing a structured essay that presents arguments, opinions, or
        problem-solving approaches.
      </p>

      <p>
        This section examines coherence, vocabulary range, grammatical accuracy, and clarity of expression. Structured
        planning, regular writing practice, and expert feedback help candidates develop strong writing confidence and
        precision.
      </p>
    </div>

    <!-- Speaking -->
    <div class="skill-row">
      <div class="skill-head">
        <span class="skill-icon">🗣</span>
        <h3>Speaking</h3>
      </div>

      <p>
        The Speaking test is a face-to-face interview designed to assess your spoken communication skills in a natural
        and interactive environment. It evaluates your ability to express ideas fluently, clearly, and confidently.
      </p>

      <p>
        The test includes an introduction, a short individual speaking task, and a deeper discussion. This structure
        allows examiners to measure pronunciation, vocabulary use, grammatical range, coherence, and conversational
        ability.
      </p>

      <p>
        Strong speaking performance reflects confidence, clarity of thought, and adaptability. Regular conversation
        practice, pronunciation drills, and mock interviews play a vital role in building fluency and natural
        expression.
      </p>
    </div>

  </div>
</section>


    {{-- contact us --}}
<h2 class="pte-prep-title">Kickstart Your IELTS Prep with OZ Support</h2>

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
