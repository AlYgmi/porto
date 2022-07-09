<div class="skills__container container grid">
    <div>
        {{-- =============== SKILLS 1 ============ --}}
        <div class="skills__content skills__open">
            @include('main.skills.skill1')
        </div>    
        {{-- =============== SKILLS 2 ============ --}}
        <div class="skills__content skills__close">
           @include('main.skills.skill2')
        </div>

    </div>
    <div>
        {{-- =============== SKILLS 3 ============ --}}
        @include('main.skills.skill3')
    </div>
</div>