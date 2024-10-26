@props(['action' => '#'])
<a href="{{$action}}"
   class="rounded-md px-3 py-2 text-xl font-medium text-white hover:bg-white hover:text-brand hover:scale-110 transition-all duration-300 tracking-wider">
    {{$slot}}
</a>
