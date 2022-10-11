<header class="w-full shadow-lg bg-white  items-center h-16 rounded-2xl z-40">
    <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
        <div class="relative justify-between items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
            <div class="relative p-1 flex items-center  ml-5 ">


                {{-- <div class="max-w-lg mx-auto">


                    <button
                        class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                        type="button" data-dropdown-toggle="dropdown">{{ __('admin.header.lang') }} <svg
                            class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button>

                    <!-- Dropdown menu -->
                    <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4"
                        id="dropdown">
                        <ul class="py-1" aria-labelledby="dropdown">
                            <li>
                                <a href="/form/en"
                                    class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">English</a>
                            </li>
                            <li>
                                <a href="/form/id"
                                    class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Indonesia</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}

                <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>

                <a class="block relative ml-auto">
                    <img alt="profil" src="{{ asset('/storage/images/' . Auth::user()->profile_picture) }}"
                        class="mx-auto object-cover rounded-full h-10 w-10 " />
                </a>
            </div>
            <div class="ml-auto">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ __('admin.header.lang') }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <a href="/form/en" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">English</a>
                        <a href="/form/id" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Indonesia</a>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</header>
