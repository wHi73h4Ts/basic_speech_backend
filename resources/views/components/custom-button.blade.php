@props(['action' => '#'])

<a href="{{$action}}" class="text-center bg-brand rounded-md py-4 px-6 w-full sm:w-3/4 md:w-fit transition-all duration-300 hover:bg-white hover:text-brand hover:ring hover:ring-brand hover:shadow-lg">
{{ $slot }}
</a>
