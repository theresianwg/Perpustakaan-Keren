<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body class="font-sans antialiased">
    <section class="min-h-screen bg-gray-100 flex flex-col  md:flex-row items-center justify-center md:space-x-16">
        {{-- ======== Admin card ======== --}}
        <a href="{{ route('book.index') }}">
            <div class="transform hover:scale-105 transition  flex items-center justify-between">
                <div
                    class="p-6 bg-white shadow-sm sm:rounded-lg h-64 w-64 flex flex-col justify-center items-center space-y-6">
                    @include('components.svg.admin')
                    <h1 class="text-3xl font-bold  text-center">Admin</h1>
                </div>
            </div>
        </a>
        {{-- ======== Student card ======== --}}
        <a href="{{ route('student.books') }}">
            <div class="transform hover:scale-105 transition  flex items-center justify-between">
                <div
                    class="p-6 bg-white shadow-sm sm:rounded-lg h-64 w-64 flex flex-col justify-center items-center space-y-6">
                    @include('components.svg.student')
                    <h1 class="text-3xl font-bold  text-center">Student</h1>
                </div>
            </div>
        </a>
    </section>
</body>

</html>
