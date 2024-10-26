<x-guest-layout>
    <div class="flex h-full flex-col items-center p-5 md:p-10 justify-between">
        <img class="w-full sm:w-3/4 md:w-fit max-w-xl pb-10 md:py-16" src="{{asset('img/logo.png')}}" alt=""/>
        <div
            class="flex flex-col md:flex-row justify-center gap-6 md:gap-12 w-full items-center text-white font-semibold tracking-widest text-xl md:text-2xl lg:text-3xl">
            <x-custom-button :action="route('simplify-text')">
                {{__('Text leicht lesbar machen')}}
            </x-custom-button>
            <x-custom-button :action="route('simplify-pdf')">
                {{__('PDF leicht lesbar machen')}}
            </x-custom-button>
        </div>
        <div class="text-xl md:text-2xl lg:text-3xl pt-12 font-text flex flex-col items-center md:flex-row">
                <span
                    class="uppercase font-bold font-headline pr-0 md:pr-2">
                    {{__('ALL INCLUSIVE')}}
                </span>
                <span>{{__('macht Texte leichter.')}}</span>
        </div>
    </div>
</x-guest-layout>
