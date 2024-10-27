@props(['action' => '#', 'active'])

@php
    $classes = ($active ?? false)
    ? 'rounded-md px-3 py-2 text-xl font-medium bg-white text-brand tracking-wider cursor-default'
    : 'rounded-md px-3 py-2 text-xl font-medium text-white hover:bg-white hover:text-brand hover:scale-110 transition-all duration-300 tracking-wider';
@endphp

@if(($active ?? false))
    <div {{ $attributes->merge(['class' => $classes]) }}>
        {{$slot}}
    </div>
@else
    <a href="{{$action}}" {{ $attributes->merge(['class' => $classes]) }}>
        {{$slot}}
    </a>

@endif
