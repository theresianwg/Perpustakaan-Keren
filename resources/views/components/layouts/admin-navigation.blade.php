<div class="bg-white h-full rounded-2xl ">
    {{-- ======== START ::: LOGO ======== --}}
    <div class="flex items-center justify-center pt-6">
        <svg width="35" height="30" viewBox="0 0 256 366" version="1.1" preserveAspectRatio="xMidYMid">
            <defs>
                <linearGradient x1="12.5189534%" y1="85.2128611%" x2="88.2282959%" y2="10.0225497%"
                    id="linearGradient-1">
                    <stop stop-color="#FF0057" stop-opacity="0.16" offset="0%">
                    </stop>
                    <stop stop-color="#FF0057" offset="86.1354%">
                    </stop>
                </linearGradient>
            </defs>
            <g>
                <path
                    d="M0,60.8538006 C0,27.245261 27.245304,0 60.8542121,0 L117.027019,0 L255.996549,0 L255.996549,86.5999776 C255.996549,103.404155 242.374096,117.027222 225.569919,117.027222 L145.80812,117.027222 C130.003299,117.277829 117.242615,130.060011 117.027019,145.872817 L117.027019,335.28252 C117.027019,352.087312 103.404567,365.709764 86.5997749,365.709764 L0,365.709764 L0,117.027222 L0,60.8538006 Z"
                    fill="#001B38">
                </path>
                <circle fill="url(#linearGradient-1)"
                    transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) "
                    cx="147.013244" cy="147.014675" r="78.9933938">
                </circle>
                <circle fill="url(#linearGradient-1)" opacity="0.5"
                    transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) "
                    cx="147.013244" cy="147.014675" r="78.9933938">
                </circle>
            </g>
        </svg>
    </div>
    {{-- ======== END ::: LOGO ======== --}}
    {{-- ======== START ::: NAV LINKS ======== --}}
    <nav class="mt-6">
        <div>
            {{-- ======== books link ======== --}}
            <x-admin-navlink :href="route('book.index')" :active="request()->routeIs('book.index')">
                <x-slot:icon>
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </x-slot:icon>
                <x-slot:name>
                    {{ __('admin.navigation.1') }}
                </x-slot:name>
            </x-admin-navlink>
            {{-- ======== books loan link ======== --}}
            <x-admin-navlink :href="route('book.borrowed')" :active="request()->routeIs('book.borrowed')">
                <x-slot:icon>
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </x-slot:icon>
                <x-slot:name>
                    {{ __('admin.navigation.2') }}
                </x-slot:name>
            </x-admin-navlink>
            {{-- ======== categories link ======== --}}
            <x-admin-navlink :href="route('category.index')" :active="request()->routeIs('category.index')">
                <x-slot:icon>
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </x-slot:icon>
                <x-slot:name>
                    {{ __('admin.navigation.3') }}
                </x-slot:name>
            </x-admin-navlink>
            {{-- ======== students link ======== --}}
            <x-admin-navlink :href="route('student.index')" :active="request()->routeIs('student.index')">
                <x-slot:icon>
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </x-slot:icon>
                <x-slot:name>
                    {{ __('admin.navigation.4') }}
                </x-slot:name>
            </x-admin-navlink>
            {{-- ======== register admin link ======== --}}
            <x-admin-navlink :href="route('admin.register')" :active="request()->routeIs('admin.register')">
                <x-slot:icon>
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                        </path>
                    </svg>
                </x-slot:icon>
                <x-slot:name>
                    {{ __('admin.navigation.5') }}
                </x-slot:name>
            </x-admin-navlink>
            {{-- ======== logout link ======== --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-admin-navlink :href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();" :active="false">
                    <x-slot:icon>
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                            </path>
                        </svg>
                    </x-slot:icon>
                    <x-slot:name>
                        {{ __('admin.navigation.6') }}
                    </x-slot:name>
                </x-admin-navlink>
            </form>
        </div>
    </nav>
    {{-- ======== END ::: NAV LINKS ======== --}}
</div>
