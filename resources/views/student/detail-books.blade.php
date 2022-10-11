<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('student.details.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div
                class="relative p-4 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg lg:grid grid-cols-6 gap-4">
                <div class="mb-4 lg:mb-0 col-span-1 flex justify-center lg:justify-start ">
                    <img class="h-48" src="{{ asset("/storage/images/{$book->image}") }}" alt="">
                </div>
                <div class="col-span-5 space-y-5">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-bold">{{ $book->name }}</h2>
                        <h3
                            class="px-4 py-0.5 text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                            {{ $book->category->name }}
                        </h3>
                    </div>
                    <div class="space-y-4">
                        <div class="grid grid-cols-7">
                            <h3 class="col-span-2 font-bold">{{ __('student.details.contents.last') }}</h3>
                            <div class="col-span-5 flex space-x-1">
                                <h3>:</h3>
                                @if ($bookBorrowment)
                                    @if ($bookBorrowment->status === 'rejected')
                                        <div
                                            class="rounded-lg font-bold text-white flex items-center justify-center py-0.5 px-2 bg-red-600 text-sm">
                                            {{ __('student.details.contents.status.1') }}
                                        </div>
                                    @elseif ($bookBorrowment->status === 'returned')
                                        <div
                                            class="rounded-lg font-bold text-white flex items-center justify-center py-0.5 px-2 bg-indigo-400 text-sm">
                                            {{ __('student.details.contents.status.2') }}
                                        </div>
                                    @elseif ($bookBorrowment->status === 'approved')
                                        <div
                                            class="rounded-lg font-bold text-white flex items-center justify-center py-0.5 px-2 bg-green-600 text-sm">
                                            {{ __('student.details.contents.status.3') }}
                                        </div>
                                    @elseif ($bookBorrowment->status === 'not yet approved')
                                        <div
                                            class="rounded-lg font-bold text-white flex items-center justify-center py-0.5 px-2 bg-yellow-600 text-sm">
                                            {{ __('student.details.contents.status.4') }}
                                        </div>
                                    @endif
                                @else
                                    <div
                                        class="rounded-lg font-bold text-white flex items-center justify-center p-2 bg-gray-500 text-sm">
                                        {{ __('student.details.contents.status.5') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="grid grid-cols-7">
                            <h3 class="col-span-2 font-bold">{{ __('student.details.contents.stock') }}</h3>
                            <div class="col-span-5 flex space-x-1">
                                <h3>:</h3>
                                <h3>{{ $book->stock }}</h3>
                            </div>
                        </div>
                        <div class="grid grid-cols-7">
                            <h3 class="col-span-2 font-bold">{{ __('student.details.contents.author') }}</h3>
                            <div class="col-span-5 flex space-x-1">
                                <h3>:</h3>
                                <h3>{{ $book->author }}</h3>
                            </div>
                        </div>
                        <div class="grid grid-cols-7">
                            <h3 class="col-span-2 font-bold">{{ __('student.details.contents.publisher') }}</h3>
                            <div class="col-span-5 flex space-x-1">
                                <h3>:</h3>
                                <h3>{{ $book->publisher }}</h3>
                            </div>
                        </div>
                        <div class="grid grid-cols-7">
                            <h3 class="col-span-2 font-bold">{{ __('student.details.contents.pubdate') }}</h3>
                            <div class="col-span-5 flex space-x-1">
                                <h3>:</h3>
                                <h3>{{ $book->published_date }}</h3>
                            </div>
                        </div>
                        @if ($bookBorrowment)
                            <div class="grid grid-cols-7">
                                <h3 class="col-span-2 font-bold">{{ __('student.details.contents.bordate') }}</h3>
                                <div class="col-span-5 flex space-x-1">
                                    <h3>:</h3>
                                    <h3>{{ $bookBorrowment->borrowed_date ? $bookBorrowment->borrowed_date : '-' }}
                                    </h3>
                                </div>
                            </div>
                            <div class="grid grid-cols-7">
                                <h3 class="col-span-2 font-bold">{{ __('student.details.contents.duedate') }}</h3>
                                <div class="col-span-5 flex space-x-1">
                                    <h3>:</h3>
                                    <h3>{{ $bookBorrowment->due_date ? $bookBorrowment->due_date : '-' }}</h3>
                                </div>
                            </div>
                            <div class="grid grid-cols-7">
                                <h3 class="col-span-2 font-bold">{{ __('student.details.contents.retdate') }}</h3>
                                <div class="col-span-5 flex space-x-1">
                                    <h3>:</h3>
                                    <h3>{{ $bookBorrowment->return_date ? $bookBorrowment->return_date : '-' }}</h3>
                                </div>
                            </div>
                        @endif
                        <div class="grid grid-cols-7">
                            <h3 class="col-span-2 font-bold">{{ __('student.details.contents.desc') }}</h3>
                            <div class="col-span-5 flex space-x-1">
                                <h3>:</h3>
                                <h3>{{ $book->description }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        @if ($bookBorrowment)
                            @if ($bookBorrowment->status === 'not yet approved')
                                <x-button-student disabled>
                                    {{ __('student.details.buttons.1') }}
                                </x-button-student>
                            @elseif ($bookBorrowment->status === 'approved')
                                <form action="{{ route('student.return_book', $book) }}" method="POST">
                                    @csrf
                                    <x-button-student type="submit" onclick="return confirm('Return book?')">
                                        {{ __('student.details.buttons.2') }}
                                    </x-button-student>
                                </form>
                            @elseif ($bookBorrowment->status === 'returned')
                                <a href="{{ route('student.borrow_books', $book) }}">
                                    <x-button-student>
                                        {{ __('student.details.buttons.3') }}
                                    </x-button-student>
                                </a>
                            @elseif ($bookBorrowment->status === 'rejected')
                                <a href="{{ route('student.borrow_books', $book) }}">
                                    <x-button-student>
                                        {{ __('student.details.buttons.4') }}
                                    </x-button-student>
                                </a>
                            @endif
                        @else
                            <a href="{{ route('student.borrow_books', $book) }}">
                                <x-button-student>
                                    {{ __('student.details.buttons.5') }}
                                </x-button-student>
                            </a>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts.app>
