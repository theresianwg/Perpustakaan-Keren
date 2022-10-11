<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    @props(['script' => ''])
    <main class="bg-gray-100  rounded-2xl h-screen overflow-hidden relative">
        <div class="flex items-start justify-between">
            <div class="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-80">
                @include('components.layouts.admin-navigation')
            </div>
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                @include('components.layouts.admin-header')
                <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/alert.js') }}"></script>
</body>

</html>
