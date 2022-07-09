<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Welcome</title>
</head>
<body>
    {{-- ======================HEADER==================== --}}
    <header class="header" id="header">
        @include('header')
    </header>

    {{-- ======================MAIN====================== --}}
    <main class="main">
        {{-- ============== HOME =========== --}}
        <section class="home section" id="home">
           @include('main.home')
        </section>

        {{-- ============== ABOUT ============= --}}
        <section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My introduction</span>

            @include('main.about')
        </section>

        {{-- =============== SKILLS ============ --}}
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My Technical Level</span>

            @include('main.skill')
        </section>

        {{-- =========== QUALIFICATION ========= --}}
        <section class="qualification section">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My Personal Journey</span>

            @include('main.qualification')
        </section>

        {{-- ============== SERVICES =========== --}}
        <section class="service section" id="services">
            <h2 class="section__title">Service</h2>
            <span class="section__subtitle">What i offer</span>
            
            @include('main.services')
        </section>

        {{-- ============= PORTOFOLIO ========= --}}
        <section class="portfolio section" id="portfolio">
            @include('main.porto')
        </section>

        {{-- ============= PROJECT IN MIND =========== --}}
        <section class="project section">
            @include('main.project')
        </section>
        {{-- ============= TESTIMONIAL ============= --}}
        <section class="testimonial section ">
            @include('main.testi')
        </section>
        {{-- ============= CONTACT ME ============== --}}
        <section class="contact section" id="contact">
            @include('main.contact')
        </section>
    </main>

    {{-- =====================FOOTER==================== --}}
    <footer class="footer">
        @include('footer')
    </footer>

    {{-- =====================SCROLL TOP================ --}}
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    {{-- ====================SWIPER JS==================== --}}
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

    {{-- =====================MAIN JS======================== --}}

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>