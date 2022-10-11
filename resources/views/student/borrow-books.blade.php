<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('student.borrow.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg ">
                <h3 class="text-xl font-bold mb-6">{{ __('student.borrow.contents.form') }}</h3>
                <form action="{{ route('student.borrow_books.store', $book) }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <x-label for="due_date" :value="__('student.borrow.contents.retdate')" />

                        <x-input id="due_date" class="block mt-1 w-full" type="date" name="due_date" :value="old('due_date')"
                            autofocus />
                    </div>
                    <x-button-student type="submit">
                        {{ __('student.borrow.contents.button') }}
                    </x-button-student>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
