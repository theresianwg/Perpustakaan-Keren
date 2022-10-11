<x-layouts.admin>
    <div>
        <h1 class="text-2xl mb-10 font-bold my-6">{{ __('admin.edit.books.title') }}</h1>
    </div>
    <form action="{{ route('book.update', $book) }}" method="POST" enctype="multipart/form-data"
        class=" w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        @csrf
        @method('PUT')
        <input type="hidden" name="old_image" value="{{ $book->image }}">
        <div class="space-y-4">
            <div>
                <x-label for="name" :value="__('admin.edit.books.fillable.1')" />
                <x-input id="name" class="block mt-1 w-full " type="text" name="name" :value="old('name', $book->name)" />
                @error('name')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
            <div>
                <x-label for="author" :value="__('admin.edit.books.fillable.2')" />
                <x-input id="author" class="block mt-1 w-full " type="text" name="author" :value="old('author', $book->author)" />
                @error('author')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
            <div>
                <x-label for="publisher" :value="__('admin.edit.books.fillable.3')" />
                <x-input id="publisher" class="block mt-1 w-full " type="text" name="publisher" :value="old('publisher', $book->publisher)" />
                @error('publisher')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
            <div class="grid grid-cols-3 gap-6">
                <div>
                    <x-label for="published_date" :value="__('admin.edit.books.fillable.4')" />
                    <x-input id="published_date" class="block mt-1 w-full " type="date" name="published_date"
                        :value="old('published_date', $book->published_date)" />
                    @error('published_date')
                        <x-input-error-message message="{{ $message }}" />
                    @enderror
                </div>
                <div>
                    <x-label for="stock" :value="__('admin.edit.books.fillable.5')" />
                    <x-input id="stock" class="block mt-1 w-full " type="number" name="stock" :value="old('stock', $book->stock)" />
                    @error('stock')
                        <x-input-error-message message="{{ $message }}" />
                    @enderror
                </div>
                <div>
                    <x-label for="category_id" :value="__('admin.edit.books.fillable.6')" />
                    <select
                        class="mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id === $book->category_id ? 'selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <x-input-error-message message="{{ $message }}" />
                    @enderror
                </div>
                <div>
                    <x-label for="image" :value="__('admin.edit.books.fillable.7')" />
                    <input type="file" accept="image/*" id="image" name="image"
                        class="mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    @error('image')
                        <x-input-error-message message="{{ $message }}" />
                    @enderror
                </div>
            </div>
            <div>
                <x-label for="description" :value="__('admin.edit.books.fillable.8')" />
                <x-textarea id="description" type="text" name="description" :value="old('description', $book->description)" />
                @error('description')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="mt-8">
            <button type="submit"
                class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-32 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                {{ __('admin.edit.books.button') }}
            </button>
        </div>
    </form>
</x-layouts.admin>
