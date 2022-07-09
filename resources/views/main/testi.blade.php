<h2 class="section__title">Testimonial</h2>
<span class="section__subtitle">My Client Saying</span>

<div class="testimonial__container container swiper mySwiper">
    <div class="swiper-wrapper">
        {{-- ============= TESTIMONIAL 1 ============= --}}
        <div class="testimonial__content swiper-slide">
           @include('main.feedback.testi1')
        </div>
        
        {{-- ============= TESTIMONIAL 2 ============= --}}
        <div class="testimonial__content swiper-slide">
            @include('main.feedback.testi2')
         </div>

         {{-- ============= TESTIMONIAL 3 ============= --}}
        <div class="testimonial__content swiper-slide">
            @include('main.feedback.testi3')
         </div>
    </div>
    <div class="swiper-pagination swiper-pagination-testimonial"></div>
</div>