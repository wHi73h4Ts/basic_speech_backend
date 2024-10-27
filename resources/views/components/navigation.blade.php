<nav class="bg-brand w-full p-4" x-data="{show: false}">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                <!-- Mobile menu button-->
                <button @click="show = !show" type="button"
                        class="group relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-white hover:text-brand transition-all duration-300 hover:ring-brand"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <x-heroicon-o-bars-3 x-show="!show" class="block h-10 w-10 group-hover:scale-110"/>
                    <x-heroicon-o-x-mark x-show="show" class="block h-10 w-10 group-hover:scale-110"/>
                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center md:items-stretch md:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a href="{{route('dashboard')}}">
                        <img class="h-8 w-auto hover:scale-110 transition-all duration-300" src="{{asset('img/icon_logo.png')}}" alt="Your Company">
                    </a>
                </div>
                <div class="hidden sm:ml-6 md:block">
                    <div class="flex space-x-8">
                        <x-nav-entry :action="route('simplify-text')" :active="request()->routeIs('simplify-text')">
                            {{__('Text leicht lesbar machen')}}
                        </x-nav-entry>
                        <x-nav-entry :action="route('simplify-pdf')" :active="request()->routeIs('simplify-pdf')">
                            {{__('PDF leicht lesbar machen')}}
                        </x-nav-entry>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="show" class="md:hidden" id="mobile-menu">
        <div class="flex flex-col space-y-4 p-10 text-center overflow-hidden">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-nav-entry :action="route('simplify-text')">
                {{__('Text leicht lesbar machen')}}
            </x-nav-entry>
            <x-nav-entry :action="route('simplify-pdf')">
                {{__('PDF leicht lesbar machen')}}
            </x-nav-entry>
        </div>
    </div>
</nav>
