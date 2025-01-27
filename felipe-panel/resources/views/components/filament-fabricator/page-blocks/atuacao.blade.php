@aware(['page'])
<div class="section actuation">
    <div class="actuation-left">
        <div class="actuation-menu">
            @foreach ($items as $key => $item)
                <div class="actuation-option-wrap {{$key === 0 ? 'active' : '' }}">
                    <a class="opt-{{ $key }} actuation-option " onclick="toggleText(this)">{{ $item['area'] }}</a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="actuation-right">
        <div class="actuation-text">
            @foreach ($items as $key => $item)

                <div class="text text-{{ $key }} {{$key === 0 ? 'selected' : '' }}">
                    {!!$item['description']!!}
                </div>
            @endforeach
        </div>
    </div>
</div>
