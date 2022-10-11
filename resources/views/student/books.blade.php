<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('student.books.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" grid sm:grid-cols-2 lg:grid-cols-3  gap-4">
                @foreach ($books as $book)
                    <a href="{{ route('student.books.show', $book) }}">
                        <div
                            class="relative transform hover:scale-105 transition p-4 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg grid grid-cols-6">
                            <div class="col-span-2 ">
                                <img class="h-40" src="{{ asset("/storage/images/{$book->image}") }}" alt="">
                            </div>
                            <div class="col-span-4 space-y-3 ">
                                <div class="flex justify-between items-center space-x-1.5">
                                    <h2 class="text-base font-bold">{{ $book->name }}</h2>
                                    <h3
                                        class="px-4 py-0.5  text-base rounded-full text-indigo-500 border border-indigo-500 undefined ">
                                        {{ $book->category->name }}
                                    </h3>
                                </div>
                                <div class="space-y-3 ">
                                    <div>
                                        <h3 class="font-extrabold">{{ __('student.books.details.author') }}:</h3>
                                        <h3>{{ $book->author }}</h3>
                                    </div>
                                    <div>
                                        <h3 class="font-extrabold">{{ __('student.books.details.publisher') }}:</h3>
                                        <h3>{{ $book->publisher }}</h3>
                                    </div>
                                    <div>
                                        <h3 class="font-extrabold">{{ __('student.books.details.date') }}:</h3>
                                        <h3>{{ $book->published_date }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="absolute top-0 left-0 rounded-lg font-bold text-white flex items-center justify-center p-2 bg-indigo-400 text-sm">
                                {{ $book->stock }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
