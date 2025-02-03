@aware(['page'])
<div class="section about">
    <div class="img-slider-cover"></div>
    <div class="img-slider-about" id="imgs-container">
        @isset($aboutImage1)
        <img id="img-1" class="visible" src="{{asset('storage/' .$aboutImage1)}}" alt="" srcset="">
        @endisset
        @isset($aboutImage2)
        <img id="img-2" src="{{asset('storage/' .$aboutImage2)}}" alt="" srcset="">
        @endisset
        @isset($aboutImage3)
        <img id="img-3" src="{{asset('storage/' .$aboutImage3)}}" alt="" srcset="">
        @endisset    
    </div>
    {{-- @dd($page) --}}
    <div class="about-title">
        <h2>Sobre Nós</h2>
    </div>
    <div class="about-content">
        {!!$about!!}
    </div>
</div>