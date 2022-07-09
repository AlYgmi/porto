<div class="qualification__container container">
    <div class="qualification__tabs">
        <div class="qualification__button button--flex qualification__active" data-target='#education'>
            <i class="uil uil-graduation-cap qualification__icon"></i>
            Education
        </div>

        <div class="qualification__button button--flex" data-target='#work'>
            <i class="uil uil-briefcase-alt qualification__icon"></i>
            Work
        </div>
    </div>
    <div class="qualification__sections">
        {{-- =========== QUALIFICATION CONTENT 1 ========= --}}
        @include('main.contents.content1')
        {{-- =========== QUALIFICATION CONTENT 2 ========= --}}
        @include('main.contents.content2')
    </div>
</div>