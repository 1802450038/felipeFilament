@aware(['page'])
<div class="section home">
    <div class="img-home">
        <img src="{{asset('storage/' .$homeImage)}}" alt="" srcset="">
    </div>
    <div class="left">
        <div class="title">
            <div class="name_1">
                <h2>
                    {{$homeName}}
                </h2>
            </div>

        </div>
        <div class="icons">
            <a href="#contact"><i class="fab fa-whatsapp"></i></a>
            <a href="tel:{{$phone}}"><i class="fas fa-phone"></i></a>
        </div>
    </div>
</div>