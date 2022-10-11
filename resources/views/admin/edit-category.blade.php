<x-layouts.admin>
    <div>
        <h1 class="text-2xl mb-10 font-bold my-6">{{ __('admin.edit.categories.title') }}</h1>
    </div>
    <form action="{{ route('category.update', $category) }}" method="POST" enctype="multipart/form-data"
        class="mb-6 w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        @csrf
        @method('PUT')
        <input type="hidden" name="old_image" value="{{ $category->image }}">
        <div class="space-y-4">
            <div>
                <x-label for="name" :value="__('admin.edit.categories.fillable.1')" />
                <x-input id="name" class="block mt-1 w-full " type="text" name="name" :value="old('name', $category->name)" />
                @error('name')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
            <div class="grid grid-cols-3 gap-6">
                <div>
                    <x-label for="image" :value="__('admin.edit.categories.fillable.2')" />
                    <input type="file" accept="image/*" id="image" name="image"
                        class="mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    @error('image')
                        <x-input-error-message message="{{ $message }}" />
                    @enderror
                </div>
            </div>
            <div>
                <x-label for="description" :value="__('admin.edit.categories.fillable.3')" />
                <x-textarea id="description" type="text" name="description" :value="old('description', $category->description)" />
                @error('description')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
        </div>
        <div class="mt-8">
            <button type="submit"
                class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-32 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                {{ __('admin.edit.categories.button') }}
            </button>
        </div>
    </form>
</x-layouts.admin>
