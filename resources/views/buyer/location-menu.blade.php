@if (!Auth::guest())
<ul id="location_option" class="locationUL" >
    @foreach (Auth::user()->location()->get() as $idx => $loc)
    <li id="option_{{ $loc->id }}" name='location_opt' class="location_opt" onmouseover="choose(this.id)" onmouseout="unchoose(this.id)" onmousedown="pitched(event, this.id)" 
        data-longitude="{{$loc->longitude}}" data-latitude="{{$loc->latitude}}" data-address="{{$loc->address}}" data-id="{{$loc->id}}" 
        data-token='{{ csrf_token() }}' data-deleteurl='{{ url('/buyer/location').'/'.$loc->id }}'>
        <span id="select_box" class="select_box"></span>
        <span id="selected_{{ $loc->id }}" class="selected" style="display:none;"></span>
        <a class="address">{{ $loc->address }}</a>
        <img class="close" src="{{ URL::asset('/image/close.png')}}">
    </li>
    @endforeach 
    <li>
        <a href="#" class="btn_full add-loc-btn" onmousedown="return openModal();">Add New Address</a>
    </li>
</ul>
@endif