<h2 class="section__title">Portfolio</h2>
<span class="section__subtitle">Most Recent Work</span>

<div class="portfolio__container container swiper mySwapper">
    <div class="swiper-wrapper">
        {{-- =============== PORTFOLIO 1 =============== --}}
        @include('main.port.port1')
        {{-- =============== PORTFOLIO 2 =============== --}}
        @include('main.port.port2')
        {{-- =============== PORTFOLIO 3 =============== --}}
        @include('main.port.port3')
    </div>
    <div class="swiper-button-next">
        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
    </div>
    <div class="swiper-button-prev">
        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
    </div>
</div>