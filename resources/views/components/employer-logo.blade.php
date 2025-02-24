@props(['employer', 'width' => 90])
<img src="https://picsum.photos/seed/{{ rand(0, 100000)}}/{{$width}}" class="rounded-xl" alt="">
{{-- <img src="{{ asset('storage/' . $employer->logo)}}" class="rounded-xl" alt="" width="{{ $width }}">  --}}
{{-- <img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> --}}
