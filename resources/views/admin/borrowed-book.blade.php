<x-layouts.admin>
    <div class="">
        {{-- ======== header ======== --}}
        <div
            class="w-full lg:w-1/2 md:flex items-center space-y-4 md:space-x-4 space-x-0 md:space-y-0 justify-between my-6">
            <h1 class="text-2xl font-bold">{{ __('admin.index.borrows.title') }}</h1>
            @if ($message = Session::get('Success'))
                <x-alert :message="$message" type="Success" />
            @endif
            @if ($message = Session::get('Danger'))
                <x-alert :message="$message" type="Danger" />
            @endif

            {{-- <div class="relative flex items-center w-full lg:w-64 h-full group">
                <div
                    class="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                    <svg fill="none" class="relative w-5 h-5" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <svg class="absolute left-0 z-10 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                    </path>
                </svg>
                <input type="text"
                    class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gray-100  text-gray-400 aa-input"
                    placeholder={{ __('admin.index.borrows.search') }} />

            </div> --}}
        </div>
        {{-- ======== table ======== --}}
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-bold">
                                {{ __('admin.index.borrows.columns.1') }}
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-bold">
                                {{ __('admin.index.borrows.columns.2') }}
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-bold">
                                {{ __('admin.index.borrows.columns.3') }}
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-bold">
                                {{ __('admin.index.borrows.columns.4') }}
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-bold">
                                {{ __('admin.index.borrows.columns.5') }}
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-bold">
                                {{ __('admin.index.borrows.columns.6') }}
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-bold">
                                {{ __('admin.index.borrows.columns.7') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookBorrowments as $bookBorrowment)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <a href="#" class="block relative">
                                                <img alt="profil"
                                                    src="{{ asset("/storage/images/{$bookBorrowment->user->profile_picture}") }}"
                                                    class="mx-auto object-cover  h-16 " />
                                            </a>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $bookBorrowment->user->first_name }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $bookBorrowment->user->last_name }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <a href="#" class="block relative">
                                                <img alt="profil"
                                                    src="{{ asset("/storage/images/{$bookBorrowment->book->image}") }}"
                                                    class="mx-auto object-cover  h-16 " />
                                            </a>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $bookBorrowment->book->name }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $bookBorrowment->borrowed_date }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $bookBorrowment->due_date }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $bookBorrowment->return_date ? $bookBorrowment->return_date : '-' }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex space-x-2 items-center">
                                        @if ($bookBorrowment->status === 'not yet approved')
                                            <form action="{{ route('book.approveBorrowment', $bookBorrowment) }}"
                                                method="POST">
                                                @csrf
                                                {{-- ======== button approve ======== --}}
                                                <button type="submit"
                                                    class="py-1 px-4 flex justify-center items-center  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2   rounded-lg ">
                                                    {{ __('admin.index.borrows.status.1') }}
                                                </button>
                                            </form>
                                            {{-- ======== button reject ======== --}}
                                            <form action="{{ route('book.rejectBorrowment', $bookBorrowment) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="py-1 px-4 flex justify-center items-center  bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2   rounded-lg ">
                                                    {{ __('admin.index.borrows.status.2') }}
                                                </button>
                                            </form>
                                        @elseif ($bookBorrowment->status === 'approved')
                                            {{-- badge verified --}}
                                            <span
                                                class="px-4 py-2  text-base rounded-full text-green-500 border border-green-500 undefined ">
                                                {{ __('admin.index.borrows.status.3') }}
                                            </span>
                                        @elseif ($bookBorrowment->status === 'returned')
                                            {{-- badge verified --}}
                                            <span
                                                class="px-4 py-2  text-base rounded-full text-green-500 border border-green-500 undefined ">
                                                {{ __('admin.index.borrows.status.3') }}
                                            </span>
                                            {{-- badge done --}}
                                            <span
                                                class="px-4 py-2  text-base rounded-full text-blue-500 border border-blue-500 undefined ">
                                                {{ __('admin.index.borrows.status.4') }}
                                            </span>
                                        @elseif ($bookBorrowment->status === 'rejected')
                                            {{-- badge rejected --}}
                                            <span
                                                class="px-4 py-2  text-base rounded-full text-red-500 border border-red-500 undefined ">
                                                {{ __('admin.index.borrows.status.5') }}
                                            </span>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.admin>
