<section class="hero-carousel">
    <div class="carousel-container">
        <input type="radio" name="slider" id="s1" checked>
        <div class="slide slide-1">
            <div class="hero-content">
                <span class="badge">Australia's Trusted Education Partner</span>
                <h1>Study in <br><span>Australia Without Stress</span></h1>
               <p>From course and institute selection to admissions and settlement support — we take care of everything for you.</p>
                <div class="cta-group">
                    <a href="/contactus" class="btn-primary">Explore Services</a>
                    <a href="/contactus" class="btn-outline">Start Today</a>
                </div>
            </div>
            <div class="hero-image" style="background-image: url({{ asset('image/about.webp') }});">
                <div class="glass-stat">
                    <h3>98% Student Success Rate</h3>
                    <p>Trusted by students worldwide for Australian education</p>
                </div>
            </div>
        </div>

        <input type="radio" name="slider" id="s2">
        <div class="slide slide-2">
            <div class="hero-content">
                <span class="badge">Your Future, Our Priority</span>
                <h1>Expert <span>Student & Education</span> Consultancy</h1>
                <p>Helping students achieve their dream of studying in Australia with expert guidance, trusted advice,
                    and end-to-end support.</p>
                <div class="cta-group">
                    <a href="/contactus" class="btn-primary">Book Consultation</a>
                </div>
            </div>
            <div class="hero-image"
                style="background-image: url('https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?auto=format&fit=crop&q=80&w=1200');">
                <div class="glass-stat">
                    <h3>50+ Partners</h3>
                    <p>Leading Australian Universities</p>
                </div>
            </div>
        </div>

        <div class="carousel-dots">
            <label for="s1"></label>
            <label for="s2"></label>
        </div>
    </div>
</section>

<script>
    // Select all slider radio buttons
    const slides = document.querySelectorAll('input[name="slider"]');
    let current = 0;

    function nextSlide() {
        // Uncheck current
        slides[current].checked = false;

        // Move to next slide (loop back to first)
        current = (current + 1) % slides.length;

        // Check the next slide
        slides[current].checked = true;
    }

    // Change slide every 3 seconds (3000ms)
    setInterval(nextSlide, 3000);
</script>
