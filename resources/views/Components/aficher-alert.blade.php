@props(['color',"mesage"])
<div>
    <div class="alert alert-{{$color}}" role="alert">
    {{-- <div class="alert alert-success" role="alert"> --}}
        {{--Hello this is profail :{{$mesage}} --}}
        {{$slot}}
        {{-- {{$mesage}} --}}

 </div>
    </div>