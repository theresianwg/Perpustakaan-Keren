<x-layouts.admin>
    <div>
        <h1 class="text-2xl mb-10 font-bold my-6">{{ __('admin.add.admin.title') }}</h1>
    </div>
    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data"
        class="mb-6 w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        @csrf
        <div class="space-y-4">
            <div>
                <x-label for="first_name" :value="__('admin.add.admin.fillable.1')" />
                <x-input id="first_name" class="block mt-1 w-full " type="text" name="first_name" :value="old('first_name')" />
                @error('first_name')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
            <div>
                <x-label for="last_name" :value="__('admin.add.admin.fillable.2')" />
                <x-input id="last_name" class="block mt-1 w-full " type="text" name="last_name" :value="old('last_name')" />
                @error('last_name')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
            <div>
                <x-label for="username" :value="__('admin.add.admin.fillable.3')" />
                <x-input id="username" class="block mt-1 w-full " type="text" name="username" :value="old('username')" />
                @error('username')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
            <div>
                <x-label for="email" :value="__('admin.add.admin.fillable.4')" />
                <x-input id="email" class="block mt-1 w-full " type="email" name="email" :value="old('email')" />
                @error('email')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
            <div>
                <x-label for="password" :value="__('admin.add.admin.fillable.5')" />
                <x-input id="password" class="block mt-1 w-full " type="password" name="password" :value="old('password')" />
                @error('password')
                    <x-input-error-message message="{{ $message }}" />
                @enderror
            </div>
            <div>
                <x-label for="password_confirmation" :value="__('admin.add.admin.fillable.6')" />
                <x-input id="password_confirmation" class="block mt-1 w-full " type="password"
                    name="password_confirmation" :value="old('password_confirmation')" />
            </div>
            <div class="grid grid-cols-3 gap-6">
                <div>
                    <x-label for="image" :value="__('admin.add.admin.fillable.7')" />
                    <input type="file" accept="image/*" id="image" name="image"
                        class="mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        :value="old('image')">
                    @error('image')
                        <x-input-error-message message="{{ $message }}" />
                    @enderror
                </div>
            </div>
        </div>
        <div class="mt-8">
            <button type="submit"
                class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-32 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                {{ __('admin.add.admin.button') }}
            </button>
        </div>
    </form>
</x-layouts.admin>
