@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/australia.css') }}">
@endpush

@section('content')
    <main>

        <!-- ================= HERO SECTION ================= -->
        <section class="australia-hero" role="banner" aria-labelledby="australia-heading">
            <!-- Hero Image -->
            <img src="{{ asset('image/study .webp') }}" alt="Students studying in Australia at a university campus"
                width="1920" height="500" loading="eager" class="hero-img">

            <!-- Overlay content -->
            <div class="hero-overlay">
                <div class="hero-content">
                    {{-- <h1 id="australia-heading">Study in Australia</h1>
                <p>Unlock your potential with world-class education in the land of opportunity.</p> --}}
                </div>
            </div>
        </section>

        <!-- ================= CONTENT SECTIONS ================= -->
        <section class="content-section" role="region" aria-label="Australia Study Overview">
            <div class="content-container">

                <!-- Intro Paragraph -->
                <p>
                    Australia has become one of the world’s most trusted education destinations for international students,
                    offering a balance of academic excellence, global recognition, and an exceptional quality of life.
                    Students are drawn to Australia for its innovative teaching methods, strong research culture, and
                    qualifications that are respected by employers and institutions worldwide. Beyond academics, the
                    country’s welcoming multicultural environment and safe cities make it an ideal place for students
                    planning their international education journey.
                </p>

                <!-- Why Australia Stands Out -->
                <h2>Why Australia Stands Out for International Students</h2>
                <p>
                    Australia’s reputation as a leading study destination is built on consistency, quality, and long-term
                    value. Australian universities and colleges regularly perform strongly in major global rankings,
                    reflecting the country’s commitment to high academic standards and continuous innovation. All
                    qualifications are delivered under a nationally regulated framework, which ensures transparency,
                    credibility, and global recognition across institutions and study levels.
                </p>
                <p>
                    In addition to academic quality, Australia places strong emphasis on employability and practical
                    learning. Many programs are designed with industry relevance in mind, allowing students to develop
                    real-world skills alongside theoretical knowledge. Combined with student-friendly policies and
                    supportive campus environments, this makes Australia a destination where international students can
                    study with confidence and purpose.
                </p>

                <!-- Australian Education System -->
                <h2>The Australian Education System</h2>
                <p>
                    The Australian education system is structured to support students at different academic stages while
                    maintaining rigorous quality standards. It offers clear pathways from English language programs and
                    foundation studies through to undergraduate, postgraduate, and doctoral qualifications. This flexibility
                    allows students to enter the system at an appropriate level and progress smoothly as their academic
                    skills develop.
                </p>
                <p>
                    Teaching approaches in Australia focus on independent thinking, collaboration, and applied learning.
                    Students are encouraged to question ideas, participate actively in class, and engage in research or
                    project-based work. As a result, graduates are well-prepared for professional environments and further
                    studies, with qualifications that are recognised and valued internationally, including in Nepal.
                </p>

                <!-- Student Protection and Wellbeing -->
                <h2>Student Protection and Wellbeing</h2>
                <p>
                    Australia is widely recognised for its strong commitment to international student welfare. The Education
                    Services for Overseas Students (ESOS) Act plays a central role in regulating education providers and
                    ensuring that students receive the quality of education they were promised. This framework promotes
                    fairness, transparency, and accountability across the sector.
                </p>
                <p>
                    To further protect students, the Tuition Protection Service (TPS) provides support in the unlikely event
                    that a provider is unable to deliver a course, helping students continue their studies or receive
                    appropriate refunds. International students are also required to maintain Overseas Student Health Cover
                    (OSHC), which provides access to essential healthcare services throughout their stay. Together, these
                    measures create a safe and supportive study environment.
                </p>

                <!-- Work Opportunities -->
                <h2>Work Opportunities During and After Study</h2>
                <p>
                    Australia offers international students the opportunity to gain valuable work experience while studying
                    by allowing part-time employment during academic terms. This enables students to develop practical
                    skills, improve communication abilities, and better understand workplace expectations in an
                    international setting. For many students, this experience becomes an important part of their personal
                    and professional growth.
                </p>
                <p>
                    After completing their studies, many graduates explore post-study work options that allow them to gain
                    further professional experience. This exposure can strengthen career prospects, enhance employability,
                    and provide a deeper understanding of global work environments, supporting students in their long-term
                    career planning.
                </p>

                <!-- Living in Australia -->
                <h2>Living in Australia</h2>
                <p>
                    Living in Australia offers students a lifestyle that supports both academic success and personal
                    wellbeing. Cities are known for being clean, safe, and well-connected, with reliable public transport
                    and access to modern facilities. Students also benefit from Australia’s inclusive and multicultural
                    society, where diversity is respected and celebrated.
                </p>
                <p>
                    Outside of study, students can enjoy a wide range of cultural, social, and outdoor experiences. From
                    arts and entertainment to beaches, parks, and natural landscapes, Australia provides an environment
                    where students can maintain a healthy balance between study and life, making their time abroad both
                    enriching and memorable.
                </p>

                <!-- Popular Fields of Study -->
                <h2>Popular Fields of Study</h2>
                <p>
                    Australia’s education sector offers a diverse range of academic programs designed to meet global
                    industry demands. Fields such as business and management, information technology, engineering,
                    accounting and finance, health sciences, and environmental studies continue to attract international
                    students due to their strong career relevance.
                </p>
                <p>
                    Many institutions regularly update their course offerings to reflect changing industry needs, ensuring
                    that students gain up-to-date knowledge and skills. Choosing the right field and institution is
                    therefore an important step, and informed guidance can help students align their academic choices with
                    long-term goals.
                </p>

                <!-- Oz Connected Support -->
                <h2>How Oz Connected Supports You</h2>
                <p>
                    Oz Connected provides dedicated offshore support to students from Nepal who are planning to pursue
                    international education. Our approach is centred on understanding each student’s academic background,
                    interests, and career aspirations before recommending suitable study options.
                </p>
                <p>
                    From initial counselling and course selection to application preparation and visa guidance, we assist at
                    every stage with clarity and care. Our goal is to help students make confident, well-informed decisions
                    and Start Smart on a pathway that supports both their education and future ambitions.
                </p>

                <!-- Take the Next Step -->
                <h2>Take the Next Step</h2>
                <p>
                    If you are considering studying in Australia, a one-to-one consultation with our counsellors can help
                    you explore suitable pathways based on your academic profile and goals. We are here to guide you through
                    your next steps with personalised support and clear direction.
                </p>

            </div>
        </section>

    </main>
@endsection
